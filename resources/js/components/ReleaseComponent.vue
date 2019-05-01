<template>
    <div class="container" id="to_center">
        <h3>{{release.name}}</h3>
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
        <h4>WHY{{release.id}}</h4>
        <img :src="'img/releases/WHY'+release.id+'.jpg'">
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
