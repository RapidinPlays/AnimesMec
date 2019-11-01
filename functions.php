<?php
	// VIEW POST
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

	function cats_meow($glue) {
	        $current_cat = single_cat_title( '', false );
	        $separator = "\n";
	        $cats = explode( $separator, get_the_category_list($separator) );
	        foreach ( $cats as $i => $str ) {
	                if ( strstr( $str, ">$current_cat<" ) ) {
	                        unset($cats[$i]);
	                        break;
	                }
	        }
	        if ( empty($cats) )
	                return false;
	 
	        return trim(join( $glue, $cats ));
	}

	function getPostViews($postID){
	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	        return "0";
	    }
	    return $count;
	}
	function setPostViews($postID) {
	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	    }else{
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}

	// Remove issues with prefetching adding extra views
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

	// FUNÇÕES DE RETORNO
	function the_qualt($qualt){
		$isso = array('1','2','3','4','5','6','7','8','9','10','11');
		$psso = array('CAM','TS','HD','TVRip','HDCam','HDRip','HDTs','WEBDL','BRRip','BDRip','DVDRip');

		$qualt = str_replace($isso, $psso, $qualt);
		return $qualt;
	}

	function the_classf($classf){
		$isso = array('1','2','3','4','5','6');
		$psso = array('l','10','12','14','16','18');

		$classf = str_replace($isso, $psso, $classf);
		return $classf;
	}

	// META POST INFO
	define('MY_WORDPRESS_FOLDER',$_SERVER['DOCUMENT_ROOT']);
	define('MY_THEME_FOLDER',str_replace("\\",'/',dirname(__FILE__)));
	define('MY_THEME_PATH','/' . substr(MY_THEME_FOLDER,stripos(MY_THEME_FOLDER,'wp-content')));
	 
	add_action('admin_init','my_meta_init');
	 
	function my_meta_init() {
	    // review the function reference for parameter details
	    // http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	    // http://codex.wordpress.org/Function_Reference/wp_enqueue_style
	 
	    wp_enqueue_script('my_meta_js', MY_THEME_PATH . '/custom/meta.js', array('jquery'));
	    wp_enqueue_script('my_meta0_js', MY_THEME_PATH . '/custom/meta0.js', array('jquery'));
	    wp_enqueue_script('my_bootstrap.min_js', MY_THEME_PATH . '/js/bootstrap.min.js', array('jquery'));
	    wp_enqueue_style('my_meta_css', MY_THEME_PATH . '/custom/meta.css');
	    wp_enqueue_style('my_bootstrap.min_css', MY_THEME_PATH . '/css/bootstrap.min.css');
	 
	    // review the function reference for parameter details
	    // http://codex.wordpress.org/Function_Reference/add_meta_box
	 
	    // add a meta box for each of the wordpress page types: posts and pages
	    foreach (array('post','page') as $type) {
	        add_meta_box('my_all_meta', 'INFORMAÇÕES:', 'my_meta_setup', $type, 'normal', 'high');
	    }
	     
	    // add a callback function to save any data a user enters in
	    add_action('save_post','my_meta_save');
	}
	 
	function my_meta_setup() {
	    global $post;
	  
	    // using an underscore, prevents the meta variable
	    // from showing up in the custom fields section
	    $meta = get_post_meta($post->ID,'_my_meta',TRUE);
	  
	    // instead of writing HTML here, lets do an include
	    include(MY_THEME_FOLDER . '/custom/meta.php');
	  
	    // create a custom nonce for submit verification later
	    echo '<input type="hidden" name="my_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
	}
	  
	function my_meta_save($post_id) {
	    // authentication checks
	 
	    // make sure data came from our meta box
	    if (!wp_verify_nonce($_POST['my_meta_noncename'],__FILE__)) return $post_id;
	 
	    // check user permissions
	    if ($_POST['post_type'] == 'page') {
	        if (!current_user_can('edit_page', $post_id)) return $post_id;
	    } else {
	        if (!current_user_can('edit_post', $post_id)) return $post_id;
	    }
	 
	    // authentication passed, save data
	 
	    // var types
	    // single: _my_meta[var]
	    // array: _my_meta[var][]
	    // grouped array: _my_meta[var_group][0][var_1], _my_meta[var_group][0][var_2]
	 
	    $current_data = get_post_meta($post_id, '_my_meta', TRUE);  
	  
	    $new_data = $_POST['_my_meta'];
	 
	    my_meta_clean($new_data);
	     
	    if ($current_data) {
	        if (is_null($new_data)) delete_post_meta($post_id,'_my_meta');
	        else update_post_meta($post_id,'_my_meta',$new_data);
	    } elseif (!is_null($new_data)) {
	        add_post_meta($post_id,'_my_meta',$new_data,TRUE);
	    }
	 
	    return $post_id;
	}
	 
	function my_meta_clean(&$arr) {
	    if (is_array($arr)) {
	        foreach ($arr as $i => $v) {
	            if (is_array($arr[$i])) {
	                my_meta_clean($arr[$i]);
	 
	                if (!count($arr[$i])) {
	                    unset($arr[$i]);
	                }
	            } else {
	                if (trim($arr[$i]) == '') {
	                    unset($arr[$i]);
	                }
	            }
	        }
	        if (!count($arr)) {
	            $arr = NULL;
	        }
	    }
	}

function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->count;
}

function getCat(){
	global $post;
	$categoria = get_the_category($post->id);
	$nomeCategoria = $categoria[0]->cat_name;

	return $nomeCategoria;
}

function mdv_post_count() {
	//$count_posts = wp_count_posts();
	//return $published_posts = $count_posts->publish;

	//CAT : DE ACORDO COM O ID DA CATEGORIA SÉRIE
	$args = array(
		'cat' => '-3'
	);
	$thePosts = query_posts($args);
	global $wp_query;
	return $wp_query->found_posts;
}

/** Paginação */
function pagination_funtion() {

global $wp_query;
$total = $wp_query->max_num_pages;
                    
if ( $total > 1 )  {
    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;
                            
        $big = 999999999;

        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 3,
            'prev_text' => __( '<<', 'mfhd' ),
    		'next_text' => __( '>>', 'mghd' ),
            'type' => 'plain'
        ));
    }

}
/** END Paginação */
?>