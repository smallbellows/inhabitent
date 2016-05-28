<!-- This file is used to markup the public-facing widget. -->


<?php if ( strlen( trim($phone) ) > 0 ) : ?>
<p class="contact-us">
  <i class="fa fa-phone" aria-hidden="true"></i>
  <span>
    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
  </span>
</p>
<?php endif; ?>

<?php if ( strlen( trim($email) ) > 0 ) : ?>
<p class="contact-us">
  <i class="fa fa-envelope" aria-hidden="true"></i><span>
    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
  </span>
</p>
<?php endif; ?>

<?php if ( strlen( trim($address1) ) > 0 ) : ?>
<p class="contact-us">
  <i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $address1; ?><br/>
    <?php echo $address2 ?></span>
</p>
<?php endif; ?>
