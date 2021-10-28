<template>
    <div >
    <section class="hk-sec-wrapper hk-invoice-wrap pa-35" v-if="candidat">
        <h4  class="mb-35 font-weight-600">Mon Parcours</h4>
        <div class="form-inline">
            <div class="form-group mb-2">
                <span>Votre parcours doit comporter au moins 3 activités <br> et toutes vos activités doivent être approuvées par au moins un document justificatif.</span>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label  class="sr-only">Ajouter</label>
                <select  class="form-control" v-model="activity">
                    <option value="1">Une annee d'etude superieur</option>
                    <option value="2">Bac ou équivalent</option>
                    <option value="3">Une annee de lycée</option>
                </select>
            </div>
            <button @click="openModal" class="btn btn-primary text-white"><i class="icon ion-ios-add"></i> Ajouter</button>
        </div>

        <label></label>


        <br> <br>
        <div class="table-wrap">
            <table class="table  w-100 display pb-30">

                <tbody>
                <tr v-for="formation in formations" :key="formation.id">
                    <td>
                        {{formation.annee_academique}}
                    </td>
                    <td>
                        <div v-if="formation.type_cursus==1">
                            <span>Etude Superieure</span> <br> <span>{{formation.niveau}}</span>
                        </div>
                        <div v-if="formation.type_cursus==2">
                            <span>Baccalaureat ou equivalent</span> <br> <span>{{formation.diplome}}</span>
                        </div>
                        <div v-if="formation.type_cursus==3">
                            <span>Lycée</span> <br> <span>{{formation.serie}}</span>
                        </div> <br>

                    </td>
                    <td>
                        <div>
                            <span>{{formation.etablissement}}</span> <br> <span>{{formation.ville}},{{formation.pays}}</span>
                        </div>
                    </td>
                    <td>


                        <a href="#" @click="edit_formation(formation)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href="#" @click="delete_formation(formation.id)">
                            <i class="fa fa-trash red"></i>
                        </a>
                        /
                        <a href="#" >
                            Justificatif
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>


        <!-- The Modal -->
        <div class="modal" id="modalAddRole"  tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" v-if="activity==1">Année d'etude superieure</h4>
                        <h4 class="modal-title" v-if="activity==3">Année de lycée</h4>
                        <h4 class="modal-title" v-if="activity==2">Bac ou équivalent</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">

                                <label>Année scolaire <span>*</span></label>
                                <select v-model="form.annee_academique" type="text"required
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('annee_debut') }">
                                    <option value="">Selectionner</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                </select>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Pays<span>*</span></label>
                                <select v-model="form.pays" class="form-control">


                                    <option value="Afghanistan">Afghanistan </option>
                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                    <option value="Albanie">Albanie </option>
                                    <option value="Algerie">Algerie </option>
                                    <option value="Allemagne">Allemagne </option>
                                    <option value="Andorre">Andorre </option>
                                    <option value="Angola">Angola </option>
                                    <option value="Anguilla">Anguilla </option>
                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                    <option value="Argentine">Argentine </option>
                                    <option value="Armenie">Armenie </option>
                                    <option value="Australie">Australie </option>
                                    <option value="Autriche">Autriche </option>
                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                    <option value="Bahamas">Bahamas </option>
                                    <option value="Bangladesh">Bangladesh </option>
                                    <option value="Barbade">Barbade </option>
                                    <option value="Bahrein">Bahrein </option>
                                    <option value="Belgique">Belgique </option>
                                    <option value="Belize">Belize </option>
                                    <option value="Benin">Benin </option>
                                    <option value="Bermudes">Bermudes </option>
                                    <option value="Bielorussie">Bielorussie </option>
                                    <option value="Bolivie">Bolivie </option>
                                    <option value="Botswana">Botswana </option>
                                    <option value="Bhoutan">Bhoutan </option>
                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                    <option value="Bresil">Bresil </option>
                                    <option value="Brunei">Brunei </option>
                                    <option value="Bulgarie">Bulgarie </option>
                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                    <option value="Burundi">Burundi </option>

                                    <option value="Caiman">Caiman </option>
                                    <option value="Cambodge">Cambodge </option>
                                    <option value="Cameroun">Cameroun </option>
                                    <option value="Canada">Canada </option>
                                    <option value="Canaries">Canaries </option>
                                    <option value="Cap_vert">Cap_Vert </option>
                                    <option value="Chili">Chili </option>
                                    <option value="Chine">Chine </option>
                                    <option value="Chypre">Chypre </option>
                                    <option value="Colombie">Colombie </option>
                                    <option value="Comores">Colombie </option>
                                    <option value="Congo">Congo </option>
                                    <option value="Congo_democratique">Congo_democratique </option>
                                    <option value="Cook">Cook </option>
                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                    <option value="Costa_Rica">Costa_Rica </option>
                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                    <option value="Croatie">Croatie </option>
                                    <option value="Cuba">Cuba </option>

                                    <option value="Danemark">Danemark </option>
                                    <option value="Djibouti">Djibouti </option>
                                    <option value="Dominique">Dominique </option>

                                    <option value="Egypte">Egypte </option>
                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                    <option value="Equateur">Equateur </option>
                                    <option value="Erythree">Erythree </option>
                                    <option value="Espagne">Espagne </option>
                                    <option value="Estonie">Estonie </option>
                                    <option value="Etats_Unis">Etats_Unis </option>
                                    <option value="Ethiopie">Ethiopie </option>

                                    <option value="Falkland">Falkland </option>
                                    <option value="Feroe">Feroe </option>
                                    <option value="Fidji">Fidji </option>
                                    <option value="Finlande">Finlande </option>
                                    <option value="France">France </option>

                                    <option value="Gabon">Gabon </option>
                                    <option value="Gambie">Gambie </option>
                                    <option value="Georgie">Georgie </option>
                                    <option value="Ghana">Ghana </option>
                                    <option value="Gibraltar">Gibraltar </option>
                                    <option value="Grece">Grece </option>
                                    <option value="Grenade">Grenade </option>
                                    <option value="Groenland">Groenland </option>
                                    <option value="Guadeloupe">Guadeloupe </option>
                                    <option value="Guam">Guam </option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernesey">Guernesey </option>
                                    <option value="Guinee">Guinee </option>
                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                    <option value="Guyana">Guyana </option>
                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                    <option value="Haiti">Haiti </option>
                                    <option value="Hawaii">Hawaii </option>
                                    <option value="Honduras">Honduras </option>
                                    <option value="Hong_Kong">Hong_Kong </option>
                                    <option value="Hongrie">Hongrie </option>

                                    <option value="Inde">Inde </option>
                                    <option value="Indonesie">Indonesie </option>
                                    <option value="Iran">Iran </option>
                                    <option value="Iraq">Iraq </option>
                                    <option value="Irlande">Irlande </option>
                                    <option value="Islande">Islande </option>
                                    <option value="Israel">Israel </option>
                                    <option value="Italie">italie </option>

                                    <option value="Jamaique">Jamaique </option>
                                    <option value="Jan Mayen">Jan Mayen </option>
                                    <option value="Japon">Japon </option>
                                    <option value="Jersey">Jersey </option>
                                    <option value="Jordanie">Jordanie </option>

                                    <option value="Kazakhstan">Kazakhstan </option>
                                    <option value="Kenya">Kenya </option>
                                    <option value="Kirghizstan">Kirghizistan </option>
                                    <option value="Kiribati">Kiribati </option>
                                    <option value="Koweit">Koweit </option>

                                    <option value="Laos">Laos </option>
                                    <option value="Lesotho">Lesotho </option>
                                    <option value="Lettonie">Lettonie </option>
                                    <option value="Liban">Liban </option>
                                    <option value="Liberia">Liberia </option>
                                    <option value="Liechtenstein">Liechtenstein </option>
                                    <option value="Lituanie">Lituanie </option>
                                    <option value="Luxembourg">Luxembourg </option>
                                    <option value="Lybie">Lybie </option>

                                    <option value="Macao">Macao </option>
                                    <option value="Macedoine">Macedoine </option>
                                    <option value="Madagascar">Madagascar </option>
                                    <option value="Madère">Madère </option>
                                    <option value="Malaisie">Malaisie </option>
                                    <option value="Malawi">Malawi </option>
                                    <option value="Maldives">Maldives </option>
                                    <option value="Mali">Mali </option>
                                    <option value="Malte">Malte </option>
                                    <option value="Man">Man </option>
                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                    <option value="Maroc">Maroc </option>
                                    <option value="Marshall">Marshall </option>
                                    <option value="Martinique">Martinique </option>
                                    <option value="Maurice">Maurice </option>
                                    <option value="Mauritanie">Mauritanie </option>
                                    <option value="Mayotte">Mayotte </option>
                                    <option value="Mexique">Mexique </option>
                                    <option value="Micronesie">Micronesie </option>
                                    <option value="Midway">Midway </option>
                                    <option value="Moldavie">Moldavie </option>
                                    <option value="Monaco">Monaco </option>
                                    <option value="Mongolie">Mongolie </option>
                                    <option value="Montserrat">Montserrat </option>
                                    <option value="Mozambique">Mozambique </option>

                                    <option value="Namibie">Namibie </option>
                                    <option value="Nauru">Nauru </option>
                                    <option value="Nepal">Nepal </option>
                                    <option value="Nicaragua">Nicaragua </option>
                                    <option value="Niger">Niger </option>
                                    <option value="Nigeria">Nigeria </option>
                                    <option value="Niue">Niue </option>
                                    <option value="Norfolk">Norfolk </option>
                                    <option value="Norvege">Norvege </option>
                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                    <option value="Oman">Oman </option>
                                    <option value="Ouganda">Ouganda </option>
                                    <option value="Ouzbekistan">Ouzbekistan </option>

                                    <option value="Pakistan">Pakistan </option>
                                    <option value="Palau">Palau </option>
                                    <option value="Palestine">Palestine </option>
                                    <option value="Panama">Panama </option>
                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                    <option value="Paraguay">Paraguay </option>
                                    <option value="Pays_Bas">Pays_Bas </option>
                                    <option value="Perou">Perou </option>
                                    <option value="Philippines">Philippines </option>
                                    <option value="Pologne">Pologne </option>
                                    <option value="Polynesie">Polynesie </option>
                                    <option value="Porto_Rico">Porto_Rico </option>
                                    <option value="Portugal">Portugal </option>

                                    <option value="Qatar">Qatar </option>

                                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                    <option value="Reunion">Reunion </option>
                                    <option value="Roumanie">Roumanie </option>
                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                    <option value="Russie">Russie </option>
                                    <option value="Rwanda">Rwanda </option>

                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                    <option value="Saint_Marin">Saint_Marin </option>
                                    <option value="Salomon">Salomon </option>
                                    <option value="Salvador">Salvador </option>
                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                    <option value="Senegal">Senegal </option>
                                    <option value="Seychelles">Seychelles </option>
                                    <option value="Sierra Leone">Sierra Leone </option>
                                    <option value="Singapour">Singapour </option>
                                    <option value="Slovaquie">Slovaquie </option>
                                    <option value="Slovenie">Slovenie</option>
                                    <option value="Somalie">Somalie </option>
                                    <option value="Soudan">Soudan </option>
                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                    <option value="Suede">Suede </option>
                                    <option value="Suisse">Suisse </option>
                                    <option value="Surinam">Surinam </option>
                                    <option value="Swaziland">Swaziland </option>
                                    <option value="Syrie">Syrie </option>

                                    <option value="Tadjikistan">Tadjikistan </option>
                                    <option value="Taiwan">Taiwan </option>
                                    <option value="Tonga">Tonga </option>
                                    <option value="Tanzanie">Tanzanie </option>
                                    <option value="Tchad">Tchad </option>
                                    <option value="Thailande">Thailande </option>
                                    <option value="Tibet">Tibet </option>
                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                    <option value="Togo">Togo </option>
                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                    <option value="Tunisie">Tunisie </option>
                                    <option value="Turkmenistan">Turmenistan </option>
                                    <option value="Turquie">Turquie </option>

                                    <option value="Ukraine">Ukraine </option>
                                    <option value="Uruguay">Uruguay </option>

                                    <option value="Vanuatu">Vanuatu </option>
                                    <option value="Vatican">Vatican </option>
                                    <option value="Venezuela">Venezuela </option>
                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                    <option value="Vietnam">Vietnam </option>

                                    <option value="Wake">Wake </option>
                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                    <option value="Yemen">Yemen </option>
                                    <option value="Yougoslavie">Yougoslavie </option>

                                    <option value="Zambie">Zambie </option>
                                    <option value="Zimbabwe">Zimbabwe </option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Ville<span>*</span></label>
                                <input type="text" v-model="form.ville" class="form-control">
                            </div>


                        </div>

                        <div class="form-group">
                            <label>Etablissement<span>*</span></label>
                            <input type="text" v-model="form.etablissement" class="form-control">
                        </div>

                        <div class="form-group" v-if="activity==1">
                            <label>Niveau<span>*</span></label>
                            <select name="" id="" class="form-control" v-model="form.niveau">
                                <option value="1">BAC+1</option>
                                <option value="2">BAC+2</option>
                                <option value="3">BAC+3</option>
                                <option value="4">BAC+4</option>
                                <option value="5">BAC+5</option>
                                <option value="6">BAC+6</option>
                                <option value="7">BAC+7</option>
                                <option value="8">BAC+8</option>
                                <option value="9">BAC+9</option>
                                <option value="10">BAC+10</option>

                            </select>
                        </div>
                        <div class="form-group" v-if="activity==1">
                            <label>Domaine<span>*</span></label>
                            <select class="form-control" v-model="form.domaine">
                                <option value=""></option>
                                <option value="1">Agriculture - agroalimentaire</option>
                                <option value="2">Architecture, urbanisme et aménagement du territoire</option>
                                <option value="3">Arts, culture, design et mode</option>
                                <option value="4">Biologie</option>
                                <option value="5">Chimie</option>
                                <option value="6">Communication et journalisme</option>
                                <option value="7">Droit</option>
                                <option value="8">Environnement et sciences de la terre</option>
                                <option value="9">Informatique</option>
                                <option value="10">Langues et lettres</option>
                                <option value="11">Management, gestion, finances et commerce</option>
                                <option value="12">Mathématiques</option>
                                <option value="13">Physique</option>
                                <option value="14">Santé et professions sociales</option>
                                <option value="15">Science de la Terre et de l'Univers</option>
                                <option value="16">Sciences de l'ingénieur</option>
                                <option value="18">Sciences de l'éducation</option>
                                <option value="19">Sciences humaines et sociales</option>
                                <option value="20">Sciences économiques et politiques</option>
                                <option value="21">Sports</option>
                                <option value="22">Tourisme, hôtellerie et restauration</option>
                                <option value="23">Transport et logistique</option>
                            </select>
                        </div>

                        <div class="form-group" v-if="activity==2">
                            <label>Diplome <span>*</span></label>
                            <input type="text" class="form-control" v-model="form.diplome" value="Baccalaureat">
                        </div>

                        <div class="form-group" v-if="activity==3">
                            <label>Serie <span>*</span></label>
                            <input type="text" class="form-control" v-model="form.serie" >
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Moyenne <span>*</span></label>
                                <input type="text" class="form-control" v-model="form.moyenne" >
                            </div>
                            <div class="col-md-6" v-if="activity==2">
                                <label>Mention <span>*</span></label>
                                <select class="form-control" v-model="form.mention">
                                    <option value=""></option>
                                    <option value="6">Excellent</option>
                                    <option value="5">Très bien</option>
                                    <option value="4">Bien</option>
                                    <option value="3">Assez bien</option>
                                    <option value="1">Passable</option>
                                    <option value="2">Pas de mention</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" >
                            <label>Commentaire<span>*</span></label>
                            <textarea v-model="form.commentaire" cols="30" rows="10" class="form-control"></textarea>

                        </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ANNULER</button>
                        <button class="btn btn-primary" @click="editMode? update_formation(idRoleEdit) : add_formation()">{{ editMode ? 'MODIFIER ': 'VALIDER '}}</button>

                    </div>


                </div>
            </div>
        </div>


    </div>
