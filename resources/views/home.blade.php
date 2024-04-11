<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <title>UEI Landing Page</title>
</head>

<body>
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
                        <div class="MENU">
                            <nav>
                                <ul class="menu_list">
                                    <a href="">
                                        <li>HOME</li>
                                    </a>
                                    <a href="#about-section">
                                        <li>ABOUT US</li>
                                    </a>
                                    <a href="#service-section">
                                        <li>SERVICES</li>
                                    </a>
                                    <a href="#course-section">
                                        <li>Courses</li>
                                    </a>
                                    <a href="#contact-us-section">
                                        <li>Contact Us</li>
                                    </a>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </header>
                <div class="Amazing">
                    <h1>
                        INDIA'S TOP <br /><br />
                        HOTEL MANAGEMENT INSTITUTE<br /><br />
                        Recognized Courses In Hotel Management & Cooking</h1>
                    <p>Recognized Courses In Hotel Management & Cooking</p>


                    <div class="CommanButton">
                        <a href="#" class="CommanButton orange">Get a Call</a>
                        <a href="javascript:void(0)" class="CommanButton black" id="enquiryPopup">Enquire Now</a>
                    </div>
                    <div class="arrow-down">
                        <img src="{{ asset('assets/frontend/asset/images/Link → arrow-down.png.png') }}" alt="">

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
                        <h3>99.9%</h3>
                        <p>PLACEMENTS</p>
                    </div>
                    <div class="rates">
                        <h3>100+</h3>
                        <p>TIE-UP UNIVERISITY</p>
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
                                Graduate and Post Graduate level are offered through 13 state-of-the-art campuses across
                                12 cities. The curriculum of the programs are crafted to bridge the ever growing
                                demand-supply gap in the service industry, there is a unique blend of vocational skills
                                training along with formal education..</p>
                        </div>
                    </div>
                    <div class="commanabout">
                        <img src="{{ asset('assets/frontend/asset/images/about-image.png.png') }}" alt="">
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
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax degreeCourses">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/bhm.png') }}" alt="courseimg">
                        </span>
                        <p>BACHELORS IN
                            HOSPITALITY MANAGEMENT <BR /> (International Specialization)</p>
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax degreeCourses">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/bhm.png') }}" alt="courseimg">
                        </span>
                        <p>BACHELORS IN
                            HOSPITALITY MANAGEMENT<BR /> (Culinary Specialization)</p>
                        <a href="">Know More</a>
                    </div>
                    <!-- degree Courses -->


                    <!-- Deploma Courses -->


                    <div class="programMax deplomaCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/Fp.png') }}" alt="courseimg">
                        </span>
                        <p>FOOD PRODUCTION</p>
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax deplomaCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/backrey.png') }}" alt="courseimg">
                        </span>
                        <p>BAKERY & CONFECTIONERY</p>
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax deplomaCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/hm.png') }}" alt="courseimg">
                        </span>
                        <p>HOTEL MANAGEMENT</p>
                        <a href="">Know More</a>
                    </div>


                    <!-- Deploma Courses -->



                    <!-- Certification Course -->


                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset//images/fb.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN F&B SERVICE</p>
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset//images/fb.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN F&B PRODUCTION</p>
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset/images/hs.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN HOUSEKEEPING MANAGEMENT</p>
                        <a href="">Know More</a>
                    </div>
                    <div class="programMax certificationCourse">
                        <span>
                            <img src="{{ asset('assets/frontend/asset//images/fo.png') }}" alt="courseimg">
                        </span>
                        <p>CERTIFICATE IN FRONT OFFICE MANAGEMENT</p>
                        <a href="">Know More</a>
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
                                <input type="text" name="name" placeholder="Your Name">

                                <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                                <input type="email" name="email" placeholder="Email">

                                <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                                <input type="tel" name="number" placeholder="Your Mobile Number">

                                <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                                <textarea name="message" placeholder="Message"></textarea>

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
                    <a href="javascript:void(0)" class="close-btn">×</a>
                    <div class="form">
                        <form class="enquiry-form" autocomplete="off">
                            @csrf
                            <input type="hidden" name="honeyspot">
                            <label for="name">Your Name</label>&nbsp;<span style="color: red">*</span>
                            <input type="text" name="name" placeholder="Your Name">

                            <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                            <input type="email" name="email" placeholder="Email">

                            <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                            <input type="tel" name="number" placeholder="Your Mobile Number">

                            <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                            <textarea name="message" placeholder="Message"></textarea>

                            <input class="submit_button" type="submit" value="Submit">
                        </form>
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
        $("#enquiryPopup").on('click', function() {
            $(".popup").css('display', 'block');
            $("body").css('overflow', 'hidden');
        });

        $(".close-btn").on('click', function() {
            $(".popup").css('display', 'none');
            $("body").css('overflow', 'auto');
        });
    });

    $('.enquiry-form').on('submit', function() {
        event.preventDefault();
        var isEmpty = false;
        $(this).find('input[type="text"], input[type="email"], input[type="tel"], textarea').each(function() {
            if ($.trim($(this).val()) === '') {
                isEmpty = true;
            }
        });
        if (isEmpty) {
            alert('All fields are required.');
            return;
        }
        var formData = $(this).serialize();
        var route = "{{ route('enquirySubmit') }}";
        $.ajax({
            url: route,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response == 'true') {
                    toastr.success('Enquiry Submit', 'Success');
                    location.reload();
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
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
        $('.' + val).css('display', 'block');
    }
</script>

</html>
