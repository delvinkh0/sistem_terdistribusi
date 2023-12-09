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
                @Auth
                <div class="title" style="padding: 20px 0">
                    <h2>Welcome {{Auth::user()->full_name}},</h2>
                </div>
                @endauth
                <div class="title">
                    <svg width="161" height="129" viewBox="0 0 161 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M147.975 22.8003C149.469 25.135 149.209 28.5814 147.192 32.9677C145.186 37.3294 141.502 42.4809 136.414 48.0919C126.242 59.3085 110.539 72.275 91.7133 84.3196C72.8873 96.3642 54.5331 105.187 40.0862 109.721C32.8592 111.989 26.6379 113.175 21.8371 113.168C17.0091 113.161 13.7713 111.952 12.2775 109.618C10.7838 107.283 11.0433 103.837 13.0606 99.4503C15.0665 95.0887 18.7506 89.9372 23.8389 84.3261C34.0103 73.1096 49.7135 60.143 68.5395 48.0984C87.3655 36.0538 105.72 27.2309 120.167 22.697C127.394 20.4289 133.615 19.2431 138.416 19.2499C143.244 19.2567 146.481 20.4656 147.975 22.8003Z" stroke="#F1B4BB"/>
                        <path d="M110.15 25.4186C111.596 24.6548 112.682 23.197 113.218 21.2988C113.754 19.4006 113.706 17.1821 113.084 15.029L109.65 3.68873L113.938 14.7475C114.776 16.8259 116.106 18.6013 117.698 19.7651C119.29 20.9289 121.043 21.4075 122.652 21.1178L124.539 20.7793L122.844 21.6724C121.399 22.4383 120.315 23.8964 119.78 25.794C119.244 27.6915 119.291 29.9087 119.913 32.0611L123.35 43.3913L119.06 32.3286C118.221 30.2505 116.89 28.4758 115.298 27.3123C113.706 26.1489 111.953 25.6702 110.343 25.9593L108.461 26.3008L110.15 25.4186Z" fill="#FDF0F0"/>
                        <path d="M19.6652 112.887C20.2357 112.792 20.7658 112.402 21.1631 111.785C21.5605 111.168 21.8001 110.363 21.8402 109.511L22 105L22.1577 109.515C22.1977 110.368 22.4372 111.173 22.8343 111.789C23.2315 112.406 23.7612 112.797 24.3315 112.892L25 113.005L24.3315 113.116C23.7614 113.212 23.2318 113.602 22.8348 114.219C22.4377 114.836 22.1982 115.64 22.1577 116.493L22 121L21.8423 116.483C21.8018 115.63 21.5621 114.826 21.1648 114.209C20.7675 113.592 20.2377 113.202 19.6674 113.106L19 112.995L19.6652 112.887Z" fill="#FDF0F0"/>
                    </svg>
                    <h1>One Breath At The Time</h1>
                </div>
                <div class="desc">
                    <p>Mengatasi Kecemasan dengan Lebih Dekat: Temukan Dukungan, Pengetahuan, dan Solusi untuk mengatasi Anxiety disini</p>
                </div>
            </div>

            <div class="hero-button">
                <a href="{{ route('home.self-assessment') }}" class="self-assessment">Self Assessment</a>
                <a href="{{ route('home.technique') }}" class="latihan-pernapasan">Latihan Pernapasan</a>
            </div>
        </div>

        <svg width="1440" height="346" viewBox="0 0 1440 346" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: 1px;">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 0L60 36C120 72 240 144 360 144C480 144 600 72 720 65C840 58 960 116 1080 123C1200 130 1320 87 1380 65L1440 44V346H1380C1320 346 1200 346 1080 346C960 346 840 346 720 346C600 346 480 346 360 346C240 346 120 346 60 346H0V0Z"
                fill="url(#paint0_linear_89_2048)" />
            <defs>
                <linearGradient id="paint0_linear_89_2048" x1="720" y1="0" x2="720" y2="346" gradientUnits="userSpaceOnUse">
                    <stop offset="0.410405" stop-color="#F1B4BB" />
                    <stop offset="1" stop-color="#FDF0F0" />
                </linearGradient>
            </defs>
        </svg>
    </section>

    <section id="definition" class="container">
        <img src="./assets/img/BoyPondering.png" alt="Girl Pondering" style="height: 80%;">
        <div class="introduction">
            <h2>Apa itu Anxiety?</h2>
            <p>Anxiety (gangguan kecemasan) merupakan reaksi alami tubuh manusia terhadap situasi stres, yang dapat memunculkan perasaan ketakutan atau kekhawatiran terhadap masa depan, bahkan jika hal tersebut belum terwujud.</p>
        </div>
    </section>

    <section id="characteristic" class="container">
        <h2>Ciri - Ciri Anxiety</h2>
        <div class="symptoms">
            <div class="symptom">
                <p>Merasa Gelisah</p>
                <img src="./assets/img/CiriCiri/GirlHavingFatigue.png" alt="Girl having fatigue">
            </div>
            <div class="symptom">
                <p>Detak Jantung yang Meningkat</p>
                <img src="./assets/img/CiriCiri/GirlPuttingHandInChest.png" alt="Girl putting hand in chest">
            </div>
            <div class="symptom">
                <p>Berkeringat</p>
                <img src="./assets/img/CiriCiri/BoySweating.png" alt="Boy Sweating">
            </div>
            <div class="symptom">
                <p>Gemetaran</p>
                <img src="./assets/img/CiriCiri/GirlShivering.png" alt="Girl Shivering">
            </div>
            <div class="symptom">
                <p>Merasa Lemah atau Lelah</p>
                <img src="./assets/img/CiriCiri/GirlFeelingTired.png" alt="Girl Feeling Tired">
            </div>
            <div class="symptom">
                <p>Kesulitan Berkonsentrasi</p>
                <img src="./assets/img/CiriCiri/GirlConfused.png" alt="Girl Hard To Concentrate">
            </div>
            <div class="symptom">
                <p>Mengalami Kesulitan Tidur</p>
                <img src="./assets/img/CiriCiri/BoyHardtoConcentrate.png" alt="Boy Having Sleep Problem">
            </div>
            <div class="symptom">
                <p>Gangguan Pencernaan</p>
                <img src="./assets/img/CiriCiri/GirlWithStomachache.png" alt="Girl With Stomachache">
            </div>
        </div>
    </section>

    <section id="total-cases" class="container">
        <h2>Jumlah Kasus Anxiety</h2>
        <div class="cases">
            <div class="case world">
                <h5>DUNIA</h5>
                <div class="circle-outer">
                    <div class="circle-inner">
                        <h4>301</h4>
                        <p>JUTA</p>
                    </div>
                </div>
                <p>Menurut WHO, gangguan kecemasan merupakan gangguan mental paling umum di dunia, memengaruhi 301 juta orang pada tahun 2019.</p>
            </div>

            <div class="case indonesia">
                <h5>INDONESIA</h5>
                <div class="circle-outer">
                    <div class="circle-inner">
                        <h4>18.373</h4>
                        <p>RIBU</p>
                    </div>
                </div>
                <p>Menurut data Kementerian Kesehatan tahun 2020, ada 18.373 ribu individu yang mengalami gangguan kecemasan.</p>
            </div>
        </div>
    </section>

    <section id="difference" class="container">
        <h2>Anxiety VS Anxiety Disorder</h2>
        <div class="comparison">
            <div class="anxiety">
                <h4>ANXIETY</h4>
                <div class="list">
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Bersifat alami dan wajar di beberapa situasi</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Umumnya bersifat sementara</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Gejala kecemasan proporsional dengan situasi yang memicu</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Membantu untuk lebih fokus</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Tidak signifikan mengganggu kegiatan sehari-hari</p>
                    </div>
                </div>
            </div>

            <div class="versus">
                <p>Vs</p>
            </div>


            <div class="anxiety-disorder">
                <h4>ANXIETY DISORDER</h4>
                <div class="list">
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Merupakan kondisi mental yang serius dan kronis</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Gejalanya muncul secara berlebihan dan terus-menerus</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Mengganggu kegiatan sehari-hari</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Gejala melibatkan serangan panik, dan kecemasan berlebihan</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Memerlukan perawatan profesional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
