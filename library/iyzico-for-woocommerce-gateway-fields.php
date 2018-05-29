<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Iyzico_Checkout_For_WooCommerce_Fields {

	public static function iyzicoAdminFields() {

		return $form_fields = array(
			 'api_type' => array(
		        'title' 	=> __('Api Type', 'woocommerce-iyzico'),
		        'type' 		=> 'select',
		        'required'  => true,
		        'default' 	=> 'popup',
		        'options' 	=> 
		        	array(
		        	 'https://api.iyzipay.com'    => __('Live', 'woocommerce-iyzico'),
		        	 'https://sandbox-api.iyzipay.com' => __('Sandbox / Test', 'woocommerce-iyzico')
		     )),
		     'api_key' => array(
		         'title' => __('Api Key', 'woocommerce-iyzico'),
		         'type' => 'text'
		     ),
		     'secret_key' => array(
		         'title' => __('Secret Key', 'woocommerce-iyzico'),
		         'type' => 'text'
		     ),
		    'title' => array(
		        'title' => __('Payment Value', 'woocommerce-iyzico'),
		        'type' => 'text',
		        'description' => __('This message will show to the user during checkout.', 'woocommerce-iyzico'),
		        'default' => 'Online Ödeme'
		    ),
		    'description' => array(
		        'title' => __('Payment Form Description Value', 'woocommerce-iyzico'),
		        'type' => 'text',
		        'description' => __('This controls the description which the user sees during checkout.', 'woocommerce-iyzico'),
		        'default' => __('Pay with your credit card via iyzico.', 'woocommerce-iyzico'),
		        'desc_tip' => true,
		    ),
		    'form_class' => array(
		        'title' => __('Payment Form Design', 'woocommerce-iyzico'),
		        'type' => 'select',
		        'default' => 'popup',
		        'options' => array('responsive' => __('Responsive', 'woocommerce-iyzico'), 'popup' => __('Popup', 'woocommerce-iyzico'))
		    ),
    	 'overlay_script' => array(
            'title' 	=> __('Overlay Script', 'woocommerce-iyzico'),
            'type' 		=> 'select',
            'required'  => false,
            'default' 	=> 'left',
            'options' 	=> 
            	array(
            	 'bottomLeft'    	=> __('Left', 'woocommerce-iyzico'),
            	 'bottomRight' 	=> __('Right', 'woocommerce-iyzico'),
            	 'hide' 	=> __('Hide', 'woocommerce-iyzico')
         )),
		    'enabled' => array(
		        'title' => __('Enable/Disable', 'woocommerce-iyzico'),
		        'label' => __('Enable iyzico checkout', 'woocommerce-iyzico'),
		        'type' => 'checkbox',
		        'default' => 'yes'
		    ),
		);
	}
}
