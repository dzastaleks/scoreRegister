<template>
<div>
                <div class="form-group">
                            <label>Season:</label>
                            <select class='form-control' name="season" v-model='season' @change='getRankings()'>
                              <option v-for='data in seasons' :value='data.id' :key="data.id">{{ data.name }}</option>
                            </select>
                        </div>
    <table class="table table-hover scores-table">
                    <thead>
                        <tr>
                            <th scope="col">Position</th>
                            <th scope="col">Club</th>
                            <th scope="col">Score</th>
                        </tr>

                    </thead>
                    <tbody>
                    <tr v-for="(data, index) in rankings"  :key="data.id" >
                       
                        <td >
                        {{ index + 1 }} 
                        </td>
                        <td>
                        {{ data.name }}
                        </td>
                        <td>
                         
                            <span v-if="data.score !== null">{{data.score}}</span>
                             <span v-if="data.score === null">{{0}}</span>
                       
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
                ranking:undefined,
                rankings:[],
                season:1,
                seasons:[]
                }
        },
        methods:{
            getRankings(){
                  axios.get('/api/getRankings',{
                      params:{
                          season_id: this.season
                      }
                  })
                .then(function(response){
                    this.rankings = response.data;
                    console.log(response.data);
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
            this.getRankings()
        }
        


    }
</script>