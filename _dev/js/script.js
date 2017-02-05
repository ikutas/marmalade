const $win = $(window);
const $body = $("body");
const threshold = 320;
$win.on("resize", () => {
    if ($win.width() < threshold) {
      $body.css("zoom", threshold / $win.width() / 100 + "%");
    }
})
