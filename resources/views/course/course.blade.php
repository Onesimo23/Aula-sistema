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
                        <th scope="col">Imagem de destaque</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Instrutor</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Acções</th>
                    </tr>
                </thead>



                <tbody class="list">
                    @foreach ($course as $course)
                    <tr>

                        <td>{{ $course->picture }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->category_id}}</td>
                        <td>{{ $course->user->name }}</td>
                        <td>{{ $course->price}}</td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Ver detalhes">
                                    <i class="uil-external-link-alt "></i> </a>
                                <a href="#edit_modal" uk-toggle class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Edit">
                                    <i class="uil-pen "></i> </a>
                                <a href="#delete" uk-toggle class="btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Delete user">
                                    <i class="uil-trash-alt text-danger"></i> </a>
                                <a href="{{route('geraPdf', $course->id)}}" class="btn btn-icon btn-hover btn-sm btn-circle" uk-toggle="target: #target: #modal-example2" uk-tooltip="pdf">
                                <span class="icon-material-outline-save-alt">
                                </a>
                                <a href="#modal-example2" class="btn btn-icon uil-download text-3xl text-blue-500 btn-hover btn-sm btn-circle" uk-toggle="target: #target: #modal-example2" uk-tooltip="">
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
                <h2 class="uk-modal-title">Novo Curso</h2>
                <form id="user-form" method="POST" action="{{ route('course.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header border-bottom-0 py-4">
                            <h5> Configuração dos Cursos </h5>
                        </div>


                        <ul class="uk-child-width-expand uk-tab" uk-switcher="connect: #course-edit-tab ; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                            <li class="uk-active"><a href="#"> Fase 1</a></li>
                            <li><a href="#">Fase 2</a></li>
                            <li><a href="#">Finalizar</a></li>
                        </ul>

                        <div class="card-body">

                            <ul class="uk-switcher uk-margin" id="course-edit-tab">

                                <li>

                                    <div class="row">
                                        <div class="col-xl-9 m-auto">

                                            <div class="uk-width-2-5@m uk-flex-last@m">

                                                <div class="uk-card-default rounded text-center p-4">
                                                    <div class="uk-position-relative my-4">

                                                        <div class="user-profile-photo  m-auto">
                                                            <img id="profileImage" src="" alt="">
                                                        </div>



                                                        <div class="uk-position-center">
                                                            <div uk-form-custom="">
                                                                <input type="file" id="imageInput" name="picture">
                                                                <span class="uk-link icon-feather-camera icon-medium text-black">
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="course_title">Nome do
                                                    Curso<span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Digita o título do curso" value="" required="">
                                                    <input type="hidden" id="course_name" name="course_name" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label">Preço ($)</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="price" id="price" class="form-control" placeholder="Digite o preço">
                                                </div>
                                            </div>

                                            {{-- end --}}


                                        </div>
                                    </div>


                                </li>


                                <li>

                                    <div class="row justify-content-center">

                                        <div class="col-xl-9 m-auto">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="short_description">Descrição</label>
                                                <div class="col-md-9">
                                                    <textarea name="description" id="description" class="form-control" placeholder="..."></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="course_title"> Estado do
                                                    Curso <span class="required">*</span></label>
                                                <div class="col-md-9">

                                                    <select class="selectpicker" name="role" id="role">
                                                        <option value="free"> Grátis </option>
                                                        <option value="paid"> Pago </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="course_title"> Em destaque
                                                    <span class="required">*</span></label>
                                                <div class="col-md-9">

                                                    <select class="selectpicker" name="highlighted" id="highlighted">
                                                        <option value="true">Sim</option>
                                                        <option value="false"> Não </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="course_title">
                                                    Validade<span class="required">*</span></label>
                                                <div class="col-md-9">

                                                    <select class="selectpicker" name="validate" id="validate">
                                                        <option value="lifetime"> Vitalício </option>
                                                        <option value="one_year"> 1 ano</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="user_id"> Instrutor <span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <select class="selectpicker" value="user_id" name="user_id">
                                                        @foreach ($user as $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- --}}


                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="category_id"> Categoria <span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <select class="selectpicker" value="category_id" name="category_id">
                                                        @foreach ($category as $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
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
