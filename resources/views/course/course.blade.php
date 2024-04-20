@extends('main')

@section('content')
<!-- content -->
<div class="page-content">
<div class="page-content-inner">


    <nav id="breadcrumbs" class="mb-3">
        <ul>
            <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
            <li> Courses </li>

        </ul>
    </nav>

    <div class="d-flex justify-content-between mb-3">
        <h3> Courses (14) </h3>

        <div>
        <button class="uk-button uk-button-default uk-margin-small-right"
        type="button"
        uk-toggle="target: #modal-example">
        <i class="uil-plus"> </i>Novo curso
        </button>
        </div>
    </div>

    <div class="uk-child-width-1-3@m" uk-grid="" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200">

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="{{asset('assets\images\course\2.png')}}" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> Learn Angular Fundamentals </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 120$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 20 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="{{asset('assets\images\course\3.png')}}" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> The Complete JavaScript </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 90$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 8 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="assets\images\course\1.png" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> Ultimate Web Developer Course </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 230$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 21 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="assets\images\course\5.png" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> Ultimate Web Developer Course </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 142$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 13 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="assets\images\course\7.png" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> Bootstrap Introduction </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 80$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 6 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="..\assets\images\course\2.png" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> Learn Angular Fundamentals </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 120$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 20 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#">
                <div class="card animate-this uk-inline-clip">
                    <img src="assets\images\course\3.png" alt="">
                    <div class="card-body text-center pb-3">
                        <h6 class=" mb-0"> The Complete JavaScript </h6>
                    </div>
                    <div class="card-footer py-0 border-top-0">
                        <div class="row align-items-center text-center">
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 90$ Sales </a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#" class="text-muted"> 8 Enrolled </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <ul class="uk-pagination my-5 uk-flex-center" uk-margin="">
        <li class="uk-active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li class="uk-disabled"><span>...</span></li>
        <li><a href="#"><span uk-pagination-next=""></span></a></li>
    </ul>

    <!-- This is a button toggling the modal -->

<!-- This is an anchor toggling the modal -->

<!-- This is the modal -->
<div id="modal-example" uk-modal="">
<div class="uk-modal-dialog uk-modal-body">
	<h2 class="uk-modal-title">Novo Curso</h2>
                <form id="user-form" method="POST" action="">
                    @csrf

                    <div class="card">
        <div class="card-header border-bottom-0 py-4">
            <h5> Configuração dos Cursos </h5>
        </div>


        <ul class="uk-child-width-expand uk-tab" uk-switcher="connect: #course-edit-tab ; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
            <li class="uk-active"><a href="#"> Início</a></li>
            <li><a href="#"> Quizzs</a></li>
            <li><a href="#">Módulos</a></li>
            <li><a href="#">Preço</a></li>
            <li><a href="#">Finalizar</a></li>
        </ul>

        <div class="card-body">

            <ul class="uk-switcher uk-margin" id="course-edit-tab">

                <li>

                    <div class="row">
                        <div class="col-xl-9 m-auto">


                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="course_title">Nome do Curso<span class="required">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Digita o título do curso" value="" required="">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="short_description">Descrição</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="short_description" class="form-control"  placeholder="..."></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="user_id"> Instrutor <span class="required">*</span></label>
                                <div class="col-md-9">

                                    <select class="selectpicker">
                                        <option value=""> Admin 1 </option>
                                    </select>

                                </div>
                            </div>

                            <div class="uk-width-2-5@m uk-flex-last@m">

                                <div class="uk-card-default rounded text-center p-4">
                                    <div class="uk-position-relative my-4">

                                            <div class="user-profile-photo  m-auto">
                                                <img src="{{asset('assets\images\avatars\home-profile.jpeg')}}" alt="">
                                            </div>



                                        <div class="uk-position-center">
                                            <div uk-form-custom="">
                                                <input type="file" name="piture">
                                                <span class="uk-link icon-feather-camera icon-medium text-white"> </span>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                </div>
                        </div>
                    </div>


                </li>


                <li>

                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="website_keywords">Título</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control bootstrap-tag-input" id="meta_keywords" name="meta_keywords" data-role="tagsinput" style="width: 100%; display: none;">
                                    <div class="bootstrap-tagsinput"><input size="1" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-xl-9">
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="meta_description">Descrição</label>
                                <div class="col-md-9">
                                    <textarea name="meta_description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>


                </li>

                <li>


                    <script type="text/JavaScript">
                        function createNewElement() {
                // First create a DIV element.
                var txtNewInputBox = document.createElement('div');

                // Then add the content (a new input box) of the element.
                txtNewInputBox.innerHTML = "<input type='text' class='uk-input'>";

                // Finally put it where it is supposed to appear.
                document.getElementById("newElementId").appendChild(txtNewInputBox);
            }
            </script>

                    <div class="row justify-content-center">
                        <div class="col-xl-9">

                            <button class="btn btn-default mb-3" onclick="createNewElement();"> <i class='uil-plus'></i> Mais </button>

                            <div id="newElementId"> </div>

                            <input type='text' name="name" class='uk-input' placeholder="Adicionar o módulo">
                            <select class="selectpicker">
                                <option value=""> Admin 1 </option>
                            </select>

                        </div>
                    </div>
                </li>

                <li>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="course_title"> Estado do Curso <span class="required">*</span></label>
                        <div class="col-md-9">

                            <select class="selectpicker">
                                <option value="free"> Degraça </option>
                                <option value="paid"> Pago </option>
                            </select>

                        </div>
                    </div>
                    </div>
                </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9">

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label">Preço ($)</label>
                                <div class="col-md-9">
                                    <input type="number" name="price" class="form-control" placeholder="Digite o preço">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row justify-content-center">

                        <div class="col-xl-9">

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label">Validade</label>
                                <div class="col-md-9">
                                    <input type="date" name="validate" class="form-control" placeholder="Validade do curso">
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

                                <p class="w-75 mb-2 mx-auto"> Submeta se estiver de acordo.  </p>

                                <div class="mb-3 mt-3">
                                    <button type="button" class="btn btn-default">Salvar</button>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('create-course-modal');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            this.submit();
            $('#create-course-modal').modal('hide');
        });
    });
</script>
@endsection()
