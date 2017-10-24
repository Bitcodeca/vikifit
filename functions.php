<?php
/*
	==========================================
	 Include scripts
	==========================================

*/
function prototipo_script_enqueue() {
	//css
     wp_enqueue_style('Bootstrap grid', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
     wp_enqueue_style('Materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css', array(), '0.97.8', 'all');
     wp_enqueue_style('font awesome icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
     wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '2.2.1', 'all');
	
    //js
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(), '3.1.0', true);
    wp_enqueue_script('Materialize js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js', array(), '0.97.8', true);
    wp_enqueue_script('Mixitup',  get_template_directory_uri() . '/js/mixitup.min.js', array(), '3.0.0', true);
    wp_enqueue_script('Mixitup multifilter', get_template_directory_uri() . '/js/mixitup-multifilter.min.js', array(), '0.97.8', true);

}
add_action( 'wp_enqueue_scripts', 'prototipo_script_enqueue');

function menunavbar() {
	add_theme_support('menus');
  register_nav_menu('admin', 'admin');
  register_taxonomy('post_tag', array());
}
add_action('init', 'menunavbar');

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment'); 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    
    ob_start();
    
    ?>
    <span class="badge custom-badge cart-customlocation" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
    <?php
    
    $fragments['span.cart-customlocation'] = ob_get_clean();
    
    return $fragments;
    
}


//////////////////////////////////////////////////////////////
///////////////// INFO DEL USUARIO LOGGED ////////////////////
//////////////////////////////////////////////////////////////
function user_logged(){

  $user_logged=array();
  $current_user = wp_get_current_user();

  $user_logged["login"] = $current_user->user_login;
  $user_logged["nombre"] = $current_user->user_firstname;
  $user_logged["apellido"] = $current_user->user_lastname;
  $user_logged["email"] = $current_user->user_email;
  $user_logged["id"] = $current_user->id;
  $user_logged["rol"] = implode(', ', $current_user->roles);
  $user_logged["departamento"] = um_user('role');
  $user_logged["avatarxs"] = get_avatar( $current_user->id, 32 );
  $user_logged["avatarmd"] = get_avatar( $current_user->id, 64 );

  return $user_logged;
}




////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////// CUSTOM POST ENVOLTORIO ////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////
function postproducto(){
   $args = array(
   'labels'=> array( 'name'=>'Envoltorio',
       'singular_name'=> 'Envoltorios',
       'menu_name'=>'Envoltorios',
       'name_admin_bar'=> 'Envoltorios',
       'all_items' =>'Ver todas los Envoltorios',
       'add_new'=> 'Añadir nueva Envoltorios' ),
   'description' =>"Este tipo de post es para Envoltorios",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>4,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'thumbnail' ),
  'taxonomies' => array(),
   'query_var'=>true,
  );
  register_post_type( "envoltorio", $args );
 }
 add_action("init","postproducto");




function kia_filter_billing_fields($fields){
    unset( $fields["billing_country"] );
    unset( $fields["billing_company"] );
    unset( $fields["billing_postcode"] );
    unset( $fields["billing_vat"] );
    return $fields;
}
add_filter( 'woocommerce_billing_fields', 'kia_filter_billing_fields' );




// Add a new checkout field
function kia_filter_checkout_fields($fields){
    $fields['extra_fields'] = array(
            'RUT' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'RUT' )
                ),
            'COMUNA' => array(
                'type' => 'select',
                'options' => array( 'a' => __( 'Santiago centro' ), 'b' => __( 'Providencia' ), 'c' => __( 'Las Condes' ) ),
                'required'      => true,
                'label' => __( 'Comuna' )
                )
            );
 
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'kia_filter_checkout_fields' );

// save the extra field when checkout is processed
function kia_save_extra_checkout_fields( $order_id, $posted ){
    // don't forget appropriate sanitization if you are using a different field type
    if( isset( $posted['RUT'] ) ) {
        update_post_meta( $order_id, '_RUT', sanitize_text_field( $posted['RUT'] ) );
    }
    if( isset( $posted['COMUNA'] ) && in_array( $posted['COMUNA'], array( 'a', 'b', 'c' ) ) ) {
        update_post_meta( $order_id, '_COMUNA', $posted['COMUNA'] );
    }
}
add_action( 'woocommerce_checkout_update_order_meta', 'kia_save_extra_checkout_fields', 10, 2 );

