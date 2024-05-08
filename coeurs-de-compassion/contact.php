<?php include 'include/header.php';?>


    <main>
        <!-- Page banner area start here -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2 >Contact us</h2>
                            <ul>
                                <li ><a href="index.php" >Home</a></li>
                                <li><span class="wwa">Contact us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page banner area end here -->

        <!-- Contact area start here -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s3 section-title-s5">
                            <h2>Our Contacts</h2>
                        </div>
                        <div class="contact-details">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Our Location</h5>
                                    <p>477 Hay el Wahda Ouarzazate</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Phone</h5>
                                    <p>GSM: 06 66 07 71 50</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>assccov@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form-area">
                            <div class="section-title-s3 section-title-s5">
                                <h2>Quick Contact Form</h2>
                            </div>
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form">
                                    <div>
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control"  name="address" id="address" placeholder="Address*">
                                    </div>
                                    <div class="comment-area">
                                        <textarea  name="note"  id="note" placeholder="Type your message*"></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">Submit Now</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54755.99545524775!2d-6.973789326554693!3d30.93558949145063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdbb104077422057%3A0x26b3cb529b37ab00!2sOuarzazate%2045000!5e0!3m2!1sfr!2sma!4v1713574357554!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- Contact area end here -->
    </main>

    <?php include 'include/footer.php';?>