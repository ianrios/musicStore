<template>
    <div class="container" id="to_center">
        <a :href="'#'+artist.anchor" :name="artist.anchor" id="artist_name_link"/>
        <img :src="'/img/artists/'+artist.profile" class="img-fluid" id="artist_profile">
        <div id="centered">
            <h1>{{artist.name}}</h1>
            <p id="artist_short_desc">{{artist.short_desc}}</p>
            <div class="row" id="artist_bio">{{artist.bio}}</div>
        </div>
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
