<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OptionCartComponent extends Component
{
    public $products;
    public function render()
    {
        return view('livewire.option-cart-component');
    }
}
