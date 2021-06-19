<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\models\Vendor;


class ViewVendor extends Component
{
    public $vendors;

    public function mount()

    {

        $this->vendors = Vendor::query()->get();

    }


    public function render()
    {
        return view('livewire.view-vendor');
    }
}
