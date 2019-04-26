<template>
    <div class="container">
        <div v-if="page == 0" class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <div>
                        <div>
                            <a href="#">whythough?</a>
                            <a href="#">dyl_pykl</a>
                            <a href="#">svnteen</a>
                        </div>
                    </div>

                    <div style="background-image: url(img/11.jpg)">
                    </div>
                    <h2>WHY? Records</h2>
                    <a href="#">about</a>
                </div>
            </div>
        </div>

        <div v-else-if="page == 1" class="row">
            <div class="col-3">
                <h3> WHY?<br>Records </h3>
                <p>
                    One morning, when Gregor Samsa woke from troubled
                    dreams, he found himself transformed in his bed into a horrible vermin. He
                    lay on his armour-like back, and if he lifted his head a little he could
                    see his brown belly, slightly domed and divided by arches into stiff
                    sections.
                </p>
                <div>
                    <a href="">In</a>
                    <a href="">Tw</a>
                    <a href="">Fb</a>
                </div>
            </div>
            <div class="col-6">
                <artists-list-component :artists="artists"/>
            </div>
            <button class="btn btn-link" aria-label="Back to main view"></button>
        </div>


    </div>
</template>

<script>
    import ArtistsListComponent from "./ArtistsListComponent.vue"
    export default {
        data() {
            return {
                page: 0,
                label: "WHY? Record Company",
                roles: ["manager", "vj", "dj", "producer", "musician", "mixing", "mastering", "graphics", "web", "marketing"],
                artists: [
                    {
                        name: "whythough?",
                        artist_num: 1,
                        short_desc: "",
                        profile_img: "whythough_4x6.jpg",
                        addit_img: []
                    },
                    {
                        name: "dyl_pykl",
                        artist_num: 1,
                        short_desc: "",
                        profile_img: "dyl_pykl_4x6.jpg",
                        addit_img: []
                    },
                    {
                        name: "svnteen",
                        artist_num: 2,
                        short_desc: "",
                        profile_img: "svnteen_4x6.jpg",
                        addit_img: []
                    }
                ],
                label_socials : [
                    {
                        name: "instagram",
                        short_name: "in",
                        link: "https://www.instagram.com/",
                        icon: "",
                    },
                    {
                        name: "facebook",
                        short_name: "fb",
                        link: "https://www.facebook.com/",
                        icon: "",
                    },
                    {
                        name: "twitter",
                        short_name: "tw",
                        link: "https://www.twitter.com/",
                        icon: "",
                    },
                    {
                        name: "discord",
                        short_name: "dc",
                        link: "https://www.discordapp.com/",
                        icon: "",
                    }
                ],
                label_streaming : [
                    {
                        name: "spotify",
                        short_name: "sp",
                        link: "https://open.spotify.com",
                        icon: "",
                    },
                    {
                        name: "apple music",
                        short_name: "am",
                        link: "",
                        icon: "",
                    },
                    {
                        name: "itunes",
                        short_name: "it",
                        link: "",
                        icon: "",
                    },
                    {
                        name: "beatport",
                        short_name: "bp",
                        link: "",
                        icon: "",
                    },
                    {
                        name: "bandcamp",
                        short_name: "bc",
                        link: "",
                        icon: "",
                    },
                    {
                        name: "soundcloud",
                        short_name: "sc",
                        link: "",
                        icon: "",
                    },
                    {
                        name: "choon",
                        short_name: "ch",
                        link: "",
                        icon: "",
                    }
                ],   
            }
        },
        mounted() {
            console.log('Home Component mounted.')
        },
        components: {
            ArtistsListComponent,
        },
        computed: {
            filterPage() {
                var self = this;
                
            }
        },
    }
</script>

