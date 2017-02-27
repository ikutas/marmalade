import $ from "jquery"
import {common} from "../../config/common.json"

export default class Nav {
    constructor(opts = {}) {
        let self = this;
        $.each(opts, (key) => {
            self[key] = opts[key];
        })
        const $win = $(window);

        self.$menuBtn = $(".js-menuBtn");
        self.$menu = $(".js-spmenu");
        console.log($(window).width());
        console.log(common.tablet_min_width);

        if ($win.width() < common.tablet_min_width) {
            self.menuBtnSetup();
            self.menuSetup();
        }
    }
    menuBtnSetup() {
        let self = this;
        self.$menuBtn.on("click", () => {
            console.log(this);
        });
    }
    menuSetup() {
        console.log("this is sp size");
    }
};
