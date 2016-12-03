
<?php
session_start();
$con1 = mysqli_connect("localhost","root","","dbproject");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = mysqli_query($con1,"SELECT * FROM company_reg WHERE email_comr = '".$_SESSION['emaillogcom']."'");

if(!empty($query)){
    while ($row = mysqli_fetch_array($query)) {
        $namec= $row["name_comr"];

    }
}








?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Practical Training | Company_info
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
    <link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F63164604057453" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F63164604057453" title="oEmbed Form">
    <meta property="og:title" content="Message Contact Form" >
    <meta property="og:url" content="http://www.jotform.me/form/63164604057453" >
    <meta property="og:description" content="Please click the link to complete this form.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="HandheldFriendly" content="true" />
    <title>Message Contact Form</title>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.15652" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.15652" />
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.15652" />
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
            font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            font-size:14px;
        }
        .jotform-form{
            background-image: url(images/bg.jpg) ; opacity:0.95;
            width:900px;
            border-color:none;
            border-radius: 15px;
        }


    </style>

    <!-- <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.15652" type="text/javascript"></script>-->
    <script type="text/javascript">
        JotForm.init(function(){
            JotForm.clearFieldOnHide="disable";
            JotForm.onSubmissionError="jumpToSubmit";
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

                        <li><a href="company_home.html" >Home</a></li>
                        <li><a href="comp_trainee.html">Trainees</a></li>
                        <li><a href="comp_train_order.html" >Requests</a></li>
                        <li><a href="company_info.php" class="active">About Us</a></li>

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
                    <img src="images/companies.jpg" width="960" height="360" alt="" /><span></span></a>
                    <a href="#"> <img src="images/comp.jpg" width="960" height="360" alt="" /><span></span></a> </div>
            </div>

            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
</div>

<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">
            </div>
            <div class="clr"></div>
            <form class="jotform-form" action="https://submit.jotform.me/submit/63164604057453/" method="post" name="form_63164604057453" id="63164604057453" accept-charset="utf-8">
                <input type="hidden" name="formID" value="63164604057453" />
                <div class="form-all">
                    <ul class="form-section page-section">
                        <li id="cid_18" class="form-input-wide" data-type="control_head">
                            <div class="form-header-group">
                                <div class="header-text httal htvam">
                                    <h1 id="header_18" class="form-header" style="color:#000080;">
                                        About company
                                    </h1>
                                    <div id="subHeader_18" class="form-subHeader">
                                        <!-- subtitle-->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_19" >
                            <label class="form-label form-label-top" id="label_19" for="input_19"> Name </label>
                            <div id="cid_19" class="form-input-wide jf-required">
                                <input type="text" class=" form-textbox" data-type="input-textbox" id="input_19" name="name" size="20" value="<?php echo $namec ?> "/>
                            </div>
                        </li>
                        <li class="form-line" data-type="control_textarea" id="id_20">
                            <label class="form-label form-label-top form-label-auto" id="label_20" for="input_20" > About the company </label>
                            <div id="cid_20" class="form-input-wide jf-required">
                                <textarea id="input_20" class="form-textarea" name="genInfoOfComp" cols="55" rows="7"></textarea>
                            </div>
                        </li>
                        <li class="form-line" data-type="control_textbox" id="id_21">
                            <label class="form-label form-label-top form-label-auto" id="label_21" name="selSpec[]" for="input_21" > Specialization that support </label>
                            <div id="cid_21" class="form-input-wide jf-required">
                                <div>
                                    <div>
                                        <select data-placeholder="Choose a Company..." class="chosen-select" multiple style="width:410px;" tabindex="4" >

                                            <optgroup label="Engineering">
                                                <option value=""></option>
                                            <option value="Arcitectural Engineering">Arcitectural Engineering</option>
                                                <option value="Building Engineering">Building Engineering</option>
                                                <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="Communicational Engineering">Communicational Engineering</option>
                                            <option value="Chemical Engineering">Chemical Engineering</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>



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

                        <li class="form-line" data-type="control_email" id="id_3">
                            <label class="form-label form-label-top" id="label_3" for="input_3"> E-mail </label>
                            <div id="cid_3" class="form-input-wide jf-required">
                                <input type="email" class=" form-textbox validate[Email]" id="input_3" name="emailc" size="30" value="" />
                            </div>
                        </li>
                        <li class="form-line" data-type="control_phone" id="id_5">
                            <label class="form-label form-label-top" id="label_5" for="input_5"> Contact Number </label>
                            <div id="cid_5" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input class="form-textbox" type="tel" name="fax" id="input_5_fax" size="20">
            <span class="phone-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="input_5_area" id="sublabel_area" style="min-height: 13px;">Fax </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input class="form-textbox" type="tel" name="phoneNum" id="input_5_phone" size="20">
            <label class="form-sub-label" for="input_5_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
          </span>
                            </div>
                        </li>

                        <li class="form-line" data-type="control_fileupload" id="id_7">
                            <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"  > Upload image for company </label>

                            <br/>
                            <div id="cid_7" class="form-input-wide jf-required">
                                <input class="form-upload" type="file" id="input_7" name="imgOfComp" data-imagevalidate="yes" file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" file-maxsize="10240" file-minsize="0" file-limit="0" />
                            </div>
                        </li>



                        <li class="form-line" data-type="control_button" id="id_14">
                            <div id="cid_14" class="form-input-wide">
                                <div style="text-align:center" class="form-buttons-wrapper">
                                    <button id="input_14" type="submit"name="save_infoComp" class="form-submit-button">
                                        Save
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
                <input type="hidden" id="simple_spc" name="simple_spc" value="63164604057453" />
                <script type="text/javascript">
                    document.getElementById("").value = "63164604057453-63164604057453";
                </script>
            </form>
            <div>

            </div>
            <div>

            </div>
        </div>

    </div>

    <div class="sidebar">
        <div class="searchform">

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
                <li><br />
                </li>
                <li><br />
                </li>
                <li><br />
                </li>
                <li><br />
                </li>
                <li><br />
                </li>
                <li><br />
                </li>
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
