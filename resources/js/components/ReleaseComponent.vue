<template>
    <div class="container" id="to_center">
        <div>{{release.name}}</div>
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
        <div>WHY{{release.id}}</div>
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
