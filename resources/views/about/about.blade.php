@extends('layouts.main')
@include('layouts.navigation')
@section('content')
<section class="w3l-inner-page-main">
    <div class="breadcrumb-infhny">
      <div class="container">
        <nav aria-label="breadcrumb">
          <h2 class="hny-title text-center">About Us</h2>
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="w3l-wecome-content-6">
    <div class="ab-content-6-mian py-5">
         <div class="container py-lg-5">
                <div class="welcome-grids row">
                        <div class="col-lg-6 mb-lg-0 mb-5">
                            <h3 class="hny-title">Welcome
                                <br/>About IHFC<span class="dot-1">.</span></h3>
                            <p class="my-4">International Halal Family Center (IHFC) is an independent,
                                        voluntaryorganization, registered under RC 1426832 as the
                                         commercial arm of the Islamic Family Foundation (IFF).  It is 
                              focused on Halal Advocacy, Development and Training.
                            </p>
                            <p class="mb-4">IHFC is involved in the supervision, Inspection, audit,
                              certification, training and compliance of halal principles and 
                              practices in the food and beverages industry within Nigeria</p>
                            
                            <div class="read">
                            <p class="my-4">IHFC is also in the agricultural commodities business, which invloves sourcing,
                              cleaning, processing, packaging and sales of agricultural commidities to customers within and
                              outside Nigeria
                            </p>
                            </div>	
                        </div>
                        <div class="col-lg-6 col-md-8 col-6 welcome-image">
                                <img src='/images/consumables.png' class="img-fluid" alt="" />
                        </div>
                    </div>	
             
             </div>
         </div>
 </section>

 <section class="w3l-content-12-main">
	<div class="content-12 text-left py-5">
		<div class="container py-lg-5">
			<div class="content-info-tabs">
				<input id="tab1" type="radio" name="tabs" checked/>
				<label class="tabtle" for="tab1">Mission Statement</label>
				<input id="tab2" type="radio" name="tabs"/>
				<label class="tabtle" for="tab2">Vision</label>
				<input id="tab3" type="radio" name="tabs"/>
				<label class="tabtle" for="tab3">Our Values</label>
				<section id="content1" class="tab-content">
					<div class="row content12 align-items-center">
						<div class="col-lg-6 column">
              {{-- <h6 class="content-heading">Customized digital media solutions</h6> --}}
              <p class="content-para">To contribute to the socio-economic development of
                 Nigeria and beyond through linkages into sustainable value chains for domestic agricultural
                produce, raw materials for manufacture and pharmaceuticals, Fashion , Herbs, Cream and solid 
                minerals
              </p>
              <p class="content-para">To be a great player in using Halal Concept to eradicate resfulness</p>
              <p class="content-para">Empowerment of women and young adult</p>
						</div>
						<div class="col-lg-6 column">
							<img src='/images/mission.png' class="img-fluid" alt=""/>
						</div>

					</div>
				</section>
				<section id="content2" class="tab-content">
					<div class="row content12 align-items-center">
						<div class="col-lg-6 column">
							{{-- <h6 class="content-heading">Responsive web design experts</h6> --}}
							<p class="content-para">To have a just and equitable society that enjoins core principles
                of the maqasidul Shariah through Halal vocation and advocacy.
              </p>
						</div>
						<div class="col-lg-6 column">
							<img src='/images/vision.png' class="img-fluid" alt=""/>
						</div>
					</div>
				</section>
				<section id="content3" class="tab-content">
					<div class="row content12 align-items-center">
						<div class="col-lg-6 column">
							{{-- <h6 class="content-heading">Custom application development</h6> --}}
							<p class="content-para">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam
									sequi optio consectetur.Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elit..</p>
						</div>
						<div class="col-lg-6 column">
							<img src='/images/values.jpg' class="img-fluid" alt=""/>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<section class="w3l-content-5">
    <div class="content-5-main">
           <div class="container">
                   <div class="content-info-in row">
                           <div class="content-gd col-lg-6">
                                   <h3 class="hny-title two">
                                      Buy From Us
                                  <span class="dot-1">.</span></h3>
                           </div>
                           <div class="content-gd col-lg-6">
                                  <p>IHFC has a very good history of excellent customer service. We source 
                                    deliver goods according to world class standards keeping in mind our customer
                                    satisfaction as the ultimate goal
                                  </p>
                                  <a href="#" class="read-more-btn btn mt-lg-5 mt-4">Read More</a> 
                           </div>
                          
                   </div>
               
               </div>
           </div>
   </section>
   <section class="w3l-team-main">
    <div class="team py-5">
        <div class="container py-lg-5">
                <h3 class="hny-title text-center">
                        Our Organizational Structure <span class="dot-1">.</span></h3>
                <div class="text-center">
                  <img src='./images/organogram.PNG' class="img-fluid " alt=""/>
            </div>
        </div>
        </div>
</section>
@endsection