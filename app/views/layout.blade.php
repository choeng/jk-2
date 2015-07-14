<!DOCTYPE html>
<html class="no-js">
<head>
	<title>{{isset($pageTitle) ? $pageTitle : 'Home'}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{HTML::style('/assets/reset.css')}}
	{{HTML::style('/assets/plugins/animated-headline/style.css')}}
	{{HTML::style('/assets/plugins/mega-site-navigation/style.css')}}
	{{HTML::style('/assets/plugins/fixed-background/style.css')}}
	{{HTML::style('/assets/plugins/footer.css')}}
	{{HTML::style('/assets/plugins/top.css')}}
	{{HTML::script('/assets/modernizr.js')}}
</head>
<body class="nav-is-fixed nav-on-left">
	<header class="cd-main-header">
		<a class="cd-logo" href="/"><img src="/assets/images/Jogja_Istimewa.svg" alt="Logo Jogja"></a>
		<ul class="cd-header-buttons">
			<li><a class="cd-search-trigger" href="#cd-search">Search<span></span></a></li>
			<li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
		</ul> <!-- cd-header-buttons -->
	</header>

	<div class="cd-overlay"></div>

	<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li class="has-children">
				<a href="#">Tourism</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="#">Menu</a></li>
					<li class="see-all"><a href="#">All Tourism</a></li>
					<li class="has-children">
						<a href="http://codyhouse.co/?p=409">History and Culture Tourism</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#">Tourism</a></li>
							<li class="see-all"><a href="http://codyhouse.co/?p=409">All History and Culture Tourism</a></li>
							<li><a href="#">Sultan Palace of Yogyakarta</a></li>
							<li><a href="#">Grand Mosque</a></li>
							<li><a href="#">Pakualaman Palace</a></li>
							<li><a href="#">Taman Sari Water Castle</a></li>
							<li><a href="#">Kota Gedhe</a></li>
							<li><a href="#">The State Buildings</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#">Museum Tourism</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#">Tourism</a></li>
							<li class="see-all"><a href="#">All Musem Tourism</a></li>
							<li class="has-children">
								<a href="#">Sonobudoyo Museum</a>
								<ul class="is-hidden">
									<li class="go-back"><a href="#">Museum Tourism</a></li>
									<li><a href="#">Sonobudoyo Museum</a></li>
									<li><a href="#">Sonobudoyo Museum 2nd Unit</a></li>
								</ul>
							</li>
							<li><a href="#">Biology Museum</a></li>
							<li><a href="#">Sasana Wiratama Museum</a></li>
							<li><a href="#">Sasmita Loka Museum</a></li>
							<li><a href="#">Fort Vredeburg Museum</a></li>
							<li><a href="#">Bahari Museum</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#">Education Tourism</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#">Tourism</a></li>
							<li><a href="#">Taman Pintar</a></li>
							<li><a href="#">Banana Plantation Garden</a></li>
							<li><a href="#">Gembira Loka Zoo and Park</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#">Unique Culinary Tourism</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#">Tourism</a></li>
							<li><a href="#">Angkringan and Jos Coffee</a></li>
							<li><a href="#">Culinary at Lesehan Malioboro</a></li>
							<li><a href="#">Gudeg Wijilan</a></li>
							<li><a href="#">Javanese Noodle</a></li>
							<li><a href="#">Kipo &amp; Legomoro</a></li>
							<li><a href="#">Yangko &amp; Bakpia Pathuk</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#">Shopping Tourism</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#">Tourism</a></li>
							<li><a href="#">Malioboro Street</a></li>
							<li><a href="#">XT Square</a></li>
							<li><a href="#">Klithikan Market</a></li>
							<li><a href="#">Urip Sumoharjo Street</a></li>
							<li><a href="#">Tirtodipuran</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#">Urban Tourism</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#">Tourism</a></li>
							<li><a href="#">Purbayan</a></li>
							<li><a href="#">Pandeyan</a></li>
							<li><a href="#">Cokrodiningratan</a></li>
							<li><a href="#">Kadipaten</a></li>
							<li><a href="#">Dipowinatan</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li><a href="#">Tourism Attraction</a></li>

			<li class="has-children">
				<a href="#">Tourism Facility</a>
				<ul class="cd-nav-gallery is-hidden">
					<li class="go-back"><a href="#">Menu</a></li>
					<li class="see-all"><a href="/tourism-facilities/all">All Tourism Facility</a></li>
					<li>
						<a class="cd-nav-item" href="/tourism-facilities/hotels">
							<img src="/assets/images/hotel.jpg" alt="Hotels">
							<h3>Hotels</h3>
						</a>
					</li>
					<li>
						<a class="cd-nav-item" href="/tourism-facilities/restaurants">
							<img src="/assets/images/bg1r.png" alt="Restaurants">
							<h3>Restaurants</h3>
						</a>
					</li>
					<li>
						<a class="cd-nav-item" href="/tourism-facilities/transportation-facilities">
							<img src="/assets/images/img.jpg" alt="Transportation Facilities">
							<h3>Transportation Facilities</h3>
						</a>
					</li>
					<li>
						<a class="cd-nav-item" href="/tourism-facilities/money-changers">
							<img src="/assets/images/img.jpg" alt="Money Changers">
							<h3>Money Changers</h3>
						</a>
					</li>
				</ul>
			</li>
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->

	<div id="cd-search" class="cd-search">
		<form>
			<input type="search" placeholder="Search...">
		</form>
	</div>

	<main class="cd-main-content">
		<!-- your content here -->
		@yield('content')
		<footer>

		</footer>
	</main>
	<a href="#" class="cd-top">Top</a>
	{{HTML::script('/assets/jquery-2.1.3.min.js')}}
	{{HTML::script('/assets/plugins/mega-site-navigation/jquery.mobile.custom.min.js')}}
	{{HTML::script('/assets/plugins/mega-site-navigation/main.js')}}
	{{HTML::script('/assets/plugins/animated-headline/main.js')}}
	{{HTML::script('/assets/plugins/main.js')}}
</body>
</html>