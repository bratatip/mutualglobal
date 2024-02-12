<?php

namespace App\Http\Livewire\HealthCoupon\Form;

use App\Models\Area;
use App\Models\City;
use App\Models\Hospital;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HospitalDropDown extends Component
{
    public $cities;
    public $areas;
    public $hospitals;

    public $selectedCity = NULL;
    public $selectedArea = NULL;


    public function mount()
    {
        $this->cities = City::get();
        $this->areas = collect();
        $this->hospitals = collect();
    }

    public function render()
    {
        // $this->areas = Area::where('city_id', $this->cityID)->pluck('name', 'id')->all();
        // $this->hospitals = Hospital::where('area_id', $this->areaID)->pluck('name', 'id')->all();
        return view('livewire.health-coupon.form.hospital-drop-down');
    }

    public function updatedSelectedCity($city)
    {
        $this->areas = Area::where('city_id', $city)->get();
        // $this->selectedCity = NULL;
    }

    public function updatedSelectedArea($area)
    {
        if (!is_null($area)) {
            $this->hospitals = Hospital::where('area_id', $area)->get();
        }
    }
}
