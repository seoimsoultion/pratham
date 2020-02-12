<?php
include 'includes/header.php';
?>



<!--    Start Main Banner 
	==================================================-->
<section id="water-effect" class="banner_image background1 ">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-md-12 col-lg-12 home-content text-left">


				<div class="mainbanner_content">
					<span class="pb_5 banner_title color_white ">Pratham Construction</span>
					<h1 class="cd-headline clip is-full-width text-uppercase">
						<span class="color_white"></span>
						<span class="cd-words-wrapper color_default">
							<b class="is-visible color_white">Presents to you <br />Indraprastha</b>
							<b class="color_white">Pratham Brings <br /> Royalty to you!!</b>

						</span>
					</h1>
					<p class="color_white mb_30">Pratham's Latest Project for the modern lifestyle and urban families.</p>
					<a class="btn btn-default" href="#">Download Brochure</a>
				</div>


			</div>
		</div>
	</div>
</section>
<!--	End Main Banner 
	==================================================-->
<?php /* 
//////////////////////another slider/////////////////////
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<script>
	! function(e) {
		"undefined" == typeof module ? this.charming = e : module.exports = e
	}(function(e, n) {
		"use strict";
		n = n || {};
		var t = n.tagName || "span",
			o = null != n.classPrefix ? n.classPrefix : "char",
			r = 1,
			a = function(e) {
				for (var n = e.parentNode, a = e.nodeValue, c = a.length, l = -1; ++l < c;) {
					var d = document.createElement(t);
					o && (d.className = o + r, r++), d.appendChild(document.createTextNode(a[l])), n.insertBefore(d, e)
				}
				n.removeChild(e)
			};
		return function c(e) {
			for (var n = [].slice.call(e.childNodes), t = n.length, o = -1; ++o < t;) c(n[o]);
			e.nodeType === Node.TEXT_NODE && a(e)
		}(e), e
	});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<style type="text/css">
	.swiper-container {
		width: 100%;
		height: 100%;
	}

	.slide {
		display: flex;
		justify-content: center;
		align-items: center;
		position: relative;
		text-align: center;
		font-size: 18px;
		background: #fff;
		overflow: hidden;
	}

	.slide-image {
		position: absolute;
		top: 0;
		left: 0px;
		width: calc(100% + 100px);
		height: calc(100% + 100px);
		background-position: 100%;
		background-size: cover;
	}

	.slide-title {
		font-size: 4rem;
		line-height: 1;
		max-width: 50%;
		white-space: normal;
		word-break: break-word;
		color: #FFF;
		z-index: 100;
		font-family: 'Oswald', sans-serif;
		text-transform: uppercase;
		font-weight: normal;
	}

	@media (min-width: 45em) {
		.slide-title {
			font-size: 7vw;
			max-width: none;
		}
	}

	.slide-title span {
		white-space: pre;
		display: inline-block;
		opacity: 0;
	}

	.slideshow {
		position: relative;
	}

	.slideshow-pagination {
		position: absolute;
		bottom: 5rem;
		left: 0;
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		transition: .3s opacity;
		z-index: 10;
	}

	.slideshow-pagination-item {
		display: flex;
		align-items: center;
	}

	.slideshow-pagination-item .pagination-number {
		opacity: 0.5;
	}

	.slideshow-pagination-item:hover,
	.slideshow-pagination-item:focus {
		cursor: pointer;
	}

	.slideshow-pagination-item:last-of-type .pagination-separator {
		width: 0;
	}

	.slideshow-pagination-item.active .pagination-number {
		opacity: 1;
	}

	.slideshow-pagination-item.active .pagination-separator {
		width: 10vw;
	}

	.slideshow-navigation-button {
		position: absolute;
		top: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
		width: 5rem;
		z-index: 1000;
		transition: all .3s ease;
		color: #FFF;
	}

	.slideshow-navigation-button:hover,
	.slideshow-navigation-button:focus {
		cursor: pointer;
		background: rgba(0, 0, 0, 0.5);
	}

	.slideshow-navigation-button.prev {
		left: 0;
	}

	.slideshow-navigation-button.next {
		right: 0;
	}

	.pagination-number {
		font-size: 1.8rem;
		color: #FFF;
		font-family: 'Oswald', sans-serif;
		padding: 0 0.5rem;
	}

	.pagination-separator {
		display: none;
		position: relative;
		width: 40px;
		height: 2px;
		background: rgba(255, 255, 255, 0.25);
		transition: all .3s ease;
	}

	@media (min-width: 45em) {
		.pagination-separator {
			display: block;
		}
	}

	.pagination-separator-loader {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #FFFFFF;
		transform-origin: 0 0;
	}
</style>

<!--	Start Main Banner 
	==================================================-->
<section  id="water-effect" class="banner_image background1 ?>">






	<div class="swiper-container slideshow">

		<div class="swiper-wrapper">

			<div class="swiper-slide  ">
				<div class="slide-image" style="background-image: url(images/slider/banner1.jpg)"></div>
				<!-- <span class="slide-title">Exotic places</span>-->
			</div>

			<div class="swiper-slide slide">
				<div class="slide-image" style="background-image: url(images/slider/banner2.jpg"></div>
				<!--<span class="slide-title">Meet ocean</span>-->
			</div>

			<div class="swiper-slide slide">
				<div class="slide-image" style="background-image: url(images/slider/banner3.jpg)"></div>
				<!-- <span class="slide-title">Around the world</span>-->
			</div>



		</div>

		<div class="slideshow-pagination"></div>

		<div class="slideshow-navigation">
			<div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
			<div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
		</div>

	</div>





















</section>
<!--	End Main Banner 
	==================================================-->
*/
	?>
