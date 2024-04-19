<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <title>UEI Global Jalandhar</title>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MGPXLD4G');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-766337329"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-766337329');
    </script>
    <!-- Event snippet for LeadFormSubmit conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-766337329/uTc0CPDF5aYZELHCte0C'});
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGPXLD4G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main>

        <!-- commna heading -->

        <!-- <div class="Commanheading">
            <h2>GS GLOBAL INSTIUTE</h2>
        </div> -->

        <!-- common button orange -->

        <!-- <a href="" class="CommanButton">SEE MENU</a> -->

        <!-- common button black -->
        <!-- <a href="" class="CommanButton black">Book a Table</a> -->
        <section class="banner">
            <div class="container">
                <header>
                    <div class="top_header">
                        <div class="logo">
                            <img src="{{ asset('assets/frontend/asset/images/logo.webp') }}" alt="">
                        </div>
                        <span class="hamburger"><img src="{{ asset('assets/frontend/asset/images/bars.png') }}"
                                alt=""></span>
                        <div class="menu">
                            <nav>
                                <ul class="menu_list">
                                    <a href="javascript:void(0)" class="sidebarCross">×</a>
                                    <a href="javascript:void(0)">
                                        <li>Home</li>
                                    </a>
                                    <a href="#about-section" class="navSection">
                                        <li>About us</li>
                                    </a>
                                    <a href="#service-section" class="navSection">
                                        <li>Services</li>
                                    </a>
                                    <a href="#course-section" class="navSection">
                                        <li>Courses</li>
                                    </a>
                                    <a href="#contact-us-section" class="navSection">
                                        <li>Contact Us</li>
                                    </a>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </header>
                <div class="Amazing">
                    <div class="content">
                        <h1>
                            <red> INDIA'S TOP</red> HOTEL MANAGEMENT INSTITUTE<br />
                            <size>Recognized Courses in Hotel Management & Cooking</size>
                        </h1>
                        <p>Best Cooking Course in All Over Punjab </p>


                        <div class="CommanButton">
                            <a href="#" class="CommanButton orange coustomOpenForm">Get a Call</a>
                            <a href="javascript:void(0)" class="CommanButton black coustomOpenForm">Enquire Now</a>
                        </div>
                        <div class="arrow-down">
                            <img src="{{ asset('assets/frontend/asset/images/Link → arrow-down.png.png') }}"
                                alt="">

                        </div>

                    </div>

                    <div class="image">
                        <img src="{{ asset('assets/frontend/asset/images/kapildevOne.jpeg') }}" alt="kapil dev">
                    </div>

                </div>
            </div>
        </section>

        <section class="ABOUT" id="about-section">
            <div class="container">
                <div class="rate_pass">
                    <div class="rates">
                        <h3>250+</h3>
                        <p>INDUSTRY PARTNERS</p>
                    </div>
                    <div class="rates">
                        <h3>100%</h3>
                        <p>Placement Assistance</p>
                    </div>
                    <div class="rates">
                        <h3>30+</h3>
                        <p>UGC Approved Program</p>
                    </div>

                </div>
                <div class="aboutMain">
                    <div class="commanjustifty">
                        <div class="Commanheading">
                            <h2>WELCOME TO UEI GLOBAL</h2>
                        </div>
                        <div class="Commanparagraph">
                            <p class="Commanparagraph orange">KNOW ABOUT US A LITTLE MORE</p>
                            <p class="Commanparagraph white">UEI Global is coming together of industry experts with a
                                vision to offer world class education to future professionals in a wide field of service
                                sector. Programs in Hospitality Management and Business Management both at Under
                                Graduate and Post Graduate level are offered through 13 state of the art campuses across
                                12 cities. The curriculum of the programs are crafted to bridge the ever growing
                                demand supply gap in the service industry, there is a unique blend of vocational skills
                                training along with formal education.</p>
                        </div>
                    </div>
                    <div class="commanabout">
                        <img src="{{ asset('assets/frontend/asset/images/kapildevThree.png') }}" alt="">
                    </div>
                </div>
            </div>

        </section>

        <section class=" Services" id="service-section">
            <div class="container">
                <div class="Commanheading">
                    <h2>Services</h2>
                </div>
                <p class="Commanparagraph orange">THE EXTRA ORDINARY THINGS</p>

                <div class="serviceContainer">
                    <div class="serviceList">
                        <span class="images">
                            <img src="{{ asset('assets/frontend/asset/images/learning.png') }}" alt="iconOne">
                        </span>
                        <p class="name">DIPLOMA COURSES</p>
                        <p>UEI Global offering Diploma and Degree in Hotel Management both at bachelors and masters
                            level.</p>
                    </div>
                    <div class="serviceList">
                        <span class="images">
                            <img src="{{ asset('assets/frontend/asset/images/learning.png') }}" alt="iconOne">
                        </span>
                        <p class="name">CERTIFICATION COURSE</p>
                        <p>UEI Global offering certifications as Hotel Management at bachelors level.</p>
                    </div>

                    <div class="serviceList">
                        <span class="images">
                            <img src="{{ asset('assets/frontend/asset/images/learning.png') }}" alt="iconOne">
                        </span>
                        <p class="name">SHORT TERM COOKING COURSES</p>
                        <p>Job Opportunities and Future of Culinary/Cooking Courses</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="programs" id="course-section">
            <div class="container">
                <div class="Commanheading">
                    <h2>Courses</h2>
                </div>
                <p class="Commanparagraph orange">KNOW ABOUT US A LITTLE MORE</p>
                <ul class="programList">
                    <li id="degreeCourses" onclick="courseTab('degreeCourses')">Degree Courses</li>
                    <li id="deplomaCourse" onclick="courseTab('deplomaCourse')">Diploma Courses</li>
                    <li id="certificationCourse" onclick="courseTab('certificationCourse')">Certification Courses</li>
                </ul>
                <div class="programMain">
                    <!-- degree Courses -->
                    <div class="programMax degreeCourses">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/bhm.png') }}" alt="courseimg">
                        </span>
                        <p>BACHELORS IN
                            HOSPITALITY MANAGEMENT</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax degreeCourses">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/bhm.png') }}" alt="courseimg">
                        </span>
                        <p>BACHELORS IN
                            HOSPITALITY MANAGEMENT <BR /> (International Specialization)</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax degreeCourses">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/bhm.png') }}" alt="courseimg">
                        </span>
                        <p>BACHELORS IN
                            HOSPITALITY MANAGEMENT<BR /> (Culinary Specialization)</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <!-- degree Courses -->


                    <!-- Deploma Courses -->


                    <div class="programMax deplomaCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/Fp.png') }}" alt="courseimg">
                        </span>
                        <p>FOOD PRODUCTION</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax deplomaCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/backrey.png') }}" alt="courseimg">
                        </span>
                        <p>BAKERY & CONFECTIONERY</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax deplomaCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/hm.png') }}" alt="courseimg">
                        </span>
                        <p>HOTEL MANAGEMENT</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>


                    <!-- Deploma Courses -->



                    <!-- Certification Course -->


                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset//images/fb.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN F&B SERVICE</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset//images/fb.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN F&B PRODUCTION</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/hs.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN HOUSEKEEPING MANAGEMENT</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>
                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset//images/fo.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN FRONT OFFICE MANAGEMENT</p>
                        <a href="javascript:void(0)" class="coustomOpenForm">Know More</a>
                    </div>

                    <!-- Certification Course -->
                </div>
            </div>
        </section>

        <section class="testi" id="contact-us-section">
            <div class="container">
                <div class="testiMain">
                    <div class="Commanheading">
                        <h2>Enquire Now</h2>
                    </div>
                    <p class="headSupport">TRUST THE PEOPLE WHO Be With US</p>
                    <div class="listMain">

                        <div class="testiList">
                            <div class="list">
                                <p class="parah">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor incididunt ut
                                    labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore.</p>
                                <!-- <span>
                                    <img src="./asset/images/user.png" alt="user">
                                </span> -->
                                <p class="NamePer">SARAH LIMA</p>
                            </div>
                        </div>

                        <div class="form">

                            <form class="enquiry-form" autocomplete="off">
                                @csrf
                                <input type="hidden" name="honeyspot">
                                <label for="name">Your Name</label> &nbsp;<span style="color: red">*</span>
                                <div class="inputContainer">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>

                                <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                                <div class="inputContainer">
                                    <input type="email" name="email" placeholder="Email">
                                </div>

                                <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                                <div class="inputContainer">
                                    <input type="tel" name="number" id="phone"
                                        placeholder="Your Mobile Number">
                                </div>

                                <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                                <div class="inputContainer">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="concentMain">
                                    <input type="checkbox" name="contactConsent" id="checkConsent">
                                    <label for="checkConsent">By submitting this enquiry I agree to be contacted in the
                                        most suitable manner (by phone or email) in order to respond to my
                                        enquiry.</label>
                                </div>
                                <p id="contact-consent"
                                    style="transform: translateX(20px);
                                margin-bottom:0;margin-top:20px;color:red;display:none;">
                                    We
                                    cannot submit your enquiry without contact consent</p>
                                <input class="submit_button" type="submit" value="Submit">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="popup" style="display: none">
            <div class="container">
                <div class="popupmain">

                    <div class="form">
                        <a href="javascript:void(0)" class="close-btn">×</a>
                        <form class="enquiry-form" autocomplete="off">
                            @csrf
                            <input type="hidden" name="honeyspot">
                            <label for="name">Your Name</label>&nbsp;<span style="color: red">*</span>
                            <input type="text" name="name" placeholder="Your Name">

                            <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                            <input type="email" name="email" placeholder="Email">

                            <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                            <input type="tel" name="number" id="phonePopup" placeholder="Your Mobile Number">

                            <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                            <textarea name="message" placeholder="Message"></textarea>

                            <div class="concentMain">
                                <input type="checkbox" name="contactConsent" id="checkConsentPopup">
                                <label for="checkConsentPopup">By submitting this enquiry I agree to be contacted in
                                    the
                                    most suitable manner (by phone or email) in order to respond to my
                                    enquiry.</label>
                            </div>
                            <p id="contact-consent"
                                style="transform: translateX(20px);
                            margin-bottom:0;margin-top:20px;color:red;display:none;">
                                We
                                cannot submit your enquiry without contact consent</p>
                            <input class="submit_button" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="loader">
            <h1>Please Wait</h1>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id=area>
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

