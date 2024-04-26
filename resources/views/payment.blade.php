@extends('main')

@section('content')

<body>

    <div id="wrapper" class="admin-panel">

        <!-- content -->
        <div class="page-content">
            <div class="page-content-inner">

                <div class="d-flex">
                    <nav id="breadcrumbs" class="mb-3">
                        <ul>
                            <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                            <li><a href="#"> Sutdents </a></li>
                            <li>Sutdents list</li>
                        </ul>

                    </nav>
                </div>

                <div class="card">
                    <!-- Card header -->
                    <div class="card-header actions-toolbar border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="d-inline-block mb-0">Sutdents</h4>
                            <div class="d-flex">

                                <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="Search product">
                                    <i class="uil-search"></i>
                                </a>
                                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input shadow-0 uk-form-small" type="search" placeholder="Search..." autofocus="">
                                    </form>
                                </div>

                                <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="filter">
                                    <i class="uil-filter"></i>
                                </a>
                                <div uk-dropdown="pos: bottom-right ; mode: click ;animation: uk-animation-scale-up">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li class="uk-active"><a href="#"> Newest </a></li>
                                        <li><a href="#">From A-Z</a></li>
                                        <li><a href="#">From Z-A</a></li>
                                    </ul>
                                </div>


                                <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="More">
                                    <i class="uil-ellipsis-h"></i>
                                </a>
                                <div uk-dropdown="pos: bottom-right ; mode: click ;animation: uk-animation-scale-up">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="#"> Refresh </a></li>
                                        <li><a href="#">Manage</a></li>
                                        <li><a href="#">Setting</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Accoes</th>
                                </tr>
                            </thead>

                            @foreach ($payments as $payment)
                            <tr>
                                <td>{{ optional($payment->user)->name }}</td>
                                <td>{{ optional($payment->course)->name }}</td>
                                <td>{{ optional($payment->course)->price }}</td>
                                <td>{{ $payment->status }}</td>
                            </tr>
                            @endforeach
                        </table> <!-- Table -->
                    </div>

                </div>
            </div>
        </div>

        <!-- For Night mode -->
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
        </script>

    </div>
</body>

</html>
@endsection()
