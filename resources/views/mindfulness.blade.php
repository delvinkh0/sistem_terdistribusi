@extends('app')

@section('main')
<main>
    <section class="wrapper" style="position: absolute; top:0; margin: 0; padding:0;">
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

    <section id="hero">
        <div class="inner-hero">
            <div class="title-and-desc">
                <div class="title">
                    <h1>Mindfulness</h1>
                </div>
                <div class="desc">
                    <p>Temukan Ketenangan Diri Melalui Teknik Pernafasan: Sederhana, Efektif, dan Fokus pada Diri Sendiri.</p>
                </div>
            </div>
        </div>

        <svg width="1440" height="299" viewBox="0 0 1440 299" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 59.8L48 69.7667C96 79.7333 192 99.6667 288 79.7333C384 59.8 480 0 576 0C672 0 768 59.8 864 69.7667C960 79.7333 1056 39.8667 1152 29.9C1248 19.9333 1344 39.8667 1392 49.8333L1440 59.8V299H1392C1344 299 1248 299 1152 299C1056 299 960 299 864 299C768 299 672 299 576 299C480 299 384 299 288 299C192 299 96 299 48 299H0V59.8Z"
                fill="url(#paint0_linear_170_1768)" />
            <defs>
                <linearGradient id="paint0_linear_170_1768" x1="720" y1="0" x2="720" y2="299" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F1B4BB" />
                    <stop offset="1" stop-color="#FDF0F0" />
                </linearGradient>
            </defs>
        </svg>

    </section>

    <section id="mindfulness-explanation" class="container">
        <div class="image">
            <img src="./assets/img/MindfullnessSection.png" alt="Circle Pink and Blue flower-like">
        </div>
        <p>Terdapat enam tahap dalam teknik pernafasan dengan pendekatan mindfulness yang beragam namun tetap mengutamakan setiap tahap selama lima menit.</p>
        <p>Fitur ini bisa diakses secara full dan disimpan kedalam histori saat sudah login atau memiliki akun</p>
        <div class="mindfulness-steps">
            <a class="mindfulness-step" href="{{ route('home.breathing-phase') }}">
                <h6>Kesadaran Tubuh</h6>
            </a>
            <a class="mindfulness-step locked" href="#">
                <h6>Pernapasan Variatif</h6>
            </a>
            <a class="mindfulness-step locked" href="#">
                <h6>Jeda dalam Pernapasan</h6>
            </a>
            <a class="mindfulness-step locked" href="#">
                <h6>Sumber Napas Masuk dan Keluar</h6>
            </a>
            <a class="mindfulness-step locked" href="#">
                <h6>Observasi Napas di Dada dan Perut</h6>
            </a>
            <a class="mindfulness-step locked" href="#">
                <h6>Pernapasan dalam Keseluruhan Tubuh</h6>
            </a>
        </div>
    </section>
</main>
@endsection
