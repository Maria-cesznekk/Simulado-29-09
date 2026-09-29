<?php

namespace App\Livewire;

use Livewire\Component;

class ProdutoIndex extends Component
{
    public function render()
    {
        $produtos = ProdutoIndex::all();

        return view(
            'livewire.produto-index',
            compact('produtos')
        );
    }
}
