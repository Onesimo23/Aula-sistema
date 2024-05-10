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
        <th>Categoria</th>
        <th>Nome</th>
        <th>Destaque</th>
        <th>Validade</th>
        <th>Preço</th>
        <th>Estado</th>
        <th>Data de Criaçao</th>
      </tr>
    </thead>
    <tbody>
      @foreach($course as $value)
      <tr>
          <td scope="hidden">{{$value->user_id}}</td>
          <td>{{category_id}}</td>
          <td>{{name}}</td>
          <td>{{description}}</td>
          <td scope="hidden">{{picture}}</td>
          <td>{{date('d-F-Y',strtotime($value->validate))}}</td>
          <td>{{$value->price}}</td>
          <td>{{$value->role}}</td>
          <td>{{date('d-F-Y',strtotime($value->created_at))}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  'user_id',
        'category_id',
        'name',
        'description',
        'highlighted',
        'picture',
        'price',
        'role',
        'validate',
</br>
</br>
<p><strong> Cursos Onlines Unisave&copy; 2024</strong></p>


