<?php 
    add_action('wp_enqueue_scripts', 'forum_styles');
    add_action('wp_enqueue_scripts', 'forum_scripts');
    add_action( 'admin_bar_menu', 'my_admin_bar_menu', 30 );
    add_theme_support( 'custom-logo');

    function forum_styles() {
        wp_enqueue_style( 'forum-styles', get_template_directory_uri() . '/assets/css/blocks/style.min.css');
        wp_enqueue_style( 'forum-slick', get_template_directory_uri() . '/assets/css/libs/slick.min.css');
        };

    function forum_scripts() {
        wp_enqueue_script( 'forum-main', get_template_directory_uri() . '/assets/js/index.js', array(), false, true);
        };





    // Add buttons on Admin panel
    function my_admin_bar_menu( $wp_admin_bar ) {
	$wp_admin_bar->add_menu( array(
		'id'    => 'add',
        'title' => 'Добавить свободное помещение'
    ) );


    $wp_admin_bar->add_menu( array(
        'parent' => 'add',
		'id'    => 'add_kvarc',
        'title' => 'Кварц',
        'href'  => 'http://www.kozhevnikov97.ru/dobavit-pomeshhenie/',
    ) );

    $wp_admin_bar->add_menu( array(
        'parent' => 'add',
		'id'    => 'add_forum',
        'title' => 'Форум',
        'href'  => 'http://www.kozhevnikov97.ru/dobavit-pomeshhenie-forum/',
    ) );

    $wp_admin_bar->add_menu( array(
        'parent' => 'add',
		'id'    => 'add_atoll',
        'title' => 'Атолл',
        'href'  => 'http://www.kozhevnikov97.ru/dobavit-pomeshhenie-atoll/',
    ) );



    //  Delete buttons on Admin panel
    $wp_admin_bar->add_menu( array(
		'id'    => 'delete',
		'title' => 'Удалить свободное помещение',
    ) );


    $wp_admin_bar->add_menu( array(
        'parent' => 'delete',
		'id'    => 'delete_kvarc',
        'title' => 'Кварц',
        'href'  => 'http://www.kozhevnikov97.ru/udalit-pomeshhenie/',
    ) );

    $wp_admin_bar->add_menu( array(
        'parent' => 'delete',
		'id'    => 'delete_forum',
        'title' => 'Форум',
        'href'  => 'http://www.kozhevnikov97.ru/udalit-pomeshhenie-forum/',
    ) );

    $wp_admin_bar->add_menu( array(
        'parent' => 'delete',
		'id'    => 'delete_atoll',
        'title' => 'Атолл',
        'href'  => 'http://www.kozhevnikov97.ru/udalit-pomeshhenie-atoll/',
    ) );
    
    };

?>