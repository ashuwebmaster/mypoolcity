<style>    
.row-1 {
    position: relative;
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 0.5rem;
    outline: none;
    width: 100%;
    min-width: unset;
    border-radius: 5px;
    background-color: rgba(221, 228, 236, 0.301);
    border-color: rgba(221, 228, 236, 0.459);
    margin: 2vh 0;
    overflow: hidden
}
#card-header {
    font-weight: bold;
    font-size: 0.9rem
}

#card-inner {
    font-size: 0.7rem;
    color: gray
}
</style>
<div class="row">
    <div class="col-sm-4 text-left header-text">
        <span id="packages">Basic Service</span> - $<span id="packages-price">79</span></label>
   </div>
    <div class="col-sm-4 text-center">
    </div>
    <div class="col-sm-4 text-right header-text">
        <span>Step 3 - 3</span>
   </div>
</div> 
<div class="row alert-row">
    
</div>  

<div class="row checkout-section">
    <div class="col-md-12 col-lg-12">
        <div class="card rounded-0">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-card">
                        <h2 id="payment-heading" class="text-danger">Saved Cards</h2> 
                    </div>
                    <div class="row user-addresses">        
                        <label class="col-sm-12">                           
                            <div class="action-address">
                                <a wire:click="deleteAddress(67)"><i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <a wire:click.prevent="" class="showUpdateAddress"><i class="fas fa-edit"></i>
                                </a>
                            </div>
                            <input type="radio" name="user_paycard" value="67" class="card-input-element" >                              
                            <div class="panel panel-default card-input">
                                <div class="panel-body">
                                    <div class="col-sm-2"><img class="img-fluid pull-left" src="http://127.0.0.1:8000/assets/images/mastercard-logo.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h3 class="pull-left"> **** **** **** 3456</h3>
                                    </div>                                                             </div>
                            </div>
                        </label>                    
                    </div>     
                    <div class="row user-addresses">        
                        <label class="col-sm-12">                           
                            <div class="action-address">
                                <a wire:click="deleteAddress(67)"><i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <a wire:click.prevent="" class="showUpdateAddress"><i class="fas fa-edit"></i>
                                </a>
                            </div>
                            <input type="radio" name="user_paycard" value="67" class="card-input-element" >                              
                            <div class="panel panel-default card-input">
                                <div class="panel-body">
                                    <div class="col-sm-2"><img class="img-fluid pull-left" src="http://127.0.0.1:8000/assets/images/mastercard-logo.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h3 class="pull-left"> **** **** **** 3456</h3>
                                    </div>                                                             </div>
                            </div>
                        </label>                    
                    </div>       
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="card rounded-0 border-0" id="paypage">
                        <div class="form-card">
                            <h2 id="payment-heading" class="text-danger">Payment Method</h2>
                                <div class="radio-group payment-type">
                                    <div class='radio' data-value="credit"><img src="{{ asset('assets/images/credit-img.jpg') }}" width="200px" height="60px"></div>
                                    <div class='radio' data-value="paypal"><img src="{{ asset('assets/images/paypal-img.jpg') }}" width="200px" height="60px"></div> <br>
                                </div>                            
                            <label class="pay">Name on Card</label> <input type="text" name="holdername" placeholder="John Smith">
                            <div class="row">
                                <div class="col-8 col-md-6"> <label class="pay">Card Number</label> <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19"> </div>
                                <div class="col-4 col-md-6"> <label class="pay">CVV</label> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> <label class="pay">Expiration Date</label> </div>
                                <div class="col-md-12"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pull-right"> <button type="button" value="MAKE A PAYMENT &nbsp; &#xf178;" class="btn btn-info btn-main pull-right">Add Card</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
