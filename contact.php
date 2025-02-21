 <!-- Header Section Start -->
    <?php 
        include('partials/header.php');

        include('partials/top_head.php');
    ?>
    <style type="text/css">
        .header-1{
            z-index: 10;
        }
        .breadcrumnd-banner {
            background-image: url('assets/img/rasi/contact/contact-us-banner.jpg');
        }
        .breadcrumnd-banner::before {
            position: unset !important;
        }

        .sales_job_cards,.product_dev_job_cards,.production_job_cards,.processing_job_cards,.quality_job_cards,.biotech_job_cards,.corporate_job_cards,.all_job_cards_div {
            display: none;
        }

        .google-map iframe {
    width: 100%;
    border: 0px;
     filter: unset !important; 
}
    </style>


    <style>
    /* Card Design */
    .card {
      border: none;
      border-radius: 15px;
      background: linear-gradient(145deg, #ffffff, #f7f7f7);
      box-shadow: 6px 6px 12px #d9d9d9, -6px -6px 12px #ffffff;
/*      transition: transform 0.4s ease, box-shadow 0.4s ease;*/
      opacity: 0; /* Initial state for animation */
      transform: translateY(30px); /* Initial state for animation */
      transform-origin: top center; /* Pivot point at the top center */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /*.card:hover {
      transform: translateY(-10px);
      box-shadow: 10px 10px 20px #d1d1d1, -10px -10px 20px #ffffff;
    }*/

   @keyframes swing {
      0% { transform: rotate(0deg); }
      25% { transform: rotate(-10deg); }
      50% { transform: rotate(10deg); }
      75% { transform: rotate(-5deg); }
      100% { transform: rotate(0deg); }
    }

    .card:hover {
/*      animation: swing 2.5s ease-in-out; /* Duration and easing */*/
    }



    /* Card Header */
    .card-header {
      display: flex;
      align-items: center;
      justify-content: center;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      background: linear-gradient(135deg, #2ab939, #4cd657);
      color: white;
/*      font-weight: bold;*/
      font-size: 1.2rem;
      padding: 10px 15px;
      text-align: center;
    }

    .card-header .icon {
      font-size: 25px;
      margin-right: 10px;
    }

    /* Card Body */
    .card-body {
      text-align: center;
      padding: 20px;
    }

    .icon-body {
      font-size: 35px;
      color: #2ab939;
      margin-bottom: 15px;
    }

    /* Onload Animation */
    .card.animate {
      opacity: 1;
      transform: translateY(0);
    }

    .card:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    #form_submit {
        padding: unset !important;
    }
  </style>

  <style type="text/css">
      input[type=text], [type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  height: 50px;
}

input[type=button] {
  background-color: white ;
  color: #6d756d !important;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  height: 50px;
}

input[type=submit]:hover {
/*  background-color: #4cd657;*/
}


.contactform {
  position: relative;    
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 5px;
  z-index:2;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom:auto;
  margin-top:3%;    
  height: 610px;
  animation-name: gradient;
  animation-duration: 3s;
  animation-iteration-count: infinite;  
    
}
    
.contactform:hover { 
 animation-name: gradient;
 animation-duration: 15s;
 animation-iteration-count: infinite;    
    
   
}


/*.column {
  float: center;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
    
}*/

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: auto;
    margin-top:0;
  }
}


/*@keyframes gradient {
  0%   {background-color: #A5D6A7;} /* Soft Light Green */
/*  20%  {background-color: #C8E6C9;} /* Pale Light Green */
/*  40%  {background-color: #81C784;} /* Light Mint Green */
/*  60%  {background-color: #AED581;} /* Fresh Light Green */
/*  80%  {background-color: #66BB6A;} /* Pastel Green */
/*  100% {background-color: #43A047;} /* Muted Green */
/*}*/

/*@keyframes gradient {
  0%   {background-color: #A5D6A7;}
  35%  {background-color: #81C784;}
  65%  {background-color: #66BB6A;}
  100% {background-color: #43A047;}
}*/

