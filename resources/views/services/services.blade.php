@extends('layouts.main')
@include('layouts.navigation')
@section('content')
<section class="w3l-inner-page-main">
    <div class="breadcrumb-infhny">
        <div class="container">
            <nav aria-label="breadcrumb">
                <h2 class="hny-title text-center">Services</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="w3l-services-sec-6">
    <div class="services-sec-6-main py-5">
        <div class="container py-lg-5">
            <div class="row services-second-part">
                <div class="col-lg-6 ser-hny-grids">
                    <h3 class="hny-title">What We Do <span class="dot-1">.</span></h3>
                    <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero justo
                        pulvinar et. Lorem ipsum dolor sit amet,Ea consequuntur .Ea consequuntur illum
                        facere aperiam sequi optio elit.</p>
                    <div class="row sub-hny-grids mt-lg-5 mt-4">
                        <div class="col-md-12 subhny-gd mt-md-0 mt-4">
                            <h5>Halal Certification.</h5>
                            <p>Dolor sed amet illum ut facere sed aperiam sequi optio consectetur.</p>
                        </div>
                    </div>
                    <div class="row sub-hny-grids mt-lg-5 mt-4">
                        <div class="col-md-12 subhny-gd mt-md-0 mt-4">
                            <h5>Halal Export.
                            </h5>
                            <p>Aperiam sequi init consequuntur illum, libero justo pulvinar et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ser-hny-img mt-lg-0 mt-5">
                    <img src='/images/bg.jpg' class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-services-6">
    <div class="services-grids-6 py-5">
        <div class="container py-lg-5">
            <div class="row w3-icon-grid-gap1">
                <div class="col-md-4 col-sm-6 w3-icon-grid1">
                    <a href="#link">
                        <span class="fa fa-codepen" aria-hidden="true"></span>
                        <h3>Training</h3>
                        <div class="clearfix"></div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                </div>
                <div class="col-md-4 col-sm-6 w3-icon-grid1">
                    <a href="#link">
                        <span class="fa fa-mobile" aria-hidden="true"></span>
                        <h3>Certification</h3>
                        <div class="clearfix"></div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                </div>
                <div class="col-md-4 col-sm-6 w3-icon-grid1">
                    <a href="#link">
                        <span class="fa fa-hourglass" aria-hidden="true"></span>
                        <h3>Exportation</h3>
                        <div class="clearfix"></div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                </div>
                {/* <div class="col-md-4 col-sm-6 w3-icon-grid1">
                    <a href="#link">
                        <span class="fa fa-modx" aria-hidden="true"></span>
                        <h3>Supervision</h3>
                        <div class="clearfix"></div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                </div> */}
                
            </div>
        </div>
    </div>
</section>

<section class="features-4">
	<div class="features4-block py-5">
		<div class="container py-lg-5">
			<h6>We are the best</h6>
			<h3 class="hny-title mb-0 text-center">Industries We Serve with Halal Certification <span class="dot-1">.</span></h3>
			<p class="what-para text-center mb-5">In our efforts to streamline the Halal lifestyle
			IHFC has partnered with the following organisations</p>
			<div class="features4-grids text-center row mt-5">
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
					<span > <img src='/images/fashion.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">Fashion</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam 
							sequi optio
							consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
					<div class="features4-grid-inn">
					<span > <img src='/images/solid.jfif' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">Solid Minerals</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi
							 optio
							consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span > <img src='/images/pharma.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">Pharmaceuticals</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
							consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span > <img src='/images/restaurant.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">FOOD SERVICES ESTABLISHMENTS</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
							consectetur.</p>

					</div>
				</div>	
			</div>
			<div class="features4-grids text-center row mt-5">
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
					<span > <img src='/images/meat.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">MEAT & POULTRY ABATTOIRS</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam 
							sequi optio
							consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
					<div class="features4-grid-inn">
					<span > <img src='/images/bg.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">Food Processing & Manufacturing</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi
							 optio
							consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span > <img src='/images/beverages.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">Beverages</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
							consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span > <img src='/images/restaurant.jpg' class="img-fluid" alt="portfolio-img"/></span>
						<h5><a href="#URL">Raw Materials</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
							consectetur.</p>

					</div>
				</div>	
			</div>
		</div>
		</div>
</section>
@endsection