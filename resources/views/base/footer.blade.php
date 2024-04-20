
</div>
<div class="footer">
                    <div class="uk-grid-collapse" uk-grid="">
                        <div class="uk-width-expand@s uk-first-column">
                            <p>© 2019 <strong>Courseplus</strong>. All Rights Reserved. </p>
                        </div>
                        <div class="uk-width-auto@s">
                            <nav class="footer-nav-icon">
                                <ul>
                                    <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-brand-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                                    <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
    
    
            </div>

        </div>
</div>
    </div>
    <style>
    .password-match-error {
        border-color: red !important;
    }
</style>
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('create-user-modal');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            this.submit();
            $('#create-user-modal').modal('hide');
        });
    });


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