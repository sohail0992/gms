
<!DOCTYPE HTML>
<html>
<head>
<title>GMS</title>
<?php
include("includes/cs-js.php");
?>
<meta name="keywords" content="" />

<?php
include("includes/animations.php");
?>


</head>
<body>
<!--start-home-->
		<div class="banner two" id="home">
		<div class="header-bottom">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="index.php"><h1>Guide<span> Motivate Support Posts</span></h1></a>
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="home" href="index.php">home</a></li>

								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
	</div>
	</div>

<!--blog-section-->
      <div class="blog-section">
		<div class="container">
		  <h2 class="single">Blog Post</h2>
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
					 <a href="#">
					  <img src="images/banner.jpg" alt="">
					</a>
                        <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">It is established fact that a reader will distract.</h3>
					   <p class="post wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Posted on Mar 30, 2016 by <a href="#">Admin</a></p>
					   <p Class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consequat.</p>				                     
				</div>
				
		   </div>
		   <div class="single">
						<div class="leave">
							<h4 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Leave a comment</h4>
						</div>
						<form id="commentform">
							 <p class="comment-form-author-name"><label for="author">Name</label>
								<input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
							 </p>
							 <p class="comment-form-email wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
								<label class="email">Email</label>
								<input id="email" name="email" type="text" value="" size="30" aria-required="true" required="">
							 </p>
							 <p class="comment-form-comment wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
								<label class="comment">Comment</label>
								<textarea></textarea>
							 </p>
							 <div class="clearfix"></div>
							<p class="form-submit wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
							   <input name="submit" type="submit" id="submit" value="Send">
							</p>
							<div class="clearfix"></div>
						   </form>
				 <div class="single_grid2">
					   <h4 class="tz-title-4 tzcolor-blue wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
							Comments
						</h4>
						<ul class="list">
						<li>
			            <div class="col-md-2 preview wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">Apr 30, 2016</span></div>
			                <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#" class="hvr-bounce-to-bottom">Reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     	  <li>
			            <div class="col-md-2 preview wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">May 2, 2016</span></div>
			                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#" class="hvr-bounce-to-bottom">Reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			        <li>
			            <div class="col-md-2 preview wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">May 5, 2016</span></div>
			                <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#" class="hvr-bounce-to-bottom">Reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     </ul>
				</div>
			 </div>

		</div>
	  </div>
	</div>
<!--footer-->
		<div class="footer text-center">
						<div class="container">
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">&copy; 2016 GMS . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="#" class="tw"></a></li>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#" class="in"> </a></li>
										<li><a href="#" class="dott"></a></li>
										 <div class="clearfix"></div>
									</ul>
					 </div>
	     </div>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>