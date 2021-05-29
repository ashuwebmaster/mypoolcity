<div class="form-card step2">
    <div class="row">
        <div class="col-sm-4 text-left header-text">
            <span id="packages">Basic Service</span> - $<span id="packages-price">79</span></label>
       </div>
        <div class="col-sm-4 text-center">
            <button type="button" class="btn btn-primary showAddForm btn-lg btn-main">Add Address</button>
       </div>
        <div class="col-sm-4 text-right header-text">
            <span>Step 2 - 3</span>
       </div>
   </div> 
   <div class="row alert-row">
        <div class="col-sm-12">
            @if(Session::has('success'))
            <div class="alert alert-success alert-container" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger alert-container" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
            @endif
        </div>
    </div>                                    
    @if(isset($all_addresses) && $all_addresses)  
        
       @if(isset($all_addresses['error']))
        <div class="row">
            <div class="col-sm-6"> 
                {{ $all_addresses['error'] }}
            </div>
        </div>
        @elseif(isset($all_addresses['data']['address']) && $all_addresses['data']['address'])
        <div calss="row">
            <div class="col-sm-12 address-panel">
                <div calss="row">
                    <div class="col-sm-7 address-panel-container">            
                        @foreach ($all_addresses['data']['address'] as $key=>$address)
                            <div class="row user-addresses">        
                                <label class="col-sm-12">                           
                                    <input type="radio" data-details="{{ json_encode($address) }}" name="user_address" value="{{ $address['id'] }}" class="card-input-element" @if($key == 0) checked="checked" @endif/>                              
                                    <div class="panel panel-default card-input">
                                        <div class="panel-body">
                                            <div class="row">
                                                <h5 class="card-title"><i class="fas fa-map-marker-alt fa-2x"></i> &nbsp; <strong> Address </strong> </h5>
                                            </div>
                                            <div class="row">
                                                @if($address['addressLine1']) {{ $address['addressLine1'] }}, @endif
                                            </div>
                                            <div class="row">
                                                @if($address['addressLine2']) {{ $address['addressLine2'] }},  @endif
                                            </div>
                                            <div class="row">
                                                @if($address['city']) {{ $address['city'] }},  @endif
                                                @if($address['state']) {{ $address['state'] }},  @endif
                                                @if($address['zip']) {{ $address['zip'] }} @endif                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="action-address">
                                                <a wire:click="deleteAddress({{ $address['id'] }})"><i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <a wire:click.prevent="" class="showUpdateAddress"><i class="fas fa-edit fa-2x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </label>                    
                            </div>                                      
                        @endforeach
                    </div>
                    <div class="col-sm-5">
                        @if($active_addrees)
                        <div class="row address-details">
                            <div class="col-4 mx-auto">
                              <ul class="list-group ">
                                <li class="list-group-item border-left-0 border-right-0 d-flex pl-0 main-address-sec">
                                  <i class="fas fa-map-marker-alt fa-2x"></i>&nbsp;&nbsp;
                                    <span class="pl-3 address">
                                        {{ $active_addrees['line1'] }}, <br/> 
                                        @if(isset($active_addrees['line2'])) {{ $active_addrees['line2'] }},<br/> @endif
                                        {{ $active_addrees['city'] }}, 
                                        {{ $active_addrees['state'] }},  
                                        {{ $active_addrees['zip'] }}, 
                                    </span>
                                </li>
                                <li class="list-group-item border-left-0 border-right-0 border-bottom-0 d-flex pl-0 show-prop-ins show-instruction">
                                    <span class="pl-3"><strong>Property Instructions</strong></span>
                                    <ul>
                                        @if(isset($active_addrees['instructions']))
                                            @foreach ($active_addrees['instructions'] as $instruction)    
                                                <li>{{ $instruction['description'] }}</li>
                                            @endforeach
                                        @else
                                            <li>No instructions available !</li>
                                        @endif                                        
                                    </ul>
                                </li>                                
                                <li class="list-group-item border-left-0 border-right-0 border-bottom-0 d-flex pl-0 show-other-ins show-instruction">                         
                                    <span class="pl-3"><strong>Other Instructions</strong></span>
                                    <ul>
                                        @if($active_addrees['otherInstructions'])
                                            <li>{{ $active_addrees['otherInstructions'] }}</li>
                                        @else
                                            <li>No other instructions available !</li>
                                        @endif                                        
                                    </ul>                                
                                </li>
                              </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>  
        @else
            <div class="row">
                <div class="col-sm-6 address-lists">
                    <div class="card card-default">
                    <div class="card-body">
                            <p>No address available!</p>
                    </div>
                    </div>                                 
                </div>
            </div>
        @endif
    @endif                               
</div> 
