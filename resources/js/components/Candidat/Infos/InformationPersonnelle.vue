<template>
    <div>
        <section class="hk-sec-wrapper hk-invoice-wrap pa-35" v-if="user.candidat">
            <div class="alert alert-warning" role="alert"
                 v-if="user.candidat.nom_pere==='' && user.candidat.firstname_pere==='' && user.candidat.nom_mere==='' && user.candidat.firstname_mere===''
                     && user.candidat.niveau_scolaire==='' && user.candidat.photo_identite==='' || user.candidat.photo_identite===null
                     && user.candidat.passport==='' ||   user.candidat.passport===null
                     && user.candidat.acte_naissance==='' ||   user.candidat.acte_naissance===null
                     && user.candidat.cv==='' ||   user.candidat.cv===null">
                Vos informations personnelles ne sont pas completes. Veuillez completer vos informations.
            </div>
            <div class="">
                <div class="row">
                    <div class="" style="width: 100%;">
                        <h4  class="mb-35 font-weight-600">Mes informations personnelles</h4>
                        <div class="col-md-12 mb-20">
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Nom:</strong>  </label>
                                        <div class="col-sm-7 info_label">{{user.name}}</div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Prénom:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.firstname}}</div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Sexe:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.sexe}}</div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Telephone:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.tel}}</div>
                                    </div>


                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Nationalité:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.nationalite}}</div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Pays de residence:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.pays_residence}}</div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Adresse:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.adresse}}</div>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-group row" v-if="user.candidat.nom_pere!='' && user.candidat.firstname_pere!=''">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Nom & prénom père:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.nom_pere}} {{user.candidat.firstname_pere}}</div>
                                    </div>

                                    <div class="form-group row" v-if="user.candidat.nom_mere!='' && user.candidat.firstname_mere!=''">
                                        <label  class="col-sm-5 col-form-label text-right"><strong>Nom & prénom mère:</strong></label>
                                        <div class="col-sm-7 info_label">{{user.candidat.nom_pere}} {{user.candidat.firstname_pere}}</div>
                                    </div>





                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "InformationPersonnelle",
    props:['user'],
}
</script>

<style scoped>

</style>
