<style>
  table{
    width: 100%;
    border-collapse: collapse;
  }
  th,td{
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
</style>
<div class="align-center" style="text-align: center">
<h3>República de Moçambique</h3>
<h3>Província de Gaza</h3>
<h3>Distrito de Chongoene</h3>
<p><strong>Exame Normal de Aplicações Web Unisave 2023</strong></p>
<br>
<br>
<h2 class="card-title">Relatótio de Submissão de Candidaturas</h2>
</div>````
<div class="table-responsive">
  <table class="table" id="table">
    <thead>
      <tr>
        <th>Nr</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Data de Nascimento</th>
        <th>E-mail</th>
        <th>Categoria</th>
        <th>Vagas</th>
        <th>Resultados</th>
        <th>Submissão</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($course as $value)
      <tr>
        <td scope="row">{{$value->category_id()->name}}</td>
          <td>{{$value->fname}}</td>
          <td>{{$value->highlighted}}</td>
          <td>{{date('d-F-Y',strtotime($value->validate))}}</td>
          <td>{{$value->price}}</td>
          <td>{{$value->role}}</td>
          <td>{{date('d-F-Y',strtotime($value->created_at))}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
