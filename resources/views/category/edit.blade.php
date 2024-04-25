<!-- Edit modal -->
<div id="edit-{{$cat->id}}" uk-modal="">
          
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Editar Usuarios</h2>
         @csrf 
        <form action="{{ route('category.update', $cat->id) }}" method="POST">
           
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $cat->name }}" required>
                @csrf
                    @method('PUT')
            </div>
           
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="submit">Save</button>
            </p>
        </form>
    </div>
   
</div>