// display the extra data on order recieved page and my-account order review
function kia_display_order_data( $order_id ){  ?>
    <h2><?php _e( 'Additional Info' ); ?></h2>
    <table class="shop_table shop_table_responsive additional_info">
        <tbody>
            <tr>
                <th><?php _e( 'RUT:' ); ?></th>
                <td><?php echo get_post_meta( $order_id, '_RUT', true ); ?></td>
            </tr>
            <tr>
                <th><?php _e( 'COMUNA:' ); ?></th>
                <td><?php echo get_post_meta( $order_id, '_COMUNA', true ); ?></td>
            </tr>
        </tbody>
    </table>
<?php }
add_action( 'woocommerce_thankyou', 'kia_display_order_data', 20 );
add_action( 'woocommerce_view_order', 'kia_display_order_data', 20 );


// display the extra field on the checkout form
function kia_extra_checkout_fields(){ 
 
    $checkout = WC()->checkout(); ?>
 
 
    <?php 
    // because of this foreach, everything added to the array in the previous function will display automagically
    foreach ( $checkout->checkout_fields['extra_fields'] as $key => $field ) : ?>
 
            <?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
 
        <?php endforeach; ?>
 
<?php }
add_action( 'woocommerce_checkout_after_customer_details' ,'kia_extra_checkout_fields' );

// display the extra data in the order admin panel
function kia_display_order_data_in_admin( $order ){  ?>
    <div class="order_data_column">
        <h4><?php _e( 'Extra Details', 'woocommerce' ); ?></h4>
        <?php 
            echo '<p><strong>' . __( 'RUT' ) . ':</strong>' . get_post_meta( $order->id, '_RUT', true ) . '</p>';
            echo '<p><strong>' . __( 'COMUNA' ) . ':</strong>' . get_post_meta( $order->id, '_COMUNA', true ) . '</p>'; ?>
    </div>
<?php }
add_action( 'woocommerce_admin_order_data_after_order_details', 'kia_display_order_data_in_admin' );


function kia_save_extra_details( $post_id, $post ){
    update_post_meta( $post_id, '_RUT', wc_clean( $_POST[ '_RUT' ] ) );
    update_post_meta( $post_id, '_COMUNA', wc_clean( $_POST[ '_COMUNA' ] ) );
}
add_action( 'woocommerce_process_shop_order_meta', 'kia_save_extra_details', 45, 2 );

// WooCommerce 2.3+
function kia_email_order_meta_fields( $fields, $sent_to_admin, $order ) {
    $fields['RUT'] = array(
                'label' => __( 'RUT' ),
                'value' => get_post_meta( $order->id, '_RUT', true ),
            );
    $fields['COMUNA'] = array(
                'label' => __( 'COMUNA' ),
                'value' => get_post_meta( $order->id, '_COMUNA', true ),
            );
    return $fields;
}
add_filter('woocommerce_email_order_meta_fields', 'kia_email_order_meta_fields', 10, 3 );

function kia_display_email_order_meta( $order, $sent_to_admin, $plain_text ) {
    $some_field = get_post_meta( $order->id, '_RUT', true );
    $another_field = get_post_meta( $order->id, '_COMUNA', true );
    if( $plain_text ){
        echo 'The value for some field is ' . $some_field . ' while the value of another field is ' . $another_field;
    } else {
        echo '<p>The value for <strong>some field</strong> is ' . $some_field. ' while the value of <strong>another field</strong> is ' . $another_field . '</p>';
    }
}
add_action('woocommerce_email_customer_details', 'kia_display_email_order_meta', 30, 3 );


