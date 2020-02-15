<?php
$url='home';
include 'includes/header.php';
?>




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

	@media screen and (max-width:990px) and (min-width:280px) {
		.swiper-slide .slide-image ,swiper-slide-active{background-size:contain}
		.slide {display: block}
		.banner_image {
			width: 100%;

background-size: cover;
overflow: hidden;
background-position: 50% 50%;
background-repeat: no-repeat;
position: relative;
margin-top: 82px
	}
	.slide-image {height: calc(100% + 100px);}
  
}

@media screen and (min-width:991px) and (max-width:1980px) {

	.slide-image {height: calc(100% + 100px);}
}
</style>

<!--	Start Main Banner 
	==================================================-->
<section  id="water-effect" class="banner_image  ">






	<div class="swiper-container slideshow ">

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


</section>
<!--	End Main Banner 
	==================================================-->

<!--	Start About
	===================================================-->







<section id="about" class="py_80 full_row bg_primary">
	<div class="container">

		<div class="row">


			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto  wow animated slideInUp">
					<h2 class="title text-uppercase color_white"><span class=" mx-auto color_default">&nbsp;</span> About PRATHAM CONSTRUCTION</h2>
					
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					
					<p class="sub_title color_white ">“Providing the communities we serve with superior products and services by developing innovative
						solutions to improve the quality of life and satisfy customer needs.”
					</p>
				</div>
			</div>
			
		</div>
		
		<div class="about_one">
			<div class="row">
				<div class="col-md-7 col-lg-7">
					<div class="myself color_secondery wow animated fadeInLeft">
						<p class="color_white text-justify">Founded by Late Kiran Kumar K Gadia, the Pratham Group had a humble beginning specialising in the Jari textile during the early 1930s. Over the years, the Pratham Group diversified in other ventures such as copper wire, polyester yarn and the real estate. Today, Pratham Group has firmly established itself as one of the leading names and is among the most successful organisation in India continually imprinting its indelible marking in global market. 
						</p>
						
						<p class="color_white text-justify" style="margin-top:10px">
						Realising the need of quality yet affordable housing in the ever growing Bangalore city; the Silicon Valley of India, the Pratham Group ventured in the real estate sector. In our sincere efforts, Pratham Group endeavours to create quality residential spaces to better people’s living experiences. With a clear vision to transform the way people perceive quality housing, Pratham Constructions blends professional real estate expertise with innovative technology while  encompassing robust engineering, ground-breaking research and uncompromising business ethics in all spheres of realty development making home living more comfortable, productive and cheerful.
						</p>
						<p class="text-right "><a href="about.php" class=" color_white">Read More  <i class="fas fa-arrow-right"></i></a></p>

					</div>
					<div class="personal_info color_lightgray">

					</div>
				</div>
				<div class="col-md-5 col-lg-5">
					<div class=" personal_video wow animated fadeInRight">
					
						<img src="images/pratham/about-us.jpg" alt="image">
						<?php /*<div class="iconround"><a class="video-popup" href="https://www.youtube.com/watch?v=U16kL-npP9s" title="video popup">
								<i class="fa fa-play" aria-hidden="true"></i></a></div> */ ?>
						
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
</section>
<!--	End About
	===================================================-->



