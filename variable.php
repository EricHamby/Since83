<?php 
/* Gets theme information which is used throughout the files */
function get_name_eh(){
  global $themename;
	$theme_data = implode('', file(ABSPATH."/wp-content/themes/".$themename."/style.css"));
	if (preg_match("|Theme Name:(.*)|i", $theme_data, $name)) {
		$name = $name[1];
	}
	return $name;
} 
function get_version_eh(){
	global $themename;
	$theme_data = implode('', file(ABSPATH."/wp-content/themes/".$themename."/style.css"));
	if (preg_match("|Version:(.*)|i", $theme_data, $version)) {
		$version = $version[1];
	}
	return $version;
} 
function get_build_eh(){
	global $themename;
	$theme_data = implode('', file(ABSPATH."/wp-content/themes/".$themename."/style.css"));
	if (preg_match("|Build:(.*)|i", $theme_data, $build)) {
		$build = $build[1];
	}
	return $build;
} 
function get_type_eh(){
	global $themename;
	$theme_data = implode('', file(ABSPATH."/wp-content/themes/".$themename."/style.css"));
	if (preg_match("|Type:(.*)|i", $theme_data, $type)) {
		$type = $type[1];
	}
	return $type;
} 
function get_framework_eh(){
	global $themename;
	$theme_data = implode('', file(ABSPATH."/wp-content/themes/".$themename."/style.css"));
	if (preg_match("|Framework:(.*)|i", $theme_data, $framework)) {
		$framework = $framework[1];
	}
	return $framework;
} 
function get_release_eh(){
	global $themename;
	$theme_data = implode('', file(ABSPATH."/wp-content/themes/".$themename."/style.css"));
	if (preg_match("|Release Date:(.*)|i", $theme_data, $release)) {
		$release = $release[1];
	}
	return $release;
} 
?>
