@extends('layouts.masterR')
@section('content')

    <br>
    <div class="container">
        <div class="row">
      <div class="column"><h1>PURE & HEALTHY <br> Drinking WAter</h1></div>
      <div class="column"> <img src="/assets/rabia/Uaques/double-bottle.png"></div>
        </div>
    </div>

        <br>
        <div class="container">
        <a class="btn btn-primary btn-lg" role="button" href="">ORDER TODAY!!</a>
        <a class="btn btn-warning btn-lg" role="button" href="">FREE ESTIMATE!!</a>
    </div>
     <section class="feature-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h1>A Trusted Name In<br />Bottled Water Industry</h1>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box wow slideInDown" data-wow-delay="250ms" data-wow-duration="1500ms"><i class="flaticon-drop-leaf-table"></i></div>
                                    <h3><a href="#">Maxium Purity</a></h3>
                                    <div class="text">Exercitation ullamco laboris nisl aliquip duis aute irure dolor iny rep henderit voluptate velit.</div>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box wow slideInDown" data-wow-delay="250ms" data-wow-duration="1500ms"><i class="flaticon-water"></i></div>
                                    <h3><a href="#">5 Steps Filtration</a></h3>
                                    <div class="text">Exercitation ullamco laboris nisl aliquip duis aute irure dolor iny rep henderit voluptate velit.</div>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box wow slideInDown" data-wow-delay="250ms" data-wow-duration="1500ms"><i class="flaticon-teardrop"></i></div>
                                    <h3><a href="#">Cholorine Free</a></h3>
                                    <div class="text">Exercitation ullamco laboris nisl aliquip duis aute irure dolor iny rep henderit voluptate velit.</div>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box wow slideInDown" data-wow-delay="250ms" data-wow-duration="1500ms"><i class="flaticon-water-barrel"></i></div>
                                    <h3><a href="#">Quality Certified</a></h3>
                                    <div class="text">Exercitation ullamco laboris nisl aliquip duis aute irure dolor iny rep henderit voluptate velit.</div>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <br>



  


        <div class="container-fluid mt-5 mb-3 bg-light">
            <div class="row text-center">
            <h1>Bottles We Deliver</h1></div>
            <br>

            <div class="row text-center">
                @foreach ($products as $pro )
                    <div class="col-sm-3">

                    <div class="card" style="">
                        <div class="card-body" >
                <img src="{{ $pro->product_img }}">
                        <h5 class="card-title " style="color:blue">{{ $pro->name }}</h5><br>
                        <span class="badge rounded-pill bg-secondary">3*2L Bottles</span><br>
                        <p class="card-text" >{{ $pro->discription }}</p>
                        <h5 class="bg-warning">{{ $pro->price }}</h5><br>
                        <a class="btn btn-primary " role="button" href="{{route('cart.addcart',['pid'=>$pro->id]) }}">ADD TO CART</a>

                    </div></div></div>
                    @endforeach

        </div>
    <br>

    </div>
    <div class="container-fluid">
    <h1 class="text-center mt-5 mb-3  ">Helping TO Improve</h1>
    <div class="row">
        <div class="col-lg">
            <img src="http://azim.commonsupport.com/Uaques/images/resource/video-1.jpg">
        </div>
        <div class="col-lg">
            <img src="http://azim.commonsupport.com/Uaques/images/resource/video-2.jpg">
        </div>
        <div class="col-lg">
            <img src="http://azim.commonsupport.com/Uaques/images/resource/video-3.jpg">
        </div>
        <div class="col-lg">
            <img src="http://azim.commonsupport.com/Uaques/images/resource/video-1.jpg">
        </div>

    </div></div>


    {{-- <div class="container mt-5 mb-3 ">
        <h1 class="text-center bg-warning">Uaques Basic Water</h1>
        <h1 class="text-center bg-warning">Composition</h1>
        <img class="img-fluid max-width:100%" src="C:\Users\mugha\OneDrive\Pictures\Screenshots\2022-04-09.png">
    </div> --}}
        <!-- composition-section -->
        <section class="composition-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h1>AQwarn Basic Water<br />Composition</h1>
                </div>
                <div class="upper-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12 left-column">
                            <div class="inner-box">
                                <div class="single-item wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <figure class="icon-box">
                                        <span>K+</span>
                                        <img src="http://azim.commonsupport.com/Uaques/images/icons/water-drop-1.png" alt="">
                                    </figure>
                                    <h3><a href="#">Potassium</a></h3>
                                    <h5>2.5 mg/L</h5>
                                    <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                                </div>
                                <div class="single-item wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <figure class="icon-box">
                                        <span>Fl</span>
                                        <img src="http://azim.commonsupport.com/Uaques/images/icons/water-drop-1.png" alt="">
                                    </figure>
                                    <h3><a href="#">Fluoride</a></h3>
                                    <h5>0.5 mg/L</h5>
                                    <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="pattern-bg" style="background-image: url(images/icons/pattern-2.png);"></div>
                                <figure class="image wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="http://azim.commonsupport.com/Uaques/images/resource/water-glass-1.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 right-column">
                            <div class="inner-box">
                                <div class="single-item wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <figure class="icon-box">
                                        <span>Cl</span>
                                        <img src="http://azim.commonsupport.com/Uaques/images/icons/water-drop-1.png" alt="">
                                    </figure>
                                    <h3><a href="#">Chloride</a></h3>
                                    <h5>350a mg/L</h5>
                                    <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                                </div>
                                <div class="single-item wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <figure class="icon-box">
                                        <span>Mg</span>
                                        <img src="http://azim.commonsupport.com/Uaques/images/icons/water-drop-1.png" alt="">
                                    </figure>
                                    <h3><a href="#">Magnesium</a></h3>
                                    <h5>14.5 mg/L</h5>
                                    <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-content clearfix">
                    <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>Nitrates</h3>
                        <h5>2 mg/L</h5>
                    </div>
                    <div class="single-item wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h3>Bicarbonates</h3>
                        <h5>157 mg/L</h5>
                    </div>
                    <div class="single-item wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <h3>Sulphates</h3>
                        <h5>5.6 mg/L</h5>
                    </div>
                    <div class="single-item wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <h3>Sodium</h3>
                        <h5>0.4 mg/L</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- composition-section end -->
    {{-- <div class="container mt-5 mb-3 bg-primary">
        <img src="/assets/rabia/Uaques/service-men-1.png" style="width:100%;">
        <div class="centered">
       <h1 class="bg-warning">Bottled Water Delivery &</h1>
       <h1 class="bg-warning">Services</h1>
        </div>
        <div class="bottom-right      teXt-color-warning">
            <p><h3> 1: Hygenic and Ergonomic Bottles</h3></p>
        <p><h3> 2: Free Delivery On Weekends</h3></p>
        <p><h3> 3: 5 Steps Filtration Plants</h3></p>
        <p><h3> 4: Best For Health & Hydration</h3></p>
        </div>
    </div> --}}
        <!-- info-section -->
        <section class="info-section bg-color-2">
            <div class="image-layer wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="/assets/rabia/Uaques/service-men-1.png" style="width:90%;"></div>
            <div class="bg-pattern" style="background-image: url(/assets/rabia/Uaques/pattern-3.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                        <div id="content_block_one">
                            <div class="content-box">
                                <div class="sec-title"><h1>Bottled Water Delivery & Service</h1></div>
                                <div class="text">Neque porro quisquam esty qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam eius modi tempora.</div>
                                <ul class="list-item clearfix">
                                    <li>Hygenic and Ergonomic Bottles</li>
                                    <li>Free Delivery On Weekends</li>
                                    <li>5 Steps Filtration Plants</li>
                                    <li>Best For Health & Hydration</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn style-one">order today!</a>
                                    <a href="#" class="theme-btn style-two">free estimate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- info-section end -->
        <!-- clients-section  -->
    <section class="clients-section">
    	<div class="auto-container-fluid mt-5 mb-3">

    		<div class="card ">
    			<div class="card-body">
    				<div class="card-title">
    					<h1 class="text-center">Trusted Partners</h1>
    					<p class="text-center">Aliquaut enim mini veniam quis trud exercitation ullamco exa consequat. Duis aute rue dolor prehendrit lorem ipsum sit amet consectetur adipisicing sed.</p>
    					<div class="row">
    						<div class="card-body"></div>
    						<div class="col-lg"><img src="http://azim.commonsupport.com/Uaques/images/clients/client-3.png"></div>
    						<div class="col-lg"><img src="http://azim.commonsupport.com/Uaques/images/clients/client-4.png"></div>
    						<div class="col-lg"><img src="http://azim.commonsupport.com/Uaques/images/clients/client-5.png"></div>
    						<div class="col-lg"><img src="http://azim.commonsupport.com/Uaques/images/clients/client-1.png"></div>
    						<div class="col-lg"><img src="http://azim.commonsupport.com/Uaques/images/clients/client-2.png"></div>

    					</div>

    				</div>
    			</div>

    		</div>

    	</div>
    </section>
    <!-- clients-section end -->
    @endsection
