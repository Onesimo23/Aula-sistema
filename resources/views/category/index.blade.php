@extends('main')

@section('content')
<!-- content -->
<div class="page-content">
    <div class="page-content-inner">


        <nav id="breadcrumbs" class="mb-3">
            <ul>
                <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                <li> Categorias </li>

            </ul>
        </nav>

        <div class="d-flex justify-content-between mb-3">
            <h3> Categorias ({{$category->count()}}) </h3>

            <div>
                <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #add-modal">
                    <i class="uil-plus"> </i>Nova Categoria
                </button>
            </div>
        </div>
        @include('category.create')


        <div class="uk-overflow-auto">
            <table id="users-table" class="uk-table">
                <thead>
                
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th class="text-right" scope="col text-right">Acções</th>
                    </tr>
                </thead>
        
                <tbody class="list">
        
                    @foreach ($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#edit-{{$cat->id}}" uk-toggle class=" modal-trigger btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Edit">
                                    <i class="uil-pen "></i> </a>
                                    @include('category.edit')
                                
                                    <a href="#delete-{{$cat->id}}" uk-toggle class=" modal-trigger btn btn-icon btn-hover btn-sm btn-circle" uk-tooltip="Delete user">
                                    <i class="uil-trash-alt text-danger"></i> </a>

                                    @include('category.delete')
                            </div>
                        </td>
                    </tr>
                    @endforeach
              
                </tbody>
            </table>
        </div>

        <ul class="uk-pagination my-5 uk-flex-center" uk-margin="">
            <li class="uk-active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="uk-disabled"><span>...</span></li>
            <li><a href="#"><span uk-pagination-next=""></span></a></li>
        </ul>

        
        @endsection()
       


