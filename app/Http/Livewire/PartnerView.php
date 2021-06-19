<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Models\Partner;


class PartnerView extends Component
{

    public $partnercode;

    public function mount($partnercode)
    {
        $this->partnercode = $partnercode;
    }
    public function render()
    {
        $partner = Partner::where('partnercode', $this->partnercode)->first();
        return view('livewire.partner-view', ['partner'=>$partner]);
    }
}
