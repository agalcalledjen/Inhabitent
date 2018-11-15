<!-- This file is used to markup the public-facing widget. -->
<!-- lets check for ... strlen, string length of variable to see if it exists. if the length is greater than 0, variable exist. and use trim to get rid of the whitespace -->
<?php if(strlen( trim( $monday_friday )) > 0 ): ?>
  <p>
    <span class="day-of-week">Monday-Friday:</span>
    <?php echo $monday_friday; ?>
  </p>
<?php endif; ?>

<?php if(strlen( trim( $saturday )) > 0 ): ?>
  <p>
    <span class="day-of-week">Saturday:</span>
    <?php echo $saturday; ?>
  </p>
<?php endif; ?>

<?php if(strlen( trim( $sunday )) > 0 ): ?>
  <p>
    <span class="day-of-week">Sunday:</span>
    <?php echo $sunday; ?>
  </p>
<?php endif; ?>
