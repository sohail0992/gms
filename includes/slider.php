
		<div class="banner-slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						   <div class="banner-info">
							      <h2 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">There are many variations of passages.</h2>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Pellentesque habitant morbi tristique senetus.</p>
								   <a href="single.html" class="hvr-bounce-to-bottom">READ MORE</a>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							    <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Lorem ipsum dolor  amet, consectetur.</h3>
								 <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Praesent quis libero or, consectetur lacus .</p>
								<a href="single.html" class="hvr-bounce-to-bottom">READ MORE</a>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							     <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Nunc egestas leo ligula, in vehicula.</h3>
								 <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Vestibul ante ipsum primis in faucibus luctus.</p>
								<a href="single.html" class="hvr-bounce-to-bottom">READ MORE</a>
						   </div>
					  </li>
					</ul>
			  </div>
		<!--banner Slider starts Here-->
	  	<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	      <!--banner Slider starts Here-->
		</div>

		 <div class="down"><a class="scroll" href="#touch"><img src="images/down.png" alt=""></a></div>
	</div>
	