<!--	Start About
	===================================================-->







<section id="about" class="py_80 full_row bg_primary">
	<div class="container">

		<div class="row">


			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">about</span>Pratham Construction</h2>
					<span class="sub_title color_white txt-italic">“ Providing the communities we serve with superior products and services by developing innovative
						solutions to improve the quality of life and satisfy customer needs.”
					</span>
				</div>
			</div>
		</div>
		<div class="about_one">
			<div class="row">
				<div class="col-md-7 col-lg-7">
					<div class="myself color_secondery wow animated fadeInLeft">
						<p class="color_white text-justify">Founded by Late Kiran Kumar K Gadia, the Pratham Group had a humble beginning specialising in the Jari textile during the early 1930s. Over the years, the Pratham Group diversified in other ventures such as copper wire, polyester yarn and the real estate. Today, Pratham Group has firmly established itself as one of the leading names and is among the most successful organisation in India continually imprinting its indelible marking in global market.
						</p>
						<br />
						<p class="color_white text-justify">
							Realising the need of quality yet affordable housing in the ever growing Bangalore city; the Silicon Valley of India, the Pratham Group ventured in the real estate sector. In our sincere efforts, Pratham Group endeavours to create quality residential spaces to better people’s living experiences. With a clear vision to transform the way people perceive quality housing, Pratham Constructions blends professional real estate expertise with innovative technology while encompassing robust engineering, ground-breaking research and uncompromising business ethics in all spheres of realty development making home living more comfortable, productive and cheerful.

						</p>

					</div>
					<div class="personal_info color_lightgray">

					</div>
				</div>
				<div class="col-md-5 col-lg-5">
					<div class=" personal_video wow animated fadeInRight">
						<img src="images/pratham/about-us.jpg" alt="image">
						<?php /*<div class="iconround"><a class="video-popup" href="https://www.youtube.com/watch?v=U16kL-npP9s" title="video popup">
								<i class="fa fa-play" aria-hidden="true"></i></a></div> */ ?>
						<div class="loader">
							<div class="loader-inner ball-scale-multiple">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 col-lg-12"><br />
					<p class="color_white text-justify">We have our real estate operations in major Indian cities. Our flagship realty project in Bangalore are Pratham Casa Serene and Pratham Indraprastha. At pratham, we believe a home should always be the best space of your comfort! Therefore, while designing the layout of every project, ample attention is paid to enhance the lifestyle of our customers. Each apartment accommodates abundant space, greenery, privacy, natural light, ventilation, aesthetics and also comes with the latest security features make sure that you get the best of indoor and outdoor experience.</p>

				</div>
			</div>
		</div>
	</div>
