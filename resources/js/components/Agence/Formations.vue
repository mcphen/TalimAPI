<template>
    <div>
        <div class="col-sm">
            <a  @click="openModal" class="btn btn-primary text-white"><i class="icon ion-ios-add"></i> Ajouter une formation</a>
            <br> <br>
            <div class="table-wrap">
                <table class="table  w-100 display pb-30">
                    <thead>
                    <tr>
                        <th>Intitule</th>
                        <th>Prix</th>
                        <th>Filiere</th>
                        <th>Cycle</th>
                        <th>Ecole</th>


                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr v-for="formation in formations" :key="formation.id">
                        <td>{{formation.titre}}</td>
                        <td>
                            {{formation.price}}
                        </td>
                        <td>{{formation.filiere.filiere}}</td>
                        <td>{{formation.cycle.cycle}} </td>
                        <td>{{formation.university.titre}} </td>
                        <td>
                            <a href="#" @click="edit_role(formation)">
                                <i class="fa fa-edit blue"></i>
                            </a>
                            /
                            <a href="#" @click="delete_role(formation.id)">
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
                        <h4 class="modal-title">{{ editMode ? 'Modification ': 'Nouvelle '}} Formation</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert" v-if="is_view">
                            {{ message }}
                        </div>




                        <div class="form-group">
                            <label>Intitulé formation </label>
                            <input v-model="form.titre" type="text" name="role" required
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">

                        </div>
                        <div class="form-group">
                            <label>Prix </label>
                            <input v-model="form.price" type="number" name="role" required
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

                            <div class="col-md-12 form-group">
                                <label >Fichier PDF</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="form-control text-truncate" data-trigger="fileinput">
                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename" v-if="attachments.name" v-html="attachments.name"></span>
                                    </div>
                                    <span class="input-group-append">
                        <span class=" btn btn-primary btn-file">
                            <span class="fileinput-new">Select file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="chemin_document" accept="application/pdf" ref="file" @change="addFile">
                        </span>
                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </span>
                                </div>

                            </div>


                        </div>

                        <div class="form-group">
                            <label>Université</label>
                            <select required v-model="form.university" class="form-control">
                                <option value="">Choisissez une université</option>
                                <option v-for="university in universities" :value="university.id">{{university.titre}}</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Filiere</label>
                            <select required v-model="form.filiere" class="form-control">
                                <option value="">Choisissez une filiere</option>
                                <option v-for="filiere in filieres" :value="filiere.id">{{filiere.filiere}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Cycle</label>
                            <select required v-model="form.cycle" class="form-control">
                                <option value="">Choisissez un cycle</option>
                                <option v-for="cycle in cycles" :value="cycle.id">{{cycle.cycle}}</option>
                            </select>
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
    name: "Formations",

    created(){
        this.all_role();
        this.all_university();
        this.all_filiere();
        this.all_cycle();

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
                university:'',
                price:'',
                filiere:'',
                cycle:'',
                photo:'',
                fichier_pdf:'',

            }),
            universities:{},
            filieres : {},
            cycles:{},
            formations:{},
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



        openModal(){
            this.editMode = false;
            this.form.reset();
            $('#modalAddRole').modal('show');
        },

        update_role(id){
            //console.log(id)

            this.form.put('/api/formations/'+id).then((data)=>{
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
                    title: 'Modification formation avec succès'
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
            this.form.filiere=role.filiere_id;
            this.form.price=role.price;
            this.form.cycle=role.cycle_id;

            this.form.university=role.university_id;
            this.idRoleEdit = role.id;
            this.is_visible = true;
        },

        all_university(){
            axios.get('/api/universities').then(data =>{
                //console.log(data.data.data);

                this.universities = data.data.data
            }).catch(function(error){
                console.log(error)
            })
        },

        all_filiere(){
            axios.get('/api/filieres').then(data =>{
                //console.log(data.data.data);

                this.filieres = data.data.data
            }).catch(function(error){
                console.log(error)
            })
        },

        all_cycle(){
            axios.get('/api/cycles').then(data =>{
                //console.log(data.data.data);

                this.cycles = data.data.data
            }).catch(function(error){
                console.log(error)
            })
        },

        add_role () {
            // Submit the form via a POST request

            if(this.form.titre!=="" && this.form.price!=="" && this.form.university!=="" ){
                this.form.fichier_pdf = this.doc_pdf;
                this.form.photo = this.doc_pdf1;
                this.form.post('/api/formations')
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
            axios.get('/api/formations').then(data =>{
                //console.log(data.data.data);

                this.formations = data.data.data
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
                    axios.delete('/api/formations/'+id).then(resp =>{

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
