const $win = $(window);
const $body = $("body");
const threshold = 320;
$win.on("resize", () => {
    if ($win.width() < threshold) {
      console.log(threshold / $win.width());
        $body.css("zoom", threshold / $win.width() / 100 + "%");
    }
}).trigger("resize");
