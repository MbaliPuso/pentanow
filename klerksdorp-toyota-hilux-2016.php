<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Penta Now</title>
    
    <meta name="keywords" 
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    

</head>


<style>
.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    flex-direction: row !important;
}
.success, .error {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            display: none;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    .popup-gallery{
  	    text-align:center;
	}
	
    .image-section {
        margin-top: 40px;height: 420px;
    }
    .popup-gallery {
        margin-top:20px;
    }
    @media (min-width:500px){
        .image-section {
        margin-top: 40px;height: 420px;
    }
    }


    @media (min-width:500px) {
        div#appCapsule\ tohalf {
        width: 50%;
        margin-top:60px;
        }
        .toflexflex {
            display:flex;
            margin:0px 90px;
        }
      
    }
    @media (max-width:500px) {
        .image-section {
    margin-top: 40px;
    height: 320px;
}
    }

    @media(min-width:500px){
  
.mobiledisplayonly {
  display:none;
}
}
</style>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->



    <!----------------------------------------- Lesego Header START---------------------------------------------------------------------------------->
    <!-- App Header  Mobile-->
    <div class="appHeader  text-light mobilemenu">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <img src="assets/img/header-menu/burger-menu-left.svg" alt="image" class="imaged rounded w32">
               
            </a>
        </div>
        <div class="pageTitle">
            <a href="index.html" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <img src="assets/img/logo-svg.png" alt="image" style="width:160px;">
               
            </a>
        </div>
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <!-- <span class="badge badge-danger">4</span> -->
            </a>
        </div>
    </div>
    <!-- App Header Mobile-->
    <!-- App Header  Desktop Start-->
    <div class="appHeader  text-light desktopmenu" >
        <div class="left">
            <a href="index.html" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <img src="assets/img/logo-svg.png" alt="image" style="width:180px;">
               
            </a>
        </div>
        <div class="pageTitle">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-capitalize" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">Sell a Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" aria-current="page" href="buy-car.html">Buy a Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="our-locations.html">Our Locations</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link text-capitalize" href="contact-us.html">Contact Us</a>
                </li>
            </ul>
        </div>
        
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <!--<span class="badge badge-danger">4</span>-->
            </a>
        </div>
    </div>
    <!-- App Header Desktop End-->
        <!-----------------------------------------LESEGO HEADER SEND---------------------------------------------------------------------------------->


    <!-- Share Action Sheet -->
    <div class="modal fade action-sheet inset" id="actionSheetShare" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share with</h5>
                </div>
                <div class="modal-body">
                    <ul class="action-button-list">
                        <li>
                            <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-facebook"></ion-icon>
                                    Facebook
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-twitter"></ion-icon>
                                    Twitter
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-instagram"></ion-icon>
                                    Instagram
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                    Linkedin
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- * Share Action Sheet -->





