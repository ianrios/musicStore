<template>
    <div class="container" id="cycle_page">
        <h1 id="cycle_page_header1">CYCLE</h1>
        <p id="cycle_page_p">cycle</p>
    </div>
</template>

<script>
import { curr_view } from "../JSON/data.json";

export default {
    mounted() {
        console.log("Cycle Page Component mounted.");
    },
    data() {
        return {
            curr_view: curr_view
        };
    }
};
</script>
