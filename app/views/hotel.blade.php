@extends('layout')
@section('content')
<main class="cd-main-content">
	<div class="cd-fixed-bg ca cd-bg-2">
		<h1>Hotel</h1>
	</div> 
	<div class="cd-scrolling-bg cd-color-2">
		<div class="cd-container ca">
			<div class="col-md-12">
				{{-- <div class="row text-center"> --}}
					{{-- <select id="cd-dropdown" class="cd-select">
						<option value="1" selected class="icon-chrome">Bintang 1</option>
						<option value="2" class="icon-safari">Bintang 2</option>
						<option value="3" class="icon-IE">Bintang 3</option>
						<option value="4" class="icon-firefox">Bintang 4</option>
						<option value="5" class="icon-opera">Bintang 5</option>
					</select> --}}
					{{-- <div id="list" class="list-group list-group-horizontal">
						<a href="#" class="list-group-item active">Bintang 1</a>
						<a href="#" class="list-group-item">Bintang 2</a>
						<a href="#" class="list-group-item">Bintang 3</a>
						<a href="#" class="list-group-item">Bintang 4</a>
						<a href="#" class="list-group-item">Bintang 5</a>
					</div> --}}
					{{-- <div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">Bintang</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Bintang 1</a>
									</li>
									<li>
										<a href="#">Bintang 2</a>
									</li>
									<li>
										<a href="#">Bintang 3</a>
									</li>
									<li>
										<a href="#">Bintang 4</a>
									</li>
									<li>
										<a href="#">Bintang 5</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Non Bintang</a>
							</li>
						</ul>
					</div> --}}
				{{-- </div> --}}
				<div class="row">
					<ul id="og-grid" class="og-grid">
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="/assets/images/thumbs/1.jpg" alt="img01"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
								<img src="/assets/images/thumbs/2.jpg" alt="img02"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
								<img src="/assets/images/thumbs/3.jpg" alt="img03"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="/assets/images/thumbs/1.jpg" alt="img01"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
								<img src="/assets/images/thumbs/2.jpg" alt="img02"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
								<img src="/assets/images/thumbs/3.jpg" alt="img03"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="/assets/images/thumbs/1.jpg" alt="img01"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
								<img src="/assets/images/thumbs/2.jpg" alt="img02"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
								<img src="/assets/images/thumbs/3.jpg" alt="img03"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="/assets/images/thumbs/1.jpg" alt="img01"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
								<img src="/assets/images/thumbs/3.jpg" alt="img03"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="/assets/images/thumbs/1.jpg" alt="img01"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
								<img src="/assets/images/thumbs/3.jpg" alt="img03"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="/assets/images/thumbs/1.jpg" alt="img01"/>
							</a>
						</li>
						<li>
							<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="/assets/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
								<img src="/assets/images/thumbs/2.jpg" alt="img02"/>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> 
	</div> 
</main>
@stop
