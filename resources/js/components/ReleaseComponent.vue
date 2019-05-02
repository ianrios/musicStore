<template>
    <div class="container">
        <h3 id="release_header3">{{release.name}}</h3>
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
        <h4 id="release_header4">WHY{{release.id}}</h4>
        <img id="release_image" :src="'img/releases/'+release.cover_art+'.jpg'">
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
