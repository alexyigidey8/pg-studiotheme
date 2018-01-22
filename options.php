<?php
	session_start();
	//$podcast = include_once '../../config.php';
	//include_once($absoluteurl."core/functions.php"); //LOAD ONCE
	//include_once($absoluteurl."core/templates.php"); //LOAD ONCE

	$theme = include 'themeconfig.php';
	
	if(isset($_SESSION['user_session'])) {
		echo '<script type="text/javascript">var logged_in=true;</script>';
	} else {
		echo '<script type="text/javascript">var logged_in=false;</script>';
	}

	if ($theme['useBG'] === 'on') {
		echo '<script type="text/javascript">var studioUseBG=true;</script>';
	}
	if ($theme['useHeader'] === 'on') {
		echo '<script type="text/javascript">var studioUseHeader=true;</script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Podcast Generator - Studio Theme Options</title>
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link href="style/custom.css" rel="stylesheet">
		<?php
		if ($theme['style'] == 'cerulean') {
			echo '<link href="style/cerulean-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'cosmo') {
			echo '<link href="style/cosmo-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'cyborg') {
			echo '<link href="style/cyborg-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'darkly') {
			echo '<link href="style/darkly-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'flatly') {
			 echo '<link href="style/flatly-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'journal') {
			 echo '<link href="style/journal-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'lumen') {
			 echo '<link href="style/lumen-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'paper') {
			 echo '<link href="style/paper-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'readable') {
			 echo '<link href="style/readable-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'sandstone') {
			 echo '<link href="style/sandstone-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'simplex') {
			 echo '<link href="style/simplex-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'slate') {
			 echo '<link href="style/slate-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'spacelab') {
			 echo '<link href="style/spacelab-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'superhero') {
			 echo '<link href="style/superhero-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'united') {
			 echo '<link href="style/united-bootstrap.min.css" rel="stylesheet">';
		}
		else if ($theme['style'] == 'yeti') {
			 echo '<link href="style/yeti-bootstrap.min.css" rel="stylesheet">';
		}
		else {
			 echo '<link href="style/bootstrap.min.css" rel="stylesheet">';
		}
		?>		
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>

	<div id="content">
		<div class="navbar navbar-inverse">
			<div class="navbar-header">
				<span class="navbar-brand"></span>
				<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				<li><a href="../../">Back to site</a></li></ul>
				<p class="navbar-text pull-right" id="adminmenu"><a href="../../index.php?p=admin" class="navbar-link">Admin</a> | <a href="options.php" class="navbar-link">Theme Options</a></p>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<img class="headerArt" src="../../images/itunes_image.jpg" width="50%"class="img-reponsive">
				</div>
				<div class="col-md-8 col-md-offset-2 text-center">
					<h1>Podcast Generator - Studio Theme Options</h1>
				</div>
			</div>

<?php
	if(isset($_SESSION['user_session'])) {
?>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form class="form-horizontal" action="upload.php" method="POST" name="details" id="details" enctype="multipart/form-data">
					<fieldset>
					<div class="form-group">
						<h3>Colour and Style</h3>
						<label class="col-md-6 control-label" for="themeStyle">Choose CSS Style </label>
						<div class="col-md-6">
							<select id="themeStyle" name="themeStyle" class="form-control">
								<option value="default" <?php if ($theme['style'] == 'default') echo "selected"; ?>>Default</option>
								<option value="cerulean" <?php if ($theme['style'] == 'cerulean') echo "selected"; ?>>Cerulean</option>
								<option value="cosmo" <?php if ($theme['style'] == 'cosmo') echo "selected"; ?>>Cosmo</option>
								<option value="cyborg" <?php if ($theme['style'] == 'cyborg') echo "selected"; ?>>Cyborg</option>
								<option value="darkly" <?php if ($theme['style'] == 'darkly') echo "selected"; ?>>Darkly</option>
								<option value="flatly" <?php if ($theme['style'] == 'flatly') echo "selected"; ?>>Flatly</option>
								<option value="journal" <?php if ($theme['style'] == 'journal') echo "selected"; ?>>Journal</option>
								<option value="lumen" <?php if ($theme['style'] == 'lumen') echo "selected"; ?>>Lumen</option>
								<option value="paper" <?php if ($theme['style'] == 'paper') echo "selected"; ?>>Paper</option>
								<option value="readable" <?php if ($theme['style'] == 'readable') echo "selected"; ?>>Readable</option>
								<option value="sandstone" <?php if ($theme['style'] == 'sandstone') echo "selected"; ?>>Sandstone</option>
								<option value="simplex" <?php if ($theme['style'] == 'simplex') echo "selected"; ?>>Simplex</option>
								<option value="slate" <?php if ($theme['style'] == 'slate') echo "selected"; ?>>Slate</option>
								<option value="spacelab" <?php if ($theme['style'] == 'spacelab') echo "selected"; ?>>Spacelab</option>
								<option value="superhero" <?php if ($theme['style'] == 'superhero') echo "selected"; ?>>Superhero</option>
								<option value="united" <?php if ($theme['style'] == 'united') echo "selected"; ?>>United</option>
								<option value="yeti" <?php if ($theme['style'] == 'yeti') echo "selected"; ?>>Yeti</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-6 control-label" for="useBG">Use Background Image?</label>
						<div class="checkbox col-md-6">
							<input type="checkbox" name="useBG" id="useBG" <?php if ($theme['useBG'] == 'on') echo "checked='checked'"; ?>>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-6 control-label" for="useHeader">Use Header Image?</label>
						<div class="checkbox col-md-6">
							<input type="checkbox" name="useHeader" id="useHeader" <?php if ($theme['useHeader'] == 'on') echo "checked='checked'"; ?>>
						</div>
					</div>
					<div>
						<div class="form-group" id="bgOption">
						<h3>Upload Background Image</h3>
							<span class="help-block">JPGs only, image should be around 1600+ wide and 1200+ high.</span>
							<div class="col-md-6 col-md-offset-3 text-center" id="bgPreview" width="100px">
								<h4>Current uploaded background image</h4>
								<img src="img/studio_background.jpg" class="img-thumbnail">
							</div>
							<input class="col-md-12" accept="image/*" type="file" name="bgUpload" id="bgUpload" />
						</div>
					</div>
					<div>
						<div class="form-group" id="headerOption">
						<h3>Upload Header Image</h3>
							<span class="help-block">JPGs only, image should be around 1600+ wide and 300+ high.</span>
							<div class="col-md-6 col-md-offset-3 text-center" id="headerPreview" width="100px">
								<h4>Current uploaded background image</h4>
								<img src="img/studio_header.jpg" class="img-thumbnail">
							</div>
							<input class="col-md-12" accept="image/*" type="file" name="headerpload" id="headerUpload" />
						</div>
					</div>
					<div class="col-md-12">
						<button id="submit" name="submit" class="btn btn-primary btn-block">Update/Save</button>
					</div>
					</fieldset>
				</form>
				</div>
			</div>
<?php
}
else { ?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<h2>OOPS!</h2>
				<h3>You're not currently logged in.</h3>
			</div>
		</div>
<?php
}
 ?>
		</div>

		<hr>

		<footer class="text-center">
			<p><small>Powered by <a href="http://www.podcastgenerator.net" title="Podcast Generator, an open source podcast publishing solution">Podcast Generator</a>, an open source podcast publishing solution | Theme by sleepysunday, CSS styles by <a href="http://bootswatch.com/" target="_blank">Bootswatch</a><small></small></small></p>
		</footer>

	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>


	<script>
	$("#bgUpload").on('change', function () {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "jpg" || extn == "jpeg") {
			if (typeof (FileReader) != "undefined") {

				var image_holder = $("#bgPreview");
				image_holder.empty();

				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "img-thumbnail"
					}).appendTo(image_holder);

				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} else {
			alert("Sorry, JPGs only at the moment.");
		}
	});
	$("#headerUpload").on('change', function () {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "jpg" || extn == "jpeg") {
			if (typeof (FileReader) != "undefined") {

				var image_holder = $("#headerPreview");
				image_holder.empty();

				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "img-thumbnail"
					}).appendTo(image_holder);

				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} else {
			alert("Sorry, JPGs only at the moment.");
		}
	});
	
	$(document).ready(function() {
		$("#useHeader").change(function () {
			if ($(this).is(":checked"))
			  $("#headerOption").show();
			else
			  $("#headerOption").hide();
		});
	});
	$(document).ready(function () {
		$('#useBG').change(function () {
			if (this.checked) {
				$('#bgOption').show();
			}
			else {
				$('#bgOption').hide();
			}
		});
	});
 
	</script>
  </body>
</html>

<?php

?>

