<?php

namespace App\Livewire;

use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $preco;
    public $quantidade;

    public function store()
    {
        $produto = ProdutoCreate::create([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,



        ]);
    }



    public function render()
    {
        return view('livewire.produto-create');
    }
}
