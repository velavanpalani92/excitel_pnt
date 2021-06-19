<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Models\Category;


class ViewCategory extends Component
{
    public $categories;

    public function mount()

    {

        $this->categories = Category::query()->get();

    }


    public function render()
    {
        return view('livewire.view-category');
    }
}
