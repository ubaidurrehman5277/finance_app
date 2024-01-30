@include('frontend.layouts.head')
<body class="single navbar-sticky">
@include('frontend.layouts.header')

	<header id="featured" class="site-featured">
		<div id="featured-media" class="featured-media has-media">
			<div class="featured-text">
				<div class="container">
					<h2 class="entry-title">User Login</h2>
				</div>
			</div>
			<img src="tmp/sample-header.jpg" alt="">
		</div>
	</header>

	<div id="content" class="site-content">
		<main class="site-section section-main">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
						<div id="comments">
							<div id="respond" class="comment-respond">
								<h3 id="reply-title" class="comment-reply-title">Please Login</h3>
								<form action="{{ route('login') }}" method="post" class="comment-form">
									@csrf
									@if(session()->has("error"))
				                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
				                          {!! session("error") !!}
				                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                    @endif
									<p class="comment-form-mail">
										<label for="email">Email <span class="required" aria-hidden="true">*</span></label>
										<input id="email" name="email" value="" size="35" type="text">
										@error('password')
										    <div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</p>
									<p class="comment-form-password">
										<label for="password">Password <span class="required" aria-hidden="true">*</span></label>
										<input id="password" name="password" value="" type="password">
										@error('password')
										    <div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</p>
									
									<p class="form-submit">
										<input name="submit" id="submit" class="submit button-color button-filled" value="Login" type="submit">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="site-section section-call-to-action has-media dotted-pattern dotted-pattern-top-right">
			<div class="container">
				<h2 class="entry-title">Earn income while investing in meaningful businesses.</h2>
				<p class="no-margin-bottom">
					<a href="projects.html" class="button button-primary"><em class="mdi mdi-briefcase-outline"></em> Invest Now</a>
					<a href="contact.html" class="button button-light button-outline"><em class="mdi mdi-email"></em> Get in touch</a>
				</p>
			</div>
			<img src="tmp/sample-video.jpg" alt="">
			<!-- <video id="sample-video" src="tmp/sample-video.mp4" poster="tmp/sample-video.jpg" autoplay="" loop="" muted=""></video> -->
		</div>
	</div>

	<footer class="site-footer">
		<a class="to-the-top" href="#top-header" title="To the top"><em class="mdi mdi-chevron-double-up"></em><svg width="150" height="50" viewBox="0 0 39.687499 13.229167"><path d="M-.0035 296.999c9.007 0 11.8302-13.1833 19.8324-13.1852C27.8372 283.8118 30.636 297 39.683 297c9.047 0-48.6935-.001-39.6864-.001z" transform="translate(0,-283.77081)"/></svg></a>
		<div class="container">
			<div class="widget-area">
				<div class="widget widget_text widget_logo">
					<h4 class="widget-title"><img src="assets/images/logo-footer.png" width="209" height="18" alt="CrowdInvest"><span class="sr-only">CrowdInvest</span></h4>
					<div class="textwidget">
						<p>We offer an extensive range of professional services and a high degree of specialization. We serves both private &amp; public companies and bring over 35 years of experience.</p>
						<nav class="social-navigation">
							<ul id="social-menu" class="menu">
								<li><a href="https://linkedin.com"><span class="screen-reader-text">Instagram profile</span></a></li>
								<li><a href="https://facebook.com"><span class="screen-reader-text">Facebook profile</span></a></li>
								<li><a href="https://twitter.com"><span class="screen-reader-text">Twitter profile</span></a></li>
								<li><a href="https://youtube.com"><span class="screen-reader-text">YouTube page</span></a></li>
								<li><a href="https://instagram.com"><span class="screen-reader-text">Instagram profile</span></a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="widget widget_text">
					<h4 class="widget-title">Contact <span class="low-opacity">Us</span></h4>
					<div class="textwidget">
						<p>
							<img class="office-country" src="assets/images/lv.svg" width="24" alt=""> <strong>HQ, Latvia:</strong> Str. 13, Rīga, +371 6891 1199
							<br>
							<img class="office-country" src="assets/images/ee.svg" width="24" alt=""> <strong>Estonia:</strong> Str. 2, Tallinn, +372 6891 1199
							<br>
							<img class="office-country" src="assets/images/lt.svg" width="24" alt=""> <strong>Lithuania:</strong> Str. 4, Vilnius, +370 6891 1199
						</p>
						<p>
							<strong>Company:</strong> CrowdInvest OÜ
							<br>
							<strong>Registration Nr.:</strong> 13472495
							<br>
							<strong>Contact:</strong> <a href="mailto:contact@crowdinvest.com">contact@crowdinvest.com</a>
						</p>
					</div>
				</div>
				<div class="widget widget_nav_menu">
					<h4 class="widget-title">Explore <span class="low-opacity">Site</span></h4>
					<nav class="footer-useful-links">
						<ul class="menu">
							<li><a href="projects.html">Invest</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="careers.html">Careers</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="statistics.html">Statistics</a></li>
							<li><a href="styleguide.html">Styleguide</a></li>
						</ul>
						<ul class="menu">
							<li><a href="help.html">How To Invest</a></li>
							<li><a href="help.html">Get Funding</a></li>
							<li><a href="statistics.html">Reports</a></li>
							<li><a href="affiliate.html">Affiliate Program</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="help.html">Privacy Policy</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<aside class="site-footer-bottom">
				<div class="site-footer-credits">&copy; 2022 CrowdInvest. All Rights Reserved.</div>
				<div class="site-footer-cookies">By using this website you agree to the <a href="#">use of cookies</a> in accordance with the cookies policy.</div>
			</aside>
		</div>
	</footer>

	<div class="support-chat">
		<div id="chat-panel" class="chat-panel">
			<div class="chat-messages">
				<p class="message message-support">Hey there, let me know if there's anything I can help you with!</p>
				<p class="message message-user">I'm just looking around...</p>
				<p class="message message-support">Nice, have a good one!</p>
			</div>
			<input type="text" class="input-message" autocomplete="off" placeholder="Type your message here&hellip;">
			<span class="chat-powered-by"> Can be powered By <a href="https://chatcreate.com">ChatCreate</a></span>
		</div>
		<a href="#chat-panel" class="chat-toggle"><span class="badge">1</span></a>
	</div>

	<script src="assets/js/modernizr-custom.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/fancybox.min.js"></script>
	<script src="assets/js/functions.js"></script>
</body>
</html>