<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

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
    </head>
<body>
    <main class="background-auth login">
        <div class="container auth-section">
            <div class="row">
                <div class="col-md-6 col-12 image-auth">
                    <img src="./assets/img/ManTalkingToAnimals.png" alt="Man Talking to Animals">
                </div>

                <div class="col-md-6 col-12">
                    <div class="auth-form">
                        <h1>Login</h1>
                        <form action="" method="post">
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Masukkan email anda">
                            </div>

                            <div class="password-section">
                                <div class="field">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Masukkan password anda">
                                </div>
                                <a href="#">Forgot Password?</a>
                            </div>


                            <div class="submit-button">
                                <button type="submit">Login</button>
                            </div>

                        </form>

                        <div class="other-links">
                            <p>Belum memiliki akun? <a href="register.html">Daftar disini!</a></p>
                            <p>Atau <a href="index.html">masuk sebagai tamu</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
