<?php

namespace App\Http\Livewire\Services;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class WeeklyPackageProcess extends Component
{
    public $propertyInstruction;
    public $auth_user, $accountNumber, $userId;
    public $addAddUrl = "http://mypoolcity-qa.azurewebsites.net/api/address";

    public function mount()
    {
        try{
            $response = Http::get("https://mypoolcity-qa.azurewebsites.net/api/instructions");
            $this->propertyInstruction = $response->json();
        } catch (\Exception $e)
        {
            $this->propertyInstruction = array('error'=>$e->getMessage());
        }    
    } 

    public function render()
    {
        $user_info            = session()->get('user');
        $this->userId         = $user_info['info']['userId']; 
        $this->accountNumber  = $user_info['info']['accountNumber'];
        return view('livewire.services.weekly-package-process',['propertInstruction'=>$this->propertyInstruction])->layout('layouts.base');
    }
    
}