</section>
<!--	End About
	===================================================-->



<section id="Walkthrough" class="py_80  full_row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase"><span class="line_double mx-auto color_default">Why</span> Pratham Construction</h2>

				</div>
			</div>
			<div class="col-md-12 col-lg-12">



				<!-- main slider -->

				<div class="thumb-sl  ">
					<div class="row align-items-center">

						<div class="col-md-4 col-lg-4 why-box">
							<img src="images/why-icon.png">
							<h4 class="text-center"> Customer Focus</h4>
							<p>Pratham Construction delivers every project with highest level of integrity. Every decision taken is client centric. We aim at providing the customer high levels of satisfaction in terms of interaction, service and quality.</p>
						</div>
						<div class="col-md-4 col-lg-4 why-box">
							<img src="images/why-icon.png">
							<h4 class="text-center"> Innovation</h4>
							<p>Pratham Construction is synonymous to innovation. We always encourage multiple solutions and perspectives in the realty sector. We incorporate new ideas in all realms of our company’s venture and the new trends in the realty industries. </p>
						</div>
						<div class="col-md-4 col-lg-4 why-box">
							<img src="images/why-icon.png">
							<h4 class="text-center"> Transparency</h4>
							<p>Transparency is rooted in all of our operations. We strongly believe that in order for a lasting relation with customers, transparency is the key. That is why; we prioritise transparency in all our dealings as we focus on imaginative engineering and reliability. </p>
						</div>


					</div>
					<!--/main slider carousel-->
				</div>

			</div>
		</div>
	</div>
</section>




<section id="portfolio" class="py_80 bg_secondery full_row">
	<div class="container">



		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase"><span class="line_double mx-auto color_default">Our</span> Projects</h2>
					<span class="sub_title">Pratham Construction is a pioneer in delivering world-class residential spaces. We have pioneered many landmark developments across cities in Gujarat and Karnataka. In Bangalore, Pratham Construction works to redefine the concept of urban lifestyle of highest quality. </span>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="row">





					<div class="col-md-6">

						<div class="blog_item">
							<div class="blog_img "><a href="indraprastha.php"><img src="images/pratham/home/indraprastha.jpg" alt="image"></a></div>
						</div>

						<span class=" test">
							<span class="test-title" wfd-id="167"><b>Indraprastha</b></span>
							<span class="test-info" wfd-id="166">Near Yeshwantpur Metro Station</span>
						</span>
						<p class="testp">Located at Yashwantpur, Indraprastha is a premium residential project nestled in the manicured greens and replete with all modern amenities offering a blissful life. The amenities highlights include gymnasium, swimming pool and other sports facilities such as Squash Court, Badminton Court, Multipurpose Court, etc. </p>

						<a class="btn btn-project" href="indraprastha.php">View Project</a>


					</div>

					<div class="col-md-6">

						<div class="blog_item">
							<div class="blog_img "><a href="#"><img src="images/pratham/home/casaserene.jpg" alt="image"></a></div>
						</div>


						<span class=" test">
							<span class="test-title" wfd-id="167"><b>Casa Serene</b></span>
							<span class="test-info" wfd-id="166"></span>
						</span>
						<p class="testp">Indulge in absolute serenity while still having the best access to urban amenities at Casa Serene. Located at Dasarahalli on Tumkur Road, Casa Serene has 2 and 3BHK apartments with modern amenities. It offers smooth connectivity to the prime locations in the city, besides housing many reputed educational institutions, hospitals etc.</p>

						<a class="btn btn-project" href="#">View Project</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php /*
				<div class="col-md-12">
					<div class="tab">
						<button class="tablinks col-md-6 pull-left text-ceneter tt1" onmouseover="openCity(event, 'London')">Indraprastha</button>
						<button class="tablinks col-md-6 pull-right text-ceneter tt2" onmouseover="openCity(event, 'Casa-Serene')">Casa Serene</button>

					</div>
				</div>
				<div id="London" class="col-md-12 tabcontent">

					<div class="col-md-6 pull-left"><img src="images/pratham/home/indraprastha.jpg" class="img-fluid"></div>
					<div class="col-md-6 pull-right">
						<h3>Indraprastha</h3>
						<p>Live like royalty near Yeshwantpur Metro Station, Bengaluru</p>
						<h5>Happy Families</h5>
						<p>23 different apartment designs spread across 4 blocks</p>
						<h5>Amenities</h5>
						<p>Latest amenities, malls & metro all at fingertips.</p>
						<h5>Area</h5>
						<p>Lush green vibrant spaces</p>
						<h5 class="color_default">Visit Indraprastha's web page to know more.</h5>
					</div>


				</div>
				<div id="Casa-Serene" class="col-md-12 tabcontent">
					<div class="col-md-6 pull-left">
						<h3>Casa Serene</h3>
						<p>Modelled on European design which exudes timeless luxury and comfort for todayâ€™s fast-paced life. </p>
						<h5>Happy Families</h5>
						<p>All 4 side open apartments. </p>
						<h5>Amenities</h5>
						<p>All latest amenities that your modern lifestyle requires. </p>
						<h5>Area</h5>
						<p>78% open area for you to enjoy your own private paradise. </p>
						<h5 class="color_default">Visit Casa Serene's web page to know more.</h5>
					</div>
					<div class="col-md-6 pull-right"><img src="images/pratham/home/casaserene.jpg" class="img-fluid"></div>
				</div>

				<div class="clearfix"></div>
				*/ ?>

			</div>
		</div>
	</div>
