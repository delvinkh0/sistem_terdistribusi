@extends('app')

@section('main')
<main>
    <section class="wrapper" style="position: absolute; top:0; margin: 0; padding:0;">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

    <section id="hero">
        <div class="inner-hero">
            <div class="title-and-desc">
                <div class="title">
                    <h1>Self Assessment</h1>
                </div>
                <div class="desc">
                    <p>Gunakan tes ini untuk mengidentifikasi tingkat kecemasan yang mungkin kamu alami.</p>
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

    <section id="quizzes" class="container">
        @foreach ($tests as $test)
        <div class="quiz">
            <div class="content">
                <h6 class="title">{{ $test->test_name }}</h6>
                <div class="categories">
                @foreach ($test['category'] as $cat)
                    @if ($cat->category_name == 'Depresi')
                        <small class="category depression">{{ $cat->category_name }}</small>
                    @elseif ($cat->category_name == 'Kecemasan')
                        <small class="category anxiety">{{ $cat->category_name }}</small>
                    @elseif ($cat->category_name == 'Stress')
                        <small class="category stress">{{ $cat->category_name }}</small>
                    @else
                        <small class="category anxiety">{{ $cat->category_name }}</small>
                    @endif
                @endforeach
                </div>
                <div class="desc">
                    <p>{{ $test->test_description }}</p>
                </div>
                <div class="start-test-button">
                    <a href="{{ route('test.show', $test->id) }}" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>
        @endforeach


        {{-- <div class="quiz">
            <div class="content">
                <h6 class="title">9-item depression scale (PHQ-9)</h6>
                <div class="categories">
                    <small class="category depression">Depresi</small>
                </div>
                <div class="desc">
                    <p>Tes ini mengukur tingkat depresi dengan 9 pertanyaan.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>

        <div class="quiz">
            <div class="content">
                <h6 class="title">DASS 42 (Depression, Anxiety, Stress)</h6>
                <div class="categories">
                    <small class="category anxiety">Kecemasan</small>
                    <small class="category depression">Depresi</small>
                    <small class="category stress">Stress</small>
                </div>
                <div class="desc">
                    <p>Tes komprehensif yang mengukur depresi, kecemasan, dan stres.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>

        <div class="quiz">
            <div class="content">
                <h6 class="title">DASS 21 (Depression, Anxiety, Stress)</h6>
                <div class="categories">
                    <small class="category anxiety">Kecemasan</small>
                    <small class="category depression">Depresi</small>
                    <small class="category stress">Stress</small>
                </div>
                <div class="desc">
                    <p>Versi lebih pendek dari DASS 42, fokus pada depresi, kecemasan, dan stres.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>


        <div class="quiz">
            <div class="content">
                <h6 class="title">DASS-Y (Depression, Anxiety, Stress for Youth)</h6>
                <div class="categories">
                    <small class="category anxiety">Kecemasan</small>
                    <small class="category depression">Depresi</small>
                    <small class="category stress">Stress</small>
                    <!-- <small class="category social-anxiety">Kecemasan Sosial</small>
                    <small class="category health-anxiety">Kecemasan Kesehatan</small> -->
                </div>
                <div class="desc">
                    <p>Tes komprehensif yang mengukur depresi, kecemasan, dan stres.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>

        <div class="quiz">
            <div class="content">
                <h6 class="title">Appearance Anxiety Inventory (AAI)</h6>
                <div class="categories">
                    <small class="category anxiety">Kecemasan</small>
                    <!-- <small class="category social-anxiety">Kecemasan Sosial</small>
                    <small class="category health-anxiety">Kecemasan Kesehatan</small> -->
                    <small class="category appearance-anxiety">Kecemasan Penampilan</small>
                </div>
                <div class="desc">
                    <p>Tes ini mengukur kecemasan terkait penampilan fisik dan citra tubuh.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>

        <div class="quiz">
            <div class="content">
                <h6 class="title">Short Health Anxiety Inventory (SHAI)</h6>
                <div class="categories">
                    <small class="category anxiety">Kecemasan</small>
                    <small class="category health-anxiety">Kecemasan Kesehatan</small>
                </div>
                <div class="desc">
                    <p>Tes ini mengukur kecemasan terkait kesehatan, membantu individu menilai kecenderungan untuk merasa cemas tentang kondisi kesehatan.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div>

        <div class="quiz">
            <div class="content">
                <h6 class="title">Social Avoidance and Distress Scale (SADS)</h6>
                <div class="categories">
                    <small class="category anxiety">Kecemasan</small>
                    <small class="category social-anxiety">Kecemasan Sosial</small>
                </div>
                <div class="desc">
                    <p>Tes ini mengukur tingkat ketakutan dan kecemasan sosial dalam situasi sosial.</p>
                </div>
                <div class="start-test-button">
                    <a href="#" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <svg width="370" height="138" viewBox="0 0 370 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M370 3.1241C370 2.0662 368.677 1.5873 368 2.4C352 18.5 306 64.4 274 78.2C242 92 210 87.4 178 80.5C146 73.6 114 64.4 82 71.3C50.4067 78.1123 18.8133 100.618 2.61771 112.256C2.20044 112.556 1.83722 112.903 1.51624 113.305C0.548309 114.515 0.120758 116.069 0.333893 117.604L0.5 118.8L0.559204 119.558C1.37244 129.968 10.0499 138 20.4914 138C37.3794 138 59.6897 138 82 138C114 138 146 138 178 138C210 138 242 138 274 138C306 138 338 138 354 138C362.837 138 370 130.837 370 122V3.1241Z"
                    fill="url(#paint0_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25V25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.663 88.106 351.325 106.931 367.489 116.61C367.835 116.818 368.142 117.064 368.421 117.355V117.355C369.415 118.39 369.861 119.834 369.625 121.249L369.5 122V122C368.65 131.068 361.046 138 351.938 138C334.795 138 311.397 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138V138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint1_linear_170_1568)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.8284C0 24.7847 1.26195 24.262 2 25C18 38.4167 64 76.6667 96 88.1667C128 99.6667 160 95.8333 192 90.0833C224 84.3333 256 76.6667 288 82.4167C319.608 88.0961 351.215 106.865 367.404 116.56C367.807 116.801 368.165 117.088 368.49 117.427C369.457 118.434 369.986 119.784 369.961 121.18L369.938 122.5L369.937 124C368.827 132.024 361.975 138 353.874 138C336.582 138 312.291 138 288 138C256 138 224 138 192 138C160 138 128 138 96 138C64 138 32 138 16 138C7.16344 138 0 130.837 0 122V25.8284Z"
                    fill="url(#paint2_linear_170_1568)" />
                <defs>
                    <linearGradient id="paint0_linear_170_1568" x1="178" y1="57" x2="185" y2="138" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDF0F0" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_170_1568" x1="192" y1="71" x2="185" y2="147" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F1B4BB" />
                        <stop offset="1" stop-color="#1D2254" />
                    </linearGradient>
                </defs>
            </svg>

        </div> --}}

    </section>
</main>
@endsection
