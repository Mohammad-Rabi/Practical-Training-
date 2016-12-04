





<?php
session_start();
$con2 = mysqli_connect("localhost","root","","dbproject");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$qtrain_ord = mysqli_query($con2,"SELECT * FROM student_reg WHERE email_studr = '".$_SESSION['emaill']."'");

if(!empty($qtrain_ord)){
    while ($row = mysqli_fetch_array($qtrain_ord)) {
        $names= $row["name_studr"];
        $regNos =$row["regNo_stur"];

    }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Practical Training | Tr_Order
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>          <!-- jQuery -->
    <script type="text/javascript" src="js/moment.js"></script>             <!-- moment.js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>          <!-- bootstrap js -->
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script> <!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <!--
      <script src="js/froogaloop.js"></script>
      <script src="js/jquery.fitvid.js"></script>
    -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>          <!-- Templatemo Script -->
    <script>
        // HTML document is loaded. DOM is ready.
        $(function() {

            $('#hotelCarTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })

            $('.date').datetimepicker({
                format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

            // https://css-tricks.com/snippets/jquery/smooth-scrolling/
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        // Load Flexslider when everything is loaded.
        $(window).load(function() {
            // Vimeo API nonsense
//  For images only
            $('.flexslider').flexslider({
                controlNav: false
            });


        });
    </script>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-georgia.js"></script>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/coin-slider.min.js"></script>


    <meta charset="utf-8">
    <link rel="stylesheet" href="chosen.css">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F62685639308467" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F62685639308467" title="oEmbed Form">
    <meta property="og:title" content="CV Submission" >
    <meta property="og:url" content="http://www.jotform.me/form/62685639308467" >
    <meta property="og:description" content="Please click the link to complete this form.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="HandheldFriendly" content="true" />
    <title>CV Submission</title>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.15002" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.15002" />
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.15002" />
    <style type="text/css">
        .form-label-left{
            width:150px !important;
            color:#191970;
        }
        .form-line{
            padding-top:12px;
            padding-bottom:12px;
        }
        .form-label-right{
            width:150px !important;
        }
        body, html{
            margin:0;
            padding:0;
            background:false;
        }

        .form-all{
            margin:0px auto;
            padding-top:0px;
            width:590px;
            color:#191970 !important;
            font-family:'Lucida Grande','Lucida Sans Unicode','Lucida Sans','Verdana','Tahoma','sans-serif';
            font-size:16px;

        }
        .jotform-form{
            background-image: url(images/bg.jpg) ; opacity:0.95;
            width:900px;
            border-color:none;
            border-radius: 15px;
        }
    </style>

    <!--<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.15002" type="text/javascript"></script>
    <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.15002" type="text/javascript"></script>-->
    <script type="text/javascript">
        JotForm.init(function(){
            setTimeout(function() {
                $('input_17').hint('ex: 3.5');
            }, 20);
            setTimeout(function() {
                $('input_13').hint('ex: 120');
            }, 20);
            JotForm.clearFieldOnHide="disable";
            JotForm.onSubmissionError="jumpToFirstError";
        });
    </script>


</head>
<body>


<!-- Header -->
<div class="tm-header">
    <div class="container">



        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="index1.html" class="brand">
                    <img src="images/logo.png" width=300" height="55" alt="Logo"/></a>

            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>

                        <li><a href="st_home.html">St_Home</a></li>
                        <li><a href="student_company.html">Companies</a></li>
                        <li><a href="train_order.php" class="active">Tr_Order</a></li>
                        <li><a href="reports.html">Reports</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>



<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="menu_nav">

            </div>

            <div class="clr"></div>
            <div class="slider">
                <div id="coin-slider">
                    <img src="images/train.jpg" width="960" height="360" alt="" /><span></span></a>
                    <a href="#"><img src="images/trainsuc.jpg" width="960" height="360" alt="" /><span></span></a> </div>

                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="content" >
        <div class="content_resize">
            <div class="mainbar">
                <div class="article">
                    <h2></h2>
                    <div class="clr"></div>
                    <div class="img"></div>
                    <div class="post_content">

                    </div>
                    <div class="clr"></div>
                </div>
                <div class="article">
                    <h2></h2>
                    <div class="clr"></div>
                    <div class="img"></div>
                    <div class="post_content" >

                    </div>
                    <div class="clr" ></div>

                    <form class="jotform-form" action="send.php" method="post" enctype="multipart/form-data" name="form_62685639308467" id="62685639308467" accept-charset="utf-8" >
                        <input type="hidden" name="formID" value="62685639308467" />
                        <div class="form-all">
                            <ul class="form-section page-section">
                                <li id="cid_1" class="form-input-wide" data-type="control_head">
                                    <div class="form-header-group">
                                        <div class="header-text httal htvam">
                                            <h2 id="header_1" class="form-header"  style="color:#000080;">
                                                Training Order            </h2>

                                            <div id="subHeader_1" class="form-subHeader" style="color:#191970;">
                                                Please fill your details below.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_textbox" id="id_3">
                                    <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3"> Name </label>
                                    <div id="cid_3" class="form-input jf-required">
                                        <input type="text" class=" form-textbox" data-type="input-textbox" id="input_3" name="cv_name" size="20" value="" />
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_textbox" id="id_14">
                                    <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14"> Regestration no. </label>
                                    <div id="cid_14" class="form-input jf-required">
                                        <input type="text" class=" form-textbox" data-type="input-textbox" id="input_14" name="cv_regestrationNo" size="20" value="" />
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_textbox" id="id_4">
                                    <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Collage </label>
                                    <div id="cid_4" class="form-input jf-required">
                                        <div>
                                            <div>
                                                <select data-placeholder="Choose a Collage..." class="chosen-select"name="cv_collage" style="width:188px;" tabindex="2">
                                                    <option value=""></option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Aland Islands">Aland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>

                                                </select>
                                            </div>
                                        </div>

                                        <script src="chosen.jquery.js" type="text/javascript"></script>
                                        <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
                                        <script type="text/javascript">
                                            var config = {
                                                '.chosen-select'           : {},
                                                '.chosen-select-deselect'  : {allow_single_deselect:true},
                                                '.chosen-select-no-single' : {disable_search_threshold:10},
                                                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                                                '.chosen-select-width'     : {width:"95%"}
                                            }
                                            for (var selector in config) {
                                                $(selector).chosen(config[selector]);
                                            }
                                        </script>
                                    </div>
                                </li>

                                <li class="form-line" data-type="control_textbox" id="id_12">
                                    <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Speciality </label>
                                    <div id="cid_12" class="form-input jf-required">
                                        <div>
                                            <div>
                                                <select data-placeholder="Choose your specialty" style="width:188px;" name="cv_speciality" class="chosen-select" tabindex="5">
                                                    <option value=""></option>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>




                                                </select>
                                            </div>
                                        </div>

                                        <script src="chosen.jquery.js" type="text/javascript"></script>
                                        <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
                                        <script type="text/javascript">
                                            var config = {
                                                '.chosen-select'           : {},
                                                '.chosen-select-deselect'  : {allow_single_deselect:true},
                                                '.chosen-select-no-single' : {disable_search_threshold:10},
                                                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                                                '.chosen-select-width'     : {width:"95%"}
                                            }
                                            for (var selector in config) {
                                                $(selector).chosen(config[selector]);
                                            }
                                        </script>
                                    </div>
                                </li>





                                <li class="form-line" data-type="control_number" id="id_17">
                                    <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> Cumulative average </label>
                                    <div id="cid_17" class="form-input jf-required">
                                        <input type="number" class="form-number-input  form-textbox" id="input_17" name="cv_cumulativeAvg" style="width:60px" size="5" value="" data-type="input-number" />
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_number" id="id_13">
                                    <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Hours successfully completed </label>
                                    <div id="cid_13" class="form-input jf-required">
                                        <input type="number" class="form-number-input  form-textbox" id="input_13" name="cv_hrs" style="width:60px" size="5" value="" data-type="input-number" />
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_phone" id="id_18">
                                    <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Phone Number </label>
                                    <div id="cid_18" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="cv_phoneNoArea" id="input_18_area" size="20">
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
          </span>
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_textbox" id="id_5">
                                    <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Email Address </label>
                                    <div id="cid_5" class="form-input jf-required">
                                        <input type="text" class=" form-textbox validate[Email]" data-type="input-textbox" id="input_5" name="cv_emailAddress" size="20" value="" />
                                    </div>
                                </li>

                                <li class="form-line" data-type="control_textbox" id="id_16">
                                    <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> Favorite training company </label>
                                    <div class="side-by-side clearfix">
                                        <div>
                                            <div>
                                                <select data-placeholder="Choose a Company..." class="chosen-select" name="cv_ftcom" style="width:240px;" tabindex="2">
                                                    <option value=""></option>
                                                    <option value="United States">United States</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Aland Islands">Aland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>

                                        <script src="chosen.jquery.js" type="text/javascript"></script>
                                        <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
                                        <script type="text/javascript">
                                            var config = {
                                                '.chosen-select'           : {},
                                                '.chosen-select-deselect'  : {allow_single_deselect:true},
                                                '.chosen-select-no-single' : {disable_search_threshold:10},
                                                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                                                '.chosen-select-width'     : {width:"95%"}
                                            }
                                            for (var selector in config) {
                                                $(selector).chosen(config[selector]);
                                            }
                                        </script>
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_textbox" id="id_23">
                                    <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23"> Another company </label>
                                    <div class="side-by-side clearfix">
                                        <div>
                                            <div>
                                                <select data-placeholder="Choose a Company..." class="chosen-select" name="cv_atcom" style="width:240px;" tabindex="2">
                                                    <option value=""></option>
                                                    <option value="United States">United States</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Aland Islands">Aland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>

                                        <script src="chosen.jquery.js" type="text/javascript"></script>
                                        <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
                                        <script type="text/javascript">
                                            var config = {
                                                '.chosen-select'           : {},
                                                '.chosen-select-deselect'  : {allow_single_deselect:true},
                                                '.chosen-select-no-single' : {disable_search_threshold:10},
                                                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                                                '.chosen-select-width'     : {width:"95%"}
                                            }
                                            for (var selector in config) {
                                                $(selector).chosen(config[selector]);
                                            }
                                        </script>
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_fileupload" id="id_7">
                                    <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7" > Upload your CV </label>

                                    <div id="cid_7" class="form-input jf-required">
                                        <input class="form-upload" type="file" id="input_7" name="cv_upload" data-imagevalidate="yes" file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" file-maxsize="10240" file-minsize="0" file-limit="0" />
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_textarea" id="id_6">
                                    <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Notes </label>
                                    <div id="cid_6" class="form-input jf-required">
                                        <textarea id="input_6" class="form-textarea" name="cv_notes" cols="40" rows="6"></textarea>
                                    </div>
                                </li>
                                <li class="form-line" data-type="control_button" id="id_2">
                                    <div id="cid_2" class="form-input-wide">
                                        <div style="margin-left:156px" class="form-buttons-wrapper">
                                            <button id="input_2" type="submit" class="form-submit-button">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li style="display:none">
                                    Should be Empty:
                                    <input type="text" name="website" value="" />
                                </li>
                            </ul>
                        </div>
                        <script>
                        </script>
                        <input type="hidden" id="simple_spc" name="simple_spc" value="62685639308467" />
                        <script type="text/javascript">
                            document.getElementById("").value = "62685639308467-62685639308467";
                        </script>
                    </form>
                </div>

            </div>
            <div class="sidebar">
                <div class="searchform">
                    <form id="formsearch" name="formsearch" method="post" action="#">
                    </form>
                </div>
                <div class="clr"></div>
                <div class="gadget">
                    <h2 class="star"></h2>
                    <div class="clr"></div>
                    <ul class="sb_menu">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="gadget">
                    <h2 class="star"></h2>
                    <div class="clr"></div>
                    <ul class="ex_menu">
                        <li><br /></li>
                        <li><br /></li>
                        <li><br /></li>
                        <li><br /></li>
                        <li><br /></li>
                        <li><br /></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">

                <div class="col c2">

                </div>
                <div class="col c3">
                    <p></p>
                    <br />
                    <br />
                    <br />

                </div>
                <div class="clr"></div>
            </div>
        </div>
        <footer class="tm-black-bg">
            <div class="container">
                <div class="row">
                    <p class="tm-copyright-text">Copyright &copy; 2016 Graduation Project

                        | <a rel="nofollow" href="" target="_parent">Practical Training </a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
