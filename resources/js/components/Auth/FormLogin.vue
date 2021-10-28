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

        <a class="btn btn-primary btn-block fs-16" @click="login" >
            <div class="spinner-border" role="status" v-if="is_sniper">
                <span class="sr-only">Loading...</span>

            </div>
            <span>Connexion</span>

        </a>
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
            is_sniper : false,
            message:""
        }
    },

    methods:{
        login(){
            if(this.email!="" && this.password!=""){
                this.is_sniper = true;
                axios.post('/api/login',{
                    email : this.email,
                    password : this.password
                }).then(({ data }) => {
                    console.log(data);
                    if(data.data.role_id ==1){
                        window.location.href = '/admin/dashboard'
                    }else if(data.data.role_id ==2){
                        window.location.href = '/agence/dashboard'
                    }else{
                        window.location.href = '/dashboard'
                    }

                }).catch(error => {
                    console.log(error)
                    this.errored = true
                    if(error.response.status === 404){
                        this.is_view = true;
                        this.is_sniper = false;
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
