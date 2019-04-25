<template>
    <div>
        <div class="select">
            <h4 class="select__heading">select</h4>
            <a @click="update_view(0)" class="select__item select__item--current">all</a>
            <a @click="update_view(1)" class="select__item">individuals</a>
            <a @click="update_view(2)" class="select__item">groups</a>
        </div>
        <div class="reel" v-for="artist in artists" :key="artist.name">
            <div v-if="(selected_state == 0)">
                <img class="reel__img" :src="'img/'+artist.img" :alt="artist.name">
                <span class="reel__number">{{artist.name}}</span>
            </div>
            <div v-else-if="(selected_state == 1) && (artist.artist_num == 1)">
                <img class="reel__img" :src="'img/'+artist.img" :alt="artist.name">
                <span class="reel__number">{{artist.name}}</span>
            </div>
            <div v-else-if="(selected_state == 2) && (artist.artist_num > 1)">
                <img class="reel__img" :src="'img/'+artist.img" :alt="artist.name">
                <span class="reel__number">{{artist.name}}</span>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return{
                artists: [
                    {
                        name:"whythough",
                        img:"whythough_4x6.jpg",
                        artist_num:1
                    },
                    {
                        name:"dyl_pykl",
                        img:"dyl_pykl_4x6.jpg",
                        artist_num:1
                    },
                    {
                        name:"svnteen",
                        img:"svnteen_4x6.jpg",
                        artist_num:2
                    }
                ],
                selected_state: 0 //0: all, 1: individuals, 2: groups
            }
        },
        methods: {
            update_view(n){
                this.selected_state=n;

            }
        },
        mounted() {
            console.log("Artist Component mounted.")
        }
    }
</script>