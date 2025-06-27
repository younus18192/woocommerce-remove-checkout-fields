<?php
/*
 * plugin name: woocommerce-remove-checkout-fields
 */
function wc_remove_checkout_fields( $fields ) {

    unset( $fields['billing']['billing_phone'] );
    unset( $fields['billing']['billing_last_name'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['shipping']['shipping_company'] );
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );
?>