<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Models\ERP;

class ErpAddForm extends Component
{   
    
    public $PartnerCode;
    public $WindowName;
    public $AuthorisedPerson;
    public $ContactNo;
    public $Address;
    public $LatLong;
    public $Area;
    public $Zone;
    public $Region;
    public $City;
    public $Infra;

    public function submit ()

    {

        $this->validate([

            'PartnerCode' => ['required'],
            'WindowName' => ['required'],
            'AuthorisedPerson' => ['required'],
            'ContactNo' => ['required'],
            'Address' => ['required'],
            'LatLong' => ['required'],
            'Area' => ['required'],
            'Zone' => ['required'],
            'Region' => ['required'],
            'City' => ['required'],
            'Infra' => ['required'],
        

        ]);

        ERP::create([

            'partnercode' => $this->PartnerCode,
            'windowname' => $this->WindowName,
            'auth_person' => $this->AuthorisedPerson,
            'contact_num' => $this->ContactNo,
            'address' => $this->Address,
            'latlong' => $this->LatLong,
            'area' => $this->Area,
            'zone' => $this->Zone,
            'region' => $this->Region,
            'city' => $this->City,
            'infra' => $this->Infra,


        ]);

        return $this->redirectRoute(name:'erplist');

    }

    public function render()
    {
        return view('livewire.erp-add-form');
    }
}
