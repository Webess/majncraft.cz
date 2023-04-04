require("./bootstrap");

window.Vue = require("vue");

import "lightbox2/dist/js/lightbox";

// import WhitelistTest from "./components/whitelist/WhitelistTest";
import VoteList from "./components/VoteList";
import CopyButton from "./components/CopyButton";

// Vue.component("whitelist-test", WhitelistTest);
Vue.component("vote-list", VoteList);
Vue.component("copy-button", CopyButton);

const app = new Vue({
    el: "#app",
    components: {
        VoteList,
        CopyButton,
    },
    data: {
        showNav: false,
        backgroundImage: "images/bg.png",
        backgroundImageList: [
            "images/bg.png",
            "images/bg2.png",
            "images/bg3.png"
        ]
    },
    methods: {
        randomItem(items) {
            return items[Math.floor(Math.random() * items.length)];
        },
    },
    created() {
        this.backgroundImage = this.randomItem(this.backgroundImageList);
    }
});


