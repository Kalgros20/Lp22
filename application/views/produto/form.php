<div class="container mt-5">
    <div class="row">
        <form method="POST" action="<?= base_url($action) ?>" class="col-md-8 mx-auto">
            <p class="h5 text-center mb-4">Novo Produto</p>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" value="<?= set_value('produto') ?>" name="produto" id="produto" class="form-control">
                <label for="produto">Nome do Produto</label>
            </div>

            <div class="md-form">
                <i class="fa fa-pencil prefix"></i>
                <textarea type="text" name="descricao" id="descricao" class="md-textarea"><?= set_value('descricao') ?></textarea>
                <label for="descricao">Descrição</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="text" value="<?= set_value('preco') ?>" name="preco" id="preco" class="form-control">
                <label for="preco">Preço</label>
            </div>

            <input type="hidden" value="<?= isset($id) ? $id : '' ?>" name="id" class="form-control">
            <div class="text-center">
                <button class="btn btn-default">Cadastrar</button>
            </div>
        </form>
    </row>
</div>