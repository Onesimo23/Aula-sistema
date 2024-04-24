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
                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label">Data de Registro</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input class="uk-input" type="date" name="date_registration" id="date_registration" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label">Status da Inscrição</label>
                            <div class="uk-position-relative w-100">
                                <select class="uk-select" name="status" required>
                                    <option value="pending">Pendente</option>
                                    <option value="active">Activo</option>
                                    <option value="completed">Completo</option>
                                    <option value="canceled">Cancelado</option>
                                </select>
                            </div>
                        </div>
                    </div>

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
                <th scope="col">Data da inscrição</th>
                <th scope="col">Estado da Inscrição</th>
                <th scope="col">Acções</th>
            </tr>
        </thead>



        <tbody class="list">
            @foreach ($inscriptions as $inscription)
            <tr>
                <td>{{ $inscription->user->name }}</td>
                <td>{{ $inscription->course->name }}</td>
                <td>{{ $inscription->date_registration }}</td>
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

<div id="edit_modal" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Editar Usuarios</h2>
        <form action="{{ route('inscription.update', $inscription->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Nome do Usuário</label>
                @foreach($user as $user)
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $user->name }}" required>
                @endforeach

            </div>
            <div class="form-group">
                <label for="course_id">Curso</label>
                @foreach($course as $course)
                <input type="text" class="form-control" id="course_id" name="course_id" value="{{ $course->name}}" required>
                @endforeach
            </div>
            <div class="uk-width-1-2@s">
                <div class="uk-form-group">
                    <label class="uk-form-label">Data de Inscrição</label>
                    <div class="uk-position-relative w-100">
                        <span class="uk-form-icon">
                            <i class="icon-feather-lock"></i>
                        </span>
                        <input class="uk-input" type="date" value="{{ $inscription->date_registration }}" name="date_registration" id="date_registration" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="status">Estado da Inscrição</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="pending" {{ $inscription->role == 'pending' ? 'selected' : '' }}>Pendente</option>
                    <option value="active" {{ $inscription->role == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="completed" {{ $inscription->role == 'completed' ? 'selected' : '' }}>Completo</option>
                    <option value="canceled" {{ $inscription->role == 'canceled' ? 'selected' : '' }}>Cancelado</option>
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
            <form action="{{ route('inscription.destroy', $inscription->id) }}" method="POST">
                @csrf
                @method('DELETE')

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class=" btn btn-danger" type="submit">Confirmar Exclusão</button>
        </p>
        </form>
    </div>
</div>


@endsection


</script>