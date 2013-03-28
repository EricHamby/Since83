<?php 
/* gets theme files */
require_once('variable.php');
require_once('theme_array.php');
require_once('injections.php');
require_once('includes.php');

/* Theme variables */
$themedir = get_bloginfo('template_directory');
$optionsfile = $themedir.'/admin/admin-options.php';
$admindir = get_bloginfo('stylesheet_directory').'/admin';
$themecss = get_bloginfo('stylesheet_directory');
$companyname = "since83";
$authorname = "erichamby";
$themeicon = $themedir.'/admin/images/'.$themename.'.png';
$absolutepath = ABSPATH."wp-content/themes/".$themename."/";
$itsayes = '<img src="'.$admindir.'/images/ico-yes.png">';
$itsano = '<img src="'.$admindir.'/images/ico-no.png">';

/* Function for modules */
function url_exists($url)
{
$handle = @fopen($url, "r");
if ($handle === false)
return false;
fclose($handle);
return true;
}

/* Gets plugin pages when activated */
if ( get_option('eh_google_stats') ) : require_once( $absolutepath.'module/module_google-analytics.php'); endif; 
if ( get_option('eh_rss_widget') ) : require_once( $absolutepath.'module/module_rss-widget.php'); endif; 
/*if ( get_option('eh_menu_disc') ) : require_once( $absolutepath.'module/menu_discription.php'); endif;*/
if ( get_option('eh_default_avatars') ) : require_once( $absolutepath.'module/module_default-avatar.php'); endif;  
if ( get_option('eh_site_favicon') ) : require_once( $absolutepath.'module/module_site-favicon.php'); endif;
if ( get_option('eh_auto_pages') ) : require_once( $absolutepath.'module/module_auto-pages.php'); endif;     

/* Starts the themes admin menu */
add_action('admin_menu', 'eh_admin_menu');
add_action( "admin_print_scripts-$mypage", 'eh_admin_head' );
function eh_admin_menu() {
 global $themeicon;
  $mypage = add_menu_page(get_name_eh(), get_name_eh(), 0, 'theme_info', 'theme_info', $themeicon);
  add_action( "admin_print_scripts-$mypage", 'eh_admin_head' );
  }
  
/* Gets the JS files used for the theme */
function eh_admin_head() {
  global $admindir;
	wp_enqueue_script('loadjs', $admindir . '/js/jquery.js'); //causing error. fix later
	wp_enqueue_script('loadjsone', $admindir . '/js/jquery.checkbox.min.js');
	wp_enqueue_script('loadjstwo', $admindir . '/js/jsslideone.js');
	wp_enqueue_style('thickbox');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', $admindir . '/js/upload.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('my-upload');
	wp_enqueue_script('media-upload');
	

/* Chooses the CSS sheet based on browser being used */	
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'IE 9') !== false)) {
	require_once('css/admin_head_css_ie.php'); } else { require_once('css/admin_head_css.php');}}

/* Starts the theme options tables */
function eh_table_start($name, $field) {
	echo '<p><table class="widefat">';
	echo '<form method="post" action="options.php">';
	settings_fields($field);}

/* Ends the theme options tables */
function eh_table_stop() {
	echo '
	<tr class="alternate">
			<td colspan="2">
			<span style="float:left"><input type="submit" class="button" value="Save Options" /></span>
			</form>
	</table></p>';}
	
// Replace left side admin footer text
add_filter('admin_footer_text', 'left_admin_footer_text_output');
function left_admin_footer_text_output($text) {
    $text = 'This site powered by <a href="http://since83.com">Since83.Com</a> products';
    return $text;}	
	
// Adds the <title> to header
function header_title() {
 echo '<title>';
     // Print the <title> tag based on what is being viewed.
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'since83' ), max( $paged, $page ) );
 echo '</title>';
} add_action( 'wp_head', 'header_title' );

// Adds links to admin bar
function add_since83_admin_bar_link() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'sumtips_link',
	'title' => __( 'Since83.Com'),
	'href' => __('http://since83.com/'),
	));

	// Add sub menu link "Marketplace"
	$wp_admin_bar->add_menu( array(
		'parent' => 'sumtips_link',
		'id'     => 'since_all',
		'title' => __( 'Marketplace'),
		'href' => __('http://since83.com/files/'),
	));

	// Add sub menu link "News"
	$wp_admin_bar->add_menu( array(
		'parent' => 'sumtips_link',
		'id'     => 'since_news',
		'title' => __( 'News'),
		'href' => __('http://since83.com/forum/10-website-news/'),
		'meta'   => array(
			'class' => 'st_menu_download',),
	));
	
	// Add sub menu link "Support"
	$wp_admin_bar->add_menu( array(
		'parent' => 'sumtips_link',
		'id'     => 'since_support',
		'title' => __( 'Support'),
		'href' => __('http://since83.com/forums/'),
		'meta'   => array(
			'class' => 'st_menu_download',),
	));
	
	// Add sub menu link "Members"
	$wp_admin_bar->add_menu( array(
		'parent' => 'sumtips_link',
		'id'     => 'since_community',
		'title' => __( 'Community'),
		'href' => __('http://since83.com/members/'),
		'meta'   => array(
			'class' => 'st_menu_download',),
	));
		
}
add_action('admin_bar_menu', 'add_since83_admin_bar_link',50);
?>
