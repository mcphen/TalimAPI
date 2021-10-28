<template>
<div>

    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">

        <information-personnelle :user="user"></information-personnelle>

        <parcours v-if="user.candidat" :candidat="user.candidat" ></parcours>
    </div>

</div>
</template>

<script>
import InformationPersonnelle from "./Infos/InformationPersonnelle";
import Parcours from "./Infos/Parcours";
export default {
    name: "Dashboard",
    components: {Parcours, InformationPersonnelle},
    props:['user'],
}
</script>

<style scoped>
.info_label{
    padding: 7px 15px;
}
</style>
