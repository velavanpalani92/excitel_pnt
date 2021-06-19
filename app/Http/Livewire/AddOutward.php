<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\models\Category;
use App\Models\models\Vendor;
use App\Models\models\Inward;
use App\Models\models\Partner;

class AddOutward extends Component
{
    public $name;
    public $mac;
    public $serial;
    public $description;
    public $category_name;
    public $vendor_name;

    public function SaveOutward ()
    {
        Outward::create([

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
        $partners = Partner::all();
        $inwards = Inward::all();
        return view('livewire.add-outward', ['categories'=>$categories, 'vendors'=>$vendors, 'partners'=>$partners, 'inwards'=>$inwards]);
    }
}
