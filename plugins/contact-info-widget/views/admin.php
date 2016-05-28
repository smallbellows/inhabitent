<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p>
     <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		 <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p>
    <label for="<?php echo $this->get_field_id('phone'); ?>">Phone Number:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>">
   </p>

   <p>
     <label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>

   <p>
     <label for="<?php echo $this->get_field_id('address1'); ?>">Address:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('address1'); ?>" name="<?php echo $this->get_field_name('address1'); ?>" type="text" value="<?php echo $address1; ?>">
    <input class="widefat" id="<?php echo $this->get_field_id('address2'); ?>" name="<?php echo $this->get_field_name('address2'); ?>" type="text" value="<?php echo $address2; ?>">
   </p>

</div>
