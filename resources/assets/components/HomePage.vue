<template>
    <div class="home-container">
        <listing-summary-group
                v-for="(group, country) in listing_groups"
                :key="country"
                :listings="group"
                :country="country"
                class="listing-summary-group">
        </listing-summary-group>
    </div>
</template>

<script>
    import axios from 'axios';
    import {groupByCountry} from "../js/helpers";
    import ListingSummary from '../components/ListingSummary.vue';
    import ListingSummaryGroup from '../components/ListingSummaryGroup.vue';

    let serverData = JSON.parse(window.vuebnb_server_data);
    let listing_groups = groupByCountry(serverData.listings);
    export default {
        name: "HomePage",
        data(){
            return {
                listing_groups:[]
            }
        },
        components:{
            ListingSummary,
            ListingSummaryGroup

        },
        beforeRouteEnter(to, from, next){
            let serverData = JSON.parse(window.vuebnb_server_data);
            if(to.path === serverData.path){
                let listing_groups = groupByCountry(serverData.listings);
                next(component=>component.listing_groups = listing_groups);
            }else{
                console.log("Need to get data with AJAX!");

                axios.get(`/api/`).then(({data})=>{
                    let listing_groups = groupByCountry(data.listings);
                    next(component=>component.listing_groups = listing_groups);
                });
            }

        }
    }
</script>

<style scoped>
    .listing-summary-group {
        padding-bottom: 20px;
    }

    .listing-summaries-wrapper {
        overflow: hidden;
    }

    .listing-summaries {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        transition: transform 0.5s;
    }
    .listing-summaries > .listing-summary {
        margin-right: 15px;
    }

    .listing-summaries > .listing-summary:last-child {
        margin-right: 0;
    }

</style>