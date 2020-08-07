<template>
<div>
                <div class="form-group">
                            <label>Season:</label>
                            <select class='form-control' name="season" v-model='season' @change='getLatestScores()'>
                              <option v-for='data in seasons' :value='data.id'>{{ data.name }}</option>
                            </select>
                        </div>
    <table class="table table-hover scores-table">
                    <thead>
                        <tr>
                        <th scope="col">Host</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Guest</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr v-for="data in scores" :key="data.id">
                        <td>
                        {{ data.host_club.name }}
                        </td>
                        <td>
                        {{data.host_score}}
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                        {{data.guest_score}}

                        </td>
                        <td>
                            {{data.guest_club.name}}
                        </td>
                    </tr>
                    </tbody>
                </table>        
</div>
</template>
<script>  
    export default {
        mounted() {
            //console.log('Component mounted.')
        },
        data(){
            return {
                score:undefined,
                scores:[],
                season:1,
                seasons:[]
                }
        },
        methods:{
            getLatestScores(){
                  axios.get('/api/getLatestScores',{
                      params:{
                          season_id: this.season
                      }
                  })
                .then(function(response){
                    this.scores = response.data;
                    console.log(this.seasons.length);
                }.bind(this));
            },
              getSeasons: function(){
                axios.get('/api/getSeasons')
                .then(function(response){
                    this.seasons = response.data;
                }.bind(this));
            }
  
        },
        created: function(){
            this.getSeasons(),
            this.getLatestScores()
        }
    }
</script>