</section>


<section id="services" class="py_80 full_row bg_white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase"><span class="line_double mx-auto color_default">The </span>Team</h2>
					<span class="sub_title">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="team_member owl-carousel">
					<div class="member">
						<img src="images/team/01.jpg" alt="image">
						<div class="data">
							<h4 class="bg_default color_primary font-weight-bold m-0">MANISH KIRAN GADIA </h4>
							<strong class="bg_primary color_white">Managing Director </strong>
						</div>
						<div class="hover_overlay">
							<div class="border">
								<h4 class="color_default font-weight-bold text-center text-uppercase">MANISH KIRAN GADIA</h4>
								<strong class="color_white text-center d-block mb_15">Managing Director</strong>
								<p class="color_white">Manish joined the group in 2003. Conceptualization is the key areas directly under his purview. Known for his dynamism and belief in ‘positive change’, Manish has keenly addressed the growing demands by conceptualizing unique projects. Manish is now charting out new courses for the group well as to set new standards in the emerging business scenario. After the demise of Shri Kiranji Gadia, the group’s visionary, in 2014, Manish boldly leads the K M Gadia group to reach great heights.
								</p>
								<div class="socal_media">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="member">
						<img src="images/team/02.jpg" alt="image">
						<div class="data">
							<h4 class="bg_default color_primary font-weight-bold m-0">AMIT KIRAN GADIA </h4>
							<strong class="bg_primary color_white">Director </strong>
						</div>
						<div class="hover_overlay">
							<div class="border">
								<h4 class="color_default font-weight-bold text-center text-uppercase">AMIT KIRAN GADIA </h4>
								<strong class="color_white text-center d-block mb_15">Director </strong>
								<p class="color_white">In his early 30’s, Amit is a self starter, a voracious reader with a great penchant for learning and adapting to new things. His ability to analyze and solve problems coupled with his innate ability to engender trust and rapport and work with all levels of the organization makes him an asset. Amit currently handles the finance and legal functions of the organization.</p>
								<div class="socal_media">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="member">
						<img src="images/team/03.jpg" alt="image">
						<div class="data">
							<h4 class="bg_default color_primary font-weight-bold m-0">VINAY KIRAN GADIA</h4>
							<strong class="bg_primary color_white">Director</strong>
						</div>
						<div class="hover_overlay">
							<div class="border">
								<h4 class="color_default font-weight-bold text-center text-uppercase">VINAY KIRAN GADIA</h4>
								<strong class="color_white text-center d-block mb_15">Director</strong>
								<p class="color_white">Vinay joined the group in early 2011 after spending his early 20s
									abroad at USA. Owing to his somewhat gregarious nature, he enjoys
									taking up the Marketing division of the group. Further, given his
									technical background in engineering management he collaborates in
									the project management aspect of the construction schedules.
								</p>
								<div class="socal_media">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="member">
						<img src="images/team/04.jpg" alt="image">
						<div class="data">
							<h4 class="bg_default color_primary font-weight-bold m-0">Donna Patricia</h4>
							<strong class="bg_primary color_white">Graphic Designer</strong>
						</div>
						<div class="hover_overlay">
							<div class="border">
								<h4 class="color_default font-weight-bold text-center text-uppercase">Donna Patricia</h4>
								<strong class="color_white text-center d-block mb_15">Graphic Designer</strong>
								<p class="color_white">Nisl vitae consectetuer dictumst mauris vitae, purus torquent praesent pharetra consectetuer nullam fames pede sapien litora condimentum pretium volutpat magnis facilisi hendrerit.</p>
								<div class="socal_media">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--	End Services
	===================================================-->



