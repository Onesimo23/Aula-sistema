<!-- Add modal -->
<div id="delete-{{$cat->id}}" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
    <h1>Confirmação de Exclusão</h1>
            <p>Você tem certeza que deseja excluir a categoria {{ $cat->name }}?</p>
            <form action="{{ route('category.destroy', $cat->id) }}" method="POST">
                @method('DELETE')
                @csrf

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class=" btn btn-danger" type="submit">Confirmar Exclusão</button>
        </p>
        </form>
    </div>
</div>

