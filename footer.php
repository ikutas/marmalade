	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'blank' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'blank' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'blank' ), 'blank', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php get_template_part('nav'); ?>
<?php wp_footer(); ?>

<!-- ソーシャルボタンスクリプト読み込み -->

<script>
(function (w, d) {
  w.___gcfg = {lang: "ja"};
  var s, e = d.getElementsByTagName("script")[0],
  a = function (u, i) {
    if (!d.getElementById(i)) {
      s = d.createElement("script");
      s.src = u;
      if (i) {s.id = i;
    }
    e.parentNode.insertBefore(s, e);
  }
  };
  a(("https:" == location.protocol ? "//ssl" : "//www") + ".google-analytics.com/ga.js", "ga");
  a("https://apis.google.com/js/plusone.js");
  a("//b.st-hatena.com/js/bookmark_button_wo_al.js");
  a("//platform.twitter.com/widgets.js", "twitter-wjs");
  a("//connect.facebook.net/ja_JP/all.js#xfbml=1", "facebook-jssdk");
})(this, document);
</script>

</body>
</html>
