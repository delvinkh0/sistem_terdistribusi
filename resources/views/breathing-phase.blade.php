<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Assessment - Serenaya</title>

    <!-- Google Font (Crimson Text + Oxygen) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/color.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/stars.css">
    <link rel="stylesheet" href="./assets/css/stars2.css">
    <link rel="stylesheet" href="./assets/css/stars3.css">
</head>

<body class="main-page">
    <main id="breathing-session-page">
        <section id="breathing-session">
            <h3>Kesadaran Tubuh</h3>
            <p>Merasakan napas dari kepala sampai ujung kaki bawah</p>
            <div class="timer">
                <div class="circles">
                    <p class="time-left">Start</p>
                    <svg width="557" height="557" viewBox="0 0 557 557" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M382.121 108.428C384.718 109.863 387.484 111.142 390.258 112.196C523.613 162.905 513.826 289.105 459.189 383.738C374.149 531.033 281.701 512.13 186.074 456.919C91.8341 402.51 70.2051 369.759 104.505 174.52C105.505 168.829 107.479 163.187 110.617 158.335C167.315 70.6653 289.48 57.2447 382.121 108.428Z" fill="#F8D9DD" fill-opacity="0.5"/>
                        <circle cx="286.185" cy="284.308" r="175.188" transform="rotate(-60 286.185 284.308)" fill="#F6CDD2" fill-opacity="0.5"/>
                        <circle cx="286.185" cy="284.308" r="149.263" transform="rotate(-60 286.185 284.308)" fill="#C9969C"/>
                        <circle cx="286.186" cy="284.308" r="123.338" transform="rotate(-60 286.186 284.308)" fill="#F1B4BB"/>
                    </svg>
                </div>
            </div>

            <div class="control">
                <div class="sfx-control">
                    <p>SFX</p>
                    <div class="sfx" onclick="changePlayMusicIcon()">
                        <i class="bi bi-music-note-beamed" id="play-music"></i>
                        <div class="mute" id="mute-music">
                            <i class="bi bi-music-note-beamed" ></i>
                            <i class="bi bi-slash-lg"></i>
                        </div>
                    </div>

                </div>
                <div class="timer-control">
                    <div class="play" onclick="changePlayTimerIcon()">
                        <i class="bi bi-play-fill" id="play-timer"></i>
                        <i class="bi bi-pause-fill" id="pause-timer"></i>
                    </div>
                </div>

                <div class="guide-control">
                    <p>Guide</p>
                    <div class="sound-guide">
                        <i class="bi bi-volume-up-fill" id="play-guide"></i>
                        <i class="bi bi-volume-mute-fill" id="mute-guide"></i>
                    </div>

                </div>

            </div>

            <div class="all-button container">
                <div class="reset-button">
                    <button class="reset" type="button" onclick="resetTimer()">Reset Timer</button>
                </div>

                <div class="end-session-button">
                    <button class="end" type="button" onclick="endSessionModalToggleOn()">Akhiri Sesi Ini</button>
                </div>
            </div>

            <audio src="./assets/audio/brownNoise.MP3" id="sfx-audio" loop="true"></audio>
            <audio src="./assets/audio/doneBell.mp3" id="done-audio"></audio>
        </section>

    </main>


    <div id="modal-screen">
        <div class="the-modal instructions-pre-session-modal">
            <div class="title">
                <h6>Ketentuan</h6>
                <p>Sebelum dimulai, pastikan anda memenuhi ketentuan dibawah ini</p>
            </div>
            <div class="requirement">
                <div class="list">
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Berada di ruangan yang tenang, tanpa gangguan suara oleh siapapun</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Tetaplah fokus pada pernafasanmu, hindari memikirkan hal lain saat sesi berlangsung</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Nilai pernafasanmu, bukan mengontrol pernafasanmu. Buat dirimu bernafas senatural mungkin</p>
                    </div>
                    <div class="point">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Pejamkan mata anda, buat dirimu serileks mungkin (direkomendasikan dalam keadaan duduk)</p>
                    </div>
                </div>
            </div>
            <form action="post">
                <div class="all-button">
                    <button type="button" class="primary" onclick="instructionsModalToggleOff()">Oke, Mulai Sesi!</button>
                    <a href="{{ route('mindfulness') }}" class="secondary">Hmm.. aku belum siap</a>
                </div>
            </form>
        </div>

        <div class="the-modal post-done-session-modal">
            <div class="title">
                <h6>Sesi Sudah Berakhir</h6>
                <p>
                    Sesimu sudah selesai! Kamu hebat!
                    <br>
                    Yuk isi pertanyaan dibawah ini!
                </p>
            </div>
            <form action="post">
                <div class="form-field">
                    <div class="field">
                        <label for="name" class="ask-user">Bagaimana perasaanmu saat ini?</label>
                        <input type="text" name="name" id="name" placeholder="Contoh: Lebih lega ">
                    </div>
                </div>
                <div class="all-button">
                    <button
                    type="submit"
                    class="primary"
                    onclick="postDoneSessionModalToggleOff();veryEndOfSessionModalToggleOn();">
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <div class="the-modal the-very-end-of-session-modal">
            <div class="title">
                <h6>Kamu hebat!</h6>
                <p>
                    Hari ini sudah cukup, jangan lupa untuk melakukan sesi ini besok!
                </p>
            </div>
            <form action="post">
                <div class="all-button">
                    <a href="{{ route('home') }}" class="primary">Kembali ke Beranda</a>
                </div>
            </form>
        </div>

        <div class="the-modal end-session-modal">
            <div class="title">
                <h6>Akhiri sesi ini?</h6>
                <p>Progress mu saat ini tidak disimpan</p>
            </div>
            <form action="post">
                <div class="all-button">
                    <button type="button" class="primary" onclick="endSessionModalToggleOff()">Batalkan</button>
                    <a href="{{ route('mindfulness') }}" class="secondary">Ya, akhiri sesi ini</a>
                </div>
            </form>
        </div>
    </div>




    <script src="./assets/js/timer.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
