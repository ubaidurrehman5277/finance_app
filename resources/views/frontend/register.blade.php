@include('frontend.layouts.head')
<body class="navbar-sticky account-page">
	@include('frontend.layouts.header')

	<header id="featured" class="site-featured">
		<div id="featured-media" class="featured-media">
			<div class="featured-text">
				<div class="container">
					<h2 class="entry-title">Profile</h2>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
		<main class="site-section section-main">
			<div class="container">
				<h3>Review or change your personal settings</h3>
				<div class="row">
					<div class="w100 spacing1"></div>
					<div class="col-12 col-md-4 col-lg-3">
						<h5>User agreement</h5>
					</div>
					<div class="col-12 col-md-8 col-lg-6">
						<a href="#">User agreement 461729.pdf</a>
					</div>
					<div class="w100 spacing1"></div>
					<div class="col-12 col-md-4 col-lg-3">
						<h5>Personal information</h5>
					</div>
					<div class="col-12 col-md-8 col-lg-6">
						<label for="first-name">First name</label>
						<input type="text" id="first-name" name="first-name" class="underline" disabled="" value="John">
						<label for="last-name">Last name</label>
						<input type="text" id="last-name" name="last-name" class="underline" disabled="" value="Doe">
					</div>
					<div class="w100 spacing1"></div>
					<div class="col-12 col-md-4 col-lg-3">
						<h5>Contact information</h5>
					</div>
					<div class="col-12 col-md-8 col-lg-6">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" class="underline" disabled="" value="contact@johndoe.com">
						<label for="phone">Phone</label>
						<input type="tel" id="phone" name="phone" class="underline" value="+372 6891 1199">
						<label for="country">Country</label>
						<select id="country" name="country" class="underline">
							<option value="lv">Latvia</option>
							<option value="es" selected="">Estonia</option>
							<option value="lt">Lithuania</option>
						</select>
						<label for="city">City</label>
						<input type="text" id="city" name="city" class="underline" value="Tallinn">
						<label for="address">Address</label>
						<input type="text" id="address" name="address" class="underline" value="Streetname 2">
					</div>
					<div class="w100 spacing1"></div>
					<div class="col-12 col-md-4 col-lg-3">
						<h5>Other information</h5>
					</div>
					<div class="col-12 col-md-8 col-lg-6">
						<label for="newsletter">Newsletter frequency</label>
						<select id="newsletter" name="newsletter" class="underline">
							<option value="never">Never</option>
							<option value="daily">Daily</option>
							<option value="weekly">Weekly</option>
							<option value="monthly" selected="">Monthly</option>
							<option value="yearly">Yearly</option>
						</select>
						<p class="input-checkbox"><input type="checkbox" id="notify-funding" name="notify-funding" checked> <label for="notify-funding">Notify me about deposits / withdrawals</label></p>
						<p class="input-checkbox"><input type="checkbox" id="latest-news" name="latest-news" checked> <label for="latest-news">I want to get the latest news</label></p>
					</div>
					<div class="w100 spacing1"></div>
					<div class="col-12 col-md-4 col-lg-3">
						<h5>Change password</h5>
					</div>
					<div class="col-12 col-md-8 col-lg-6">
						<label for="current-password">Current password</label>
						<input type="password" id="current-password" name="current-password" class="underline">
						<label for="new-password">New password</label>
						<input type="password" id="new-password" name="new-password" class="underline">
						<label for="confirm-password">Confirm password</label>
						<input type="password" id="confirm-password" name="confirm-password" class="underline">
					</div>
					<div class="w100 spacing1"></div>
					<div class="col-12 col-md-8 col-lg-6 offset-md-4 offset-lg-3">
						<button type="submit">Save changes</button>
					</div>
				</div>
			</div>
		</main>
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

	<script src="assets/js/modernizr-custom.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/functions.js"></script>
</body>
</html>