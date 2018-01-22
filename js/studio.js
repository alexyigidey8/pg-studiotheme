//add theme options button
function themeButton() {
	var adminMenu = document.getElementById("adminmenu");
	var themeMenu = document.createElement("a");
	themeMenu.innerHTML = " (Theme Options)";
	themeMenu.setAttribute('href', "themes/studio/options.php");
	themeMenu.classList.add("navbar-link");
	adminMenu.appendChild(themeMenu);
}

if (logged_in) {
	themeButton();
	console.log("logged in");
}
else {
	console.log("not logged in");	
}

if (studioUseHeader) {
	console.log("using header image");
	document.getElementById("header").style.backgroundImage = "url('themes/studio/img/studio_header.jpg')";
}
else {
	console.log("not using header image");	
}

if (studioUseBG) {
	console.log("using bg image");
	document.body.style.backgroundImage = "url('themes/studio/img/studio_background.jpg')";
}
else {
	console.log("not using bg image");	
}