<section id="why-us" class="py_80  full_row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					<h2 class="title text-uppercase"><span class=" mx-auto color_default">&nbsp;</span>Why Pratham Construction</h2>

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-lg-12">



				<!-- main slider -->

				<div class="thumb-sl  ">
					<div class="mx-auto d-block why-us-sl owl-carousel wow animated slideInUp">

						<div class=" why-box  "   class="mx-auto d-block">
							<img src="images/pratham/Customer-Focus.png"  class="why-us-sl-img  ">
							<h4 class="text-center"> Customer Focus</h4>
							<p class="text-justify"> Pratham Construction delivers every project with highest level of integrity. Every decision taken is client centric. We aim at providing the customer high levels of satisfaction in terms of interaction, service and quality.</p>
						</div>
						<div class=" why-box">
							<img src="images/pratham/Innovation.png" class="why-us-sl-img ">
							<h4 class="text-center"> Innovation</h4>
							<p class="text-justify">Pratham Construction is synonymous to innovation. We always encourage multiple solutions and perspectives in the realty sector. We incorporate new ideas in all realms of our company’s venture and the new trends in the realty industries. </p>
						</div>
						<div class=" why-box">
							<img src="images/pratham/Transparency.png"  class="why-us-sl-img ">
							<h4 class="text-center"> Transparency</h4>
							<p class="text-justify">Transparency is rooted in all of our operations. We strongly believe that in order for a lasting relation with customers, transparency is the key. That is why; we prioritise transparency in all our dealings as we focus on imaginative engineering and reliability.  </p>
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
				<div class="section_title_1 text-center mx-auto  wow animated slideInUp">
					<h2 class="title text-uppercase"><span class=" mx-auto color_default">&nbsp;</span> Our Projects</h2>
					
				</div>

				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					
					<p class="sub_title">Pratham Construction is a pioneer in delivering world-class residential spaces. We have pioneered many landmark developments across cities in Gujarat and Karnataka. In Bangalore, Pratham Construction works to redefine the concept of urban lifestyle of highest quality. </p>
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
						
						<div class="col-sm-12 details">
						<div class="row">
						<div class="col-sm-6 color_white"><b class="color_default" > Type :</b> Residential Apartment</div>
						<div class="col-sm-6 color_white"><b class="color_default">Area Range  :</b> 1250-1655 Sq.Ft</div>
						<div class="col-sm-6 color_white"><b class="color_default">Location :</b> Yeshwanthpur</div>
						<div class="col-sm-6 color_white"><b class="color_default">Classification  :</b> 2BHK,3BHK</div>
						<div class="col-sm-6 color_white"><b class="color_default">Possession  :</b> Dec 2019</div>
						<div class="col-sm-6 color_white"><b class="color_default">No. of Units   :</b>  253 Units </div>
						</div>
						</div>
					<?php /*	<p class="testp">Located at Yashwantpur, Indraprastha is a premium residential project nestled in the manicured greens and replete with all modern amenities offering a blissful life. The amenities highlights include gymnasium, swimming pool and other sports facilities such as Squash Court, Badminton Court, Multipurpose Court, etc.  </p> */ ?>
					<div class="mx-auto text-center mt_15" wfd-id="172"><a class="btn btn-default testb"  href="indraprastha.php">View Project</a></div>
						


					</div>

					<div class="col-md-6">

						<div class="blog_item">
							<div class="blog_img "><a href="#"><img src="images/pratham/home/casaserene.jpg" alt="image"></a></div>
						</div>


						<span class=" test">
							<span class="test-title" wfd-id="167"><b>Casa Serene</b></span>
							<span class="test-info" wfd-id="166"></span>
						</span>
						<div class="col-sm-12 details">
						<div class="row">
						<div class="col-sm-6 color_white"><b class="color_default" > Type :</b> Residential Apartment</div>
						<div class="col-sm-6 color_white"><b class="color_default">Area Range  :</b> 1164-1583 Sq.Ft</div>
						<div class="col-sm-6 color_white"><b class="color_default">Location :</b> Prashanth Nagar</div>
						<div class="col-sm-6 color_white"><b class="color_default">Classification  :</b> 2BHK,3BHK</div>
						<div class="col-sm-6 color_white"><b class="color_default">Possession  :</b> Ready To Move</div>
						<div class="col-sm-6 color_white"><b class="color_default">No. of Units   :</b>  140 Units </div>
						</div>
						</div>
						<?php /*<p class="testp">Indulge in absolute serenity while still having the best access to urban amenities at Casa Serene. Located at Dasarahalli on Tumkur Road, Casa Serene has 2 and 3BHK apartments with modern amenities.  It offers smooth connectivity to the prime locations in the city, besides housing many reputed educational institutions, hospitals etc.</p> */ ?>
						
						
						<div class="mx-auto text-center mt_15" wfd-id="172"><a class="btn btn-default" href="#">View Project</a></div>
					
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



<!--	End Services
	===================================================-->



