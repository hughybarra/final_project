<?php
	// changing the header to the browser to set this php doc to a css doc
    header("Content-type: text/css; charset: UTF-8");
?>

/*
███╗   ██╗ █████╗ ██╗   ██╗
████╗  ██║██╔══██╗██║   ██║
██╔██╗ ██║███████║██║   ██║
██║╚██╗██║██╔══██║╚██╗ ██╔╝
██║ ╚████║██║  ██║ ╚████╔╝
╚═╝  ╚═══╝╚═╝  ╚═╝  ╚═══╝
*/

nav {

	position: fixed;
	top: 10px;
	height: 50px;
	width: 100%;
	z-index: 1;
}
nav ul {
	float: right;
	height: 50px;
}

nav ul li {
	background-color: #ffffff;
	float: left;
	height: 50px;
	margin-right: 10px;
	line-height: 50px;
	text-align: center;
	/*background-color: green;*/
	width: 100px;
	cursor: pointer;

}

/*
██████╗  ██████╗     ██╗███╗   ███╗ █████╗  ██████╗ ███████╗
██╔══██╗██╔════╝     ██║████╗ ████║██╔══██╗██╔════╝ ██a╔════╝
██████╔╝██║  ███╗    ██║██╔████╔██║███████║██║  ███╗█████╗
██╔══██╗██║   ██║    ██║██║╚██╔╝██║██╔══██║██║   ██║██╔══╝
██████╔╝╚██████╔╝    ██║██║ ╚═╝ ██║██║  ██║╚██████╔╝███████╗
╚═════╝  ╚═════╝     ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚══════╝
*/

.home {
	with: 100%;
	height: 100vh;
	background: url("<?php echo $restaurants->get_media('background.jpg')->path; ?>") no-repeat;
	/*background: url("http://localhost:8886/project/public/assets/media/images/pizzajohns_background.jpg") no-repeat;*/
}

/*
██╗      ██████╗  ██████╗  ██████╗
██║     ██╔═══██╗██╔════╝ ██╔═══██╗
██║     ██║   ██║██║  ███╗██║   ██║
██║     ██║   ██║██║   ██║██║   ██║
███████╗╚██████╔╝╚██████╔╝╚██████╔╝
╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝
*/

.logo {
	width: 500px;
	height: 400px;
	float: left;
	margin-left: 30%;
	margin-top: 200px;
	background-color: #ffffff;
	opacity:0.6;
}
.logo p {
	line-height: 400px;
	text-align: center;
}

/*
 █████╗ ██████╗  ██████╗ ██╗   ██╗████████╗
██╔══██╗██╔══██╗██╔═══██╗██║   ██║╚══██╔══╝
███████║██████╔╝██║   ██║██║   ██║   ██║
██╔══██║██╔══██╗██║   ██║██║   ██║   ██║
██║  ██║██████╔╝╚██████╔╝╚██████╔╝   ██║
╚═╝  ╚═╝╚═════╝  ╚═════╝  ╚═════╝    ╚═╝
*/






























