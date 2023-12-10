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
                    <h2>{{$test->test_name}}</h2>
                </div>
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
                @if(count($test['questions']) > 0)
                <div class="start-test-button">
                    <a href="#all-questions-and-instructions" class="start-test">Mulai Tes <i class="bi bi-arrow-right-short"></i></a>
                </div>
                @endif
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

    <section id="all-questions-and-instructions" class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        @if (session('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>
        @endif

        @if(count($test['questions']) > 0)
        <div class="instructions">
            <p class="title">Instruksi:</p>
            <p>Harap baca setiap pernyataan dan pilih dari "Tidak sama sekali" hingga "Hampir setiap hari" untuk
                menunjukkan sejauh mana pernyataan tersebut berlaku untuk Anda selama dua minggu terakhir.</p>
        </div>


        <form class="questions" action="{{ route('test.submit') }}" method="POST">
            @csrf
            <div class="question-and-answer">
                @foreach ($test['questions'] as $outerIndex => $question)
                    <div class="question-section">
                        <div class="question">
                            <p class="number">{{ $loop->iteration }}</p>
                            <p class="question-name">{{ $question->question_name }}</p>
                            <input type="hidden" name="questions[{{ $loop->iteration }}]" value="{{ $question->id }}">
                        </div>

                        <div class="radio-buttons">
                            @foreach ($question['options'] as $option)
                                <label class="radio-button">
                                    <input type="radio" id="x{{ $option->id }}" name="answers[{{ $loop->parent->iteration - 1 }}]" value="{{ $option->id }}" />
                                    <span class="radio-label">{{ $option->option_name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="submit">Submit</button>

        </form>
        @else
            <p class="alert alert-danger">Tes ini masih dalam tahap pengembangan, Silahkan coba fitur kami yang lain, terima kasih :D</p>
        @endif


    </section>
</main>
@endsection
