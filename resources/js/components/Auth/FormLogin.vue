<template>
<div>
    <div class="alert alert-danger" role="alert" v-if="is_view">
        {{ message }}
    </div>
    <div class="form-group">
        <label>Mail</label>
        <input type="email" v-model="email">
    </div>
    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" v-model="password">
    </div>

    <div class="form-group">
        <a class="btn btn-primary btn-block fs-16" @click="login" >Connexion</a>
    </div>
    <br>
</div>
</template>

<script>
export default {
    name: "FormLogin",
    data(){
        return {
            email:"",
            password:'',
            loading: true,
            is_view : false,
            message:""
        }
    },

    methods:{
        login(){
            if(this.email!="" && this.password!=""){
                axios.post('/api/login',{
                    email : this.email,
                    password : this.password
                }).then(({ data }) => {
                    console.log(data);
                    if(data.data.role_id ==1){
                        window.location.href = '/admin/dashboard'
                    }else{
                        window.location.href = '/agence/dashboard'
                    }

                }).catch(error => {
                    console.log(error)
                    this.errored = true
                    if(error.response.status === 404){
                        this.is_view = true;
                        this.message = "email ou mot de passe incorrect";
                        console.log("email ou mot de passe incorrect")

                    }
                }).finally(() => this.loading = false)
            }
        }
    },
}
</script>

<style scoped>

</style>
