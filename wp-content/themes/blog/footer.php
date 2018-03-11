			<!-- footer -->
			<footer class="footer clearfix">
				<div class="col-12 sm-col-10 mx-auto ">
					<div class="footer__inner inline-flex justify-between content-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="footer__logo" src="<?php echo get_template_directory_uri()?>/assets/dist/img/db-logo.svg" alt="">
						</a>
						<div class="footer__links right">
							<a class="footer__a inline-block" href="tel:0730936515">
								<span class="footer__heading block">Ring oss</span>
							</a>
							<a class="footer__a inline-block" href="mailto:info@digitaliseringsbyran.se">
								<span class="footer__heading block">Maila</span>
							</a>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
			
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
