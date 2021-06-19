<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\models\Vendor;


class AddVendor extends Component
{
    public $name;
    public $description;

    public function SaveVendor ()
    {
        Vendor::create([

            'name' => $this->name,
            'description' => $this->description,

        ]);

        return $this->redirectRoute(name:'vendor.view');
    }


    public function render()
    {
        return view('livewire.add-vendor');
    }
}
