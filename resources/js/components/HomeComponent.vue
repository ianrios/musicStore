<template>
    <div class="container h-100">
        <div v-if="curr_page == 0" class="row h-100 justify-content-center align-items-center">
            <div class="col">
                <div>
                    <div>
                        <a
                            v-for="artist in artists"
                            :key="artist.name"
                            :href="artist.url"
                            id="artist_name"
                            @click="updateArtistPage(artist.index)"
                        >
                            {{artist.name}}
                            <br>
                        </a>
                    </div>

                    <div style="background-image: url(img/11.jpg)"></div>
                    <h2>{{label}}</h2>
                    <a @click="updatePage(1)" href="#">about</a>
                </div>
            </div>
        </div>

        <div v-else-if="curr_page == 1" class="row">
            <div class="col-4">
                <h3>{{label}}</h3>
                <p>{{short_description}}</p>
                <div>
                    <a
                        v-for="link in label_socials"
                        :key="link.short_name"
                        :href="link.url"
                        id="social_link"
                    >
                        {{link.short_name}}
                        <br>
                    </a>
                </div>
                <button
                    class="btn btn-link"
                    @click="updatePage(0)"
                    aria-label="Back to main view"
                >back</button>
            </div>
            <div class="col-8">
                <artists-list-component :artists="artists"/>
            </div>
        </div>

        <div v-else-if="curr_page == 2" class="row"></div>
    </div>
</template>

<script>
import ArtistsListComponent from "./ArtistsListComponent.vue";
import ArtistViewComponent from "./ArtistViewComponent.vue";
export default {
    data() {
        return {
            curr_page: 0,
            curr_artistPage: 0,
            label: "WHY? Record Company",
            short_description: `If one examines precultural libertarianism, 
                                    one is faced with a choice: either accept 
                                    rationalism or conclude that context is a 
                                    product of the masses, given that Marx’s 
                                    essay on precultural libertarianism is invalid. 
                                    The subject is contextualised into a precapitalist 
                                    dematerialism that includes culture as a reality.`,
            roles: [
                "label manager",
                "studio manager",
                "web designer",
                "graphic designer",
                "marketing specialist",
                "dj",
                "producer",
                "musician",
                "mastering engineer",
                "mixing engineer",
                "singer",
                "songwriter",
                "vj"
            ],
            artists: [
                {
                    name: "whythough?",
                    url: "#",
                    artist_num: 1,
                    index: 0,
                    profile_img: "whythough_4x6.jpg",
                    addit_img: [],
                    short_desc: "",
                    bio: ``
                },
                {
                    name: "dyl_pykl",
                    url: "#",
                    artist_num: 1,
                    index: 1,
                    profile_img: "dyl_pykl_4x6.jpg",
                    addit_img: [],
                    short_desc: "",
                    bio: ``
                },
                {
                    name: "svnteen",
                    url: "#",
                    artist_num: 2,
                    index: 2,
                    profile_img: "svnteen_4x6.jpg",
                    addit_img: [],
                    short_desc: "",
                    bio: ``
                }
            ],
            label_socials: [
                {
                    name: "instagram",
                    short_name: "in",
                    url: "https://www.instagram.com/",
                    icon: ""
                },
                {
                    name: "facebook",
                    short_name: "fb",
                    url: "https://www.facebook.com/",
                    icon: ""
                },
                {
                    name: "twitter",
                    short_name: "tw",
                    url: "https://www.twitter.com/",
                    icon: ""
                },
                {
                    name: "discord",
                    short_name: "dc",
                    url: "https://www.discordapp.com/",
                    icon: ""
                }
            ],
            label_streaming: [
                {
                    name: "spotify",
                    short_name: "sp",
                    url: "https://open.spotify.com",
                    icon: ""
                },
                {
                    name: "apple music",
                    short_name: "am",
                    url: "",
                    icon: ""
                },
                {
                    name: "itunes",
                    short_name: "it",
                    url: "",
                    icon: ""
                },
                {
                    name: "beatport",
                    short_name: "bp",
                    url: "",
                    icon: ""
                },
                {
                    name: "bandcamp",
                    short_name: "bc",
                    url: "",
                    icon: ""
                },
                {
                    name: "soundcloud",
                    short_name: "sc",
                    url: "",
                    icon: ""
                },
                {
                    name: "choon",
                    short_name: "ch",
                    url: "",
                    icon: ""
                }
            ]
        };
    },
    mounted() {
        console.log("Home Component mounted.");
    },
    components: {
        ArtistsListComponent,
        ArtistViewComponent
    },
    computed: {},
    methods: {
        updatePage(n) {
            this.curr_page = n;
        },
        updateArtistPage(n) {
            this.curr_artistPage = n;
            console.log("updated page:", n);
        }
    }
};
</script>

<style lang="scss" scoped>
</style>
