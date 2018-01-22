<?php
	if (isset($_POST["submit"])) {
		if (isset($_POST['themeStyle'])) {
			$theme['style'] = $_POST["themeStyle"];
		}
		if (isset($_POST['useBG'])) {
			$theme['useBG'] = $_POST["useBG"];
		}
		else {
			$theme['useBG'] = 'off';
		}
		if (isset($_POST['useHeader'])) {
			$theme['useHeader'] = $_POST["useHeader"];
		}
		else {
			$theme['useHeader'] = 'off';
		}
		if (isset($_FILES['bgUpload'])) {
			$theme['bgUpload'] = 'true';
			$target_dir = "img/";
			$target_file = $target_dir . "studio_background.jpg";
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["bgUpload"]["tmp_name"]);
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			print_r($_FILES);
			if ($uploadOk == 0) {
				//echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["bgUpload"]["tmp_name"], $target_file)) {
					//echo "The file ". basename( $_FILES["bgUpload"]["name"]). " has been uploaded.";
				} else {
					//echo "Sorry, there was an error uploading your file.";
				}
			}
		}
		else {
			$theme['bgUpload'] = 'false';
		}
		if (isset($_FILES['headerUpload'])) {
			$theme['headerUpload'] = 'true';
			$target_dir = "img/";
			$target_file = $target_dir . "studio_header.jpg";
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["headerUpload"]["tmp_name"]);
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			print_r($_FILES);
			if ($uploadOk == 0) {
				//echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["headerUpload"]["tmp_name"], $target_file)) {
					//echo "The file ". basename( $_FILES["headerUpload"]["name"]). " has been uploaded.";
				} else {
					//echo "Sorry, there was an error uploading your file.";
				}
			}
		}
		else {
			$theme['headerUpload'] = 'false';
		}
		
		file_put_contents('themeconfig.php', '<?php return ' . var_export($theme, true) . ';');
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		
	}
?>
