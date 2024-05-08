<?php include 'include/header.php';?>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2 >Donate now</h2>
                            <ul>
                                <li ><a href="index.php" >Home</a></li>
                                <li><span class="wwa">Donate</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-donation-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-title text-center">
                            <div class="thumb-text">
                                <span>Donate</span>
                            </div>
                            <h2>Make a Donation</h2>
                        </div>
                        <div id="Donations" class="tab-pane">
                            <form action="POST">
                                <div class="tp-donations-amount">
                                    <h2>Your Donation</h2>
                                    <input type="text" class="form-control" name="don" id="don" placeholder="Enter Donation Amount">
                                </div>
                                <div class="tp-donations-details">
                                    <h2>Details</h2>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="name" id="fname" placeholder="First Name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Last Name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Adress">
                                        </div>
                                        <div class="col-lg-12 col-12 form-group">
                                            <textarea class="form-control" name="note" id="note" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-doanation-payment">
                                    <h2>Choose Your Payment Method</h2>
                                    <div class="tp-payment-area">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="tp-payment-option" id="open4">
                                                    <div class="tp-payment-select">
                                                        <ul>
                                                            <li class="addToggle">
                                                                <input id="add" type="radio" checked="checked" name="payment" value="30">
                                                                <label for="add">Payment By Card</label>
                                                            </li>
                                                            <li class="removeToggle">
                                                                <input id="remove" type="radio" name="payment" value="30">
                                                                <label for="remove">Offline Donation</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div id="open6" class="payment-info" style="text-align: center;">
                                                        <h4>Nom du compte</h4> <p class="lead" >Association coeurs de compassion pour les orphelins et les veuves - OUARZAZATE </p>
                                                        <h4>RIB: </h4> <p class="lead"> 011550000001200001215212 </p>
                                                        <h4>IBAN : </h4><p class="lead"> MA640 011550000001200001215212</p>
                                                        <h4>Code SWIFT : </h4> <p class="lead" >BMCEMAMC </p>
                                                    </div>
                                                    <div id="open5" class="payment-name">
                                                        
                                                          
                                                            <div id="paypal-button-container"></div>
                                                            <p id="result-message"></p>
                                                           

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php';?>
    