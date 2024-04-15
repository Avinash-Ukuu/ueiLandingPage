<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles/style.css') }}">
    <title>Thank-you</title>
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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGPXLD4G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main>
        <div class="sectionContainer">


            <section class="mainThankyou">

                <div class="container">

                    <div class="mainContainer">

                        <div class="lottie">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player
                                src="https://lottie.host/9c8f9017-4d3e-4f78-8c70-04c6f8dd3812/JPjcibILJV.json"
                                background="##FFFFFF" speed="1" style="width: 300px; height: 300px" loop autoplay
                                direction="1" mode="normal"></lottie-player>
                        </div>

                        <div class="thankyouContent">
                            <h2>Thankyou for your Enquire Our Team Will Contact You As Soon As Possible !</h2>
                        </div>

                        {{-- <a href="{{ route('home') }}" class="CommanButton black coustomOpenForm">Home</a> --}}
                    </div>

                    {{-- <div class="imageMain">
                <img src="{{ asset('assets/frontend/asset/images/kapildevOne.jpeg') }}" alt="">
            </div> --}}

                </div>


            </section>




        </div>

</body>

</html>
