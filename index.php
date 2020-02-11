<?php
include 'includes/header.php';
?>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
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
.slideshow-pagination-item:hover, .slideshow-pagination-item:focus {
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
.slideshow-navigation-button:hover, .slideshow-navigation-button:focus {
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
<?php /*
<div id="slider" class="section bg_white">
			<div class="line-container">
				<div class="row">
					<div class="col-md-3 col-lg-3"><div class="liner"></div></div>
					<div class="col-md-3 col-lg-3"><div class="liner"></div></div>
					<div class="col-md-3 col-lg-3"><div class="liner"></div></div>
					<div class="col-md-3 col-lg-3"><div class="liner"></div></div>
				</div>
			</div>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner overlay_three">
			    <div class="carousel-item active">
			      <div class="overlay_one pattan"><img  class="" src="images/pratham/home/banner1.jpg" alt="slide image"></div>
			      <div class="carousel-caption">
				    <h1 class="mb_20">Awesome solution<br> for <span class="color_default">you Business</span></h1>
				    <p class="mb_20">Risus faucibus mollis velit sollicitudin consequat inceptos dictum. Cras quis amet dui inceptos varius, faucibus bibendum fringilla sodales mauris tortor lacus vitae sagittis consequat dapibus consequat justo nostra.</p>
				    <a class="btn btn-default" href="#">Start a Project</a>
				  </div>
			    </div>
			    <div class="carousel-item">
			      <div class="overlay_one pattan"><img src="images/pratham/home/banner2.jpg" alt="slide image"></div>
			      <div class="carousel-caption">
				    <h1 class="mb_20">Awesome solution<br> for <span class="color_default">you Business</span></h1>
				    <p class="mb_20">Risus faucibus mollis velit sollicitudin consequat inceptos dictum. Cras quis amet dui inceptos varius, faucibus bibendum fringilla sodales mauris tortor lacus vitae sagittis consequat dapibus consequat justo nostra.</p>
				    <a class="btn btn-default" href="#">Start a Project</a>
				  </div>
			    </div>
			    <div class="carousel-item">
			      <div class="overlay_one pattan"><img src="images/pratham/home/banner3.jpg" alt="slide image"></div>
			      <div class="carousel-caption">
				    <h1 class="mb_20">Awesome solution<br> for <span class="color_default">you Business</span></h1>
				    <p class="mb_20">Risus faucibus mollis velit sollicitudin consequat inceptos dictum. Cras quis amet dui inceptos varius, faucibus bibendum fringilla sodales mauris tortor lacus vitae sagittis consequat dapibus consequat justo nostra.</p>
				    <a class="btn btn-default" href="#">Start a Project</a>
				  </div>
			    </div>
			  </div>
			</div>
		</div>
*/ ?>
<!--	Start Main Banner 
	==================================================-->
<section id="main_banner" class="banner_image background1 <?php /*overlay_one*/ ?>">






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
        <div class="slide-image" style = "background-image: url(images/slider/banner3.jpg)"></div>
       <!-- <span class="slide-title">Around the world</span>-->
      </div>

      

    </div>

    <div class="slideshow-pagination"></div>

    <div class="slideshow-navigation">
      <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
      <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
    </div>

  </div>






















	<!--<div class="container h-100">
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
	</div>-->
</section>
<!--	End Main Banner 
	==================================================-->
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
						<p class="color_white text-justify">These words may very well well sum sum up up the the lif 
life of Late Shri Kesarimalji Gadia, the founder o Gadia group, and continue tinue to to be be the the Guidin 
Guiding Light for us today at the Gadia Group. 
</p>

<p class="color_white text-justify">
	The Group traces its humble humble beginnings beginnings in 
in the late 1930s’, when a young g lad, lad, started started the the business bus 
of trading of Jari and Yarns. rns. Over Over the the years, years, the th 
group grew from being a simple imple trading trading compan 
company into a Specialised, High Performance rformance Jari Jari Manufa 
Manufacturing company, which was s headed headed by by Late Late Shri Shr 
Kiran Kumar K Gadia, the son son of of Late Late Shri Shri Kesarimalji 
Kes Gadia. It was the Late e Shri Shri Kiran Kiran Kumar Kumar K K 
Gadia’s vision to move from providing providing innovative innovative solutions 
s in the Textile Industry to providing providing affordable afforda 
and innovative solutions in in the the Housing Housing In 
Industry. Along, with Mr. Kiran an Kumar Kumar K K Gadia, Gadia, his h 
sons, Manish Gadia, Amit Gadia Gadia and and Vinay Vinay Ga 
Gadia, the group conceptualized their their maiden maiden project project Pratham 
P Casa Serene and successfully successfully complete 
completed and handed over the same. 

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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, Curabitur quis varius libero. Lorem.</p>
						</div>
						<div class="col-md-4 col-lg-4 why-box">
							<img src="images/why-icon.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, Curabitur quis varius libero. Lorem.</p>
						</div>
						<div class="col-md-4 col-lg-4 why-box">
							<img src="images/why-icon.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, Curabitur quis varius libero. Lorem.</p>
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
					<span class="sub_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, Curabitur quis varius libero. Lorem.</span>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="row">





					<div class="col-md-6">

			<div class="blog_item">
			<div class="blog_img overlay_one"><a href="indraprastha.php"><img src="images/pratham/home/indraprastha.jpg" alt="image"></a></div>
			</div>
						
						<span class=" test">
							<span class="test-title" wfd-id="167"><b>Indraprastha</b></span>
							<span class="test-info" wfd-id="166">Near Yeshwantpur Metro Station</span>
						</span>
						<p class="testp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.</p>

						<a class="btn btn-project" href="#">View Project</a>


					</div>

					<div class="col-md-6">

						<div class="blog_item">
			<div class="blog_img overlay_one"><a href="#"><img src="images/pratham/home/casaserene.jpg" alt="image"></a></div>
			</div>

						
						<span class=" test">
							<span class="test-title" wfd-id="167"><b>Casa Serene</b></span>
							<span class="test-info" wfd-id="166"></span>
						</span>
						<p class="testp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.</p>

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
											<a class="color_primary" href="blog-details.html"><h5>Convallis pulvinar morbi. Aenean nisi vitae metus nonummy a morbi.</h5></a>
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
											<a class="color_primary" href="blog-details.html"><h5>Ornare fames imperdiet sapien. Iaculis dictum aptent commodo at iaculis.</h5></a>
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
											<a class="color_primary" href="blog-details.html"><h5>Vulputate donec sem purus litora varius auctor augue suscipit hac.</h5></a>
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
	                    <h2 class="title text-uppercase"><span class="line_double mx-auto color_default">testimonial</span>What Client Say’s</h2>
	                    <span class="sub_title">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
    				<div class="testimonial_item owl-carousel wow animated slideInUp">
    					<div class="member_feedback p_30 color_secondery">
							<div class="client_img"><img src="images/testimonial/01.jpg" alt="image"></div>
							<div class="star d-inline-block mt_30 color_default">
								
							</div>
							<h5 class="color_primary mb_15">Aisha Lexi</h5>
							<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
						</div>
						<div class="member_feedback p_30 color_secondery">
							<div class="client_img"><img src="images/testimonial/02.jpg" alt="image"></div>
							<div class="star d-inline-block mt_30 color_default">
								
							</div>
							<h5 class="color_primary mb_15">Kiara Paige</h5>
							<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
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
        
        this.DOM = {el: el};
      
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
      this.slideshow = new Swiper (this.DOM.el, {
          
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
            renderBullet: function (index, className) {
              
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
          this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
            TweenMax.to(letter, .3, {
              ease: Quart.easeIn,
              delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
              y: '50%',
              opacity: 0
            });
          });
        }
      
        // Animate title
        this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
					TweenMax.to(letter, .6, {
						ease: Back.easeOut,
						delay: pos*.05,
						startAt: {y: '50%', opacity: 0},
						y: '0%',
						opacity: 1
					});
				});
      
        // Animate background
        TweenMax.to(this.DOM.activeSlideImg, 1.5, {
            ease: Expo.easeOut,
            startAt: {x: direction === 'next' ? 200 : -200},
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
        TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
        TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
          startAt: {scaleX: 0},
          scaleX: 1,
        });
      
      
    }
    
}

const slideshow = new Slideshow(document.querySelector('.slideshow'));

</script>
