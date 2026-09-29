<?php

namespace App\Livewire;

use Livewire\Component;

class ProdutoEdit extends Component
{
     public $nome;
    public $preco;
    public $quantidade;
    
    public function render()
    {
        return view('livewire.produto-edit');
    }
}
