@extends('layouts.frontLayouts.front_design')
@section('content')
<!--banner-->
<div class="banner">
	<div class="container">
		<div class="banner-text">			
			<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">			
				<h2>On Entire Fashion range</h2>
				<h3>Coming Soon </h3>
				<h4>Our New Designs</h4>
				<div class="count main-row">
					<ul id="example">
						<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
						<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
						<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
					</ul>
						<div class="clearfix"> </div>
						<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
						<script type="text/javascript">
							$('#example').countdown({
								date: '12/24/2020 15:59:59',
								offset: -8,
								day: 'Day',
								days: 'Days'
							}, function () {
								alert('Done!');
							});
						</script>
				</div>

			</div>
			<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">			
				<section class="slider grid">
					<div class="flexslider">
						<ul class="slides">
							@foreach($sliderimages as $images)
							<li>
								<h4 style="margin-left: -150px;">{{$images->service_name}}</h4>
								<img src="{{ asset('images/backend_images/products/small/'.$images->image)}}" alt="">
							</li>
							@endforeach
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "pagination",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
				<!--End-slider-script-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>			
<!--//banner-->
<!--new-->
<div class="new">
	<div class="container">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Our <span>Design Services</span></h3>
			<p>Check out our services here!! </p>
		</div>
		<div class="new-info">
			@foreach($allServices as $service)
			<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" style="margin-right: 10px; margin-top: 25px;" data-wow-delay=".9s">
				<div class="new-top">
					<a href="single.html"><img src="{{asset('images/backend_images/products/small/'.$service->image)}}" class="img-responsive" alt=""/></a>
					<div class="new-text">
						<ul>
							<li><a href="{{url('/products')}}">Get Started </a></li>
						</ul>
					</div>
				</div>
				<div class="new-bottom">
					<h5><a class="name" href="single.html">{{$service->product_name}} </a></h5>
					<div class="rating">
						<span class="on">☆</span>
						<span class="on">☆</span>
						<span class="on">☆</span>
						<span class="on">☆</span>
						<span>☆</span>
					</div>	
				</div>
			</div>
			@endforeach
			<div class="clearfix"> </div>
		</div>
	</div>
</div>		
<!--//new-->
<!--gallery-->
<div class="gallery">
	<div class="container">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">What We<span> Have Done </span></h3>
			<p>Some of the Beautiful Designs We have Done </p>
		</div>
		<div class="gallery-info">
			@foreach($jobsdone as $jobs)
			<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".1.1s" style="margin-right: 10px; margin-top: 25px;">
				<a href="products.html"><img src="{{asset('images/backend_images/products/small/'.$jobs->image)}}" class="img-responsive" alt=""/></a>
				<div class="gallery-text simpleCart_shelfItem">
					<h5><a class="name" href="single.html">{{$jobs->category_name}} </a></h5>
					<ul>
						<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
						<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
						<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
					</ul>
					<h5><a class="name" href="{{url('/products')}}">Get Started </a></h5>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//gallery-->
<!--trend-->
<div class="trend wow zoomIn animated" data-wow-delay="1.2s">
	<div class="container">
		<div class="trend-info">
			<section class="slider grid">
				<div class="flexslider trend-slider">
					<ul class="slides">
						<li>
							<div class="col-md-5 trend-left">
								<img src="images/t1.png" alt=""/>
							</div>
							<div class="col-md-7 trend-right">
								<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
								<h5>Flat 20% OFF</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-5 trend-left">
								<img src="images/t2.png" alt=""/>
							</div>
							<div class="col-md-7 trend-right">
								<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
								<h5>Flat 20% OFF</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-5 trend-left">
								<img src="images/t3.png" alt=""/>
							</div>
							<div class="col-md-7 trend-right">
								<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
								<h5>Flat 20% OFF</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-5 trend-left">
								<img src="images/t4.png" alt=""/>
							</div>
							<div class="col-md-7 trend-right">
								<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
								<h5>Flat 20% OFF</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
<!--//trend-->
@endsection