<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{release.name}}</div>
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
                    <div class="card-body">WHY{{release.id}}</div>
                    <img :src="'img/releases/WHY'+release.id+'.jpg'" class="img-fluid">
                </div>
            </div>
        </div>
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
