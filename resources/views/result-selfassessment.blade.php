@extends('app')
@section('main')
<main>
    <section class="wrapper" style="position: absolute; top:0; margin: 0; padding:0;">
        <div id="stars3"></div>
    </section>

    <section id="hero">
        <div class="inner-hero">
            <div class="title-and-desc">
                <div class="title">
                    <h2>Hasil Tes</h2>
                </div>
                <div class="desc">
                    <p>{{ $result->test_name }}</p>
                </div>
            </div>
        </div>

        <svg width="1440" height="268" viewBox="0 0 1440 268" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 15.5353L60 9.52428C120 3.51322 240 -8.50891 360 9.52428C480 27.5575 600 75.646 720 87.6681C840 99.6902 960 75.646 1080 57.6128C1200 39.5796 1320 27.5575 1380 21.5464L1440 15.5353V268H1380C1320 268 1200 268 1080 268C960 268 840 268 720 268C600 268 480 268 360 268C240 268 120 268 60 268H0V15.5353Z"
                fill="url(#paint0_linear_171_321)" />
            <defs>
                <linearGradient id="paint0_linear_171_321" x1="720" y1="0" x2="720" y2="268"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0.166667" stop-color="#F1B4BB" />
                    <stop offset="0.755208" stop-color="#FDF0F0" />
                </linearGradient>
            </defs>
        </svg>


    </section>

    <section id="test-results" class="container">
        <div class="result-top">
            <div class="results-title-and-desc">
                <p>Berdasarkan jawaban yang telah diberikan, kamu mendapatkan hasil...</p>
                <h4>{{$result->result_name}}</h4>
            </div>
            <div class="progress-bar">
                <div class="indicator-value">
                    <div class="first"></div>
                    <div class="second"></div>
                    <div class="third"></div>
                </div>
                <div id="value"></div>
            </div>
            <div class="result-score">
                <p>Score: {{ $result->result }}/{{ $result->max_score }}</p>
            </div>
        </div>

        <div class="result-description">
            <p>{{ $result->result_description }}</p>

            <div class="next-steps">
                <h5>Next Steps</h5>
                <p>{{ $result->result_solution }}</p>
            </div>
        </div>


    </section>
</main>
@endsection