<div class="toflexflex">
    <!-- App Capsule First Half -->
    <div id="appCapsule tohalf">
        <!-- Buttons -->
        <div class="section">
            <div class="">
                <div class="">
                    <div class="row">
                        
                        <div class="col" style="background: #fff;margin: 0px 8px;border-radius: 10px;">
                            <div class=" pb-0"class="change">
                                <!-- Listing Image-->
                                <div class="image-section">
                                    <img src="assets/img/listings/pentnow.webp" alt="Button Image" style="border-radius: 25px;">
                                </div>

                                <!-- Listing Image Gallery-->
                                <div class="popup-gallery">
                                    <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="135" height="135"></a>
                                    <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="135" height="135"></a>
                                    <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="135" height="135"></a>
                                    <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="135" height="135"></a>
                                </div>

                                   



                                    <ul class="listview no-line transparent flush simple-listview">
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Make</div>
                                            <strong class="text-success">Ford</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Model</div>
                                            <strong>Ranger</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Year</div>
                                            <strong>2016</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Mileage</div>
                                            <strong>156 000Km</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Engine Size</div>
                                            <strong>3200</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Fuel Type</div>
                                            <strong>Diesel</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">GearBox</div>
                                            <strong>Manual</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Colour</div>
                                            <strong>White</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Vehicle Type</div>
                                            <strong>Extended Cab</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Stock Number</div>
                                            <strong>UC1045</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Has Service History</div>
                                            <strong>Yes</strong>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Buttons -->

       

        <!-- app footer -->
        <div class="appFooter">
            
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule first half -->















     <!-- App Capsule seond half -->
    <div id="appCapsule tohalf" class="tohalf">
        <!-- Buttons -->
        <div class="section">
            <div class="">
                <div class="">
                    <div class="row">
                        
                        <div class="col" style="background: #fff;margin: 0px 8px;border-radius: 10px;">
                            <div class=" pb-0"class="change">
                                <!-- Listing Image-->
                                

                                    <h4 style="color:#222222;font-size: 25px;margin-bottom: 15px !important; margin-top:30px;">FORD - Ranger</h4>
                                   <div>
                                    
                                    <div style="display:flex;gap:20px;padding:10px 0px;">
                                        <div>
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="speedometer-outline"></ion-icon>156 000km</p>
                                        </div>
                                        <div> 
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="cog-outline"></ion-icon>Manual</p>
                                        </div>
                                        <div>
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="car-outline"></ion-icon>
                                            Diesel</p>
                                        </div>
                                        <div>
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="location-outline"></ion-icon>Centurion</p>
                                        </div>
                                    </div>
                                   
                                    <h2 style="color:#222222;margin: 5px 0px 5px 0px;font-size: 35px !important;margin-top: -10px;">R 0.00</h2>
                                    
                                   </div>


                                    
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Buttons -->

       


        <!-- History -->
        <div class="section" style="margin-bottom:60px;">
            <div class="section-heading">
                
                
            </div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1" style="padding:10px">
                    <!-- item -->
                    <!--Form Start-->
                    <h3 class="title">Fill in your details below and a dedicated consultant will contact you.</h3>
                   

                    <div class="success" id="successMessage">Form submitted successfully!</div>
                    <div class="error" id="errorMessage">There was an error submitting the form.</div>

                    <form id="enquiryForm">
        <div class="form-group basic" style="display:flex;">
            <div class="input-wrapper" style="margin-right: 15px; width:50%;">
                <label class="label" for="firstName">Your Name</label>
                <div class="exchange-group small">
                    <div class="input-col">
                        <input type="text" class="form-control form-control-lg pe-0" id="firstName" name="first_name" placeholder="Enter Your Name..." required>
                    </div>
                </div>
            </div>
            <div class="input-wrapper" style="width:50%;">
                <label class="label" for="lastName">Your Surname</label>
                <div class="exchange-group small">
                    <div class="input-col">
                        <input type="text" class="form-control form-control-lg pe-0" id="lastName" name="last_name" placeholder="Enter Your Surname..." required>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="mobile">Your Cell Number</label>
                <input type="tel" class="form-control form-control-lg pe-0" id="mobile" name="mobile" placeholder="Enter Your Cell Number" required>
            </div>
        </div>
        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="email">Your Email Address</label>
                <input type="email" class="form-control form-control-lg pe-0" id="email" name="email" placeholder="Enter Your Email Address" required>
            </div>
        </div>
        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="enquiry">Enquiry</label>
                <input type="text" class="form-control form-control-lg pe-0" id="enquiry" name="enquiry" placeholder="Enquiry details..." required>
            </div>
        </div>
        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="contactDate">When Would Be A Good Time To Contact You?</label>
            </div>
        </div>

        <div class="exchange-group small">
            <div class="input-col">
                <input type="date" class="form-control form-control-lg pe-0" id="contactDate" name="contact_date" required>
            </div>

            <div class="select-col">
                <select class="form-select form-select-lg currency" id="contactTime" name="contact_time" required>
                    <option value="08:30" selected>08:30</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                </select>
            </div>
        </div>

        <input type="hidden" name="brand" value="Mahindra">
        <input type="hidden" name="source" value="Landing page">
        <input type="hidden" name="branch" value="Klerksdorp">

        <div class="mt-2">
            <button type="button" id="submitlead" class="btn btn-primary btn-lg btn-block">Send Details</button>
        </div>
    </form>
                    
                </ul>
               
            </div>
        </div>
        <!-- History -->
        <!-- app footer -->
        <div class="appFooter">
        </div>
        <!-- * app footer -->
    </div>
    <!-- * App Capsul Second half -->
</div>




<!-- App Bottom Menu -->
<div class="appBottomMenu mobiledisplayonly">
    <a href="buy-car.html" class="item">
        <div class="col">
            <ion-icon name="car-outline"></ion-icon>
            <strong>Buy Car</strong>
        </div>
    </a>
    <a href="sell-car.html" class="item">
        <div class="col">
            <ion-icon name="cash-outline"></ion-icon>
            <strong>Sell Car</strong>
        </div>
    </a>
    <a href="" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
        </div>
    </a>
    <a href="our-locations.html" class="item">
      <div class="col">
          <ion-icon name="information-circle-outline"></ion-icon>
          <strong>About Us</strong>
      </div>
  </a>
   
   
    <a href="app-settings.html" class="item">
        <div class="col">
            <ion-icon name="call-outline"></ion-icon>
            <strong>Call Now</strong>
        </div>
    </a>
  </div>
  <!-- * App Bottom Menu -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Apex Charts -->
    <script src="assets/js/plugins/apexcharts/apexcharts.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>

        var chartExample1 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1600, 1400, 1600, 2000, 1100, 501, 3000, 1000, 2000]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample2 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1700, 1600, 1400, 1600]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample3 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 405, 666, 1090, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample4 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1000, 2000, 512, 405, 666, 1090, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample5 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.chart-example-1').forEach(chart => new ApexCharts(chart, chartExample1).render());
            document.querySelectorAll('.chart-example-2').forEach(chart => new ApexCharts(chart, chartExample2).render());
            document.querySelectorAll('.chart-example-3').forEach(chart => new ApexCharts(chart, chartExample3).render());
            document.querySelectorAll('.chart-example-4').forEach(chart => new ApexCharts(chart, chartExample4).render());
            document.querySelectorAll('.chart-example-5').forEach(chart => new ApexCharts(chart, chartExample5).render());
        })

    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
</script>

<!--CARIO SUBMISSION SCRIPT START-->
<script>
        $(document).ready(function() {
            $('#submitlead').on('click', function() {
                var formData = $('#enquiryForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: 'submit_form.php',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Enquiry Submitted',
                            text: 'Enquiry has been submitted successfully!',
                        });
                        $('#enquiryForm')[0].reset();
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'Success',
                            title: 'Details Submitted',
                            text: 'Your Details Have Been Sent - A Consultant Will Contact You Soon.',
                        });
                    }
                });
            });
        });
    </script>
<!--CARIO SUBMISSION SCRIPT END-->

</body>

</html>