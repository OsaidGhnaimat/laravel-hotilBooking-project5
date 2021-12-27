@extends('pages.layout.master')

@section('content')

		<div class="hero-wrap" style="background-image: url('/images/mcover1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <a href="{{route('restaurant')}}"><span>Restaurant</span></a></p>
	            <h1 class="mb-4 bread">Restaurant</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
      			<div class="single-slider-resto mb-4 mb-md-0 owl-carousel">
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url(/images/room-4.jpg);"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url(/images/room-5.jpg);"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url(/images/room-6.jpg);"></div>
      				</div>
      			</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About Harbor Lights Hotel</span>
	            <h2 class="mb-4">Harbor Lights Hotel Restaurants</h2>
	          </div>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          <p><a href="#" class="btn btn-secondary rounded">More info</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-menu bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Harborlights Resto Menu</span>
            <h2>Our Specialties</h2>
          </div>
        </div>
				<div class="row">
					
					@foreach ($meals as $item)
						
					
        	<div class="col-lg-6 col-xl-6 d-flex">
				<a href="{{route('single-meal',['id'=>$item->id] )}}">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url({{$item->meal_img}});"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>{{$item->name}}</span></h3>
	        				<span class="price">${{$item->price}}</span>
	        			</div>
	        			<div class="d-block">
	        				<p>{{$item->description}}</p>
	        			</div>
        			</div>
        		</div>
			</a>
        	</div>

			@endforeach
		
        	
        </div>
			</div>
		</section>

		@endsection