<script>
    $(document).ready(function() {

        $('.navSection').on('click', function(event) {
            event.preventDefault();
            var targetSectionID = $(this).attr('href');
            var targetSection = $(targetSectionID)[0];
            targetSection.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        });

        $(".hamburger").on("click", function() {
            $(".menu").css("right", "0");
            $(this).addClass('active');
        });

        $(".sidebarCross").on("click", function() {
            $(".menu").css("right", "-500px");
            $(".hamburger").removeClass('active');
        });

        $(".coustomOpenForm").on('click', function() {
            $(".popup").css('display', 'block');
            $("body").css('overflow', 'hidden');
        });
        $(".close-btn").on('click', function() {
            $(".popup").css('display', 'none');
            $("body").css('overflow', 'auto');
        });

        $("#phonePopup").on('input', function() {
            var inputValue = $("#phonePopup").val();
            var filteredInput = inputValue.replace(/[^0-9]/g, '');
            if (filteredInput.length > 10) {
                filteredInput = filteredInput.substring(0, 10);
            }
            $("#phonePopup").val(filteredInput);
        });
        $("#phone").on('input', function() {
            var inputValue = $("#phone").val();
            var filteredInput = inputValue.replace(/[^0-9]/g, '');
            if (filteredInput.length > 10) {
                filteredInput = filteredInput.substring(0, 10);
            }
            $("#phone").val(filteredInput);
        });
    });

    $('.enquiry-form').on('submit', function() {


        event.preventDefault();
        var isValid = true;
        var $form = $(this);


        $form.find('#contact-consent').hide();

        var $name = $form.find('input[name="name"]');
        var $email = $form.find('input[name="email"]');
        var $number = $form.find('input[name="number"]');
        var $message = $form.find('textarea[name="message"]');

        // Clear previous error messages
        $form.find('.error-message').remove();

        // Validate name
        if ($.trim($name.val()) === '') {
            isValid = false;
            $name.attr("placeholder", "Name Field is Required");
            // Add a class to your name input when validation fails
            $name.addClass("error-placeholder");
        }

        // Validate email
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test($email.val())) {
            isValid = false;
            $email.attr("placeholder", "Email Field is Required");
            // Add a class to your email input when validation fails
            $email.addClass("error-placeholder");
        }

        // Validate phone number (exactly 10 digits)
        var phonePattern = /^\d{10}$/;
        if (!phonePattern.test($number.val())) {
            isValid = false;
            $number.attr("placeholder", "Number Field is Required");
            $number.val(null);
            // Add a class to your number input when validation fails
            $number.addClass("error-placeholder");
        }

        // Validate message
        if ($.trim($message.val()) === '') {
            isValid = false;
            $message.attr("placeholder", "Message Field is Required");
            // Add a class to your message input when validation fails
            $message.addClass("error-placeholder");
        }

        if (!isValid) {
            // If validation fails, stop form submission and alert the user
            alert('Please enter correct data in the form.');
            return;
        }
        if ($form.find('input[name="contactConsent"]').is(":checked") != true) {
            $form.find('#contact-consent').show();
            return false;
        } else {
            $('.submit_button').prop('disabled', true);

            var popupForm = $('.popup').css('display');

            if (popupForm !== 'none') {
                $('.popup').css('display', 'none');
            }
            $('#loader').css('display', 'block');
            var formData = $form.serialize();
            var route = "{{ route('enquirySubmit') }}";
            $.ajax({
                url: route,
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response == 'true') {
                        $('#loader').css('display', 'none');
                        window.open("{{ route('thankyou') }}", '_blank');
                    }
                },
                error: function(err) {
                    console.log(err);
                    $('#loader').css('display', 'none');
                }
            });
        }
    });

    function courseTab(val) {
        const tabIds = ['degreeCourses', 'deplomaCourse', 'certificationCourse'];
        tabIds.forEach(id => {
            $('#' + id).css({
                'background': 'none',
                'color': 'black'
            });
            $('.' + id).css('display', 'none');
        });
        $('#' + val).css({
            'background': '#821600',
            'color': 'white',
            'padding': '0 8px'
        });
        $('.' + val).css('display', 'flex');
    }
</script>

</html>
