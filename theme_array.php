<?php 
// These setting will work on any theme made by Eric Hamby. 
// If you change from one theme to another your options will continue to the next theme.
function eh_admin_init() {
//Style Options	
	register_setting('style', 'eh_theme_style'); //moviebits
	register_setting('style', 'eh_theme_logo'); //phoenix|moviebits
//SEO Options	
	register_setting('seo', 'eh_meta_description'); //phoenix|moviebits
	register_setting('seo', 'eh_meta_keywords'); //phoenix|moviebits
	register_setting('seo', 'eh_meta_copyright'); //phoenix|moviebits
//Social Options
	register_setting('social', 'eh_social_facebook'); //phoenix|moviebits
	register_setting('social', 'eh_social_twitter'); //phoenix|moviebits	
//Text Options	
	register_setting('text', 'eh_footer_copyright'); //phoenix|moviebits
	register_setting('text', 'eh_errorpage_text'); //phoenix|moviebits
//Modules	
	register_setting('modules', 'eh_auto_pages'); //
	register_setting('modules', 'eh_default_avatars'); //phoenix|moviebits
	register_setting('modules', 'eh_rss_widget'); //phoenix|moviebits
	register_setting('modules', 'eh_ie6_style'); //
	register_setting('modules', 'eh_ie7_style'); //	
	register_setting('modules', 'eh_ie8_style'); //
	register_setting('modules', 'eh_ie9_style'); //
	register_setting('modules', 'eh_google_stats'); //phoenix|moviebits
	register_setting('modules', 'eh_menu_disc'); //moviebits
	register_setting('modules', 'eh_site_favicon'); //phoenix|moviebits
//Module Options	
	register_setting('module_settings', 'eh_google_code'); //phoenix|moviebits
	register_setting('module_settings', 'eh_avatar_code'); //phoenix|moviebits
	register_setting('module_settings', 'eh_favicon_url'); //phoenix|moviebits
	register_setting('module_settings', 'eh_favicon_site'); //phoenix|moviebits
	register_setting('module_settings', 'eh_favicon_admin'); //phoenix|moviebits
	register_setting('module_settings', 'eh_favicon_rss'); //phoenix|moviebits
	register_setting('module_settings', 'eh_favicon_atom'); //phoenix|moviebits
//Other Options
    register_setting('theme_settings', 'eh_video_width'); //moviebits
	register_setting('theme_settings', 'eh_video_height'); //moviebits		
} 
add_action('admin_init', eh_admin_init);
?>
