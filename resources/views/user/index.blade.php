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
                    <li><a href="#"> Usuários </a></li>
                    <li>Lista de Usuários</li>
                </ul>
            </nav>
            <div>
                <a class="uk-button uk-button-default" href="#modal-example" uk-toggle>Adicionar Usuarios</a>
            </div>
        </div>
        <div id="modal-example" uk-modal="">
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Headline</h2>
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
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Nível de acesso</th>
                <th scope="col">Acções</th>
            </tr>
        </thead>
        <tbody class="list">
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <div class="progress" style="height: 7px;">
                        <div class="progress-bar" role="progressbar" style="width: 45%;"></div>
                    </div>
                </td>
                <td class="text-right">
                    <!-- Actions -->
                    <div class="actions ml-3">
                        <a class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Quick view">
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
<!-- modal de edição de usuarios -->
<div id="edit_modal" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Editar Usuarios</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="role">Nível de Acesso</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Estudante</option>
                    <option value="teacher" {{ $user->role == 'teacher' ? 'selected' : '' }}>Instrutor</option>
                    <option value="administrator" {{ $user->role == 'administrator' ? 'selected' : '' }}>Administrador</option>
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
    <h1>Confirmação de Exclusão de Usuário</h1>
            <p>Você tem certeza que deseja excluir o usuário "{{ $user->name }}"?</p>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
           
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class=" btn btn-danger" type="submit">Confirmar Exclusão</button>
        </p>
        </form>
    </div>
</div>



<div class="modal fade" id="create-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="user-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo" required>
                    </div>


                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar senha</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="********" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>

@endsection

