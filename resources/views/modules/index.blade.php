@extends('main')

@section('content')
<!-- content -->
<div class="page-content">
    <div class="page-content-inner">
        <nav id="breadcrumbs" class="mb-3">
            <ul>
                <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                <li> Cursos </li>

            </ul>
        </nav>

        <div class="d-flex justify-content-between mb-3">
            <h3> Courses (1) </h3>

            <div>
                <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example">
                    <i class="uil-plus"> </i>Novo curso
                </button>
            </div>
        </div>
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
        <div class="uk-overflow-auto">
            <table id="users-table" class="uk-table">
                <thead>
                    {{-- <th>Table Heading</th> --}}
                    <tr>
                        <th scope="col">Nome do curso</th>
                        <th scope="col">Modulo</th>
                        <th scope="col">Acções</th>
                    </tr>
                </thead>



                <tbody class="list">
                    @foreach ($module as $module)
                    <tr>

                        <td>{{ $module->course_id }}</td>
                        <td>{{ $module->name }}</td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Ver detalhes">
                                    <i class="uil-external-link-alt "></i> </a>
                                <a href="#edit_modal" uk-toggle class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Edit">
                                    <i class="uil-pen "></i> </a>
                                <a href="#delete" uk-toggle class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Delete user">
                                    <i class="uil-trash-alt text-danger"></i> </a>
                                <a href="#modal-example2" class="btn btn-icon btn-hover btn-sm btn-circle" uk-toggle="target: #target: #modal-example2" uk-tooltip="Add modules">
                                    <i class="uil-plus"></i>
                                </a>

                                </a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="modal-example" uk-modal="">
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Novo Módulo</h2>
                <form id="user-form" method="POST" action="{{ route('module.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header border-bottom-0 py-4">
                            <h5> Configuração dos Cursos </h5>
                        </div>


                        <ul class="uk-child-width-expand uk-tab" uk-switcher="connect: #course-edit-tab ; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                            <li class="uk-active"><a href="#"> Adicionar Modulo</a></li>
                            <li><a href="#">Finalizar</a></li>
                        </ul>

                        <div class="card-body">

                            <ul class="uk-switcher uk-margin" id="course-edit-tab">
                                <li>

                                    <div class="row justify-content-center">

                                        <div class="col-xl-9 m-auto">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="course_id"> Curso <span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <select class="selectpicker" value="course_id" name="course_id">
                                                        @foreach ($course as $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="course_title">Nome do
                                                    Modulo<span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Digita o título do curso" value="" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>

                                    <div class="row">
                                        <div class="col-12 my-lg-5">
                                            <div class="text-center">
                                                <h2 class="mt-0"><i class="icon-feather-check-circle text-success"></i></h2>
                                                <h3 class="mt-0">Obrigado !</h3>

                                                <p class="w-75 mb-2 mx-auto"> Submeta se estiver de acordo. </p>

                                                <div class="mb-3 mt-3">
                                                    <button type="submit" class="btn btn-default">Salvar</button>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>


                                </li>

                            </ul>

                        </div>

                    </div>
                </form>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                </p>
            </div>
        </div>


    </div>
</div>
@endsection()