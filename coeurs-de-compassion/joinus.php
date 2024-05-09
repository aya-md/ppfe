<?php include 'include/header.php';?>
<link rel="stylesheet" href="multisteps/css/style.css"> 
<body class="bd">
    <!-- start page-wrapper -->
    <div class="page-wrapper">
    



        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Join us</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span class="join-us-span">Join us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        <!-- volunteer-area-start -->
        <div class="volunteer-area">
            <div class="volunteer-wrap section-padding">
                <div class="container">
                    <div class="row" style="justify-content:center">
                        <div class="col-md-10 col-md-offset-3" style="margin-left: 0 !important">
                            <div class=" section-title2 text-center">
                                <div class="thumb-text">
                                    <span style="color:#f67d4a; font-weight:500; margin-bottom:10px">Volunteer/Member</span>
                                </div>
                                <h2 style="margin-bottom:3px; font-weight:bold;">Become one of us</h2>
                                <p class="volunteer">Join Us as a Volunteer or Member! Together, we can make a
                                    meaningful difference in the lives of orphans and widows. Whether you're lending a
                                    helping hand or becoming a part of our dedicated community, your support is
                                    invaluable in spreading hope and creating positive change.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" >

                        <div class="wrapper" >
                          

                                <div class="steps clearfix">
                                    <ul class="tablist multisteps-form__progress">


                                    </ul>
                                </div>
                        
                            <form class="multisteps-form__form" action="#" id="wizard" method="POST">
                                <div class="form-area position-relative">
                                    <!-- div 1 -->
                                    <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                        <div class="wizard-forms">
                                            <div class="inner pb-100 clearfix" style="padding-bottom: 0;">
                                                <div class="form-content pera-content">
                                                    <div class="step-inner-content">
                                                        <span class="step-no bottom-line">Step 1</span>
                                                        <div class="step-progress float-right">
                                                            <span>1 of 3 completed</span>
                                                            <div class="step-progress-bar">
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:2%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2>Choose who you want to be</h2>
                                                        <div class="step-box">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label
                                                                        class="step-box-content bg-white text-center relative-position active">
                                                                        <span class="step-box-icon">
                                                                            <img src="multisteps/img/d1.png" alt=""
                                                                                class="image">
                                                                        </span>
                                                                        <span class="step-box-text">
                                                                            Volunteer
                                                                        </span>
                                                                        <span class="service-check-option">
                                                                            <span><input type="radio"
                                                                                    name="service_name"
                                                                                    value="Corporate Services"
                                                                                    checked></span>
                                                                        </span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label
                                                                        class="step-box-content bg-white text-center relative-position">
                                                                        <span class="step-box-icon">
                                                                            <img src="multisteps/img/d3.png" alt=""
                                                                                class="image">
                                                                        </span>
                                                                        <span class="step-box-text">
                                                                            Member
                                                                        </span>
                                                                        <span class="service-check-option">
                                                                            <span><input type="radio"
                                                                                    name="service_name"
                                                                                    value="Development Services"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.inner -->
                                            <div class="actions">
                                                <ul>
                                                    <li class="disable" aria-disabled="true"><span class="js-btn-next"
                                                            title="NEXT">Backward <i
                                                                class="fa fa-arrow-right"></i></span></li>
                                                    <li><span class="js-btn-next" title="NEXT">NEXT <i
                                                                class="fa fa-arrow-right"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- div 2 -->
                                    <div class="multisteps-form__panel" data-animation="slideHorz">
                                        <div class="wizard-forms">
                                            <div class="inner pb-100 clearfix">
                                                <div class="form-content pera-content">
                                                    <div class="step-inner-content">
                                                        <span class="step-no bottom-line">Step 2</span>
                                                        <div class="step-progress float-right">
                                                            <span>2 of 3 completed</span>
                                                            <div class="step-progress-bar">
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:50%"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h2>Personal information</h2>
                                                        <div class="form-inner-area">
                                                            <input type="text" name="first_name" class="form-control "
                                                                minlength="2" placeholder="Full name *" required>
                                                            
                                                                <input type="text" name="CIN" class="form-control "
                                                                minlength="2" placeholder="CIN *">

                                                            <div class="step-content-field">
                                                                <div class="date-picker date datepicker">
                                                                    <input type="text" name="date" class="form-control"
                                                                        placeholder="Enter you birth date">
                                                                    <div class="input-group-append"><span>ADD
                                                                            TIME</span></div>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="birth-place" class="form-control "
                                                                minlength="2" placeholder="Birth place">
                                                            <input type="email" name="email" class="form-control"
                                                                placeholder="Email Address *">
                                                            <input type="text" name="phone" placeholder="Phone">
                                                        </div>

                                                        <div class="gender-selection">
                                                            <h3>Gender:</h3>
                                                            <label>
                                                                <input type="radio" name="gender" value="Male">
                                                                <span class="checkmark"></span>Male
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="gender" value="Female">
                                                                <span class="checkmark"></span>Female
                                                            </label>
                                                        </div>
                                                        <div class="upload-documents">
                                                            <h3>Upload a photo of you</h3>
                                                            <div class="upload-araa bg-white">
                                                                <input type="hidden" value="" name="fileContent"
                                                                    id="fileContent">
                                                                <input type="hidden" value="" name="filename"
                                                                    id="filename">
                                                                <div class="upload-icon float-left">
                                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                                </div>
                                                                <div class="upload-text">
                                                                    <span>( File accepted: png,jpg,jpge )</span>
                                                                </div>
                                                                <div class="upload-option text-center">
                                                                    <label for="attach">Upload The picture</label>
                                                                    <input id="attach" style="visibility:hidden;"
                                                                        type="file">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.inner -->
                                            <div class="actions">
                                                <ul>
                                                    <li><span class="js-btn-prev" title="BACK"><i
                                                                class="fa fa-arrow-left"></i> BACK </span></li>
                                                    <li><span class="js-btn-next" title="NEXT">NEXT <i
                                                                class="fa fa-arrow-right"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- div 3 -->
                                    <div class="multisteps-form__panel" data-animation="slideHorz">
                                        <div class="wizard-forms">
                                            <div class="inner pb-100 clearfix">
                                                <div class="form-content pera-content" style="width: 100%;">
                                                    <div class="step-inner-content">
                                                        <span class="step-no bottom-line">Step 3</span>
                                                        <div class="step-progress float-right">
                                                            <span>3 of 3 completed</span>
                                                            <div class="step-progress-bar">
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:100%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2>Tell us about you</h2>
                                                        <div class="services-select-option">
                                                            <div class="language-select">
                                                                <p>Please choose your academic level : </p>
                                                                <select name="languages">
                                                                    <option>BAC</option>
                                                                    <option>BAC+2</option>
                                                                    <option>BAC+3</option>
                                                                    <option>BAC+5</option>
                                                                    <option>BAC+8</option>
                                                                    <option>Other</option>
                                                                </select>
                                                            </div>

                                                            <div class="language-select">
                                                                <p>Please choose your speciality : </p>
                                                                <select name="languages">
                                                                    <option>Economy</option>
                                                                    <option>Computer sciences</option>
                                                                    <option>Psychology</option>
                                                                    <option>Sociology</option>
                                                                    <option>Education</option>
                                                                    <option>Other</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="comment-box">
                                                            <p><i class="fas fa-comments"></i> Centers of interest</p>
                                                            <textarea name="full_comments"
                                                                placeholder="Write here"></textarea>
                                                        </div>
                                                        <div class="comment-box">
                                                            <p><i class="fas fa-comments"></i> Activities to Engage in
                                                                at the Association</p>
                                                            <textarea name="full_comments"
                                                                placeholder="Write here"></textarea>
                                                        </div>
                                                        <div class="comment-box">
                                                            <p><i class="fas fa-comments"></i> Objectives to Achieve
                                                                within the Association</p>
                                                            <textarea name="full_comments"
                                                                placeholder="Write here"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ./inner -->
                                            <div class="actions">
                                                <ul>
                                                    <li><span class="js-btn-prev" title="BACK"><i
                                                                class="fa fa-arrow-left"></i> BACK </span></li>
                                                    <li><button type="submit" title="NEXT">SUBMIT <i
                                                                class="fa fa-arrow-right"></i></button></li>
                                                </ul>
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

    <!-- volunteer-area-end -->

    <?php include 'include/footer.php';?>
   