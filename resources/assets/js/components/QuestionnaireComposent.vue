<template>
    <div class="container" id="app">
        <p> Le questionnaire : </p>
        <div v-for="questionnaire in questionnaires" :key="questionnaire.id">
            <h2> {{ questionnaire.questionnaires_libelle }} </h2>
                <div v-for="theme in questionaire.themes" :key="theme.id">
                    <h4> {{ theme.themes_libelles }} </h4>
                    <input type="text"/>
                </div>
        </div>
    </div>
</template>
       
<script>
    export default {
        data(){
           return{
                questionnaires : [],
            }
        },
        mounted() {
            this.getData()
        },
        methods : {
            getData: function () {
                let that = this;
                axios.post('/questionnaire/indexVu').then(function(response){
                    that.questionnaires = response.data;
                });
            },
        }
    }
</script>
