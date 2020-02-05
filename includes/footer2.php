
	<!--	Start Contact
		===================================================-->
	    <div id="contact" class="section bg_white pp-scrollable">
	    	<div class="container">
	    		<div class="contact pt_60">
	    			<div class="row">
		    			<div class="col-md-12 col-lg-12">
		    				<!--	Start Title
		    				================================-->
		    				<div class="main_title pb_60">
								<h2 class="title color_primary">Contact</h2>
								<p class="mt_15">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant.</p>											
							</div>
							<!--	End Title
		    				================================-->
		    			</div>
		    		</div>
		    		<div class="row">
		    			<div class="col-md-5 col-lg-4">
		    				<div class="contact_info">
		    					<ul>
		    						<li>
		    							<div class="contact_icon float-left"><i class="fa fa-phone" aria-hidden="true"></i></div>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_primary">CALL</h6>
		    								<span class="color_secondery">+6103 6000 8590</span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_icon float-left"><i class="fa fa-envelope" aria-hidden="true"></i></div>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_primary">EMAIL</h6>
		    								<span class="color_secondery">info@yourdomain.com</span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_icon float-left"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_primary">ADDRESS</h6>
		    								<span class="color_secondery">210 Elizabeth St, Melbourne VIC 3000, Australia.</span>
		    							</div>
		    						</li>
		    					</ul>
		    				</div>
		    			</div>
		    			<div class="col-md-7 col-lg-8">
		    				<form class="form contact_message pb_60" id="contact-form" action="email.php" method="post">
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<input class="form-control" type="text" name="name" placeholder="Your Name" />
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<input class="form-control" type="email" name="email" placeholder="Email Address" />
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
										  <input class="form-control" type="text" name="subject" placeholder="Subject"/>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
										</div>							
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<input class="btn btn-default" id="send" value="Send Massage" type="submit"/>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="error-handel">
											<div id="success">Your email sent Successfully, Thank you.</div>
											<div id="error"> Error occurred while sending email. Please try again later.</div>
										</div>
									</div>
								</div>
							</form>
		    			</div>
		    		</div>
	    		</div>
	    	</div>
	    	<div class="footer pt_60 background6">
	    		<div class="container">
	    			<div class="footer_bottom pb_60">
	    				<div class="row">
		    				<div class="col-md-12 col-lg-12">
		    					<div class="row">
		    						<div class="col-md-6 col-lg-6">
		    							<div class="footer-widget">
		    								<div class="footer_title pb_30">
												<h3 class="widget_title color_white">Latest Tweets</h3>					
											</div>
											<div class="twite color_secondery pb_30">
												<p class="color_white">Habitasse auctor proin netus nam maecenas aptent risus. Eu scelerisque pretium amet augue varius rutrum nonummy. <a class="color_default" href="#"> httm://envato/cprxetxyt</a></p>
												<i class="fa fa-clock-o" aria-hidden="true"></i><span>Posted On 13 Feb 2019</span>
											</div>
											<div class="twite color_secondery pb_30">
												<p class="color_white">Dolor mollis cum mi leo massa, nulla vehicula accumsan nisi etiam tristique fermentum erat purus. <a class="color_default" href="#"> http://envato/sotvoisd</a></p>
												<i class="fa fa-clock-o" aria-hidden="true"></i><span>Posted On 12 Feb 2019</span>
											</div>
		    							</div>
		    						</div>
		    						<div class="col-md-6 col-lg-6">
		    							<div class="footer-widget">
		    								<div class="footer_title pb_30">
												<h3 class="widget_title color_white">Newsletter Subscribe</h3>		
											</div>
											<div class="newsletter">
												<p class="color_white">Cursus iaculis interdum arcu habitant arcu rhoncus felis dictum tortor enim dignissim per. Risus ad sodales lorem habitasse. Dapibus vel litora rutrum dignissim nisi. Vitae, lacus imperdiet placerat volutpat inceptos.</p>
												<div class="subscribe mt_30">
													<div class="input-group">
												        <input type="email" class="form-control" placeholder="Enter your email">
												        <button class="btn btn-default" type="submit">Send</button>
											        </div>
												</div>
											</div>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
		    			</div>
	    			</div>
	    		</div>
	    		<div class="copyright2 p_20 color_lightgray bg_primary text-center"><p>Runaway @ 2019. All Right Reserved.</p></div>
	    	</div>
	    </div>
		<!--	End Contact
		===================================================-->
	</div>
	<!--	Js Links
	===================================================-->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.pagepiling.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		var deleteLog = false;
		//	Pagepiling js
		//=====================================================
		$(document).ready(function() {
	    	$('#pagepiling').pagepiling({
		    	menu: '#menu',
		    	anchors: ['page1', 'page2', 'page3', 'page4', 'page5','page6', 'page7', 'page8','page9'],
		    	loopTop: true,
		    	loopBottom: true
		  	});
	    });
		//	Sidebar Nav Menu js
		//=====================================================
		function openNav() {
		    document.getElementById("mysidenav").style.width = "150px";
		}
		function closeNav() {
		    document.getElementById("mysidenav").style.width = "0";
		}
    </script>
</body>
</html>