<section id="blog" class="py_80 experience full_row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase"><span class="line_double mx-auto color_white">blog</span>What’s News</h2>
					<span class="sub_title">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="blog_grid_1 wow animated slideInUp">
					<div class="row">
						<div class="col-md-12 col-lg-4">
							<div class="blog_item">
								<div class="comments">
									<i class="fa fa-comment" aria-hidden="true"></i>
									<span class="color_white">12</span>
								</div>
								<div class="blog_img overlay_one"><img src="images/blog/01.jpg" alt="image"></div>
								<div class="blog_content bg_white color_secondery">
									<div class="blog_title">
										<a class="color_primary" href="blog-details.html">
											<h5>Convallis pulvinar morbi. Aenean nisi vitae metus nonummy a morbi.</h5>
										</a>
									</div>
									<p class="mt_15 mb_30">Dictumst integer sollicitudin venenatis ornare quam. Ligula integer luctus, blandit egestas molestie facilisi porttitor neque sodal luctus senectus lacinia euismod adipiscing element turpis dolor curae; posuere augue.</p>

									<div class="admin">
										<img src="images/about/02.jpg" alt="image">
										<span class="color_white">By - Rockstar Jack</span>
									</div>
									<div class="date float-right color_primary">20 Jan 2019</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="blog_item">
								<div class="comments">
									<i class="fa fa-comment" aria-hidden="true"></i>
									<span class="color_white">18</span>
								</div>
								<div class="blog_img overlay_one"><img src="images/blog/02.jpg" alt="image"></div>
								<div class="blog_content bg_white color_secondery">
									<div class="blog_title">
										<a class="color_primary" href="blog-details.html">
											<h5>Ornare fames imperdiet sapien. Iaculis dictum aptent commodo at iaculis.</h5>
										</a>
									</div>
									<p class="mt_15 mb_30">Dictumst integer sollicitudin venenatis ornare quam. Ligula integer luctus, blandit egestas molestie facilisi porttitor neque sodal luctus senectus lacinia euismod adipiscing element turpis dolor curae; posuere augue.</p>

									<div class="admin">
										<img src="images/about/02.jpg" alt="image">
										<span class="color_white">By - Rockstar Jack</span>
									</div>
									<div class="date float-right color_primary">18 Jan 2019</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="blog_item">
								<div class="comments">
									<i class="fa fa-comment" aria-hidden="true"></i>
									<span class="color_white">23</span>
								</div>
								<div class="blog_img overlay_one"><img src="images/blog/03.jpg" alt="image"></div>
								<div class="blog_content bg_white color_secondery">
									<div class="blog_title">
										<a class="color_primary" href="blog-details.html">
											<h5>Vulputate donec sem purus litora varius auctor augue suscipit hac.</h5>
										</a>
									</div>
									<p class="mt_15 mb_30">Dictumst integer sollicitudin venenatis ornare quam. Ligula integer luctus, blandit egestas molestie facilisi porttitor neque sodal luctus senectus lacinia euismod adipiscing element turpis dolor curae; posuere augue.</p>

									<div class="admin">
										<img src="images/about/02.jpg" alt="image">
										<span class="color_white">By - Rockstar Jack</span>
									</div>
									<div class="date float-right color_primary">17 Jan 2019</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mx-auto text-center mt_60"><a class="btn btn-default" href="blog.html">View Blog</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--	End Blog
	===================================================-->
