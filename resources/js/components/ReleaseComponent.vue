<template>
    <div class="container">
        <a v-if="release.landing != '#'" :href="release.landing">
            <h3 id="release_header3">{{release.name}}</h3>
            <h4 id="release_header4">WHY{{release.id}}</h4>
            <img id="release_image" :src="'img/releases/'+release.cover_art+'.jpg'">
        </a>
        <a v-else>
            <h3 id="release_header3">{{release.name}}</h3>
            <h4 id="release_header4">WHY{{release.id}}</h4>
            <img id="release_image" :src="'img/releases/'+release.cover_art+'.jpg'">
        </a>

        <!-- FILTER
						when released
						year of release
						phase of label age
						genre
						artist/s
						order of release
						release type
						tags/meta

        -->
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Release Component mounted.");
    },
    props: {
        release: Object
    }
};
</script>
<style scoped>
img {
    padding-left: 300px;
    padding-right: 300px;
}
</style>
