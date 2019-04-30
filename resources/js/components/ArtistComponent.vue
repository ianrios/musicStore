<template>
    <div class="container">
        <a :href="'#'+artist.anchor" :name="artist.anchor" id="artist_name_link">{{artist.name}}</a>
        <p id="artist_short_desc">{{artist.short_desc}}</p>
        <div class="row" id="artist_bio">{{artist.bio}}</div>
        <img :src="'/img/artists/'+artist.profile" class="img-fluid" id="artist_profile">
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Artist Component mounted.");
    },
    props: {
        artist: Object
    }
};
</script>
