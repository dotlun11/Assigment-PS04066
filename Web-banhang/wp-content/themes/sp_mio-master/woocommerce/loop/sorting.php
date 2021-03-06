<?php
/**
 * Sorting
 */
?>
<form class="woocommerce_ordering" method="POST">
	<select name="sort" class="orderby">
		<?php
			$catalog_orderby = apply_filters('woocommerce_catalog_orderby', array(
				'menu_order' 	=> __('Default sorting', 'sp'),
				'title' 		=> __('Sort alphabetically', 'sp'),
				'date' 			=> __('Sort by most recent', 'sp'),
				'price' 		=> __('Sort by price', 'sp')
			));

			foreach ( $catalog_orderby as $id => $name ) 
				echo '<option value="' . $id . '" ' . selected( $_SESSION['orderby'], $id, false ) . '>' . $name . '</option>';
		?>
	</select>
</form>