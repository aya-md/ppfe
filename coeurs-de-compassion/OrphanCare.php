<?php
include 'include/header.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\OrphaneModel.php';

?>

<body class="bd">
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Orphan Care</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span class="join-us-span">Orphan Care</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($msg) and $msg !== ''){
                        echo $msg;
                        } ?>
        <!-- .tp-breadcumb-area end -->
        <!-- volunteer-area-start -->
        <div class="volunteer-area">
            <div class="volunteer-wrap section-padding">
                <div class="container">

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-9 text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2 id="heading">Fill our Benefit form</h2>

                                    <form id="msform" method="POST">
                                        <!-- progressbar -->
                                        <ul id="progressbar" style="display: flex;">
                                            <li class="active" id="account"><strong>THE ORPHAN</strong></li>
                                            <li id="account"><strong>THE KAFIL</strong></li>
                                            <li id="personal"><strong>THE FATHER</strong></li>
                                            <li id="payment"><strong>ACCOMODATION</strong></li>
                                            <li id="payment"><strong>EXTERNAL AIDS</strong></li>
                                            <li id="confirm"><strong>FINISH</strong></li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <br> <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Information about the orphan:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 1 - 6</h2>
                                                    </div>
                                                </div>
                                                <label class="fieldlabels">Full Name: *</label>
                                                <input type="text" name="nameorph" placeholder="Full Name" />
                                                <label class="fieldlabels">Birth date: *</label>
                                                <div class="date-picker date datepicker">
                                                    <input type="text" name="dateorph" class="form-control" placeholder="Enter you birth date">
                                                    <div class="input-group-append"><span></span></div>
                                                </div>
                                                <label class="fieldlabels">Gender:</label>
                                                <div class="HealthStatus">
                                                    <input type="radio" name="genderorph" value="Male">
                                                    <b>Male</b>

                                                    <input type="radio" name="genderorph" value="Female">
                                                    <b>Female</b>
                                                </div>
                                                <label class="fieldlabels">CIN: *</label>
                                                <input type="text" name="cinorph" placeholder="CIN" />
                                                <label class="fieldlabels">Eduaction level: *</label>

                                                <div class="education-select">
                                                    <select class="form-select form-select-md mb-3" name="edulevel">
                                                        <option value="Primary school">Primary school</option>
                                                        <option value="Secondary school">Secondary school</option>
                                                        <option value="High school">High school</option>
                                                    </select>
                                                </div>

                                                <label class="fieldlabels">Health Status:</label>
                                                <div class="HealthStatus">
                                                    <input type="radio" name="hsorph" value="Good">
                                                    <b>Good</b>

                                                    <input type="radio" name="hsorph" value="Poor">
                                                    <b>Poor</b>
                                                </div>
                                                <label class="fieldlabels">Health problems:</label>
                                                <input type="text" name="hporph" placeholder="enter the orphan's health problems" />
                                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Information about the KAFIL:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 2 - 6</h2>
                                                    </div>
                                                </div>
                                                <label class="fieldlabels">Full Name: *</label>
                                                <input type="text" name="namek" placeholder="Full Name" />

                                                <label class="fieldlabels">CIN: *</label>
                                                <input type="text" name="CINkaf" placeholder="CIN" />
                                                <label class="fieldlabels">Phone number: *</label>
                                                <input type="tel" name="phonek" placeholder="Phone number" />
                                                <label class="fieldlabels">Address: *</label>
                                                <textarea name="adressk" id="adressk" cols="30" rows="10"></textarea>


                                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Information about the FATHER:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 3 - 6</h2>
                                                    </div>
                                                </div>
                                                <label class="fieldlabels">Full Name: *</label>
                                                <input type="text" name="namef" placeholder="Full Name" />
                                                <label class="fieldlabels">Death date: *</label>
                                                <div class="date-picker date datepicker">
                                                    <input type="text" name="datef" class="form-control" placeholder="Enter the father death date">
                                                    <div class="input-group-append"><span></span></div>
                                                </div>
                                                <label class="fieldlabels">Death cause: *</label>
                                                <input type="text" name="uname" placeholder="Enter the father death cause" />
                                                <label class="fieldlabels">Job: *</label>
                                                <input type="text" name="jobf" placeholder="Job" />

                                                <label class="fieldlabels">Employer: *</label>
                                                <input type="text" name="emplf" placeholder="Employer" />

                                                <label class="fieldlabels">Social Insurance:</label>
                                                <div class="HealthStatus">
                                                    <input type="radio" name="scinf" value="CNSS">
                                                    <b>CNSS</b>

                                                    <input type="radio" name="scinf" value="Retirement">
                                                    <b>Retirement</b>

                                                    <input type="radio" name="scinf" value="None">
                                                    <b>None</b>
                                                </div>
                                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Information about the ACCOMODATION:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 4 - 6</h2>
                                                    </div>
                                                </div>
                                                <div class="education-select">
                                                    <label class="fieldlabels">Type</label>
                                                    <select class="form-select form-select-md mb-3" name="accotype">
                                                        <option value="Property">Property</option>
                                                        <option value="rent">rent</option>
                                                        <option value="mortgage">mortgage</option>
                                                        <option value="Shared ACCOMODATION">Shared ACCOMODATION</option>
                                                    </select>
                                                </div>
                                                <label class="fieldlabels">The estimated value of the house: *</label>
                                                <input type="text" name="accomvalue" placeholder="value" />
                                                <label class="fieldlabels">household appliances quality :</label>
                                                <div class="HealthStatus">
                                                    <input type="radio" name="appliances" value="Excellent">
                                                    <b>Excellent</b>

                                                    <input type="radio" name="appliances" value="Good">
                                                    <b>Good</b>

                                                    <input type="radio" name="appliances" value="Poor">
                                                    <b>Poor</b>
                                                    <input type="radio" name="appliances" value="none">
                                                    <b>We don't have any machines</b>
                                                </div>
                                                <label class="fieldlabels">Does your house have access to electricity? :</label>
                                                <div class="electricity">
                                                    <input type="radio" name="electricity" value="Yes">
                                                    <b>Yes</b>

                                                    <input type="radio" name="electricity" value="No">
                                                    <b>No</b>

                                                </div>
                                                <label class="fieldlabels">What is the average monthly bill for electricity at your place? *</label>
                                                <input type="text" name="elecbill" placeholder="value" />
                                                <label class="fieldlabels">Is there water service at your house?</label>
                                                <div class="water">
                                                    <input type="radio" name="water" value="Yes">
                                                    <b>Yes</b>

                                                    <input type="radio" name="water" value="No">
                                                    <b>No</b>

                                                </div>
                                                <label class="fieldlabels">What is the average monthly bill for water at your place? *</label>
                                                <input type="text" name="waterbill" placeholder="value" />
                                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Information about the EXTERNAL AIDS:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 5 - 6</h2>
                                                    </div>
                                                </div>
                                                <label class="fieldlabels">What types of aid are available? *</label>
                                                <input type="text" name="typea" placeholder="Aid type" />

                                                <label class="fieldlabels">What is the value or amount of this aid? *</label>
                                                <input type="text" name="valuea" placeholder="Aid value" />


                                                <div class="education-select">
                                                    <label class="fieldlabels">How often do you receive assistance? :</label>
                                                    <select class="form-select form-select-md mb-3" name="frequencyaid">
                                                        <option value="Weekly">Weekly</option>
                                                        <option value="Monthly">Monthly</option>
                                                        <option value="Yearly">Yearly</option>
                                                    </select>
                                                </div>

                                            </div> <input type="submit" name="orphan-btn-submit" id="orphan-btn-submit" class="next action-button" value="Submit" />

                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Finish:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 6 - 6</h2>
                                                    </div>
                                                </div> <br><br>
                                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3"> <img src="multisteps/img/ok.png" class="fit-image"> </div>
                                                </div> <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5 class="purple-text text-center">You Have Successfully fill in the form</h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'include/footer.php'; ?>