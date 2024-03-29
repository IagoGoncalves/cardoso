<?php
function type_post_porsonalizados() {
   //Dados
      $dados = new Odin_Post_Type(
         'Dado',
         'dados'
      );
      $dados->set_labels(
         array( 'menu_name' => __( 'Dados', 'odin' ))
      );
      $dados->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','editor'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-id-alt',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );  
   //Timeline
      $timeline = new Odin_Post_Type(
         'Linha do tempo',
         'timeline'
      );
      $timeline->set_labels(
         array( 'menu_name' => __( 'Linha do tempo', 'odin' ))
      );
      $timeline->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','revisions' , 'editor'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-editor-ol',
            'show_in_rest' => true
         )
      );
   //Clientes
      $clientes = new Odin_Post_Type(
         'Cliente',
         'clientes'
      );
      $clientes->set_labels(
         array( 'menu_name' => __( 'Clientes', 'odin' ))
      );
      $clientes->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','editor','author','revisions','thumbnail'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
   }

function change_post_label() {
   global $menu;
   global $submenu;
   $menu[5][0] = 'Post';
   $submenu['edit.php'][5][0] = 'Post';
   $submenu['edit.php'][10][0] = 'Adicionar Post';
   $submenu['edit.php'][16][0] = 'Tags';
   echo '';
}
function change_post_object() {
   global $wp_post_types;
   $labels = &$wp_post_types['post']->labels;
   $labels->name = 'Post';
   $labels->singular_name = 'Post';
   $labels->add_new = 'Adicionar Post';
   $labels->add_new_item = 'Adicionar Post';
   $labels->edit_item = 'Editar Post';
   $labels->new_item = 'Post';
   $labels->view_item = 'Ver Post';
   $labels->search_items = 'Buscar Post';
   $labels->not_found = 'Nenhuma Post encontrado';
   $labels->not_found_in_trash = 'Nenhuma Post encontrado no Lixo';
   $labels->all_items = 'Todas Post';
   $labels->menu_name = 'Post';
   $labels->name_admin_bar = 'Post';
   $wp_post_types['post']->menu_position = '25';
   
}


add_action('init', 'type_post_porsonalizados', 1);
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );
