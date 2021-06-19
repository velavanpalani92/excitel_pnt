<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Models\Outward;


class ViewOutward extends Component
{
    public $outwards;

    public function mount()

    {

        $this->outwards = Outward::query()->get();

    }

    public function render()
    {
        return view('livewire.view-outward');
    }
}