<?php /*
<div id="experience" class="experience  py_60 full_row">
	<div class="">

		<div class="row">

<div class="col-md-4 col-lg-4">
							<div class="counter count wow text-center" data-wow-duration="300ms">
								<br /><a href="images/pratham/bengalurumap.png" data-fancybox="gallery">
									<img style="width:250px;background:white;padding:20px" src="images/pratham/bengalurumap.png" class="">
								</a>


							</div>
						</div>
						<div class="col-md-4 col-lg-4">
							<div class="counter count wow text-center" data-wow-duration="300ms">


								<h3 class="color_white mt_15">Indraprastha</h3>
								<address class="color_white">
									Ullas Theatre, 49/4,<br />
									R K Road (previously known as MEC Batteries Road),<br />
									Ward Near, Bengaluru,<br />
									Karnataka - 560 022<br />
								</address>
							</div>
						</div>
						<div class="col-md-4 col-lg-4">
							<div class="counter count wow text-center" data-wow-duration="300ms">


								<h3 class="color_white mt_15">Casa Serene</h3>
								<address class="color_white">
									8, Subroto Mukherjee Road,<br />
									Jalahalli Cross,<br />
									Jalahalli (W), Bangalore,<br />
									Karnataka - 560 028 </address>
							</div>
			<!--<div class="col-md-12 col-lg-12">
				<div class="fact-counter">
					<div class="row">

						
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>
<!--	End Portfolio
	

===================================================-->
*/ ?>
<!--	Start Testimonial
	===================================================-->
<section id="testimonial" class="py_80 full_row bg_white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase"><span class="line_double mx-auto color_default">Testimonial</span>What Client’s say about us</h2>
					<span class="sub_title">Pratham Constructions take customer feedbacks very seriously as we continually strive for improvement and better ourselves in every step we take. We were overwhelmed with the kind words said by our customers. </span>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="testimonial_item owl-carousel wow animated slideInUp">
					<div class="member_feedback p_30 color_secondery">
						<div class="client_img"><img src="images/testimonial/01.jpg" alt="image"></div>
						<div class="star d-inline-block mt_30 color_default">

						</div>
						<h5 class="color_primary mb_15">Aisha Lexi</h5>
						<p> I booked an apartment at Indraprastha. It is one of the most well-designed and planned residential apartment. The rooms are spacious with abundant natural lighting. I have no complaints on my booking at Casa Serene. </p>
					</div>
					<div class="member_feedback p_30 color_secondery">
						<div class="client_img"><img src="images/testimonial/02.jpg" alt="image"></div>
						<div class="star d-inline-block mt_30 color_default">

						</div>
						<h5 class="color_primary mb_15">Kiara Paige</h5>
						<p> Indraprastha is from one of the most trusted builder. Quality at its best, this residential building is one of the most contemporary buildings in Yashwantpur. I have recently booked my apartment. The rooms are very spacious with good ventilation. This is one of the best apartments so far. </p>
					</div>
					<div class="member_feedback p_30 color_secondery">
						<div class="client_img"><img src="images/testimonial/03.jpg" alt="image"></div>
						<div class="star d-inline-block mt_30 color_default">

						</div>
						<h5 class="color_primary mb_15">Lucas Noah</h5>
						<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
					</div>
					<div class="member_feedback p_30 color_secondery">
						<div class="client_img"><img src="images/testimonial/04.jpg" alt="image"></div>
						<div class="star d-inline-block mt_30 color_default">

						</div>
						<h5 class="color_primary mb_15">Grace Ruby</h5>
						<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--	End Testimonial-->

