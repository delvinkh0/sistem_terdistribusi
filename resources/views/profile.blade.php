@extends('app')

@section('main')
    <main id="profile-page">
        <section class="wrapper" style="position: absolute; top:0; margin: 0; padding:0;">
            <div id="stars2"></div>
            <div id="stars3"></div>
        </section>

        <section id="breathing-progress">

        </section>

        <section id="profile" class="container">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="alert alert-danger">{{ session('error') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <div class="part profile-part">
                <div class="title-and-button">
                    <h2 class="title">Profil</h2>
                    <button type="submit" class="show-modal edit-profile-modal" value="Edit"
                        onclick="editProfileModalToggleOn()">Edit</button>
                </div>

                <div class="profile-detail">
                    <div class="detail full-name-detail">
                        <h6 class="fullname-label the-label">Nama Lengkap</h6>
                        <p class="fullname">{{ $user->full_name }}</p>
                    </div>

                    <div class="detail full-name-detail">
                        <h6 class="email-label the-label">Email</h6>
                        <p class="email">{{ $user->email }}</p>
                    </div>
                </div>
            </div>

            <div class="part password-part">
                <div class="title-and-button">
                    <h2 class="title">Password</h2>
                    <button class="show-modal edit-password-modal" onclick="editPasswordModalToggleOn()">Edit</button>
                </div>

                <div class="profile-detail">
                    <div class="detail password-detail">
                        <h6 class="password-label the-label">Password</h6>
                        <p class="password">*********</p>
                    </div>
                </div>
            </div>

            <div class="part history-part">
                <div class="title-and-button">
                    <h2 class="title">Riwayat Tes</h2>
                </div>

                <div class="history-tests">
                    @foreach ($results as $result)
                    <a href="{{ route('profile.history.detail', ['datenow' => $result->datenow]) }}" class="history-test">
                        <div class="date-and-title">
                            <p class="date">{{ $result->datenow }}</p>
                            <p class="test-title">{{ $result->test_name }}</p>
                        </div>
                        <p class="score">{{ $result->result }}/{{ $result->max_score }}</p>
                        <svg width="345" height="102" viewBox="0 0 345 102" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M361 3.1241C361 2.0662 359.677 1.5873 359 2.4V2.4C343 18.5 297 64.4 265 78.2C233 92 201 87.4 169 80.5C137 73.6 105 64.4 73 71.3C41.4067 78.1123 9.81332 100.618 -6.3823 112.256C-6.79956 112.556 -7.16278 112.903 -7.48376 113.305V113.305C-8.45168 114.515 -8.87925 116.069 -8.66609 117.604L-8.5 118.8L-8.4408 119.558C-7.62755 129.968 1.04986 138 11.4914 138C28.3794 138 50.6897 138 73 138C105 138 137 138 169 138C201 138 233 138 265 138C297 138 329 138 345 138V138C353.837 138 361 130.837 361 122V3.1241Z"
                                fill="url(#paint0_linear_377_1605)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M-9 25.8284C-9 24.7847 -7.73805 24.262 -7 25V25C9 38.4167 55 76.6667 87 88.1667C119 99.6667 151 95.8333 183 90.0833C215 84.3333 247 76.6667 279 82.4167C310.663 88.106 342.325 106.931 358.489 116.61C358.835 116.818 359.142 117.064 359.421 117.355V117.355C360.415 118.39 360.861 119.834 360.625 121.249L360.5 122V122C359.65 131.068 352.046 138 342.938 138C325.795 138 302.397 138 279 138C247 138 215 138 183 138C151 138 119 138 87 138C55 138 23 138 7 138V138C-1.83656 138 -9 130.837 -9 122V25.8284Z"
                                fill="url(#paint1_linear_377_1605)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M-9 25.8284C-9 24.7847 -7.73805 24.262 -7 25C9 38.4167 55 76.6667 87 88.1667C119 99.6667 151 95.8333 183 90.0833C215 84.3333 247 76.6667 279 82.4167C310.608 88.0961 342.215 106.865 358.404 116.56C358.807 116.801 359.165 117.088 359.49 117.427C360.457 118.434 360.986 119.784 360.961 121.18L360.938 122.5L360.937 124C359.827 132.024 352.975 138 344.874 138C327.582 138 303.291 138 279 138C247 138 215 138 183 138C151 138 119 138 87 138C55 138 23 138 7 138C-1.83656 138 -9 130.837 -9 122V25.8284Z"
                                fill="url(#paint2_linear_377_1605)" />
                            <defs>
                                <linearGradient id="paint0_linear_377_1605" x1="169" y1="57" x2="176"
                                    y2="138" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDF0F0" />
                                    <stop offset="1" stop-color="#1D2254" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_377_1605" x1="183" y1="71" x2="176"
                                    y2="147" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F1B4BB" />
                                    <stop offset="1" stop-color="#1D2254" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_377_1605" x1="183" y1="71" x2="176"
                                    y2="147" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F1B4BB" />
                                    <stop offset="1" stop-color="#1D2254" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    @endforeach

                    {{-- <a href="#" class="history-test">
                        <div class="date-and-title">
                            <p class="date">February 14th, 2022</p>
                            <p class="test-title">Generalized Anxiety Disorder - 7 (GAD-7)</p>
                        </div>
                        <p class="score">22/34</p>
                        <svg width="345" height="102" viewBox="0 0 345 102" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M361 3.1241C361 2.0662 359.677 1.5873 359 2.4V2.4C343 18.5 297 64.4 265 78.2C233 92 201 87.4 169 80.5C137 73.6 105 64.4 73 71.3C41.4067 78.1123 9.81332 100.618 -6.3823 112.256C-6.79956 112.556 -7.16278 112.903 -7.48376 113.305V113.305C-8.45168 114.515 -8.87925 116.069 -8.66609 117.604L-8.5 118.8L-8.4408 119.558C-7.62755 129.968 1.04986 138 11.4914 138C28.3794 138 50.6897 138 73 138C105 138 137 138 169 138C201 138 233 138 265 138C297 138 329 138 345 138V138C353.837 138 361 130.837 361 122V3.1241Z"
                                fill="url(#paint0_linear_377_1605)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M-9 25.8284C-9 24.7847 -7.73805 24.262 -7 25V25C9 38.4167 55 76.6667 87 88.1667C119 99.6667 151 95.8333 183 90.0833C215 84.3333 247 76.6667 279 82.4167C310.663 88.106 342.325 106.931 358.489 116.61C358.835 116.818 359.142 117.064 359.421 117.355V117.355C360.415 118.39 360.861 119.834 360.625 121.249L360.5 122V122C359.65 131.068 352.046 138 342.938 138C325.795 138 302.397 138 279 138C247 138 215 138 183 138C151 138 119 138 87 138C55 138 23 138 7 138V138C-1.83656 138 -9 130.837 -9 122V25.8284Z"
                                fill="url(#paint1_linear_377_1605)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M-9 25.8284C-9 24.7847 -7.73805 24.262 -7 25C9 38.4167 55 76.6667 87 88.1667C119 99.6667 151 95.8333 183 90.0833C215 84.3333 247 76.6667 279 82.4167C310.608 88.0961 342.215 106.865 358.404 116.56C358.807 116.801 359.165 117.088 359.49 117.427C360.457 118.434 360.986 119.784 360.961 121.18L360.938 122.5L360.937 124C359.827 132.024 352.975 138 344.874 138C327.582 138 303.291 138 279 138C247 138 215 138 183 138C151 138 119 138 87 138C55 138 23 138 7 138C-1.83656 138 -9 130.837 -9 122V25.8284Z"
                                fill="url(#paint2_linear_377_1605)" />
                            <defs>
                                <linearGradient id="paint0_linear_377_1605" x1="169" y1="57" x2="176"
                                    y2="138" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FDF0F0" />
                                    <stop offset="1" stop-color="#1D2254" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_377_1605" x1="183" y1="71" x2="176"
                                    y2="147" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F1B4BB" />
                                    <stop offset="1" stop-color="#1D2254" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_377_1605" x1="183" y1="71" x2="176"
                                    y2="147" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F1B4BB" />
                                    <stop offset="1" stop-color="#1D2254" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a> --}}

                </div>
            </div>

        </section>

        <div id="modal-screen">
            <div class="the-modal edit-profile-modal">
                <div class="title">
                    <h6>Edit Profil</h6>
                </div>
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-field">
                        <div class="field">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="full_name" id="name"
                                placeholder="Masukkan nama lengkap anda" value="{{ $user->full_name }}">
                        </div>
                        <div class="field">
                            <label for="name">Email</label>
                            <input type="text" name="email" id="name" placeholder="Masukkan email anda"
                                value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="all-button">
                        <button type="submit" class="save">Simpan</button>
                        <button type="button" class="cancel" onclick="editProfileModalToggleOff()">Batalkan</button>
                    </div>

                </form>
            </div>

            <div class="the-modal change-password-modal">
                <div class="title">
                    <h6>Ganti Password</h6>
                </div>
                <form action="{{ route('profile.change-password.action') }}" method="post">
                    @csrf
                    <div class="form-field">
                        <div class="field">
                            <label for="current_password">Password saat ini</label>
                            <input type="password" name="current_password" id="current_password"
                                placeholder="Masukkan passwordmu saat ini">
                        </div>
                        <div class="field">
                            <label for="new_password">Password baru</label>
                            <input type="password" name="new_password" id="new_password"
                                placeholder="Masukkan password barumu">
                        </div>
                        <div class="field">
                            <label for="confirm_password">Konfirmasi password baru</label>
                            <input type="password" name="confirm_password" id="confirm_password"
                                placeholder="Masukkan kembali password barumu">
                        </div>
                    </div>

                    <div class="all-button">
                        <button type="submit" class="save">Simpan</button>
                        <button type="button" class="cancel" onclick="editPasswordModalToggleOff()">Batalkan</button>
                    </div>

                </form>
            </div>
        </div>

    </main>
@endsection
