<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Penta Now | klerksdorp</title>
    
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

    
    <style>
    /* New Style 1 Start*/
.container {
    width: 100%;
    padding-right: 0 !important;
    padding-left: 0 !important;
    margin-right: auto;
    margin-left: auto;
}
    .showing {
      width: 100%;
      margin: auto;
      overflow: hidden;
      position: relative;
    }

    .showing img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      object-position: center center;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      pointer-events: none; /* Prevents clicks on hidden images */
    }

    .showing img.active {
      opacity: 1;
      pointer-events: auto; /* Allows clicks on active image */
    }

    .content {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .content a {
      margin: 0 10px;
      display: block;
      width: 100%; /* Adjust as needed */
      height: 80px; /* Adjust as needed */
      overflow: hidden;
      border: 2px solid #ddd;
    }

    .content a img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center center;
      transition: opacity 0.3s ease;
    }

    .content a:hover img {
      opacity: 0.7;
    }

    @media screen and (max-width: 768px) {
      .content a {
        width: 70px; /* Adjust as needed */
        height: 50px; /* Adjust as needed */
      }
    }

    /* New Style 1 End*/
  </style>

</head>


<style>
      .appFooter {
    display:none !important;
}
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

/* New Style 2 Start*/
.showing {
  margin: auto;
  height: 360px;
  padding-bottom: 40%;
  position: relative;
  margin-top: 20px;
}
.showing img {
  width: 100%;
  height: 100%;
  position: absolute;
  object-fit: cover;
  object-position: center;
}

.showing img {
  border: 1px solid silver;
  padding: 3px;
  opacity: 0;
}

#img1 {
  opacity: 1;
}

.content {
  margin: auto;
  height: 100px;
  border: none;
  border-top: 2px solid silver;
  padding: 5px;
  padding-top: 10px;
  margin-top: 20px;
}

.content a img {
  width: 100%;
  height: 100%;
  border: 1px solid silver;
  padding: 3px;
  filter: blur(0px);
  object-fit: cover;
  object-position: center;
}

.content a img:hover {
  filter: blur(1px);
}

.showing img:target {
  opacity: 1 !important;
}

@media screen and (max-width: 500px) {
  .showing {
    width: 98%;
    padding-bottom: 98%;
    height:300px;
    margin-top:70px;
  }
  .content {
    width: 99%;
  }
  .content a img {
    margin-left: 1px;
  }
}
/* New Style End End*/
</style>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->



    <!----------------------------------------- Lesego Header START---------------------------------------------------------------------------------->
    
    <!-- App Header Mobile -->
    <div class="appHeader text-light mobilemenu">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <a href="index.html" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <img src="assets/img/logo-svg.png" alt="image" style="width:160px;">
            </a>
        </div>
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- App Header Mobile End -->

    <!-- App Header Desktop Start -->
    <div class="appHeader text-light desktopmenu">
        <div class="left">
            <a href="index.html" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <img src="assets/img/logo-svg.png" alt="image" style="width:180px;margin-left: 100px;">
            </a>
        </div>
        <div class="pageTitle" style="margin-left: 30px;">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-capitalize" aria-current="page" href="#" data-bs-toggle="modal"
                        data-bs-target="#withdrawActionSheet">Sell a Car</a>
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
                <ion-icon class="icon" name="notifications-outline"
                    style="margin-right: 150px !important;"></ion-icon>
            </a>
        </div>
    </div>
    <!-- App Header Desktop End --> 
        <!-----------------------------------------LESEGO HEADER SEND---------------------------------------------------------------------------------->





