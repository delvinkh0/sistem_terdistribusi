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
                    @if (session('error'))
                        <p class="alert alert-danger">{{ session('error') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <div class="title">
                        <h1>Mindfulness</h1>
                    </div>
                    <div class="desc">
                        <p>Temukan Ketenangan Diri Melalui Teknik Pernafasan: Sederhana, Efektif, dan Fokus pada Diri
                            Sendiri.</p>
                    </div>
                </div>
            </div>

            <svg width="1440" height="299" viewBox="0 0 1440 299" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 59.8L48 69.7667C96 79.7333 192 99.6667 288 79.7333C384 59.8 480 0 576 0C672 0 768 59.8 864 69.7667C960 79.7333 1056 39.8667 1152 29.9C1248 19.9333 1344 39.8667 1392 49.8333L1440 59.8V299H1392C1344 299 1248 299 1152 299C1056 299 960 299 864 299C768 299 672 299 576 299C480 299 384 299 288 299C192 299 96 299 48 299H0V59.8Z"
                    fill="url(#paint0_linear_170_1768)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1768" x1="720" y1="0" x2="720" y2="299"
                        gradientUnits="userSpaceOnUse">
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
            <p>Terdapat enam tahap dalam teknik pernafasan dengan pendekatan mindfulness yang beragam namun tetap
                mengutamakan setiap tahap selama lima menit.</p>

            <div class="mindfulness-steps">
                @Auth
                    @foreach ($steps as $step)
                        @if ($step->id == 1)
                            <a class="mindfulness-step" href="{{ route('breathsession.index', $step->id) }}">
                                <h6>{{ $step->step_name }}</h6>
                            </a>
                        @else
                            <div class="mindfulness-step locked" href="{{ route('breathsession.index', $step->id) }}">
                                <h6>{{ $step->step_name }}</h6>
                            </div>
                        @endif
                    @endforeach
                @else
                    @foreach ($steps as $step)
                        <div class="mindfulness-step locked">
                            <h6>{{ $step->step_name }}</h6>
                        </div>
                    @endforeach
                @endauth
            </div>

            @Auth
            @else
            <p>Fitur ini bisa diakses secara full dan disimpan kedalam histori saat sudah login atau memiliki akun</p>
            <a href="{{ route('auth.index') }}" class="primary">Login sekarang</a>
            @endauth
        </section>
    </main>


    @if (session('success'))
    <div id="modal-screen" style="display: flex">
        <div class="the-modal the-very-end-of-session-modal" style="display: flex">
            <div class="title">
                <h6>Kamu hebat!</h6>
                <p>
                    Hari ini sudah cukup, jangan lupa untuk melakukan sesi ini besok!
                </p>
            </div>
            <form action="post">
                <div class="all-button">
                    <button type="button" class="primary" onclick="veryEndOfSessionModalToggleOff()">Baik!</button>
                    <a href="{{ route('profile.index') }}" class="secondary">Lihat Riwayat Sesi</a>
                </div>
            </form>
        </div>
    </div>

    @endif


@endsection
