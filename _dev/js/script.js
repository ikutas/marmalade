import $ from "jquery"
import Nav from "./lib/Nav.js"
const threshold = 320;

$(() => {
    const $win = $(window);
    const $body = $("body");

    $win.on("resize", () => {
        if ($win.width() < threshold) {
            $body.css("zoom", $win.width() / threshold * 100 + "%");
        } else {
            $body.css("zoom", "");
        }
    }).trigger("resize");

    const nav = new Nav({
        $el: $(".js-nav")
    });
})