</template>

<script>
export default {
    name: "Parcours",
    props:['candidat'],

    data () {
        return {
            editMode:false,
            idRoleEdit:"",
            // Create a new form instance
            form: new Form({
                annee_academique: '',
                pays:'',
                ville:'',
                etablissement:'',
                diplome:'',
                niveau:'',
                domaine:'',
                commentaire:'',
                moyenne:'',
                mention:'',
                serie:'',
                type_cursus:'',


            }),
            formations :{},
            activity:1

        }
    },

    created(){
      this.all_formations()
    },

    methods:{
        openModal(){
            this.editMode = false;
            this.form.reset();
            $('#modalAddRole').modal('show');
        },

        update_formation(id){
            //console.log(id)
            this.$Progress.start();
            this.form.put('/api/cursus/'+id).then((data)=>{
                Fire.$emit('ApresCreation');
                $('#modalAddRole').modal('hide');
                $('.modal-backdrop').remove();


                toast.fire({
                    type: 'success',
                    title: 'Modification cursus avec succès'
                })

            }).catch(()=>{
                this.$Progress.fail();
            })
        },

        edit_formation(role){
            //console.log(role.libelle_departement);
            this.editMode = true;
            this.form.reset();
            $('#modalAddRole').modal('show');
            this.form.fill(role);
            this.activity = role.type_cursus;
            this.idRoleEdit = role.id;


        },

        add_formation () {
            // Submit the form via a POST request

                this.form.type_cursus = this.activity;
                this.form.post('/api/cursus')
                .then(({ data }) => {
                    //this.form.role="";
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
                        title: 'Ajout formation avec succès'
                    })

                })

        },

        all_formations(){

            this.formations = this.candidat.cursus;

        },



        delete_formation(id){

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
                    axios.get('/api/cursus/'+id).then(resp =>{

                        Fire.$emit('ApresCreation');
                        Swal.fire(
                            'Supprimé!',
                            'Cette formation a été supprimée avec succès.',
                            'success'
                        )


                    }).catch(function(error){
                        console.log(error)
                    })
                }


            })

        }
    },
}
</script>

<style scoped>

</style>
