<template>
    <div class="container" id="cycle_page">
        <h1 id="cycle_page_header1">CYCLE</h1>
        <img id="bg_img_cycle" src="img/final_album_view_cycle001.png">
        <p id="cycle_page_p">{{releases[9].info_p}}</p>
    </div>
</template>

<script>
import { curr_view, releases, artists } from "../JSON/data.json";

export default {
    mounted() {
        console.log("Cycle Page Component mounted.");
    },
    data() {
        return {
            curr_view: curr_view,
            releases: releases,
            artists: artists
        };
    }
};
</script>
