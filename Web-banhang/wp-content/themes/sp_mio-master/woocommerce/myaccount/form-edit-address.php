<?php
/**
 * Edit Address Form
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */
 
global $woocommerce, $current_user;

get_currentuserinfo();
?>

<?php wc_print_notices(); ?>

<?php if (!$load_address) : ?>

	<?php woocommerce_get_template('myaccount/my-address.php'); ?>

<?php else : ?>

	<form action="<?php echo esc_url( add_query_arg( 'address', $load_address, get_permalink( woocommerce_get_page_id('edit_address') ) ) ); ?>" method="post" class="change-address">
		
		<h3><?php if ($load_address=='billing') _e('Billing Address', 'sp'); else _e('Shipping Address', 'sp'); ?></h3>
		
		<?php 
		foreach ($address as $key => $field) :
			$value = (isset($_POST[$key])) ? $_POST[$key] : get_user_meta( get_current_user_id(), $key, true );
			
			// Default values
			if (!$value && ($key=='billing_email' || $key=='shipping_email')) $value = $current_user->user_email;
			if (!$value && ($key=='billing_country' || $key=='shipping_country')) $value = $woocommerce->countries->get_base_country();
			if (!$value && ($key=='billing_state' || $key=='shipping_state')) $value = $woocommerce->countries->get_base_state();
			
			woocommerce_form_field( $key, $field, $value );
		endforeach;
		?>
		
		<input type="submit" class="button" name="save_address" value="<?php _e('Save Address', 'sp'); ?>" />
		
		<?php wp_nonce_field('edit_address') ?>
		<input type="hidden" name="action" value="edit_address" />
	
	</form>

<?php endif; ?>