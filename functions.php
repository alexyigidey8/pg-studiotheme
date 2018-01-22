<?php
$theme = include 'themeconfig.php'; 
$podcast = include './config.php';

if(isset($_SESSION['user_session'])) {
    echo '<script type="text/javascript">var logged_in=true;</script>';
} else {
    echo '<script type="text/javascript">var logged_in=false;</script>';
}

if ($theme['useBG'] === 'on') {
	echo '<script type="text/javascript">var studioUseBG=true;</script>';
}
else {
	echo '<script type="text/javascript">var studioUseBG=false;</script>';
}
if ($theme['useHeader'] === 'on') {
	echo '<script type="text/javascript">var studioUseHeader=true;</script>';
}
else {
	echo '<script type="text/javascript">var studioUseHeader=false;</script>';
}


if ($theme['style'] === 'cerulean') {
	$theme_file_contents .= '<link href="themes/studio/style/cerulean-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'cosmo') {
	$theme_file_contents .= '<link href="themes/studio/style/cosmo-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'cyborg') {
	$theme_file_contents .= '<link href="themes/studio/style/cyborg-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'darkly') {
	$theme_file_contents .= '<link href="themes/studio/style/darkly-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'flatly') {
	 $theme_file_contents .= '<link href="themes/studio/style/flatly-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'journal') {
	 $theme_file_contents .= '<link href="themes/studio/style/journal-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'lumen') {
	 $theme_file_contents .= '<link href="themes/studio/style/lumen-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'paper') {
	 $theme_file_contents .= '<link href="themes/studio/style/paper-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'readable') {
	 $theme_file_contents .= '<link href="themes/studio/style/readable-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'sandstone') {
	 $theme_file_contents .= '<link href="themes/studio/style/sandstone-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'simplex') {
	 $theme_file_contents .= '<link href="themes/studio/style/simplex-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'slate') {
	 $theme_file_contents .= '<link href="themes/studio/style/slate-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'spacelab') {
	 $theme_file_contents .= '<link href="themes/studio/style/spacelab-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'superhero') {
	 $theme_file_contents .= '<link href="themes/studio/style/superhero-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'united') {
	 $theme_file_contents .= '<link href="themes/studio/style/united-bootstrap.min.css" rel="stylesheet">';
}
else if ($theme['style'] === 'yeti') {
	 $theme_file_contents .= '<link href="themes/studio/style/yeti-bootstrap.min.css" rel="stylesheet">';
}
else {
	 $theme_file_contents .= '<link href="themes/studio/style/bootstrap.min.css" rel="stylesheet">';
}
?>