<section id="blog" class="py_80 experience full_row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto  wow animated slideInUp">
					<h2 class="title text-uppercase"><span class=" mx-auto color_white">&nbsp; </span> blogs   </h2>
					
				</div>
			</div>

			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					
					<p class="sub_title ">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</p>
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
								<div class="blog_img overlay_one"><img src="images/bl1.jpg" alt="image"></div>
								<div class="blog_content bg_white color_secondery">
									<div class="blog_title">
										<a class="color_primary" href="blog-details.html">
											<h5>How Pratham Constructions is redefining quality housing in the Bangalore realty</h5>
										</a>
									</div>
									<p class="mt_15 mb_30 text-justify">The ever growing Bangalore city has witnessed an increase in demand for residential space.
However, not all that glitters is gold especially in the real estate segment of Bangalore. Pratham
Constructions entered into the real estate market of Bangalore with the intention to address the
need for quality residential houses. In doing the noble deed, Pratham Constructions is
redefining quality housing in the Bangalore realty through innovative technology.</p>

									<div class="admin">
										<img src="images/about/02.jpg" alt="image">
										<span class="color_white">By - Alok Nath</span>
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
								<div class="blog_img overlay_one"><img src="images/bl2.jpg" alt="image"></div>
								<div class="blog_content bg_white color_secondery">
									<div class="blog_title">
										<a class="color_primary" href="blog-details.html">
											<h5>Time is ripe to harvest the golden opportunity for investment in the Indian real estate</h5>
										</a>
									</div>
									<p class="mt_15 mb_30 text-justify">India still continues to be among the fastest developing economies in the world despite the ebbs
and flow in the global market. The Real Estate Regulation Act (RERA) and the Benami
Properties Act were ground breaking in the Indian real estate segment bringing significant
transparency and inspiring customer trust. These legal changes have brought greater focus on
customer rights increasing the demand from end-use customers and NRI investors alike.</p>

									<div class="admin">
										<img src="images/about/02.jpg" alt="image">
										<span class="color_white">By - Maahir Jain</span>
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
								<div class="blog_img overlay_one"><img src="images/bl3.jpg" alt="image"></div>
								<div class="blog_content bg_white color_secondery">
									<div class="blog_title">
										<a class="color_primary" href="blog-details.html">
											<h5>Upbeat housing market of Bangalore</h5>
										</a>
									</div>
									<p class="mt_15 mb_30 text-justify">What is not to love about the silicon valley of India, Bangalore? As one of the fastest growing
cities in India, Bangalore houses the finest IT industries, world-class healthcare facilities, state-
of-the-art infrastructure and international educational institutes making it one of the most
preferred cities to live in. Among the many housing projects, Pratham Constructions is making a
landmark in the housing sector of Bangalore. Pratham Casa Serene and Pratham Indraprastha
are two flagship programs from the Pratham Constructions.</p>

									<div class="admin">
										<img src="images/about/02.jpg" alt="image">
										<span class="color_white">By - Atul Kumar</span>
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
				<div class="section_title_1 text-center mx-auto  wow animated slideInUp">
					<h2 class="title text-uppercase"><span class=" mx-auto color_default">&nbsp;</span> Testimonials </h2>
					
				</div>
			</div>

			<div class="col-md-12 col-lg-12">
				<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
					
					<p class="sub_title ">Pratham Constructions take customer feedbacks very seriously as we continually strive for improvement and better ourselves in every step we take. We were overwhelmed with the kind words said by our customers.  </p>
				</div>
			</div>


			<div class="col-md-12 col-lg-12">
				<div class="testimonial_item owl-carousel wow animated slideInUp">
					<div class="member_feedback p_30 color_secondery">
					
						<div class="star d-inline-block mt_30 color_default">

						</div>
						<h5 class="color_primary mb_15">Naveen Bansal</h5>
						<p class="text-justify">	I booked an apartment at Indraprastha. It is one of the most well-designed and planned residential apartment. The rooms are spacious with abundant natural lighting. I have no complaints on my booking at Casa Serene.  </p>
					</div>
					<div class="member_feedback p_30 color_secondery">
						
						<div class="star d-inline-block mt_30 color_default">

						</div>
						<h5 class="color_primary mb_15">Jagdish Tyagi</h5>
						<p class="text-justify"> 	Indraprastha is from one of the most trusted builder. Quality at its best, this residential building is one of the most contemporary buildings in Yashwantpur. I have recently booked my apartment. The rooms are very spacious with good ventilation. This is one of the best apartments so far. </p>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--	End Testimonial-->

<!--	Start Portfolio
	===================================================-->

<!--start model-->





















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