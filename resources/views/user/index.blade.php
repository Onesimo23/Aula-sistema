@extends('main')

@section('content')


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
                <button class="uk-button uk-button-default" type="button" data-toggle="modal" data-target="#create-user-modal">Adicionar Usuário</button>
            </div>
        </div>






        <div class="card">
            <!-- Card header -->
            <div class="card-header actions-toolbar border-0">
                <div class="d-flex justify-content-between align-items-center">
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
            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-items-center">
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
                            <td> {{ $user->role }}</td>
                            <td class="text-right">
                                <div class="actions ml-3">
                                    <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Quick view">
                                        <i class="uil-external-link-alt "></i> </a>
                                    <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Edit">
                                        <i class="uil-pen "></i> </a>
                                    <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Delete user">
                                        <i class="uil-trash-alt text-danger"></i> </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
            </div>



        </div>
        @endsection

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var form = document.getElementById('create-user-modal');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    this.submit();
                    $('#create-user-modal').modal('hide');
                });
            });
        </script>
    </div>