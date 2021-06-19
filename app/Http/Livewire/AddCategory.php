<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\models\Category;

class AddCategory extends Component
{
    public $name;
    public $type;
    public $description;

    public function SaveCategory ()
    {
        Category::create([

            'name' => $this->name,
            'type' => $this->type,
            'description' => $this->description,

        ]);

        return $this->redirectRoute(name:'category.view');
    }

    public function render()
    {

        return view('livewire.add-category');
    }
}
