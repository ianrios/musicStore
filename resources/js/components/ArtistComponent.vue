<template>
    <div class="container">
        <a :href="artist.url">{{artist.name}}</a>
        <p>{{artist.short_desc}}</p>
        <div class="row">{{artist.bio}}</div>
        <img :src="'/img/artists/'+artist.profile" class="img-fluid">
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
