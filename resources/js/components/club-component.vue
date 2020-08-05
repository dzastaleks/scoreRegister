<template>
    <form @submit.prevent="onSubmit">
                            <div class="form-group">
                            <label>Season:</label>
                            <select class='form-control' name="season" v-model='season' @change='seasonChanged()'>
                              <option value=''></option>
                              <option v-for='data in seasons' :value='data.id'>{{ data.name }}</option>
                            </select>
                            <div v-if="errors && errors.season" class="text-danger">{{ errors.season[0] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                            <label>Host</label>
                            <select class='form-control' name="host" v-model='club' @change='clubChanged()'>
                              <option value=''></option>
                              <option v-for='data in clubs' :value='data.id'>{{ data.name }}</option>
                            </select>
                            <div v-if="errors && errors.host" class="text-danger">{{ errors.host[0] }}</div>

                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                            <label>Guest</label>
                            <select class='form-control' name="guest" v-model='pos_club' >
                              <option value=''></option>
                              <option v-for='data in pos_clubs' :value='data.id'>{{ data.name }}</option>
                            </select>
                            <div v-if="errors && errors.guest" class="text-danger">{{ errors.guest[0] }}</div>

                        </div>
                            </div>

                        </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Host Score">Host Score</label>
                                    <input type="number" name="host_score" v-model='host_score' class="form-control">
                                    <div v-if="errors && errors.host_score" class="text-danger">{{ errors.host_score[0] }}</div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Guest score">Guest Score</label>
                                    <input type="number" name="guest_score" v-model='guest_score'  class="form-control">
                                    <div v-if="errors && errors.guest_score" class="text-danger">{{ errors.guest_score[0] }}</div>

                                </div>
                            </div>
                        </div>
                        
                    <div class="form-group">
                      <label for="Played Date">Match Played Date:</label>
                        <input type="date" name="played_date"  value="" v-model='played_date' class="form-control">
                            <div v-if="errors && errors.played_date" class="text-danger">{{ errors.played_date[0] }}</div>

                      </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-database"></i> Save Match </button>
                     
 </form>
</template>

<script>  
    export default {
        mounted() {
            //console.log('Component mounted.')
        },
        data(){
            return {
                season:undefined,
                seasons:[],
                club: undefined,
                clubs: [],
                pos_club: undefined,
                pos_clubs: [],
                errors: {},
                host_score:undefined,
                guest_score:undefined,
                played_date: undefined
            }
        },
        methods:{
             onSubmit() {
                this.errors = {};
                axios.post('/submit', {
                    'season': this.season,
                    'host': this.club,
                    'guest':this.pos_club,
                    'host_score':this.host_score,
                    'guest_score':this.guest_score,
                    'played_date':this.played_date
                }).then(response => {
                    alert('Match Successfully Saved!');
                      window.location = "/score";
                }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                    }
                });
            },
            seasonChanged(){
                this.club = undefined;
                this.pos_club = undefined;
                this.getClubs();
            },
            clubChanged(){
                this.pos_club=undefined;
                this.getPosibleClubs();
            },
            getSeasons: function(){
                axios.get('/api/getSeasons')
                .then(function(response){
                    this.seasons = response.data;
                }.bind(this));
            },
            getClubs: function(){
              axios.get('/api/getClubs')
              .then(function (response) {
                 this.clubs = response.data;
              }.bind(this));

            },
            getPosibleClubs: function() {
                axios.get('/api/getPosibleClubs',{
                 params: {
                   club_id: this.club,
                   season_id: this.season
                 }
              }).then(function(response){
                    this.pos_clubs = response.data;
                    //console.log(response.data);
                }.bind(this));
               
            }
        },
        created: function(){
            this.getSeasons()
        }
    }
</script>