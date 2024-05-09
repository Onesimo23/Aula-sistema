@extends('main')

@section('content')
<!-- content -->
<div class="page-content">
    <div class="page-content-inner">

        <h1>Cursos em Destaque</h1>
        <table class="uk-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Validade</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($highlightedCourses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->validate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

