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
                    <p>Generalized Anxiety Disorder-7 (GAD-7)</p>
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
                <h4>Mild Anxiety</h4>
                <p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
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
                <p>Score: 9/21</p>
            </div>
        </div>

        <div class="result-description">
            <p>Your results are indicative of someone who likely handles your anger well in many situations, but
                there are still times when your anger is handling you. Recognize the areas where you are doing well
                in handling your anger, but also be cautious that your anger is not getting out of hand in other
                ways.

                <br><br>

                Think about the situations where your anger comes out most often. Is it with loved ones? At work?
                What happens when you react angrily? Are you a shouter, or do you turn your anger inward? What words
                do you tend to use? What feelings tend to come out when you’re angry, and how do those feelings find
                expression, in good ways or bad? Consider the following possibilities for future action:
            </p>

            <div class="next-steps">
                <h5>Next Steps</h5>
                <p>Your results are indicative of someone who likely handles your anger well in many situations, but
                    there are still times when your anger is handling you. Recognize the areas where you are doing well
                    in handling your anger, but also be cautious that your anger is not getting out of hand in other
                    ways.

                    <br><br>

                    Think about the situations where your anger comes out most often. Is it with loved ones? At work?
                    What happens when you react angrily? Are you a shouter, or do you turn your anger inward? What words
                    do you tend to use? What feelings tend to come out when you’re angry, and how do those feelings find
                    expression, in good ways or bad? Consider the following possibilities for future action:
                </p>
            </div>
        </div>


    </section>
</main>
@endsection