@keyframes gradient {
  0%   {background-color: #088F8F;} 
  20%  {background-color: #5F9EA0;}
  40%  {background-color: #AFE1AF;}
  60%  {background-color: #50C878;}
  80%  {background-color: #00A36C;}
  100% {background-color: #2AAA8A;}
}



  </style>
    <!-- Hero Section Start -->
    <section class="breadcrumnd-banner overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapp">
                <div class="bread-content">
                    <h1 class="wow fadeInDown" data-wow-delay=".4s">
                        Contact
                    </h1>
                    <ul class="bread-listing">
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>
                        </li>
                        <li>
                            Contact
                        </li>
                    </ul>
                </div>
                <div class="bread-thumb d-sm-block d-none">
                    <!-- <img src="assets/img/rasi/cartoon-office-workers-participating-team-building-exercise-located-right-side_1077802-426179.png" alt="img"> -->
                </div>
            </div>
        </div>
    </section>


    <!-- Talking COntact section -->
    <section class="talking-section overflow-hidden pt-5 pb-5 bg-white">
        <div class="container">
            <!-- TITLE START-->
                <div class="section-head text-center wow fadeInDown" data-wow-delay="0.5s">
                    <h2 data-title="Contact Our Team">Contact Our Team</h2>
                    <div class="mt-separator-outer">
                        <div class="mt-separator site-bg-primary"></div>
                    </div>
                </div>
            <!-- TITLE END-->

            <div class="row g-4 align-items-xl-center flex-row-reverse justify-content-between">
                <div class="col-md-6">
                    <div class="talking-contact-box wow fadeInUp" data-wow-delay=".4s">
                        <div class="conatact-box common-contact-inner position-relative contactform">

                            <form name="myform" > 
                                <!-- <div class="contactform"> -->
                                  <div style="text-align:center">
                                    <h1>Get In Touch</h1>
                                    <p class="text-white">Contact me for a quote, to collaborate or just say hi :) </p>
                                  </div>
                                  <div class="row">
                                    <div class="column">
                                      <form action="/action_page.php">
                                        <!-- <label for="name">Name</label> -->
                                        <input type="text" id="name" name="name" placeholder="Name.." required>
                                        <div id="name-error" class="error-message" style="display: none; color: #FFC000; font-size: 14px; font-weight: bold;">Please Enter Name.</div>

                                        <input type="email" id="email" name="email" placeholder="Email.." required>
                                        <div id="email-error" class="error-message" style="display: none; color: #FFC000;">Please Enter Email.</div>
                                          
                                        <!-- <label for="subject">Subject</label> -->
                                        <input type="text" maxlength="10" id="mobile" name="mobile" placeholder="Mobile">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>
                                        <input type="button" value="Submit" id="form_submit">
                                        <!-- <button type="button" id="form_submit">Submit</button> -->
                                      </form>
                                    </div>
                                  </div>
                                <!-- </div> -->
                            </form>  

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <div class="taklking-cotnact-thumb w-100 wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/img/rasi/contact/organic-flat-customer-support-illustration_23-2148899174.avif" alt="img" class="w-100">
                    </div> -->
                    <div class="section text-center wow fadeInDown" data-wow-delay="0.5s">
                        <h4>Have Questions? Let's Talk!</h4>
                        <p>We're here to help you start your career journey with Rasi Seeds.</p>
                    </div>

                    <div class="row">
                      
                      <!-- Admin Office Address -->
                      <div class="col-md-6 g-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card h-100 shadow border-0" onclick="openGoogleMap('70/9, Cuddalore Main Road, Thulukkanur, Ammampalayam Po, Attur - 636 141, Salem Dist., Tamil Nadu, India')" style="cursor: pointer;">
                          <div class="card-header text-white text-center d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #2ab939, #4cd657);">
                            <i class="fa-solid fa-building-columns icon me-3"></i>
                            Admin Office
                          </div>
                          <div class="card-body text-center" style="background-color: #f4f4f4; border-radius: 10px;">
                            <p class="text-dark f-13 mb-0">
                              70/9, Cuddalore Main Road,<br>
                              Thulukkanur, Ammampalayam Po,<br>
                              Attur - 636 141, Salem Dist.,<br>
                              Tamil Nadu, India
                            </p>
                          </div>
                        </div>
                      </div>

                      <!-- Corporate Office Address -->
                      <div class="col-md-6 g-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card h-100 shadow border-0" onclick="openGoogleMap('Rasi Enclave, Green Fields, 737 C, Puliyakulam Road, Coimbatore – 641 045, Tamil Nadu, India')" style="cursor: pointer;">
                          <div class="card-header text-white text-center d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #2ab939, #4cd657);">
                            <i class="fa-solid fa-business-time icon me-3"></i>
                            Corporate Office
                          </div>
                          <div class="card-body text-center" style="background-color: #f4f4f4; border-radius: 10px;">
                            <p class="text-dark f-13 mb-0">
                              Rasi Enclave, Green Fields,<br>
                              737 C, Puliyakulam Road,<br>
                              Coimbatore – 641 045,<br>
                              Tamil Nadu, India
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <!-- Register Office Address -->
                      <div class="col-md-6 g-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card h-100 shadow border-0" onclick="openGoogleMap('1-98/k/19/T,Sri Rasi Silica, Krithika layout, Madhapur, Hyderabad 50008, Telangana, India')" style="cursor: pointer;">
                          <div class="card-header text-white text-center d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #2ab939, #4cd657);">
                            <i class="fa-solid fa-building-circle-exclamation icon me-3"></i>
                            Delhi Office
                          </div>
                          <div class="card-body text-center" style="background-color: #f4f4f4; border-radius: 10px;">
                            <p class="text-dark f-13 mb-0">
                              F-3,First Floor,<br>
                              Green Park Main,<br>
                              New Delhi 110016,<br>
                              Cell no : 9944976906
                            </p>
                          </div>
                        </div>
                      </div>

                    <!-- Register Office Address -->
                      <div class="col-md-6 g-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card h-100 shadow border-0" onclick="openGoogleMap('1-98/k/19/T,Sri Rasi Silica, Krithika layout, Madhapur, Hyderabad 50008, Telangana, India')" style="cursor: pointer;">
                          <div class="card-header text-white text-center d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #2ab939, #4cd657);">
                            <i class="fa-solid fa-building-circle-exclamation icon me-3"></i>
                            Hyderabad Office
                          </div>
                          <div class="card-body text-center" style="background-color: #f4f4f4; border-radius: 10px;">
                            <p class="text-dark f-13 mb-0">
                              1-98/k/19/T,Sri Rasi Silica,<br>
                              Krithika layout, Madhapur,<br>
                              Hyderabad 50008,<br>
                              Telangana, India
                            </p>
                          </div>
                        </div>
                      </div>
                      </div>

                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map -->
    <section class="pt-5 pb-5 bg-white">
        <!-- TITLE START-->
                    <div class="section-head text-center wow fadeInDown" data-wow-delay="0.5s">
                        <h2 data-title="Visit Us" class="m-0">Visit Us</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator site-bg-primary"></div>
                        </div>
                    </div>

                    <!-- TITLE END-->
        <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.657504707146!2d76.95532471428738!3d10.99839199255471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba857e9289a301d%3A0x6a5a2e5ddcdf17e7!2sRasi%20Enclave%2C%20Green%20Fields%2C%20737%20C%2C%20Puliyakulam%20Rd%2C%20Coimbatore%2C%20Tamil%20Nadu%20641045!5e0!3m2!1sen!2sin!4v1717004161632!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <div class="container-fluid">   
            <div id="map" style="height: 500px; width: 100%;"></div>
        </div>
    </section>


    

    
    <!--<< Footer Section Start >>-->
    <?php 
        include('partials/footer.php');
        include('partials/bottom_script.php');

     ?>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdg45zo84yXrN95XrAlXtVcN-_q9ysGQQ&callback=initMap">
</script>

<script>
  function openGoogleMap(address) {
    // Replace spaces with '+' for Google Maps query
    const mapUrl = `https://www.google.com/maps?q=${encodeURIComponent(address)}&z=15`;
    window.open(mapUrl, '_blank'); // Open in a new tab
}
</script>

     <script>
    // Onload Animation
    document.addEventListener("DOMContentLoaded", () => {
      const cards = document.querySelectorAll('.card');
      cards.forEach((card, index) => {
        setTimeout(() => {
          card.classList.add('animate');
        }, index * 200); // Delay each card's animation for a staggered effect
      });
    });
  </script>

  <script>
  // function initMap() {
  //   // Define the location
  //   const officeLocation = { lat: 10.9984, lng: 76.9553 };

  //   // Create the map
  //   const map = new google.maps.Map(document.getElementById("map"), {
  //     zoom: 17, // Increased zoom for closer view
  //     center: officeLocation,
  //   });

  //   // Add a custom marker with a label
  //   const customIcon = {
  //     url: "https://maps.google.com/mapfiles/ms/icons/green-dot.png", // Custom marker icon
  //     scaledSize: new google.maps.Size(50, 50), // Adjust marker size
  //   };

  //   const marker = new google.maps.Marker({
  //     position: officeLocation,
  //     map: map,
  //     icon: customIcon, // Use the custom icon
  //     animation: google.maps.Animation.BOUNCE, // Add bounce animation
  //     label: {
  //       text: "Rasi Seeds",
  //       color: "#ff5733",
  //       fontSize: "16px",
  //       fontWeight: "bold",
  //     },
  //   });

  //   // Optional: Add an info window for more details
  //   const infoWindow = new google.maps.InfoWindow({
  //     content: "<strong>Rasi Enclave</strong><br>737 C, Puliyakulam Road,<br>Coimbatore – 641 045,<br>Tamil Nadu, India",
  //   });

  //   marker.addListener("click", () => {
  //     infoWindow.open(map, marker);
  //   });
  // }

  // // Load the map
  // window.onload = initMap;
</script>

<script>
  function initMap() {
    // Define the locations
    const locations = [
      {
        position: { lat: 11.3699, lng: 78.6014 }, // Admin Office
        title: "Admin Office",
        content: `<h6>Admin Office</h6>
                  <p class="text-dark f-14 mb-0">
                  70/9, Cuddalore Main Road,<br>
                  Thulukkanur, Ammampalayam Po,<br>
                  Attur - 636 141, Salem Dist.,<br>
                  Tamil Nadu, India
                </p>`,
        icon: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png",
        label: "Rasi Seeds - Admin Office",
      },
      {
        position: { lat: 10.9984, lng: 76.9553 }, // Corporate Office
        title: "Corporate Office",
        content: `<h6>Corporate Office</h6>
                  <p class="text-dark f-14 mb-0">
                  Rasi Enclave, Green Fields,<br>
                  737 C, Puliyakulam Road,<br>
                  Coimbatore – 641 045,<br>
                  Tamil Nadu, India
                </p>`,
        icon: "https://maps.google.com/mapfiles/ms/icons/green-dot.png",
        label: "Rasi Seeds - Corporate Office",
      },
      {
        position: { lat: 17.4435, lng: 78.3772 }, // Registered Office
        title: "Registered Office",
        content: `<h6>Registered Office</h6>
                  <p class="text-dark f-14 mb-0">
                  1-98/k/19/T,Sri Rasi Silica,<br>
                  Krithika layout, Madhapur,<br>
                  Hyderabad 50008,<br>
                  Telangana, India
                </p>`,
        icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
        label: "Rasi Seeds - Registered Office",
      },
    ];

    // Create the map centered on India
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5, // Adjusted zoom for a world map view
      center: { lat: 15.9129, lng: 79.73999 }, // Center of India
    });

    // Add markers with info windows
    locations.forEach((location) => {
      const marker = new google.maps.Marker({
        position: location.position,
        map: map,
        title: location.title,
        icon: {
          url: location.icon,
          scaledSize: new google.maps.Size(40, 40),
        },
        label: {
          text: location.label,
          color: "#ff5733",
          fontSize: "12px",
          // fontWeight: "bold",
        },
        animation: google.maps.Animation.BOUNCE, // Add bounce animation
      });

      const infoWindow = new google.maps.InfoWindow({
        content: location.content,
      });

      marker.addListener("mouseover", () => {
        infoWindow.open(map, marker);
      });

      // assuming you also want to hide the infowindow when user mouses-out
       marker.addListener('mouseout', function() {
         infoWindow.close();
       });

      //  setTimeout(() => {
      //   marker.setAnimation(null);
      // }, 3000);

    });


  }

  // Load the map
  window.onload = initMap;
</script>

<script type="text/javascript">

    $('#mobile').on('input', function() {
            let input = $(this).val().replace(/\D/g, ''); // Remove non-digit characters

            // Ensure the input starts with 6, 7, 8, or 9
            if (input.length > 0 && !/^[6-9]/.test(input)) {
                input = input.substring(1); // Remove the first character if it's not 6-9
            }

            $(this).val(input); // Set the valid input back to the input field
        });

    $('#name').on('input', function() {
            const allowedCharRegex = /^[a-zA-Z\s.]*$/;
            const inputValue = $(this).val();
            
            if (!allowedCharRegex.test(inputValue)) {
                $(this).val(inputValue.replace(/[^a-zA-Z\s.]/g, ''));
            }
        });

    $('#email').on('input', function () {
        let email = $(this).val();
        
        // Regular expression for basic email validation
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(email)) {
            // If valid, you can optionally provide feedback
            $(this).css('border-color', 'green'); // Green border for valid email
        } else {
            // Invalid email feedback
            $(this).css('border-color', 'red'); // Red border for invalid email
            return false;
        }
    });


    $(document).on('click','#form_submit',function(event){
        event.preventDefault();  
         // Clear previous error messages
        $('.error-message').hide();

        // Get values from the fields
        var name = $('#name').val();
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var message = $('#message').val();

        var isValid = true;

        // Validate required fields and show error messages if needed
        if (name === '') {
            $('#name-error').show();
            $('#name').css('border-color', 'red');
            isValid = false;
        }
        if (email === '') {
            $('#email-error').show();
            $('#email').css('border-color', 'red');
            isValid = false;
        }

        if(isValid)
            {
                $.ajax({
                    url:'common_ajax.php',
                    type:'POST',
                    data: {'Action': 'contact_submit','cname':name,'cemail':email,'cmobile':mobile,'cmessage':message },
                    dataType: 'json',
                    success: function(response) {
                        if (response && response.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: response.message,
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        }
                        else if (response && response.status == 500) {
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: response.message,
                                confirmButtonText: "OK"
                            });
                        }

                    },

                });
            }
    });
</script>

