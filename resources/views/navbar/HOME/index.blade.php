@extends('layouts.masterR')
@section('content')
<h1 style="text-align: center;" >A Trusted Name In
    <br>Bottled Water Industry</h1>
    <br>
    <div class="container">
        <div class="row">
      <div class="column"><h1>PURE & HEALTHY <br> Drinking WAter</h1></div>
      <div class="column"> <img src="/assets/rabia/Uaques - Drinking Mineral Water Delivery HTML Template Preview - ThemeForest_files/double-bottle.png"></div>
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



    <div class="container mt-5 mb-3 bg-light">
        <div class="row text-center">
        <h1>Bottles We Deliver</h1></div>
        <br>



        <div class="row text-center">
            @foreach ($products as $pro )
                <div class="col-sm-3">

                <div class="card" style="">
                    <div class="card-body">
            <img src="{{ $pro->product_img }}">
                    <h5 class="card-title " style="color:blue">{{ $pro->name }}</h5><br>
                    <span class="badge rounded-pill bg-secondary">3*2L Bottles</span><br>
                    <p class="card-text" >{{ $pro->discription }}</p>
                    <h5 class="bg-warning">{{ $pro->price }}</h5><br>
                    <a class="btn btn-primary " role="button" href="{{ route('product.addcart') }}">ADD TO CART</a>







                </div></div></div>
                @endforeach

    </div>
    <br>

    </div>
    <div class="container">
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


    <div class="container mt-5 mb-3 ">
        <h1 class="text-center bg-warning">Uaques Basic Water</h1>
        <h1 class="text-center bg-warning">Composition</h1>
        <img class="img-fluid max-width:100%" src="C:\Users\mugha\OneDrive\Pictures\Screenshots\2022-04-09.png">
    </div>
    <div class="container mt-5 mb-3 bg-primary">
        <img src="/assets/rabia/Uaques - Drinking Mineral Water Delivery HTML Template Preview - ThemeForest_files/service-men-1.png" style="width:100%;">
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
    </div>
    @endsection
