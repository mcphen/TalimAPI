<template>
    <div>
        <div class="col-sm">
            <a  @click="openModal" class="btn btn-primary text-white"><i class="icon ion-ios-add"></i> Ajouter une agence</a>
            <br> <br>
            <div class="table-wrap">
                <table class="table  w-100 display pb-30">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Photo</th>
                        <th>Adresse</th>
                        <th>Ville / Pays</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr v-for="agence in universities" :key="agence.id">
                        <td>{{agence.titre}}</td>
                        <td>
                            <div class="avatar mr-10">
                                <img :src="agence.vignette" alt="user" class="avatar-img">
                            </div>
                        </td>
                        <td>{{agence.adresse}}</td>
                        <td>{{agence.ville.ville}} / {{agence.pays.libelle_pays}}</td>
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
                        <h4 class="modal-title">{{ editMode ? 'Modification ': 'Nouvelle '}} Université</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert" v-if="is_view">
                            {{ message }}
                        </div>
                        <div class="form-group">
                            <label>Pays</label>
                            <select required @change="onChange($event)" v-model="form.pays" class="form-control">
                                <option value="">Choisissez un pays</option>
                                <option v-for="country in countries" :value="country.id">{{country.libelle_pays}}</option>
                            </select>
                        </div>

                        <div class="form-group" v-if="is_visible">
                            <label>Villes</label>
                            <select required v-model="form.ville" class="form-control">
                                <option value="">Choisissez une ville</option>
                                <option v-for="city in cities" :value="city.id">{{city.ville}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nom </label>
                            <input v-model="form.titre" type="text" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">

                        </div>

                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label >Vignette (Photo)</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="form-control text-truncate" data-trigger="fileinput">
                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename" v-if="attachments1.name" v-html="attachments1.name"></span>
                                    </div>
                                    <span class="input-group-append">
                                        <span class=" btn btn-primary btn-file">
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="photo" ref="file" @change="addFile1">
                                        </span>
                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </span>
                                </div>

                            </div>



                        </div>

                        <div class="form-group">
                            <label>Adresse </label>
                            <input v-model="form.adresse" type="text" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">

                        </div>

                        <div class="">
                            <label>Description</label>
                            <vue-editor v-model="form.description" />
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
    name: "University",

    created(){
        this.all_role();
        this.all_pays();

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
                titre: '',
                description:'',
                adresse:'',
                ville:'',
                pays:'',
                photo:'',
                fichier_pdf:'',

            }),
            universities:{},
            countries : {},
            cities:{},
            loading: true,
            is_view : false,
            message:"",
            is_visible:false,
            attachments:'',
            doc_pdf:'',
            attachments1:'',
            doc_pdf1:'',

        }
    },

    methods: {

        onChange(event){
            console.log(event.target.value)
            var id = event.target.value;
            axios.get('/api/pays/'+id).then(data =>{
                //console.log(data.data.data);

                this.cities = data.data.data.villes;
                this.is_visible = true;
            }).catch(function(error){
                console.log(error)
            })
        },

        openModal(){
            this.editMode = false;
            this.form.reset();
            $('#modalAddRole').modal('show');
        },

        update_role(id){
            //console.log(id)

            this.form.put('/api/universities/'+id).then((data)=>{
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
            this.form.titre=role.titre;
            this.form.description=role.description;
            this.form.adresse=role.adresse;
            this.form.pays=role.pays_id;
            axios.get('/api/pays/'+role.pays_id).then(data =>{
                //console.log(data.data.data);

                this.cities = data.data.data.villes;
                this.is_visible = true;
            }).catch(function(error){
                console.log(error)
            })
            this.form.ville=role.ville_id;
            this.idRoleEdit = role.id;
            this.is_visible = true;
        },

        all_pays(){
            axios.get('/api/pays').then(data =>{
                //console.log(data.data.data);

                this.countries = data.data.data
            }).catch(function(error){
                console.log(error)
            })
        },

        add_role () {
            // Submit the form via a POST request

            if(this.form.titre!=="" && this.form.pays!=="" && this.form.ville!=="" ){
                this.form.fichier_pdf = this.doc_pdf;
                this.form.photo = this.doc_pdf1;
                this.form.post('/api/universities')
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
            axios.get('/api/universities').then(data =>{
                //console.log(data.data.data);

                this.universities = data.data.data
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
                    axios.delete('/api/universities/'+id).then(resp =>{

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

        },

        addFile(e){
            //console.log(e);
            var file =  e.target.files[0];
            this.attachments = file;
            var reader = new FileReader;

            reader.onload = (e) =>{
                console.log(e.target.result);
                this.doc_pdf = e.target.result;
            };

            reader.readAsDataURL(file);

            //console.log(this.attachments);
        },

        addFile1(e){
            //console.log(e);
            var file =  e.target.files[0];
            this.attachments1 = file;
            var reader = new FileReader;

            reader.onload = (e) =>{
                console.log(e.target.result);
                this.doc_pdf1 = e.target.result;
            };

            reader.readAsDataURL(file);

            //console.log(this.attachments);
        },
    }
}
</script>

<style scoped>

</style>
