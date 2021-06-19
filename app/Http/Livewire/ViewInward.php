<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Models\Inward;


class ViewInward extends Component
{
    public $inwards;

    public function mount()

    {

        $this->inwards = Inward::query()->get();

    }

    public function render()
    {
        return view('livewire.view-inward');
    }
}
