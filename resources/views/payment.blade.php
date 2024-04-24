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

                       <button class="btn btn-outline-primary" type="button" uk-toggle="target: #modal-example">Pagar</button>
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

<!-- This is the modal -->
<form action="{{ route('payments.store') }}" method="POST">
    @csrf
<div id="modal-example" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Complete a sua inscrição</h2>
        <div class="uk-margin">
            <select class="uk-select" name="course_registrations_id" id="cursoSelect">
                @foreach($courses as $course)
                <option value="{{ $course->id}}">{{$course->name}}</option>
                @endforeach
                {{-- <option value="">Selecione o curso</option>
                <option value="1">Python</option>
                <option value="2">HTML</option>
                <option value="3">Java Script</option>
                <option value="4">Bootstrap</option>
                <option value="">CSS</option> --}}
            </select>
        </div>
        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Valor" id="valor" name="valor" disabled>
        </div>
        <div class="uk-margin">
            <select class="uk-select" id="statusSelect">
                <option value="">Selecione</option>
                <option value="Pendente">Pendente</option>
                <option value="Concluído">Concluído</option>
            </select>
        </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="submit">Save</button>
        </p>
    </div>
</div>
</form>
<!-- End This is the modal -->
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Acção</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
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

{{-- <script>
    function formatarValor() {
        let valor = document.getElementById('valor').value;
        valor = parseFloat(valor).toFixed(2);
        document.getElementById('valor').value = valor;
    }
</script> --}}

<script>
    function formatarValor() {
        // Função para formatar o valor, se necessário
    }
    function save() {
        // Função para salvar os dados do formulário
    }
    // Event listener para o evento de mudança no select de curso
    document.getElementById('cursoSelect').addEventListener('change', function() {
        var valorInput = document.getElementById('valor');
        var selectedOption = this.options[this.selectedIndex];
        // Atualiza o valor do campo de entrada de texto com o valor selecionado
        if (selectedOption.value !== '') {
            valorInput.value = selectedOption.value;
            valorInput.disabled = true; // Habilita o campo de entrada de texto
        } else {
            valorInput.value = ''; // Limpa o valor se a opção "Selecione o curso" for selecionada
            valorInput.disabled = true; // Desabilita o campo de entrada de texto
        }
    });
</script>

</div></body>

</html>
@endsection()
