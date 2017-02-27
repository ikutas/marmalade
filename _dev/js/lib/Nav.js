import $ from "jquery"
import {common} from "../../config/common.json"

export default class Nav {
    constructor(opts = {}) {
        let self = this;
        $.each(opts, (key) => {
            self[key] = opts[key];
        })
        self.$win = $(window);
        self.$body = $("body");

        self.$menuBtn = $(".js-menuBtn");
        self.$menu = $(".js-spmenu");

        //PC表示のときには動作しない
        if (self.$win.width() < common.tablet_min_width) {
            self.menuBtnSetup();
            self.menuSetup();
        }
    }
    menuBtnSetup() {
        let self = this;
        const menuOnClass = "js-spMenuOn";
        self.$menuBtn.on("click", () => {
            self.$body.toggleClass(menuOnClass)
        });
    }
    menuSetup() {
        console.log("this is sp size");
    }
};
