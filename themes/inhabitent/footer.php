<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer">
          <div class="site-info">
            <div class="contact-info">
              <h2>CONTACT INFO</h2>
              <p class="contact-meta">
                <i class="fa fa-envelope fa-lg"></i>
                <a href="mailto:info@inhabitent.com"> info@inhabitent.com</a>
              </p>
              <p class="contact-meta">
                <i class="fa fa-phone fa-lg"></i>
                <a href="tel:7784567891"> 778-456-7891</a>
              </p>
              <div class="contacts-icons">
                <a href="https://facebook.com" target="_blank" class="icon-links">
                  <i class="fab fa-facebook-square fa-lg"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" class="icon-links">
                  <i class="fab fa-twitter-square fa-lg"></i>
                </a>
                <a href="https://plus.google.com/discover" target="_blank" class="icon-links">
                  <i class="fab fa-google-plus-square fa-lg"></i>
                </a>
              </div><!-- end of .contacts-icons -->
            </div><!-- end of .contact-info -->
            <div class="business-hours">
              <h2>CONTACT INFO</h2>
              <p><strong>Monday-Friday:</strong> 9am to 5pm</p>
              <p><strong>Saturday:</strong> 10am to 2pm</p>
              <p><strong>Sunday:</strong> Closed</p>
            </div><!-- end of .business-hours -->
          </div><!-- end of .site-info -->
          <div class="footer-logo">
            <a href="<?php bloginfo( 'url' ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo Text Dark"/>
            </a>  
          </div><!-- end of .footer-logo -->
        </div><!-- end of .footer -->
        <div class="copyright">
          <p>COPYRIGHT &copy; 2019 INHABITENT</p>
        </div><!-- end of .copyright -->     
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
