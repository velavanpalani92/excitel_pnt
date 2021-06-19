<?php

namespace App\Http\Livewire;
use App\Models\Models\Partner;


use Livewire\Component;

class PartnerListing extends Component
{
    
    public $partners;

    public function mount()

    {

        $this->partners = Partner::query()

            ->orderByDesc(column:'id')
            ->get();

    }
    
    public function edit(Partner $partner)
    {
        dd($partner);
    }
    
    public function render()
    {
        return view('livewire.partner-listing');
    }
}
