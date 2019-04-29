<template>
    <div class="container">
        <div class="row">{{artist.bio}}</div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Artist View Component mounted.");
    },
    props: {
        artist: Object
    }
};
</script>
