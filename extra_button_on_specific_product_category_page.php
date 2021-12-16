add_action( 'woocommerce_after_shop_loop', 'extra_button_on_product_category_archives2', 100 );
function extra_button_on_product_category_archives2() {
    if ( is_product_category('Your Product Category Name') ) {
        echo '<a style="text-align:center;margin: 35%;" class="custombutton" href="www.test.com">Extra Button</a>';
    }
}
