<?php
/**
 * The template for displaying the footer.
 *
 * @package SOMA Dev
 * @since 0.0.1
 */
wp_footer(); ?>
<?php if ( ! dynamic_sidebar( 'whatsapp' ) ) : endif; ?>
		<!-- <span class="top-button"></span> -->
		<footer class="footer">
			<div class="wrapper-footer">
				<div class="center">
					<?php if ( ! dynamic_sidebar( 'footer1' ) ) : endif; ?>
					<?php if ( ! dynamic_sidebar( 'footer2' ) ) : endif; ?>
					<?php if ( ! dynamic_sidebar( 'footer3' ) ) : endif; ?>
					<?php if ( ! dynamic_sidebar( 'footer4' ) ) : endif; ?>
				</div>
			</div>
			<div class="copyright">
				<span>Copyright Pizzani 2020 - Todos os direitos reservados</span>
			</div>
		</footer>
	</body>
</html>