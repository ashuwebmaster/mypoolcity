<?php

namespace App\Http\Livewire\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AddressComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];

    public $propertyInstruction;
    public $auth_user, $accountNumber, $userId;
    public $addAddUrl = "http://mypoolcity-qa.azurewebsites.net/api/address";
    public $active_addrees = array();
    public function render()
    {
        $all_addresses = $this->getAllAddresses();
        $this->setDefaultAddress($all_addresses);
        return view('livewire.services.address-component',['all_addresses'=>$all_addresses]);
    }
    
    public function setDefaultAddress($all_addresses)
    {
        if(isset($all_addresses['data']['address'][0]))
        {
            $active_add_data = $all_addresses['data']['address'][0];
            $this->active_addrees = [
                                        "line1"             =>  $active_add_data['addressLine1'],
                                        "line2"             =>  $active_add_data['addressLine2'],
                                        "city"              =>  $active_add_data['city'],
                                        "state"             =>  $active_add_data['state'],
                                        "zip"               =>  $active_add_data['zip'],
                                        "instructions"      =>  $active_add_data['instructions'],
                                        "otherInstructions" =>  $active_add_data['otherInstructions'],
                                    ];
        }
    }
    public function getAllAddresses()
    {
        $this->auth_user = session()->get('user');
        if(isset($this->auth_user['info']['accountNumber']))
        {
            $this->account_no = $this->auth_user['info']['accountNumber'];
            try{
                $response = Http::get("https://mypoolcity-qa.azurewebsites.net/api/address?accountid=".$this->account_no);
                return $response->json();
            } catch (\Exception $e)
            {
                return array('error'=>$e->getMessage());
            }                
        }      
    }

    public function deleteAddress($id)
    {
        $user_info            = session()->get('user');
        $this->userId         = $user_info['info']['userId']; 
        $this->accountNumber  = $user_info['info']['accountNumber'];
        try{
            $response = Http::put($this->addAddUrl, [
                "id" => $id,
                "accountId" => $this->accountNumber,
                "userId" => $this->userId,
            ]);
            $result = $response->json();
            session()->flash('success', $result['message']);
        } catch (\Exception $e)
        {
            return array('error'=>$e->getMessage());
        }   

    }

    public function addAddress(Request $request)
    {
        $return_arr = array();
        $user_info           = session()->get('user');
        $userId              = $user_info['info']['userId']; 
        $accountNumber       = $user_info['info']['accountNumber']; 
        $id                  = $request->input('id');
        $line1               = $request->input('line1');
        $line2               = $request->input('line2');
        $state               = $request->input('state');
        $city                = $request->input('city');
        $postal_code         = $request->input('postal_code');
        $pro_instruction     = $request->input('pro_instruction');
        $otherInstructions   = $request->input('otherInstructions');
        $instructions = array();
        if($pro_instruction){
            foreach($pro_instruction as $instruction_id)
            {
                $instructions[] = array('id'=> $instruction_id );
            }
        }

        try{
            $response = Http::post($this->addAddUrl, [
                "Id" => $id,
                "addressLine1" => $line1,
                "addressLine2" => $line2,
                "city" => $city,
                "state" => $state,
                "zip" => $postal_code,
                "isPrimary" => true,
                "addressType" => 1,
                "accountId" => $accountNumber,
                "userId" => $userId,
                "instructions" => $instructions,
                "otherInstructions" => $otherInstructions
            ]);
            $result = $response->json();
            session()->flash('success', $result['message']);
        } catch (\Exception $e)
        {
            return array('error'=>$e->getMessage());
        }          
    }

    public function updateAddress()
    {

        $return_arr = array();
        $user_info           = session()->get('user');
        $userId              = $user_info['info']['userId']; 
        $accountNumber       = $user_info['info']['accountNumber']; 
        $id                  = $request->input('id');
        $line1               = $request->input('line1');
        $line2               = $request->input('line2');
        $state               = $request->input('state');
        $city                = $request->input('city');
        $postal_code         = $request->input('postal_code');
        $pro_instruction     = $request->input('pro_instruction');
        $otherInstructions   = $request->input('otherInstructions');
        $instructions = array();
        if($pro_instruction){
            foreach($pro_instruction as $instruction_id)
            {
                $instructions[] = array('id'=> $instruction_id );
            }
        }

        try{
            $response = Http::post($this->addAddUrl, [
                "Id" => $id,
                "addressLine1" => $line1,
                "addressLine2" => $line2,
                "city" => $city,
                "state" => $state,
                "zip" => $postal_code,
                "isPrimary" => true,
                "addressType" => 1,
                "accountId" => $accountNumber,
                "userId" => $userId,
                "instructions" => $instructions,
                "otherInstructions" => $otherInstructions
            ]);
            $result = $response->json();
            session()->flash('success', $result['message']);
        } catch (\Exception $e)
        {
            return array('error'=>$e->getMessage());
        }        
    }

    public function refreshComponent($msg)
    {
        session()->flash('success', $msg);
    }

}