<!--	Start Portfolio
	===================================================-->




<?php
include 'includes/footer.php';
?>
<script>
	// The Slideshow class.
	class Slideshow {
		constructor(el) {

			this.DOM = {
				el: el
			};

			this.config = {
				slideshow: {
					delay: 3000,
					pagination: {
						duration: 3,
					}
				}
			};

			// Set the slideshow
			this.init();

		}
		init() {

			var self = this;

			// Charmed title
			this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
			this.DOM.slideTitle.forEach((slideTitle) => {
				charming(slideTitle);
			});

			// Set the slider
			this.slideshow = new Swiper(this.DOM.el, {

				loop: true,
				autoplay: {
					delay: this.config.slideshow.delay,
					disableOnInteraction: false,
				},
				speed: 500,
				preloadImages: true,
				updateOnImagesReady: true,

				// lazy: true,
				// preloadImages: false,

				pagination: {
					el: '.slideshow-pagination',
					clickable: true,
					bulletClass: 'slideshow-pagination-item',
					bulletActiveClass: 'active',
					clickableClass: 'slideshow-pagination-clickable',
					modifierClass: 'slideshow-pagination-',
					renderBullet: function(index, className) {

						var slideIndex = index,
							number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);

						var paginationItem = '<span class="slideshow-pagination-item">';
						paginationItem += '<span class="pagination-number">' + number + '</span>';
						paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
						paginationItem += '</span>';

						return paginationItem;

					},
				},

				// Navigation arrows
				navigation: {
					nextEl: '.slideshow-navigation-button.next',
					prevEl: '.slideshow-navigation-button.prev',
				},

				// And if we need scrollbar
				scrollbar: {
					el: '.swiper-scrollbar',
				},

				on: {
					init: function() {
						self.animate('next');
					},
				}

			});

			// Init/Bind events.
			this.initEvents();

		}
		initEvents() {

			this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
			//this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

			this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));

			this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));

		}
		animate(direction = 'next') {

			// Get the active slide
			this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
				this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
				this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
				this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');

			// Reverse if prev  
			this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();

			// Get old slide
			this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
			if (this.DOM.oldSlide) {
				// Get parts
				this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
					this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span');
				// Animate
				this.DOM.oldSlideTitleLetters.forEach((letter, pos) => {
					TweenMax.to(letter, .3, {
						ease: Quart.easeIn,
						delay: (this.DOM.oldSlideTitleLetters.length - pos - 1) * .04,
						y: '50%',
						opacity: 0
					});
				});
			}

			// Animate title
			this.DOM.activeSlideTitleLetters.forEach((letter, pos) => {
				TweenMax.to(letter, .6, {
					ease: Back.easeOut,
					delay: pos * .05,
					startAt: {
						y: '50%',
						opacity: 0
					},
					y: '0%',
					opacity: 1
				});
			});

			// Animate background
			TweenMax.to(this.DOM.activeSlideImg, 1.5, {
				ease: Expo.easeOut,
				startAt: {
					x: direction === 'next' ? 200 : -200
				},
				x: 0,
			});

			//this.animatePagination()

		}
		animatePagination(swiper, paginationEl) {

			// Animate pagination
			this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
			this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
			this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');

			console.log(swiper.pagination);
			// console.log(swiper.activeIndex);

			// Reset and animate
			TweenMax.set(this.DOM.paginationItemsLoader, {
				scaleX: 0
			});
			TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
				startAt: {
					scaleX: 0
				},
				scaleX: 1,
			});


		}

	}

	const slideshow = new Slideshow(document.querySelector('.slideshow'));
</script>