<div class="toflexflex">
    <!-- App Capsule First Half -->
    <div id="appCapsule tohalf">
        <!-- Buttons -->
        <div class="section">
            <div class="">
                <div class="">
                    <div class="row">
                        
                        <div class="col" style="background: #fff;margin: 0px;border-radius: 10px;">
                            <div class=" pb-0"class="change">
                                
                                <!-- Gallery Images Start -->
                                <div class="container">
  <!-- Gallery container -->
  

  <div class="showing">
    <?php
    // Array of image URLs
    $images = [
      "https://san-cdn.pinewooddms.com/99f5b996-9f70-47fb-84b2-f682d61be218/vehicles/6cbf3a72-ab80-4a46-867c-c2f845ed2523.jpg?",
      "https://san-cdn.pinewooddms.com/99f5b996-9f70-47fb-84b2-f682d61be218/vehicles/aee488c1-2799-420e-946f-c3423a6fe81f.jpg?",
      "https://san-cdn.pinewooddms.com/99f5b996-9f70-47fb-84b2-f682d61be218/vehicles/9d0c4b26-3dfd-4df6-b9f4-4922c8e78558.jpg?",
      "https://san-cdn.pinewooddms.com/99f5b996-9f70-47fb-84b2-f682d61be218/vehicles/a4f52d7d-2ff2-4fb7-898b-cbd17c8e1d2e.jpg?"
    ];

    // Output images in the showing container
    foreach ($images as $key => $image) {
      // Show the first image by default
      $class = ($key === 0) ? 'active' : '';
      echo '<img src="' . $image . '" class="' . $class . '">';
    }
    ?>
  </div>

  <div class="content">
    <?php
    // Output thumbnails
    foreach ($images as $key => $image) {
      echo '<a href="#" onclick="showImage(' . $key . '); return false;"><img src="' . $image . '"></a>';
    }
    ?>
  </div>
</div>

<script>
  // JavaScript function to show the clicked image
  function showImage(index) {
    // Get all images
    var images = document.querySelectorAll('.showing img');

    // Loop through each image to set opacity and visibility
    images.forEach(function(img, i) {
      if (i === index) {
        img.classList.add('active');
      } else {
        img.classList.remove('active');
      }
    });
  }
</script>
                                 <!-- Gallery Image End-->

                                   



                                 <ul class="listview no-line transparent flush simple-listview">
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Make</div>
                                            <strong class="text-success">Toyota</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Model</div>
                                            <strong>Prado 2002 - ON</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Year</div>
                                            <strong>2018</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Mileage</div>
                                            <strong>196 792Km</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Engine Size</div>
                                            <strong>3000</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">Fuel Type</div>
                                            <strong>Diesel</strong>
                                        </li>
                                        <li style="padding: 0px 0px;">
                                            <div class="text-muted">GearBox</div>
                                            <strong>Automatic</strong>
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
                                            <strong>UNK9</strong>
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
                                


                                   <h4 style="color:#222222;font-size: 25px;margin-bottom: 15px !important; margin-top:30px;">Toyota - Prado 2002 ON</h4>
                                   <div>
                                    
                                    <div style="display:flex;gap:20px;padding:10px 0px;">
                                        <div>
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="speedometer-outline"></ion-icon>196 792km</p>
                                        </div>
                                        <div> 
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="cog-outline"></ion-icon>Automatic</p>
                                        </div>
                                        <div>
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="car-outline"></ion-icon>
                                            Diesel</p>
                                        </div>
                                        <div>
                                            <p style="font-size:10px;margin-top:-10px;font-size: 14px;"><ion-icon name="location-outline"></ion-icon>Klerksdorp</p>
                                        </div>
                                    </div>
                                   
                                    <h2 style="color:#222222;margin: 5px 0px 5px 0px;font-size: 35px !important;margin-top: -10px;color:#007bff;font-weight:700;">R 669 800.00</h2>
                                    
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

        <input type="hidden" name="brand" value="Toyota - Prado 2002 ON">
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
				return item.el.attr('title') + '<small>Penta Now</small>';
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
            // Image thumbnails click event
            $(".content a img").on("click", function (e) {
                e.preventDefault();
                $(".showing img").removeClass("active");
                const index = $(this).index();
                $(".showing img").eq(index).addClass("active");
            });
        });
    </script>
<!--CARIO SUBMISSION SCRIPT END-->

</body>

</html>