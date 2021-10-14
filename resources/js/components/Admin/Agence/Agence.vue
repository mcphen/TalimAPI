<template>
<div>
    <div class="col-sm">
        <a  @click="openModal" class="btn btn-primary text-white"><i class="icon ion-ios-add"></i> Ajouter une agence</a>
        <br> <br>
        <div class="table-wrap">
            <table class="table  w-100 display pb-30">
                <thead>
                <tr>
                    <th>Nom Agence</th>
                    <th>Agent</th>
                    <th>Email Agent</th>
                    <th>Date Creation</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                <tr v-for="agence in agences" :key="agence.id">
                    <td>{{agence.name}}</td>
                    <td>{{agence.agent.firstname}} {{agence.agent.name}}</td>
                    <td>{{agence.agent.email}}</td>
                    <td>{{agence.created_at}}</td>
                    <td>
                        <a href="#" @click="edit_role(agence)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href="#" @click="delete_role(agence.id)">
                            <i class="fa fa-trash red"></i>
                        </a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="modalAddRole"  tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{ editMode ? 'Modification ': 'Nouvelle '}} Agence</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert" v-if="is_view">
                        {{ message }}
                    </div>

                    <div class="form-group">
                        <label>Nom Agence</label>
                        <input v-model="form.name_agence" type="text" name="role" required
                               class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">

                    </div>

                    <h5>Information de l'agent</h5>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Nom </label>
                            <input v-model="form.name" type="text" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
                        </div>
                        <div class="col-md-6">
                            <label>Prénom </label>
                            <input v-model="form.firstname" type="text" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
                        </div>


                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Email </label>
                            <input v-model="form.email" type="text" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
                        </div>
                        <div class="col-md-6">
                            <label>Mot de passe </label>
                            <input v-model="form.password" type="password" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
                        </div>


                    </div>





                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ANNULER</button>
                    <button class="btn btn-primary" @click="editMode? update_role(idRoleEdit) : add_role()">{{ editMode ? 'MODIFIER ': 'VALIDER '}}</button>

                </div>


            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Agence",

    created(){
        this.all_role();

        Fire.$on('ApresCreation',()=>{
            this.all_role();
        });
        //setInterval(()=> this.all_role(),3000)
    },

    data(){
        return{
            editMode:false,
            idRoleEdit:"",
            // Create a new form instance
            form: new Form({
                name: '',
                name_agence:'',
                firstname:'',
                email:'',
                password:'',

            }),
            agences:{},
            loading: true,
            is_view : false,
            message:""

        }
    },

    methods: {

        openModal(){
            this.editMode = false;
            this.form.reset();
            $('#modalAddRole').modal('show');
        },

        update_role(id){
            //console.log(id)

            this.form.put('/api/agences/'+id).then((data)=>{
                Fire.$emit('ApresCreation');
                $('#modalAddRole').modal('hide');
                $('.modal-backdrop').remove();
                /* Vue.swal({
                     type: 'success',
                     title: 'Enregistré',
                     text: 'Le role a été ajouté avec succès',
                 });*/

                toast.fire({
                    type: 'success',
                    title: 'Modification agence avec succès'
                })

            }).catch(()=>{
                this.$Progress.fail();
            })
        },

        edit_role(role){
            console.log(role);
            this.editMode = true;
            this.form.reset();
            $('#modalAddRole').modal('show');
            this.form.name_agence=role.name;
            this.form.name=role.agent.name;
            this.form.firstname=role.agent.firstname;
            this.form.email=role.agent.email;
            this.idRoleEdit = role.id;
        },

        add_role () {
            // Submit the form via a POST request

            if(this.form.name_agence!=="" && this.form.name!=="" && this.form.firstname!=="" && this.form.email!=="" && this.form.password!=="" ){
                this.form.post('/api/agences')
                    .then(({ data }) => {

                        Fire.$emit('ApresCreation');
                        $('#modalAddRole').modal('hide');
                        $('.modal-backdrop').remove();
                        /* Vue.swal({
                             type: 'success',
                             title: 'Enregistré',
                             text: 'Le role a été ajouté avec succès',
                         });*/

                        toast.fire({
                            type: 'success',
                            title: 'Ajout role avec succès'
                        })

                    }).catch(error => {
                    console.log(error)
                    this.errored = true
                    if(error.response.status === 404){
                        this.is_view = true;
                        this.message = "Cet utilisateur existe deja";
                        console.log("email ou mot de passe incorrect")

                    }

                    if(error.response.status === 422){
                        this.is_view = true;
                        this.message = "Cet utilisateur existe deja";
                        console.log("Cet utilisateur existe deja")

                    }
                }).finally(() => this.loading = false)
            }


        },

        all_role(){
            axios.get('/api/agences').then(data =>{
                //console.log(data.data.data);

                this.agences = data.data.data
            }).catch(function(error){
                console.log(error)
            })
        },

        delete_role(id){

            Swal.fire({
                title: 'Etes vous sure?',
                text: "Etes vous sure de vouloir le supprimer",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'
            }).then((result) => {
                if(result.value==true){
                    axios.delete('/api/agences/'+id).then(resp =>{

                        Fire.$emit('ApresCreation');
                        Swal.fire(
                            'Supprimé!',
                            'Cette agence a été supprimé avec succès.',
                            'success'
                        )


                    }).catch(function(error){
                        console.log(error)
                    })
                }


            })

        }
    }
}
</script>

<style scoped>

</style>
