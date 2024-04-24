@extends('main')

@section('content')

<style>
    .password-match-error {
        border-color: red !important;
    }
</style>

<div class="page-content">
    <div class="page-content-inner">

        <div class="d-flex justify-content-between mb-3">
            <nav id="breadcrumbs" class="mb-3">
                <ul>
                    <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                    <li><a href="#"> Isncrições </a></li>
                    <li>Lista de Inscrições</li>
                </ul>
            </nav>
            <div>
                <a class="uk-button uk-button-default" href="#modal-example" uk-toggle>Adicionar Isncrição</a>
            </div>
        </div>
        <div id="modal-example" uk-modal="">
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Headline</h2>
                <form class="uk-child-width-1-1 uk-grid-small" uk-grid="" action="{{ route('inscription.store') }}" method="POST" id="registerForm">
                    @csrf
                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label" for="user_id">Nome do usuário</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                                <select class="selectpicker" value="user_id" name="user_id">
                                    @foreach ($user as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label" for="course_id">Curso</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-mail"></i>
                                </span>
                                <select class="selectpicker" value="course_id" name="course_id">
                                    @foreach ($course as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="pending" id="status" display: none>



                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" type="submit">Criar</button>
                    </p>
                </form>
            </div>
        </div>





        <h4 class="d-inline-block mb-0">Usuários</h4>
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
<div class="uk-overflow-auto">
    <table id="users-table" class="uk-table">
        <thead>
            {{-- <th>Table Heading</th> --}}
            <tr>
                <th scope="col">Nome do Usuário</th>
                <th scope="col">Curso</th>
                <th scope="col">Estado da Inscrição</th>
                <th scope="col">Acções</th>
            </tr>
        </thead>



        <tbody class="list">
            @foreach ($inscription as $inscription)
            <tr>
                <td>{{ $inscription->user->name }}</td>
                <td>{{ $inscription->course->name }}</td>
                <td>{{ $inscription->status }}</td>
                <td class="text-right">
                    <!-- Actions -->
                    <div class="actions ml-3">
                        <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Ver detalhes">
                            <i class="uil-external-link-alt "></i> </a>
                        <a href="#edit_modal" uk-toggle class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Edit">
                            <i class="uil-pen "></i> </a>
                        <a href="#delete" uk-toggle class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Delete user">
                            <i class="uil-trash-alt text-danger"></i> </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- modal de editar --}}
<div id="edit_modal" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Editar Usuarios</h2>
        <form action="{{ route('inscription.update', $inscription) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Nome do Usuário</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach($user as $u)
                        <option value="{{ $u->id }}" {{ $inscription->user_id == $u->id ? 'selected' : '' }}>{{ $u->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Curso</label>
                <select class="form-control" id="course_id" name="course_id" required>
                    @foreach($course as $c)
                        <option value="{{ $c->id }}" {{ $inscription->course_id == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="submit">Save</button>
            </p>
        </form>

    </div>
</div>

<div id="delete" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
    <h1>Confirmação de Exclusão de Incrição</h1>
            <p>Você tem certeza que deseja excluir a inscrição?</p>
            @foreach ($inscription as $item)
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class=" btn btn-danger" type="submit">Confirmar Exclusão</button>
                    </form>
        @endforeach

        {{-- <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class=" btn btn-danger" type="submit">Confirmar Exclusão</button>
        </p>
        </form> --}}
    </div>
</div>


@endsection


<script>
document.querySelector('#registerForm').addEventListener('submit', function(event) {
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('date_registration').value = currentDate;
});

document.getElementById('edit_modal').addEventListener('show.uk.modal', function(event) {
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('date_registration_edit').value = currentDate;
});

</script>
