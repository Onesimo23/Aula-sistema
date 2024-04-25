 <!-- Add modal -->
 <div id="add-modal" uk-modal="">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Nova Categoria</h2>
        <form class="uk-child-width-1-1 uk-grid-small" uk-grid="" action="{{ route('category.store') }}" method="POST" id="registerForm">
            @csrf
            
            <div>
                <div class="uk-form-group">
                    <label class="uk-form-label">Nome</label>
                    <div class="uk-position-relative w-100">
                        <span class="uk-form-icon">
                            <i class="icon-feather-user"></i>
                        </span>
                        <input class="uk-input" type="text" placeholder="Nome da categoria" name="name" required>
                    </div>
                </div>
            </div>

            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="submit">Criar</button>
            </p>
        </form>
        
    </div>
</div>