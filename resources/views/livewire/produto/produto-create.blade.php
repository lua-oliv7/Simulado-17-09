<div class="mt-5">
    <div class="container">
        <h2 class="text-center">Cadastro de Produto</h2>

    <div class="conteiner col-md-8 mx-auto bg-primary-subtle rounded p-4 shadow-sm">
        <form class="row g-3"wire:submit.prevent='store'>
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" wire:model='nome'>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" class="form-control" id="valor" wire:model='valor'>
                </div>
                <div class="col-md-6">
                    <label for="qtd_estoque" class="form-label">Quantidade no estoque</label>
                    <input type="text" class="form-control" id="qtd_estoque" wire:model='qtd_estoque'>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="qtd_minima" class="form-label">Quantidade mínima</label>
                    <input type="text" class="form-control" id="qtd_minima" wire:model='qtd_minima'>
                </div>
                <div class="col-md-6">
                    <label for="prazo_validade" class="form-label">Prazo de Validade</label>
                    <input type="date" class="form-control" id="prazo_validade" wire:model='prazo_validade'>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="cor" class="form-label">Cor</label>
                    <input type="text" class="form-control" id="cor" wire:model='cor'>
                </div>
                <div class="col-md-6">
                    <label for="textura" class="form-label">Textura</label>
                    <input type="text" class="form-control" id="textura" wire:model='textura'>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="text" class="form-control" id="peso" wire:model='peso'>
                </div>

                <div class="col-md-6">
                    <label for="unidade_medida" class="form-label">Unidade de Medida</label>
                    <input type="text" class="form-control" id="unidade_medida" wire:model='unidade_medida'>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>
