@include('frontend.layouts.head')
<body class="navbar-sticky">
	@include('frontend.layouts.header')
	<header id="featured" class="site-featured">
		<div id="featured-media" class="featured-media has-media">
			<div class="featured-text">
				<div class="container">
					<h2 class="entry-title">Projects</h2>
					<div class="tagline">We make investing in loans easy.</div>
				</div>
			</div>
			<img src="tmp/sample-header.jpg" alt="">
		</div>
	</header>

	<div id="content" class="site-content">
		<main class="site-section section-main">
			<div class="container">
				<form action="projects.html" class="project-filters">
					<div class="filter-props">
						<p class="project-filter filter-status">
							<label>Status</label>
							<select name="status" id="status">
								<option value="new" selected="selected">New</option>
								<option value="coming-soon">Coming soon</option>
								<option value="funded">Funded</option>
								<option value="repaid">Repaid</option>
							</select>
						</p>
						<p class="project-filter filter-return">
							<label>Interest rate</label>
							<input class="minReturn" type="text" placeholder="From">
							<input class="maxReturn" type="text" placeholder="To">
						</p>
						<p class="project-filter filter-country">
							<label>Country</label>
							<select name="country" id="country">
								<option value="">All</option>
								<option value="es">Estonia</option>
								<option value="lv">Latvia</option>
								<option value="lt">Lithuania</option>
								<option value="world">Worldwide</option>
							</select>
						</p>
						<p class="project-filter filter-type">
							<label>Loan type</label>
							<select name="type" id="type">
								<option value="">All</option>
								<option value="business">Business</option>
								<option value="sme">SME</option>
								<option value="leasing">Leasing</option>
								<option value="realestate">Real estate</option>
							</select>
						</p>
					</div>
					<div class="filter-actions">
						<button type="submit" class="button-primary"><em class="mdi mdi-filter"></em> Filter projects</button>
						<button type="reset"><em class="mdi mdi-restart"></em> Reset filters</button>
					</div>
				</form>
				<div class="project-listing">
					<div class="entry-project project-status-active">
						<div class="project-media">
							<a href="single-project.html">
								<img src="tmp/sample-project.jpg" width="800" height="600" alt="">
								<span class="project-industry" title="Investment type"><em class="mdi mdi-information"></em> Business &mdash; Transportation</span>
								<span class="project-country" title="Estonia"><img class="office-country" src="assets/images/ee.svg" width="24" alt=""> <em class="screen-reader-text">Estonia</em></span>
							</a>
							<span class="project-status"><em class="mdi mdi-plus"></em> Active</span>
						</div>
						<div class="project-details">
							<h3 class="project-title"><a href="single-project.html">Road freight transport</a></h3>
							<p class="project-summary">Capital for buying and transporting goods accessible in your investor account as soon as the project repayment is completed.</p>
							<div class="project-specs">
								<div class="project-total-invested">
									<strong><span class="currency-sign">€</span>40 000</strong>
									<span>Target</span>
								</div>
								<div class="project-return">
									<strong>14%</strong>
									<span>Expected return</span>
								</div>
								<div class="project-term">
									<strong>8 months</strong>
									<span>Term</span>
								</div>
								<div class="project-countdown">
									<strong>21 days</strong>
									<span>To invest</span>
								</div>
							</div>
							<div class="project-progress">
								<div class="progress-bar">
									<div class="progress-current" style="width:48.665%"></div>
									<div class="progress-minimum" style="width:62.5%">
										<div class="progress-minimum-pointer">
											<span class="project-minimum-goal-info">Min<span class="screen-reader-text">imum</span> goal</span>
											<span class="project-minimum-goal-amount"><span class="currency-sign">€</span>25 000</span>
										</div>
									</div>
								</div>
								<div class="progress-info">
									<div class="progress-current-amount"><strong><span class="currency-sign">€</span>19 466</strong> invested</div>
									<div class="progress-amount-left"><strong><span class="currency-sign">€</span>20 534</strong> left</div>
								</div>
							</div>
							<div class="project-actions">
								<a href="single-project.html" class="button button-primary">Details</a>
							</div>
						</div>
					</div>
					<div class="entry-project project-status-active">
						<div class="project-media">
							<a href="single-project.html">
								<img src="tmp/sample-project.jpg" width="800" height="600" alt="">
								<span class="project-industry" title="Investment type"><em class="mdi mdi-information"></em> Business &mdash; Construction</span>
								<span class="project-country" title="Latvia"><img class="office-country" src="assets/images/lv.svg" width="24" alt=""> <em class="screen-reader-text">Estonia</em></span>
							</a>
							<span class="project-status"><em class="mdi mdi-plus"></em> Active</span>
						</div>
						<div class="project-details">
							<h3 class="project-title"><a href="single-project.html">Construction company capital</a></h3>
							<p class="project-summary">Cover remaining 30% hotel construction costs growth of your investments daily and track your portfolio and returns.</p>
							<div class="project-specs">
								<div class="project-total-invested">
									<strong><span class="currency-sign">€</span>83 000</strong>
									<span>Target</span>
								</div>
								<div class="project-return">
									<strong>13%</strong>
									<span>Expected return</span>
								</div>
								<div class="project-term">
									<strong>20 months</strong>
									<span>Term</span>
								</div>
								<div class="project-countdown">
									<strong>27 days</strong>
									<span>To invest</span>
								</div>
							</div>
							<div class="project-progress">
								<div class="progress-bar">
									<div class="progress-current" style="width:57.5614458%"></div>
									<div class="progress-minimum" style="width:36.1445783%">
										<div class="progress-minimum-pointer">
											<span class="project-minimum-goal-info">Min<span class="screen-reader-text">imum</span> goal</span>
											<span class="project-minimum-goal-amount"><span class="currency-sign">€</span>30 000</span>
										</div>
									</div>
								</div>
								<div class="progress-info">
									<div class="progress-current-amount"><strong><span class="currency-sign">€</span>47 776</strong> invested</div>
									<div class="progress-amount-left"><strong><span class="currency-sign">€</span>35 224</strong> left</div>
								</div>
							</div>
							<div class="project-actions">
								<a href="single-project.html" class="button button-primary">Details</a>
							</div>
						</div>
					</div>
					<div class="entry-project project-status-active">
						<div class="project-media">
							<a href="single-project.html">
								<img src="tmp/sample-project.jpg" width="800" height="600" alt="">
								<span class="project-industry" title="Investment type"><em class="mdi mdi-information"></em> Business - Forestry</span>
								<span class="project-country" title="Lithuania"><img class="office-country" src="assets/images/lt.svg" width="33" alt=""> <em class="screen-reader-text">Lithuania</em></span>
							</a>
							<span class="project-status"><em class="mdi mdi-plus"></em> Active</span>
						</div>
						<div class="project-details">
							<h3 class="project-title"><a href="single-project.html">Forestry land management</a></h3>
							<p class="project-summary">Purchase land for sustainable forestry that we only accept deposits from credit, payment or electronic money institutions within the European Union.</p>
							<div class="project-specs">
								<div class="project-total-invested">
									<strong><span class="currency-sign">€</span>300 000</strong>
									<span>Target</span>
								</div>
								<div class="project-return">
									<strong>13%</strong>
									<span>Expected return</span>
								</div>
								<div class="project-term">
									<strong>12 months</strong>
									<span>Term</span>
								</div>
								<div class="project-countdown">
									<strong>29 days</strong>
									<span>To invest</span>
								</div>
							</div>
							<div class="project-progress">
								<div class="progress-bar">
									<div class="progress-current" style="width:27.5%"></div>
									<div class="progress-minimum" style="width:33.3%">
										<div class="progress-minimum-pointer">
											<span class="project-minimum-goal-info">Min<span class="screen-reader-text">imum</span> goal</span>
											<span class="project-minimum-goal-amount"><span class="currency-sign">€</span>100 000</span>
										</div>
									</div>
								</div>
								<div class="progress-info">
									<div class="progress-current-amount"><strong><span class="currency-sign">€</span>82 550</strong> invested</div>
									<div class="progress-amount-left"><strong><span class="currency-sign">€</span>217 450</strong> left</div>
								</div>
							</div>
							<div class="project-actions">
								<a href="single-project.html" class="button button-primary">Details</a>
							</div>
						</div>
					</div>
					<div class="entry-project project-status-active">
						<div class="project-media">
							<a href="single-project.html">
								<img src="tmp/sample-project.jpg" width="800" height="600" alt="">
								<span class="project-industry" title="Investment type"><em class="mdi mdi-information"></em> Real Estate</span>
								<span class="project-country" title="Latvia"><img class="office-country" src="assets/images/lv.svg" width="33" alt=""> <em class="screen-reader-text">Latvia</em></span>
							</a>
							<span class="project-status"><em class="mdi mdi-plus"></em> Active</span>
						</div>
						<div class="project-details">
							<h3 class="project-title"><a>Apartment building renovation</a></h3>
							<p class="project-summary">Funds for increasing the efficency class rating during the morning to copy out the contract, these gentlemen are still sitting there eating their breakfasts.</p>
							<div class="project-specs">
								<div class="project-total-invested">
									<strong><span class="currency-sign">€</span>225 000</strong>
									<span>Target</span>
								</div>
								<div class="project-return">
									<strong>16%</strong>
									<span>Expected return</span>
								</div>
								<div class="project-term">
									<strong>23 months</strong>
									<span>Term</span>
								</div>
								<div class="project-countdown">
									<strong>30 days</strong>
									<span>To invest</span>
								</div>
							</div>
							<div class="project-progress">
								<div class="progress-bar">
									<div class="progress-current" style="width:8.275%"></div>
									<div class="progress-minimum" style="width:57.7%">
										<div class="progress-minimum-pointer">
											<span class="project-minimum-goal-info">Min<span class="screen-reader-text">imum</span> goal</span>
											<span class="project-minimum-goal-amount"><span class="currency-sign">€</span>130 000</span>
										</div>
									</div>
								</div>
								<div class="progress-info">
									<div class="progress-current-amount"><strong><span class="currency-sign">€</span>18 620</strong> invested</div>
									<div class="progress-amount-left"><strong><span class="currency-sign">€</span>206 380</strong> left</div>
								</div>
							</div>
							<div class="project-actions">
								<a href="single-project.html" class="button button-primary">Details</a>
							</div>
						</div>
					</div>
					<div class="entry-project project-status-active">
						<div class="project-media">
							<a href="single-project.html">
								<img src="tmp/sample-project.jpg" width="800" height="600" alt="">
								<span class="project-industry" title="Investment type"><em class="mdi mdi-information"></em> Business &mdash; Agriculture</span>
								<span class="project-country" title="Latvia"><img class="office-country" src="assets/images/lv.svg" width="33" alt=""> <em class="screen-reader-text">Latvia</em></span>
							</a>
							<span class="project-status"><em class="mdi mdi-plus"></em> Active</span>
						</div>
						<div class="project-details">
							<h3 class="project-title"><a>Agriculture company equipment rental</a></h3>
							<p class="project-summary">Additional equipment for this season hard return creates too much space between content in the context of a paragraph</p>
							<div class="project-specs">
								<div class="project-total-invested">
									<strong><span class="currency-sign">€</span>65 000</strong>
									<span>Target</span>
								</div>
								<div class="project-return">
									<strong>15%</strong>
									<span>Expected return</span>
								</div>
								<div class="project-term">
									<strong>3 months</strong>
									<span>Term</span>
								</div>
								<div class="project-countdown">
									<strong>31 days</strong>
									<span>To invest</span>
								</div>
							</div>
							<div class="project-progress">
								<div class="progress-bar">
									<div class="progress-current" style="width:5.26%"></div>
									<div class="progress-minimum" style="width:83.3%">
										<div class="progress-minimum-pointer">
											<span class="project-minimum-goal-info">Min<span class="screen-reader-text">imum</span> goal</span>
											<span class="project-minimum-goal-amount"><span class="currency-sign">€</span>50 000</span>
										</div>
									</div>
								</div>
								<div class="progress-info">
									<div class="progress-current-amount"><strong><span class="currency-sign">€</span>3 424</strong> invested</div>
									<div class="progress-amount-left"><strong><span class="currency-sign">€</span>61 576</strong> left</div>
								</div>
							</div>
							<div class="project-actions">
								<a href="single-project.html" class="button button-primary">Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="pagination">
					<span class="page-numbers current">1</span>
					<a href="projects.html" class="page-numbers">2</a>
					<span class="page-numbers dots">…</span>
					<a href="projects.html" class="page-numbers">5</a>
					<a href="projects.html" class="page-numbers">Next page<span class="mdi mdi-chevron-right"></span></a>
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