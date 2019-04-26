<template>
  <div class="container">
    <div>
        <h4>select</h4>
        <div class="btn-group">
            <button
                type="button"
                class="btn btn-link"
                v-for="(n,i) in 3"
                :key="i"
                @click="update_view(i)"
                :class="{active: sel_view === i }"            
            >
                {{artist_types[i]}}
            </button>   
        </div>
    </div>
    <div v-for="artist in filteredArtists" :key="artist.name">
      <img :src="'img/'+artist.profile_img" class="img-fluid" :alt="artist.name">
      <span>{{artist.name}}</span>
    </div>
  </div>
</template>

<script>
export default {
    data: function() {
        return {
            sel_view: 0, //0: all, 1: individuals, 2: groups
            artist_types: ["all", 'individuals', 'groups']
        };
    },
    props: {
        artists: Array,
    },
    methods: {
        update_view(n) {
            this.sel_view = n;
        }
    },
    mounted() {
        console.log("Artist List Component mounted.");
    },
    computed: {
        filteredArtists() {
            var self = this;
            if (!this.sel_view){
                return this.artists;
            }
            return this.artists.filter(a => a.artist_num == self.sel_view);
        }
    }
};
</script>