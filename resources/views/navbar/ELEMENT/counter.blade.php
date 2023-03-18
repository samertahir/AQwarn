@extends('layouts.masterR')
@section('content')
 <!--Page Title-->
 <section class="page-title centred" style="background-image: url(assets/rabia/Uaques/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Elements</h1>
            <div class="text">Pure Quality Drinking Water</div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- counter-layout -->
<section class="counter-layout fact-counter elements sec-pad">
    <div class="auto-container">
        <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="counter-block wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="70">0</span>k
                </div>
                <div class="text">Bottles Delivered</div>
            </div>
            <div class="counter-block wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="1580">0</span>
                </div>
                <div class="text">outlets in country</div>
            </div>
            <div class="counter-block wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="12">0</span>k
                </div>
                <div class="text">satisfied customers</div>
            </div>
            <div class="counter-block wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="5">0</span>Steps
                </div>
                <div class="text">Filtration plant</div>
            </div>
        </div>
    </div>
</section>
<!-- counter-layout end -->

@endsection