function woocommerce_variable_add_to_cart(){
    global $product, $post;
 
    $variations = find_valid_variations();
 
    // Check if the special 'price_grid' meta is set, if it is, load the default template:
    if ( get_post_meta($post->ID, 'price_grid', true) ) {
        // Enqueue variation scripts
        wp_enqueue_script( 'wc-add-to-cart-variation' );
 
        // Load the template
        wc_get_template( 'single-product/add-to-cart/variable.php', array(
                'available_variations'  => $product->get_available_variations(),
                'attributes'            => $product->get_variation_attributes(),
                'selected_attributes'   => $product->get_variation_default_attributes()
            ) );
        return;
    }
 
    // Cool, lets do our own template!
    ?>
    <table class="variations variations-grid" cellspacing="0">
        <tbody>
            <?php
            foreach ($variations as $key => $value) {
                if( !$value['variation_is_visible'] ) continue;
            ?>
            <tr>
                <td>
                    <?php foreach($value['attributes'] as $key => $val ) {
                        $val = str_replace(array('-','_'), ' ', $val);
                        printf( '<span class="attr attr-%s">%s</span>', $key, ucwords($val) );
                    } ?>
                </td>
                <td>
                    <?php echo $value['price_html'];?>
                </td>
                <td>
                    <?php if( $value['is_in_stock'] ) { ?>
                    <form class="cart" action="<?php $product->add_to_cart_url(); ?>" method="post" enctype='multipart/form-data'>
                        <?php woocommerce_quantity_input(); ?>
                        <?php
                        if(!empty($value['attributes'])){
                            foreach ($value['attributes'] as $attr_key => $attr_value) {
                            ?>
                            <input type="hidden" name="<?php echo $attr_key?>" value="<?php echo $attr_value?>">
                            <?php
                            }
                        }
                        ?>
                        <button type="submit" class="single_add_to_cart_button btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Add to cart</button>
                        <input type="hidden" name="variation_id" value="<?php echo $value['variation_id']?>" />
                        <input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
                        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $post->ID ); ?>" />
                    </form>
                    <?php } else { ?>
                        <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
}

function find_valid_variations() {
    global $product;
 
    $variations = $product->get_available_variations();
    $attributes = $product->get_attributes();
    $new_variants = array();
 
    // Loop through all variations
    foreach( $variations as $variation ) {
 
        // Peruse the attributes.
 
        // 1. If both are explicitly set, this is a valid variation
        // 2. If one is not set, that means any, and we must 'create' the rest.
 
        $valid = true; // so far
        foreach( $attributes as $slug => $args ) {
            if( array_key_exists("attribute_$slug", $variation['attributes']) && !empty($variation['attributes']["attribute_$slug"]) ) {
                // Exists
 
            } else {
                // Not exists, create
                $valid = false; // it contains 'anys'
                // loop through all options for the 'ANY' attribute, and add each
                foreach( explode( '|', $attributes[$slug]['value']) as $attribute ) {
                    $attribute = trim( $attribute );
                    $new_variant = $variation;
                    $new_variant['attributes']["attribute_$slug"] = $attribute;
                    $new_variants[] = $new_variant;
                }
 
            }
        }
 
        // This contains ALL set attributes, and is itself a 'valid' variation.
        if( $valid )
            $new_variants[] = $variation;
 
    }
 
    return $new_variants;
}























if( ! class_exists( 'Materialize_Walker_Desktop_Nav_Menu' ) ) :

    class Materialize_Walker_Desktop_Nav_Menu extends Walker_Nav_Menu {

        private $curItem;

        /**
         * Starts the list before the elements are added.
         *
         * Adds classes to the unordered list sub-menus.
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         */
        function start_lvl( &$output, $depth = 0, $args = array() ) {

            // Depth-dependent classes.
            $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
            $display_depth = ( $depth + 1); // because it counts the first submenu as 0
            $classes = array(
                'sub-menu',
                ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
                ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
                'menu-depth-' . $display_depth
            );
            $class_names = implode( ' ', $classes );

            // Build HTML for output.
            $output .= "\n" . $indent . '<ul id="' . $this->curItem->post_name . '" class="' . $class_names . ' dropdown-content">' . "\n";
        }

        /**
         * Start the element output.
         *
         * Adds main/sub-classes to the list items and links.
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item   Menu item data object.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         * @param int    $id     Current item ID.
         */
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            global $wp_query;
            $this->curItem = $item;
            $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

            // Depth-dependent classes.
            $depth_classes = array(
                ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
                ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
                ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
                'menu-item-depth-' . $depth
            );

            $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

            // Passed classes.
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

            // Build HTML.
            $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
            if( in_array( 'menu-item-has-children', $item->classes ) ) {$dropdown='dropdown-button ';}else{$dropdown='';}
            // Link attributes.
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="menu-link ' .$dropdown. ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

            if( in_array( 'menu-item-has-children', $item->classes ) ) 
                $attributes .= ' data-activates="' . $item->post_name . '"';

            // Build HTML output and pass through the proper filter.
            $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters( 'the_title', $item->title, $item->ID ),
                $args->link_after,
                $args->after
            );
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

endif;

?>