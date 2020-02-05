<!DOCTYPE html>
<html lang="en">
<head>
	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Runaway - Personal Portfolio HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, agency, blog, cv, creative, html, one page, personal, portfolio, resume, responsive, bootstrap, photography, designer, developer">
	<meta name="author" content="root">

	 <!--	Css Links
    ==================================================-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.pagepiling.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css" id="color-change">

     <!-- Favicon 
    ==================================================-->
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">

      <!--	Title
    ==================================================-->
	<title>Runaway - Personal Portfolio HTML Template</title>

</head>
<body id="top" class="page-load">
	<!--	Preloader
	==================================================-->
	<div class="preloader">
		<div class="lds-css ng-scope">
			<div class="lds-spinner" style="100%;height:100%">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<!-- Color Settings Start
	==================================================-->
	<div class="color-panel">
		<div class="on-panel color_white bg_primary">
			<div class="text-center icon-spinner">
			  <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
			</div>
		</div>
		<div class="panel-box">
			<span class="panel-title">Theme Colors</span>
			<ul class="color-box">
				<li class="default" data-name="default" data-path="css/color.css" data-image="images/logo/29.png" data-target="images/logo/29.png"></li>
				<li class="color_2" data-name="color_2" data-path="css/color/color-1.css" data-image="images/logo/30.png" data-target="images/logo/30.png"></li>
				<li class="color_3" data-name="color_3" data-path="css/color/color-2.css" data-image="images/logo/31.png" data-target="images/logo/31.png"></li>
				<li class="color_4" data-name="color_4" data-path="css/color/color-3.css" data-image="images/logo/32.png" data-target="images/logo/32.png"></li>
				<li class="color_5" data-name="color_5" data-path="css/color/color-4.css" data-image="images/logo/33.png" data-target="images/logo/33.png"></li>
				<li class="color_6" data-name="color_6" data-path="css/color/color-5.css" data-image="images/logo/34.png" data-target="images/logo/34.png"></li>
				<li class="color_7" data-name="color_7" data-path="css/color/color-6.css" data-image="images/logo/35.png" data-target="images/logo/35.png"></li>
				<li class="color_8" data-name="color_8" data-path="css/color/color-7.css" data-image="images/logo/36.png" data-target="images/logo/36.png"></li>
				<li class="color_9" data-name="color_9" data-path="css/color/color-8.css" data-image="images/logo/37.png" data-target="images/logo/37.png"></li>
				<li class="color_10" data-name="color_10" data-path="css/color/color-9.css" data-image="images/logo/38.png" data-target="images/logo/38.png"></li>
				<li class="color_11" data-name="color_11" data-path="css/color/color-10.css" data-image="images/logo/39.png" data-target="images/logo/39.png"></li>
				<li class="color_12" data-name="color_12" data-path="css/color/color-11.css" data-image="images/logo/40.png" data-target="images/logo/40.png"></li>
				<li class="color_13" data-name="color_13" data-path="css/color/color-12.css" data-image="images/logo/41.png" data-target="images/logo/41.png"></li>
				<li class="color_14" data-name="color_14" data-path="css/color/color-13.css" data-image="images/logo/42.png" data-target="images/logo/42.png"></li>
			</ul>
		</div>
		<div class="template_style">
			<span class="layout_title">Template Style</span>
			<ul>
				<li><a class="btn_link" href="index-1.html" target="blank">White Version</a></li>
				<li><a class="btn_link" href="index-2.html" target="blank">Black Version</a></li>
			</ul>
		</div>
	</div>
	<!--  Color Settings End
	==============================================-->
	<!--	Start Sidebar
	==================================================-->
	<div id="mysidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="flaticon-close-button"></i></a>
	  <img class="nav-logo" src="images/logo/29.png" alt="image">
	  	<ul id="menu">
			<li data-menuanchor="page1" class="active"><a href="#page1">Home</a></li>
			<li data-menuanchor="page2"><a href="#page2">About</a></li>
			<li data-menuanchor="page3"><a href="#page3">Resume</a></li>
			<li data-menuanchor="page4"><a href="#page4">Services</a></li>
			<li data-menuanchor="page5"><a href="#page5">Portfolio</a></li>
			<li data-menuanchor="page6"><a href="#page6">Pricing</a></li>
			<li data-menuanchor="page7"><a href="#page7">Team</a></li>
			<li data-menuanchor="page8"><a href="#page8">Testimonial</a></li>
			<li data-menuanchor="page9"><a href="#page9">Contact</a></li>
		</ul>
	</div>
	<div class="sidebar bg_primary">
		<div class="logo text-center"><a href="#page1"><img class="nav-logo" src="images/logo/29.png" alt="logo"></a></div>
		<span style="cursor:pointer" onclick="openNav()">&#9776;</span>
		<div class="socal_media mt_60">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>			
	</div>
	<div class="contact_massage bg_primary">
		<a href="#page9"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	</div>
	<!--	End Sidebar
	=======================================================-->