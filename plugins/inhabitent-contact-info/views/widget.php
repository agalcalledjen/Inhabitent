<!-- This file is used to markup the public-facing widget. -->
<!-- lets check for ... strlen, string length of variable to see if it exists. if the length is greater than 0, variable exist. and use trim to get rid of the whitespace -->
<?php if(strlen( trim( $telephone )) > 0 ): ?>
  <p class="contact-meta">
    <i class="fa fa-phone"></i><a href="tel:'<?php echo $telephone; ?>'"> <?php echo $telephone; ?></a>
  </p>
<?php endif; ?>

<?php if(strlen( trim( $email )) > 0 ): ?>
  <p class="contact-meta">
    <i class="fa fa-envelope"></i>
    <a href="mailto:'<?php echo $email; ?>'"><?php echo $email; ?></a>
  </p>
<?php endif; ?>

<?php if(strlen( trim( $address )) > 0 && strlen( trim( $address1 )) > 0): ?>
  <p class="contact-meta">
    <i class="fa fa-map-marker-alt"></i>
    <?php echo $address; ?><br>
    <i class="fa fa-map-marker-alt" style="color: #fff;"></i>
    <?php echo $address1; ?>
  </p>
<?php endif; ?>
