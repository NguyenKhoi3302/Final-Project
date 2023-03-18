<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class NavSearchComponent extends Component
{
    public $q;
    public $results;
    // protected $queryString = ['q'];

    public function render()
    {
        if($this->q)
            $this->results = Product::where('name','like','%'. $this->q.'%')
                ->inRandomOrder()->limit(6)->get();

        return view('livewire.nav-search-component');
    }
}
