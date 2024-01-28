@include('frontend.layouts.head')
<body class="navbar-sticky">
@include('frontend.layouts.header')
	<header id="featured" class="site-featured">
		<div id="featured-media" class="featured-media has-media">
			<div class="featured-text">
				<div class="container">
					<h2 class="entry-title">Help center</h2>
					<form action="help.html" class="searchform">
						<label for="search-form-input" class="screen-reader-text">Search for:</label>
						<input type="search" id="search-form-input" name="s" placeholder="Search&hellip;">
						<button type="submit">
							<em class="mdi mdi-magnify"></em>
							<span class="screen-reader-text">Search</span>
						</button>
					</form>
				</div>
			</div>
			<img src="tmp/sample-header.jpg" alt="">
		</div>
	</header>

	<div id="content" class="site-content">
		<main class="site-section section-main">
			<div class="container">
				<div class="row">
					<div id="sidebar" class="col-12 col-md-4 col-lg-3">
						<h4>Getting started</h4>
						<ul class="menu">
							<li class="current-menu-item"><a href="#">How to register</a></li>
							<li><a href="#">How to invest</a></li>
							<li><a href="#">How to get funding</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
						<h4>Platform terms</h4>
						<ul class="menu">
							<li><a href="#">Terms &amp; conditions</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Privacy policy</a></li>
						</ul>
						<h4>Guarantees</h4>
						<ul class="menu">
							<li><a href="#">Investor risk statement</a></li>
							<li><a href="#">Buyback guarantee</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-8 col-lg-9">
						<div class="breadcrumbs">
							<a href="index.html" class="home-url">Home</a>
							<span class="current">How to register</span>
						</div>
						<h3>How can I create an investor account?</h3>
						<p>Our registration process is very simple – all you need to do is to fill in the registration form by providing your personal details and contact information. After that, simply become an active investor by adding funds to your investor account, as little as €30.</p>
						<p>Keep in mind that you must be at least 18 years old, and that we only accept deposits from credit, payment or electronic money institutions within the European Union.</p>
						<div class="helpfulness-rating">
							<div class="rating-form">
								<h5 class="helpfulness-title">Was this article helpful?</h5>
								<a href="#" class="button button-small button-outline">Yes</a>
								<a href="#" class="button button-small button-outline">No</a>
							</div>
							<div class="form-response">
								<h5 class="helpfulness-title">Thank you for your feedback!</h5>
								<p>We try our best.</p>
							</div>
						</div>
						<div class="related-articles">
							<h5>Related articles</h5>
							<ul class="menu">
								<li><a href="#">Register as company</a></li>
								<li><a href="#">What loyalty categories there are?</a></li>
								<li><a href="#">How is the interest you will earn from your investments calculated?</a></li>
								<li><a href="#">Current special offers</a></li>
							</ul>
						</div>
					</div>
					<div class="spacing2"></div>
					<div class="col-12">
						<h4>Can't find what you need?</h4>
					</div>
					<div class="col-6 col-lg-3">
						<div class="featured-box">
							<em class="featured-box-icon mdi mdi-face-agent"></em>
							<h5 class="featured-box-title">Live chat</h5>
							<p class="featured-box-content">Get help from our staff</p>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="featured-box">
							<em class="featured-box-icon mdi mdi-email-outline"></em>
							<h5 class="featured-box-title">Email us</h5>
							<p class="featured-box-content">contact@crowdinvest.com</p>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="featured-box">
							<em class="featured-box-icon mdi mdi-phone-outline"></em>
							<h5 class="featured-box-title">Call us</h5>
							<p class="featured-box-content">+371 6891 1199</p>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="featured-box">
							<em class="featured-box-icon mdi mdi-newspaper-variant-outline"></em>
							<h5 class="featured-box-title">Read our blog</h5>
							<p class="featured-box-content">Follow the latest news</p>
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
	<script src="assets/js/functions.js"></script>
</body>
</html>