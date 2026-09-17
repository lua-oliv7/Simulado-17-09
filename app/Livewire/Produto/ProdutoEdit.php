<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto_id;
    public $nome;
    public $valor;
    public $qtd_estoque;
    public $qtd_minima;
    public $prazo_validade;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;

    public function mount($id){
        $produto = Produto::find($id);

        if($produto == null){
            session()->flash('error', 'não encontrado');
            return redirect()->route('produto.index');
        }

        $this->produto_id = $produto->id;
        $this->nome = $produto->nome;
        $this->valor = $produto->valor;
        $this->qtd_estoque = $produto->qtd_estoque;
        $this->qtd_minima =  $produto->qtd_minima;
        $this->prazo_validade = $produto->prazo_validade;
        $this->cor = $produto->cor;
        $this->textura = $produto->textura;
        $this->peso = $produto->peso;
        $this->unidade_medida = $produto->unidade_medida;
    }

     public function update(){
        $produto = Produto::find($this->produto_id);

        if($produto == null){
            session()->flash('error', 'não encontrado');
            return redirect()->route('produto.index');
        }

        $produto->nome = $this->nome;
        $produto->valor= $this->valor;
        $produto->qtd_estoque = $this->qtd_estoque;
        $produto->qtd_minima = $this->qtd_minima;
        $produto->prazo_validade = $this->prazo_validade;
        $produto->cor = $this->cor;
        $produto->textura = $this->textura;
        $produto->peso = $this->peso;
        $produto->unidade_medida = $this->unidade_medida;

        $produto-> save();

        session()->flash('success', 'Atualizado');
        return redirect()->route('produto.index');
     }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}