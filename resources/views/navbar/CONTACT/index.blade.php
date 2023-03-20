@extends('layouts.masterR')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(/assets/rabia/Uaques/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact us</h1>
            <div class="text">Pure Quality Drinking Water</div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact-section -->
<section class="contact-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                <div class="info-box">
                    <h2 class="title-text">Contact Information</h2>
                    <ul class="info-list clearfix wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <li><i class="fas fa-phone"></i><strong>Call Us</strong> <a href="tel:12078761059">+1 207-876-1059</a></li>
                        <li><i class="fas fa-map-marker-alt"></i>3065 Upton Avenue, Guilford,<br />Maine 04443 USA</li>
                        <li><i class="fas fa-envelope"></i><strong>E-mail</strong> <a href="mailto:sales@example.com">sales@example.com</a></li>
                        <li><i class="fas fa-clock"></i>Monday-Friday: 9am to 5pm<br />Saturday: 10am to 4pm<br />Sunday: Closed</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                <div class="inner-box">
                    <h2 class="title-text">Send a Message</h2>
                    <div class="form-inner">
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Your Name</label>
                                    <input type="text" name="username" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Message</label>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                    <button type="submit" name="submit-form">submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- contact-section end -->