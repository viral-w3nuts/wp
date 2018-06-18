<?php
include_once("./wp-blog-header.php");

// TO DISPLAY APPLIED COUPON CODE
global $woocommerce;

echo '<pre>';
echo '<hr/> shipping_total = ';
echo $woocommerce->cart->shipping_total;
echo '<hr/> shipping_tax_total = ';
echo $woocommerce->cart->shipping_tax_total;

echo '<hr/> applied_coupons ';
echo $woocommerce->cart->applied_coupons;
print_r($woocommerce->cart->applied_coupons);

echo '<hr/> coupon_discount_amounts ';
echo $woocommerce->cart->coupon_discount_amounts;
print_r($woocommerce->cart->coupon_discount_amounts);
echo $woocommerce->cart->applied_coupons[0];	
 
echo '<hr/> coupon_discount_amounts === ';
if (!empty($woocommerce->cart->applied_coupons))
{

     echo '<hr/>************';     
     echo $woocommerce->cart->get_coupon_discount_amount( $woocommerce->cart->applied_coupons['0'] );
     // echo $woocommerce->cart->coupon_discount_amounts();	
     // echo $woocommerce->cart->coupon_discount_amounts;	     
     echo '<hr/>';
     // print_r($woocommerce->cart->applied_coupons['0']);
     // print_r($woocommerce->cart->coupon_discount_amounts);	
     // print_r($woocommerce->cart->applied_coupons); - keys of coupons here
     // print_r($woocommerce->cart->applied_coupons); - keys of coupons here
}

echo '<hr/> ';
print_r($woocommerce);

echo '</pre>';

?>