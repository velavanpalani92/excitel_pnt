<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Models\ERP;

class ErpListing extends Component
{
    
    public $erps;

    public function mount()

    {

        $this->erps = ERP::query()

            ->orderByDesc(column:'id')
            ->get();

    }
    
    public function render()
    {
        return view('livewire.erp-listing');
    }
}
