<template>
    <div class="listing-save" @click.stop="toggleSaved()">
        <button v-if="button">
            <i :class="classes"></i>
            {{message}}
        </button>
        <i v-else :class="classes"></i>
    </div>
</template>

<script>
    export default {
        name: "ListingSave",
        props:['id','button'],
        methods:{
         toggleSaved(){
             //this.$store.commit('toggleSaved', this.id);
             this.$store.dispatch('toggleSaved', this.id);
             console.log(this.$store.state.saved);
         }
        },
        computed:{
            isListingSaved(){
                return this.$store.state.saved.find(saved=>saved===this.id);
            },
            classes(){
                let saved = this.isListingSaved;
                return {
                    'fa':true,
                    'fa-lg':true,
                    'fa-heart':saved,
                    'fa-heart-o':!saved
                }
            },
            message(){
                return this.isListingSaved ? 'Saved' : 'Save';
            }
        }
    }
</script>

<style scoped>
    .listing-save {
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }

    .listing-save i{
        padding-right:4px;
    }

    .listing-save button .fa-heart-o{
        color:#808080;
    }

    .listing-save .fa-heart {
        color: #ff5a5f;
    }

    .listing-save .fa-heart-o {
        color: #ffffff;
    }
</style>