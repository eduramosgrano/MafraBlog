<?php

//slider

add_action('init', 'type_post_slider');

  function type_post_slider() {
    $labels = array(
      'name' => _x('slider', 'post type general name'),
      'singular_name' => _x('Slide', 'post type singular name'),
      'add_new' => _x('Adicionar Novo', 'Novo item'),
      'add_new_item' => __('Novo Item'),
      'edit_item' => __('Editar Item'),
      'new_item' => __('Novo Item'),
      'view_item' => __('Ver Item'),
      'search_items' => __('Procurar Itens'),
      'not_found' =>  __('Nenhum registro encontrado'),
      'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
      'parent_item_colon' => '',
      'menu_name' => 'Slider'
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'public_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      //'capability' => array('slider','sliders'),
      'map_meta_cap' => true,
      'has_archive' => true,
      'hierarchical' => false,
      //'menu_position' => 2,
      //'menu_icon' => 'dashicons-images-alt2',
      //'register_meta_box_cb' => 'slider_meta_box',
      'supports' => array('title')
          );

register_post_type( 'Slider' , $args );
flush_rewrite_rules();
}


//End slider

// Especiarias na História

add_action('init', 'type_post_esp_historia');

  function type_post_esp_historia() {
    $labels = array(
      'name' => _x('EspeciariasHistoria', 'post type general name'),
      'singular_name' => _x('História', 'post type singular name'),
      'add_new' => _x('Adicionar Novo', 'Novo item'),
      'add_new_item' => __('Novo Item'),
      'edit_item' => __('Editar Item'),
      'new_item' => __('Novo Item'),
      'view_item' => __('Ver Item'),
      'search_items' => __('Procurar Itens'),
      'not_found' =>  __('Nenhum registro encontrado'),
      'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
      'parent_item_colon' => '',
      'menu_name' => 'Especiarias na História'
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'public_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      //'capability' => array('slider','sliders'),
      'map_meta_cap' => true,
      'has_archive' => true,
      'hierarchical' => false,
      //'menu_position' => 2,
      //'menu_icon' => 'dashicons-images-alt2',
      //'register_meta_box_cb' => 'slider_meta_box',
      'supports' => array('title', 'editor')
          );

register_post_type( 'EspeciariasHistoria' , $args );
flush_rewrite_rules();
}


//END Especiarias na História

// -------------------- -------------------- -------------------- -------------------- //


// Criar Meta Boxes

// Slider
add_action( 'cmb2_init', 'cmb2_sample_metaboxes' );

function cmb2_sample_metaboxes(){
  $prefix = '_my_prefix_';

  // Classic CMB2 declaration
  $cmb = new_cmb2_box( array(
      'id'           => 'prefix-metabox-id',
      'title'        => __( 'Slide' ),
      'object_types' => array( 'slider'), // Post type
  ) );


  // Add new field
  $cmb->add_field( array(
      'name'    => 'Imagem',
      'desc'    => 'Upload an image or enter an URL.',
      'id'      => '_wiki_test_image',
      'type'    => 'file',
      // Optionally hide the text input for the url:
      'options' => array(
          'url' => false,
      ),
  ) );


  $cmb->add_field( array(
      'name'    => 'Test Text',
      'desc'    => 'field description (optional)',
      'default' => 'standard value (optional)',
      'id'      => '_wiki_test_text',
      'type'    => 'text'
  ) );

  $cmb->add_field( array(
      'name'        => __( 'Link' ),
      'id'          => 'prefix_related_post',
      'type'        => 'post_search_text', // This field type
      'desc'        => 'Clique na lupa para procurar o seu post',
      // post type also as array
      'post_type'   => array( 'slider', 'post'),
      // Default is 'checkbox', used in the modal view to select the post type
      'select_type' => 'radio',
      // Will replace any selection with selection from modal. Default is 'add'
      'select_behavior' => 'replace',
  ) );
}
// END Slider

// Especiarias na Historia
add_action( 'cmb2_init', 'cmb2_esp_historia' );

function cmb2_esp_historia(){
  $prefix = '_my_prefix_';

  // Classic CMB2 declaration
  $cmb2_esp_historia = new_cmb2_box( array(
      'id'           => 'prefix-metabox-id-esphist',
      'title'        => __( 'Mais informações' ),
      'object_types' => array( 'EspeciariasHistoria'), // Post type
  ) );


  $cmb2_esp_historia->add_field( array(
      'name'    => 'Linha fina',
      'desc'    => 'field description (optional)',
      'default' => 'standard value (optional)',
      'id'      => '_wiki_test_text',
      'type'    => 'text'
  ) );
}
// END Especiarias na Historia


// // Slider URL
//
// add_action( 'add_meta_boxes', 'slider_meta_box' );
//   function slider_meta_box() {
//     add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'slider', 'normal', 'high');
//     add_meta_box('slider_texto', 'Texto', 'slider_meta_box_function', 'slider', 'normal', 'high');
//     add_meta_box('slider_url', 'URL Post / Link Post', 'slider_meta_box_function_url', 'slider', 'normal', 'high');
//
//     // add_meta_box('wpt_events_location', 'Event Location', 'wpt_events_location', 'events', 'normal', 'high');
//   }
//   function slider_meta_box_function() {
//     $slider_type = get_post_meta(get_the_ID(), '_slider_type', TRUE);
//
//     global $post;
//       // Noncename needed to verify where the data originated
//       echo '<input type="hidden" name="slider_texto_noncename" id="slider_texto_noncename	" value="'.wp_create_nonce("slider_type".get_the_ID()).'" />';
//       // Get the location data if its already been entered
//       // echo "slider_type".get_the_ID();
//       $location = get_post_meta($post->ID, '_slider_type', true);
//       // Echo out the field
//
//       echo '<input type="text" name="slider_type" value="' . $location  . '" class="widefat" />';
//
//     }
//
//   function slider_meta_box_save( $post_id ) {
//
//     // verify this came from the our screen and with proper authorization,
//     // because save_post can be triggered at other times
//     if ( !isset($_POST['slider_texto_noncename']) || !wp_verify_nonce( $_POST['slider_texto_noncename'], 'slider_type'.get_the_ID())) {
//     // if ( !wp_verify_nonce( $_POST['slider_texto_noncename'], 'slider_type'.get_the_ID() )) {
//       return $post_id;
//     }
//
//     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
//       return $post_id;
//
//     if ( !current_user_can( 'edit_post', get_the_ID() ))
//     return get_the_ID();
//
//     // OK, we're authenticated: we need to find and save the data
//     $post = get_post($post_id);
//     if ($post->post_type == 'slider') {
//         update_post_meta($post_id, '_slider_type', esc_attr($_POST['slider_type']) );
//                 return(esc_attr($_POST['slider_type']));
//     }
//     return $post_id;
//
//     $events_meta['_slider_type'] = $_POST['_slider_type'];
//
//     foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
//       if( $post->post_type == 'revision' ) return; // Don't store custom data twice
//       $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
//       if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
//         update_post_meta($post->ID, $key, $value);
//       } else { // If the custom field doesn't have a value
//         add_post_meta($post->ID, $key, $value);
//       }
//       if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
//       }
//
//   }
//     //remove_action('save_post', 'slider_meta_box_save');
//     add_action('save_post', 'slider_meta_box_save' );
//
// // END Slider Texto


 ?>
