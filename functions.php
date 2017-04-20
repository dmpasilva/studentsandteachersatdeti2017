<?php

	function register_theme_scripts() {
	   // register your script location and dependencies
	   wp_register_script(
           'custom_script',
	   	   get_template_directory_uri() . '/js/bootstrap.js',
           array('jquery')
	    );
	   // enqueue the script
	   wp_enqueue_script('custom_script');
	}

	function register_theme_styles() {  
	    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	    wp_register_style( 'main-theme', get_template_directory_uri().'/css/theme.css');
	    wp_register_style( 'students', get_template_directory_uri().'/css/students.css');
	    wp_register_style( 'teachers', get_template_directory_uri().'/css/teachers.css');
	    wp_register_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');

	    wp_enqueue_style( 'bootstrap' );
	    wp_enqueue_style( 'font-awesome' );

	    // load main theme
	    wp_enqueue_style( 'main-theme' );

	    // load specific page css
	    if(is_page('studentsatdeti')) { wp_enqueue_style( 'students' ); }
	    else if(is_page('teachersatdeti')) { wp_enqueue_style( 'teachers' ); }
	}  
	
	add_action('wp_enqueue_scripts', 'register_theme_scripts');
	add_action( 'wp_enqueue_scripts', 'register_theme_styles' ); 

	// Add excerpt to pages
	function add_excerpt_to_pages() {
  		add_post_type_support( 'page', 'excerpt' );
	}

	// Register menus
	function create_navmenus() {
  		register_nav_menus(
    		array(
      			'cabecalho' => ('Cabeçalho'),
      			'lateral' => ('Menu lateral')
    		)
  		);
	}

	// Create sidebar
	function create_sidebars() {
		$sidebar = array(
			'name'          => ('Barra de conteúdos'),
	        'id'            => 'sidebar',          
			'description'   => '',
			'class'         => 'list-group',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		register_sidebars( 2, $sidebar);
	}

	// Change 'current-menu-item' to 'active' to reflect Bootstrap CSS
	function special_nav_class($classes, $item){
     	if( in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
     	}
    return $classes;
	}
	
	// Activate functions
	add_action( 'init', 'add_excerpt_to_pages' );
	add_action( 'init', 'create_navmenus' );
	add_action( 'init', 'create_sidebars' );
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	// Enable support for WordPress's custom header
	$header = array(
		'width'         => 1280,
		'height'        => 500,
		'default-image' => get_template_directory_uri() . '/img/header.jpg',
		'uploads'       => true,
	);

	add_theme_support( 'custom-header', $header );

?>