<template>
    <div class="container" id="artist_component">
        <a :href="'#'+artist.anchor" :name="artist.anchor" id="artist_name_link"/>
        <h1 id="artist_name">{{artist.name}}</h1>
        <p id="artist_short_desc">{{artist.short_desc}}</p>
        <p id="artist_bio">{{artist.bio}}</p>
        <img :src="'/img/artists/'+artist.profile" class="img-fluid" id="artist_profile">
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Artist Component mounted.");
        // "Each artist is picked by hand, each designer is decided on by committee. We pride ourselves in being one of the most restrictive label in the world. ",
    },
    props: {
        artist: Object
    }
};
</script>
