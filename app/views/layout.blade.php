<!DOCTYPE html>
<html>
<head>
	<title>{{isset($pageTitle) ? $pageTitle : 'Home'}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{HTML::style('assets/reset.css')}}
	{{HTML::style('assets/plugins/animated-headline/style.css')}}
	{{HTML::style('assets/plugins/fixed-background/style.css')}}
	{{HTML::style('assets/plugins/thumbnail-grid/component.css')}}
	{{HTML::style('assets/plugins/mega-dropdown/css/style.css')}}
	{{HTML::style('assets/plugins/dialog-effect/demo.css')}}
	{{HTML::style('assets/plugins/dialog-effect/dialog.css')}}
	{{HTML::style('assets/plugins/dialog-effect/dialog-wilma.css')}}
	{{HTML::style('assets/plugins/custom-dropdown-list/style.css')}}
	<style type="text/css">
		body{
			padding-top: 100px;
		}
		.logo:before, .logo:after{
			content: " ";
			display: table; 
		}
		.logo:after{
			clear: both;
		}
		.logo {
			float: left;
			padding: 25px 15px;
			height: 100px;
		}

		.logo:hover, .logo:focus {
			text-decoration: none;
		}

		.logo img {
			display: inline;
			max-height: 100%;
			height: 100%;
		}
		button {
			padding: 1em 2em;
			outline: none;
			font-weight: 600;
			border: none;
			color: #fff;
			background: #c94e50;
		}
	</style>
	{{HTML::script('assets/modernizr.js')}}
	{{HTML::style('assets/plugins/custom-dropdown-list/noJs.css')}}
</head>
<body>
	<header>
		<a class="logo" href="/">
			<img src="/assets/images/Jogja_Istimewa.svg" alt="logo-jogja">
		</a>
		<div class="cd-dropdown-wrapper open-to-left">
			<a class="cd-dropdown-trigger" href="#0">Menu</a>
			<nav class="cd-dropdown">
				<h2>Daftar Menu</h2>
				<a href="#0" class="cd-close">Tutup</a>
				<ul class="cd-dropdown-content">
					<li>
						<form class="cd-search">
							<input type="search" placeholder="Cari...">
						</form>
					</li>
					<li><a href="/acara-dan-atraksi">Acara dan Atraksi</a></li>

					<li class="has-children">
						<a href="#">Akomodasi</a>
						<ul class="cd-dropdown-gallery is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li class="see-all" style="visibility: hidden"><a href="#"></a></li>
							<li>
								<a class="cd-dropdown-item" href="#" onclick="showDialog()">
									<img src="/assets/images/hotel.jpg"alt="Hotel Image">
									<h3>Hotel</h3>
								</a>
							</li>
							<li>
								<a class="cd-dropdown-item" href="/akomodasi/restoran">
									<img src="/assets/plugins/mega-dropdown/img/img.png" alt="Product Image">
									<h3>Restoran</h3>
								</a>
							</li>
							<li>
								<a class="cd-dropdown-item" href="/akomodasi/transportasi">
									<img src="/assets/plugins/mega-dropdown/img/img.png" alt="Product Image">
									<h3>Transportasi</h3>
								</a>
							</li>
						</ul>
					</li>

					<li class="has-children">
						<a href="#">Destinasi</a>
						<ul class="cd-dropdown-icons is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li>
								<a class="cd-dropdown-item item-1" href="/destinasi/bangunan-cagar-budaya">
									<h3>Bangunan Cagar Budaya</h3>
									<p>Daftar Bangunan Cagar Budaya<br />Kota Yogyakarta</p>
								</a>
							</li>
							<li>
								<a class="cd-dropdown-item item-2" href="/destinasi/kampung-wisata">
									<h3>Kampung Wisata</h3>
									<p>Daftar Kampung Wisata<br /> Kota Yogyakarta</p>
								</a>
							</li>
							<li>
								<a class="cd-dropdown-item item-3" href="/destinasi/landmark">
									<h3>Landmark</h3>
									<p>Daftar Landmark <br /> Kota Yogyakarta</p>
								</a>
							</li>
							<li>
								<a class="cd-dropdown-item item-4" href="/destinasi/museum">
									<h3>Museum</h3>
									<p>Daftar Museum <br /> Kota Yogyakarta</p>
								</a>
							</li>
							<li>
								<a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
									<h3>Night Life</h3>
									<p>Kehidupan Malam<br /> Kota Yogyakarta</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="cd-divider">Divider</li>

					<li><a href="/kontak">Kontak</a></li>
				</ul>
			</nav>
		</div>
		<button id="hotel" data-dialog="somedialog" class="trigger" style="visibility: hidden">Open Dialog</button>
		<div id="somedialog" class="dialog" style="z-index: 10000">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<div class="morph-shape">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
						<rect x="3" y="3" fill="none" width="556" height="276"/>
					</svg>
				</div>
				<div class="dialog-inner">
					<h2><strong>Hai</strong>, pilih jenis Hotel</h2>
					<div id="dd" class="wrapper-dropdown-2" tabindex="1" style="z-index: 10001">Jenis Hotel
						<ul class="dropdown">
							<li><a href="/akomodasi/hotel">Non Bintang</a></li>
							<li><a href="#">Bintang 1</a></li>
							<li><a href="#">Bintang 2</a></li>
							<li><a href="#">Bintang 3</a></li>
							<li><a href="#">Bintang 4</a></li>
							<li><a href="#">Bintang 5</a></li>
						</ul>
					</div>
					<br />
					<div><button class="action" data-dialog-close>Close</button></div>
				</div>
			</div>
		</div>
	</header>
	@yield('content')
	{{HTML::script('assets/jquery-2.1.3.min.js')}}
	{{HTML::script('assets/plugins/animated-headline/main.js')}}
	{{HTML::script('assets/plugins/thumbnail-grid/grid.js')}}
	{{HTML::script('assets/plugins/mega-dropdown/js/jquery.menu-aim.js')}}
	{{HTML::script('assets/plugins/mega-dropdown/js/main.js')}}
	{{HTML::script('assets/plugins/dialog-effect/classie.js')}}
	{{HTML::script('assets/plugins/dialog-effect/dialogFx.js')}}
	<script type="text/javascript">
		function showDialog () {
			$('#hotel').click();
		}
		$(function() {
			Grid.init();
		});

		(function() {

			var dlgtrigger = document.querySelector( '[data-dialog]' ),
			somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
			dlg = new DialogFx( somedialog );

			dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

		})();

		function DropDown(el) {
			this.dd = el;
			this.initEvents();
		}
		DropDown.prototype = {
			initEvents : function() {
				var obj = this;

				obj.dd.on('click', function(event){
					$(this).toggleClass('active');
					event.stopPropagation();
				});	
			}
		}

		$(function() {

			var dd = new DropDown( $('#dd') );

			$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

		});

	</script>
</body>
</html>