<?php

namespace App\Http\Livewire;
use App\Models\Models\ERP;

use Livewire\Component;

class ErpView extends Component
{

    public Erp $erp;

    public function mount(Erp $erp)
    {
        $this->erp = $erp;
    }
    
    public function render()
    {
        
        return view('livewire.erp-view');
    }
}
