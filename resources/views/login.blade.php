<!doctype html>
<html lang="pt-br">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Sistema de gestão de cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" >

    <!-- Favicon -->
    <link href="{{asset('assets\images\favicon.png')}}" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="{{asset('assets\css\night-mode.css')}}">
    <link rel="stylesheet" href="..\assets\css\framework.css">
    <link rel="stylesheet" href="..\assets\css\bootstrap.css"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="..\assets\css\icons.css">

 
</head>

<body>
     

    <!-- Content
    ================================================== -->
    <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
        <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
            <div class="uk-card-default p-5 rounded">
                <div class="mb-4 uk-text-center">
                    <h3 class="mb-0"> Bem vindo </h3>
                    <p class="my-2">Faça o login para acessar a sua conta.</p>
                </div>
                <form>

                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input class="uk-input" name="email" type="email" placeholder="name@example.com">
                        </div>

                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label"> Senha</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input class="uk-input" name="senha" type="password" placeholder="********">
                        </div>

                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label"> Confirmar senha</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input class="uk-input" name="confirmarsenha" type="password" placeholder="********">
                        </div>

                    </div>

                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid="">
                        <div class="uk-width-expand@s">
                            <p> Não tens uma conta? <a href="page-register.html">Registrar-se</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
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