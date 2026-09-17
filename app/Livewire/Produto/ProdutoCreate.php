<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $valor;
    public $qtd_estoque; 
    public $qtd_minima;
    public $prazo_validade;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;

    public function store(){
        Produto::create([
            'nome' => $this->nome,
            'valor' => $this->valor,
            'qtd_estoque' => $this->qtd_estoque,
            'qtd_minima' => $this->qtd_minima,
            'prazo_validade' => $this->prazo_validade,
            'cor' => $this->cor,
            'textura' => $this->textura,
            'peso' => $this->peso,
            'unidade_medida' => $this->unidade_medida
        ]);

        session()->flash('success', 'Cadastrado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}