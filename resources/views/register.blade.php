<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Register || Sistema de gestão de cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">
    <!-- Favicon -->
    <link href="..\assets\images\favicon.png" rel="icon" type="image/png">
    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\night-mode.css">
    <link rel="stylesheet" href="..\assets\css\framework.css">
    <link rel="stylesheet" href="..\assets\css\bootstrap.css">
    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="..\assets\css\icons.css">
    <style>
        .password-match-error {
            border-color: red !important;
        }
    </style>
</head>

<body>
    <!-- Content
    ================================================== -->
    <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
        <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
            <div class="uk-card-default p-5 rounded">
                <div class="mb-4 uk-text-center">
                    <h3 class="mb-0">Criar uma conta nova</h3>
                    <p class="my-2">Se registre para usufruir da sua nova conta.</p>
                </div>
                <form class="uk-child-width-1-1 uk-grid-small" uk-grid="" action="{{ route('register') }}" method="POST" id="registerForm">
                    @csrf 
                       <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label">Nome</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                                <input class="uk-input" type="text" placeholder="Nome completo" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label">Email</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-mail"></i>
                                </span>
                                <input class="uk-input" type="email" placeholder="name@example.com" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label">Password</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input class="uk-input" type="password" placeholder="********" name="password" id="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label">Confirm password</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input class="uk-input" type="password" placeholder="********" name="password_confirmation" id="password_confirmation" required>
                            </div>
                            <span id="passwordError" style="display: none; color: red;">Passwords do not match</span>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label">Nível de Acesso</label>
                            <div class="uk-position-relative w-100">
                                <select class="uk-select" name="role" required>
                                    <option value="student">Estudante</option>
                                    <option value="teacher">Instrutor</option>
                                    <option value="administrator">Administrador</option>
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div>
                        <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid="">
                            <div class="uk-width-expand@s">
                                <p>Já tens uma conta <a href="{{route('login')}}">Fazer login</a></p>
                            </div>
                            <div class="uk-width-auto@s">
                                <input type="submit" class="btn btn-default" value="Registrar" id="submitButton">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        (function(window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
        (function(window, document, undefined) {
            'use strict';
            // Feature test
            if (!('localStorage' in window)) return;
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function(event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
        })(window, document);

        // JavaScript for password confirmation validation
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("password_confirmation");
        var passwordError = document.getElementById("passwordError");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.classList.add("password-match-error");
                passwordError.style.display = "block";
                return false;
            } else {
                confirm_password.classList.remove("password-match-error");
                passwordError.style.display = "none";
                return true;
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
    <!-- javaScripts
    ================================================== -->
    <script src="..\assets\js\framework.js"></script>
    <script src="..\assets\js\jquery-3.3.1.min.js"></script>
    <script src="..\assets\js\simplebar.js"></script>
    <script src="..\assets\js\main.js"></script>
    <script src="..\assets\js\bootstrap-select.min.js"></script>
</body>

</html>
