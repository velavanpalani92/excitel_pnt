<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\models\Inward;
use App\Models\models\Category;
use App\Models\models\Vendor;

class AddInward extends Component
{
    public $name;
    public $mac;
    public $serial;
    public $description;
    public $category_name;
    public $vendor_name;

    public function SaveInward ()
    {
        Inward::create([

            'name' => $this->name,
            'mac' => $this->mac,
            'serial' => $this->serial,
            'description' => $this->description,
            'category_id' => $this->category_name,
            'vendor_id' => $this->vendor_name,

        ]);

        return $this->redirectRoute(name:'inward.view');
    }

    public function render()
    {
        $categories = Category::all();
        $vendors = Vendor::all();
        return view('livewire.add-inward', ['categories'=>$categories, 'vendors'=>$vendors]);
    }
}
