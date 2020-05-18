<?php
/**
 * The template for displaying the footer.
 *
 * @package SOMA Dev
 * @since 0.0.1
 */ ?>
		<footer id="footer">
			<section class="wrapper-footer">
				<div class="center">
					<h3>Rodapé do Site</h3>
					<div class="col col-4"><?php if ( ! dynamic_sidebar( 'footer1' ) ) : endif; ?></div
					><div class="col col-4"><?php if ( ! dynamic_sidebar( 'footer2' ) ) : endif; ?></div
					><div class="col col-4"><?php if ( ! dynamic_sidebar( 'footer3' ) ) : endif; ?></div
					><div class="col col-4"><?php if ( ! dynamic_sidebar( 'footer4' ) ) : endif; ?></div>
				</div>
			</section>
			<section class="copyright textcenter">
				<div class="center">
					<p>Copyright Pizzani 2020 - Todos os direitos reservados</p>
				</div>
			</section>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>