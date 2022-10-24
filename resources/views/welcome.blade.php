<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gigabull</title>

    @googlefonts
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="antialiased container home w-100">
    <!-- I see you like to go through other people's stuff. . . -->

    <section class="row my-5">
        <div class="col d-flex flex-column justify-content-center">
            <img src="{{ asset('images/gigabull_logo_filled.png') }}" alt="Gigabull Logo" class="p-4" id="gigabull_logo">
            <div id="smoke">
                <div class="w-50 float-start">
                    <img src="{{ asset('images/smoke.gif') }}" alt="Gigabull Smoke Left" id="smoke_left">
                </div>
                <div class="w-50 float-end">
                    <img src="{{ asset('images/smoke.gif') }}" alt="Gigabull Smoke Left" id="smoke_right">
                </div>
            </div>
            <h2 class="text-center text-primary">Gigabull</h2>
        </div>
    </section>

    <section class="mt-5 row" id="bio">
        <div class="col-md-4 offset-md-4">
            <p class="text-justify mx-auto">Gigabull is a band with a video game. Download it below:</p>
        </div>
    </section>

    <section class="row my-5" id="app_links">
        <div class="col d-flex justify-content-evenly">
            <a href="#"><img src="{{ asset('images/google-play-badge.png') }}" alt="Get it on Google Play"></a>
            <a href="#"><img src="{{ asset('images/download-on-the-app-store.png') }}" alt="Download on the App Store"></a>
        </div>
    </section>

    <section class="my-5 pt-5 row" id="socials">
        <div class="col-md-6 d-flex justify-content-between offset-md-3">
            <a href="#"><i class="fa-2x fa-brands fa-tiktok"></i></a>
            <a href="#"><i class="fa-2x fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-2x fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-2x fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-2x fa-brands fa-youtube"></i></a>
        </div>
    </section>

    <section class="my-5 py-5 row" id="merch">
        <h3 class="text-center">Products</h3>
        <div class="product_wrapper d-flex justify-content-between mt-5">
            <div class="col-4">
                <a href="#"><img src="{{ asset('images/shirt.png') }}" alt="shirt" class="d-block mx-auto"></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="{{ asset('images/beanie.png') }}" alt="beanie" class="d-block mx-auto"></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="{{ asset('images/hoodie_PNG45.png') }}" alt="hoodie" class="d-block mx-auto"></a>
            </div>
        </div>

    </section>

    <section class="my-5 py-5 row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center my-4">Mailing List</h3>
            <form>
                <div class="mb-3">
                    <label for="mailing_email" class="form-label d-none">Email</label>
                    <input name="mailing_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </section>

    <section class="my-5 row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center my-4">Contact</h3>
            <form>
                <div class="mb-3">
                    <label for="contact_name" class="form-label d-none">Name</label>
                    <input type="contact_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="contact_email" class="form-label d-none">Email</label>
                    <input name="contact_email" type="email" class="form-control" id="contact_email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="contact_message" class="form-label d-none">Message</label>
                    <textarea name="contact_message" class="form-control" id="exampleInputPassword1" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </section>
</body>
<script src="{{ mix('js/app.js') }}" defer></script>
</html>
