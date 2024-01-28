<header id="top-header" class="site-header">
		<div class="container">
			<div class="site-identity">
				<a href="index.html" class="site-title"><img src="{{asset('frontend_assets/images/logo.png')}}" class="custom-logo" width="209" height="18" alt="CrowdInvest"></a>
				<p class="site-description screen-reader-text">Business crowdfunding platform</p>
			</div>
			<!-- <nav class="language-navigation">
				<ul id="language-menu" class="menu">
					<li class="menu-item-has-children">
						<a href="index.html"><img src="{{asset('frontend_assets/images/en.svg')}}" width="17" alt=""><span>En<em class="mdi mdi-chevron-down"></em></span></a>
						<ul class="sub-menu">
							<li class="current-menu-item"><a href="index.html">English</a></li>
							<li><a href="index.html">German</a></li>
							<li><a href="index.html">Spanish</a></li>
						</ul>
					</li>
				</ul>
			</nav> -->
			<nav class="main-navigation">
				<ul id="menu-main" class="menu">
				<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{route('projects')}}">Projects</a></li>
					<li class="menu-item-has-children">
						<a href="{{route('about')}}">About<em class="mdi mdi-chevron-down"></em></a>
						<!-- <ul class="sub-menu">
							<li><a href="{{route('about')}}">About Us</a></li> -->
							<!-- <li><a href="#">Careers</a></li>
							<li><a href="statistics.html">Statistics</a></li>
							<li><a href="affiliate.html">Affiliate Program</a></li> -->
						<!-- </ul> -->
					</li>
					<li><a href="{{route('blog')}}">News</a></li>
					<!-- <li><a href="styleguide.html">Styleguide</a></li> -->
					<li class="menu-item-has-children">
						<a href="{{route('help')}}">Help<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="{{route('terms-conditions')}}">Term & Conditions</a></li>
							<li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
						</ul>
					</li>
					<li><a href="{{route('contact')}}">contact</a></li>
					<li><a href="{{route('login')}}">Login</a></li>

					<!-- <li class="menu-account menu-item-has-children">
						<a href="account-overview.html"><em class="mdi mdi-account-outline"></em> <span class="account-details"><span class="account-name">John Doe</span> <span class="account-balance"><em class="screen-reader-text">Total balance: </em><strong class="account-balance-amount">€215.50</strong></span></span><em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="account-overview.html">Overview</a></li>
							<li><a href="account-investments.html">Investments</a></li>
							<li><a href="account-statement.html">Statement</a></li>
							<li><a href="account-funding.html">Funding</a></li>
							<li><a href="account-profile.html">Profile</a></li>
							<li class="account-logout"><a href="#">Logout</a></li>
						</ul>
					</li> -->
				</ul>
			</nav>
			<div id="menu-toggle">
				<a href="#menu-main" title="Toggle menu">
					<em class="mdi mdi-menu"></em><em class="mdi mdi-close"></em>
					<span class="screen-reader-text">Menu</span>
				</a>
			</div>
		</div>
	</header>