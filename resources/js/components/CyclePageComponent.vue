<template>
    <div class="container" id="cycle_page">
        <h1 id="cycle_page_header1">CYCLE</h1>
        <!-- <div id="cycle_inderimage"></div> -->
        <img id="bg_img_cycle" src="img/final_album_view_cycle001.png">

        <p id="cycle_page_p">{{releases[9].info_p}}</p>
        <p id="cycle_info"> The first release on the series is presented by <a href="artists#whythough">whythough?</a></p>
		<p id="cycle_info_2">With raw synths, intense samples, and highly syncopated drums, cycle001: 'grief' is a 16 song, hour long sonic soundscape journey.</p>
        <p id="release date">Release Date: May 17th, 2019</p>
        <p id="cycle_info_3">return to this page soon for more release info</p>
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
