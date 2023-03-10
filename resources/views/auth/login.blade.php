<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Kotak Aspirasi || Login </title>

        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
                
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="{{ route('login.store') }}" method="post">
                        @csrf

                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" name="password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

            </div>


            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="{{ route('register.user') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        @method('GET') 
                        <div class="field input-field">
                            <input type="number" placeholder="NIK" name="nik" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="text" placeholder="Nama" name="name" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="number" placeholder="0878002****" name="no_telp" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" name="password" class="password">
                            <input type="password" style="display:none;" name="role" value="User" class="password">
                        </div>

                        <div class="field button-field">
                            <button type="submit">Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

            </div>
        </section>

        <script src="assets/js/style.js"></script>
    </body>
</html>