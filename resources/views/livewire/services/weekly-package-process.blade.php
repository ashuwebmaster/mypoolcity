<div class="packages" id="pakgs">
    <style>
        ul.service-list{
            font-size:12px;
            padding-left:15px;
            list-style-position: inside;
        }
        .abcRioButtonLightBlue {
    
            height: 38px !important;
             width: 100% !important;
             text-align: left;
            padding-left: 28%;
        }
    
        .packages table td {
            padding: 8px 10px;
        }
    
        .packages table thead tr th span {
            padding: 16px 20px;
            font-size: 13px;
        }
        .packages table thead tr th span {
            padding: 16px 20px;
            font-size: 13px;
        }
    
        .signature-pad::after {
            right: none;
            -webkit-transform: none;
            transform: none;
        }
    
        .signature-pad::before, .signature-pad::after {
            box-shadow: none;
        }
    
        .signature-pad {
            border: 0px solid #e8e8e8;
            box-shadow: none;
        }
    
        .packages table tbody tr td a {
            border-radius: 5px;
        }
    
        .pac-container {
            z-index: 9999999999 !important;
        }
    
        .select2-selection--multiple:before {
            content: "";
            position: absolute;
            right: 7px;
            top: 42%;
            border-top: 5px solid #888;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
        }
    
        span.select2-selection.select2-selection--multiple{
            border: 1px solid #ddd;
            min-height:42px;
        }
    
        .select2-results__options[aria-multiselectable="true"] li {
            padding-left: 30px;
            position: relative
        }
    
        .select2-results__options[aria-multiselectable="true"] li:before {
            position: absolute;
            left: 8px;
            opacity: .6;
            top: 6px;
            font-family: "FontAwesome";
            content: "\f0c8";
        }
    
        .select2-results__options[aria-multiselectable="true"] li[aria-selected="true"]:before {
            content: "\f14a";
        }
    
        .disabled { 
            pointer-events: none !important; 
            cursor: not-allowed; 
        }
    
        .serv-desc{
            font-size: 12px;
            font-weight: 500;
        }
    
        * {
            margin: 0;
            padding: 0
        }
    
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 50px;
            margin-bottom: 20px;
        }
    
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }
    
        .form-card {
            text-align: left
        }
    
        #msform fieldset:not(:first-of-type) {
            display: none
        }
    
        input.select2-search__field{
            width:0 !important;
        }
    
        #msform .action-button {
            width: 100px;
            background: #2a5c97;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }
    
        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }
    
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }
    
        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }
    
        .fs-title {
            font-size: 18px;
            color: #2a5c97;
            margin-bottom: 0px;
            font-weight: normal;
            text-align: left;
            padding-left:15px;
            text-transform: uppercase;
        }
    
        fieldset{
            margin-top: -25px;
        }
    
        .purple-text {
            color: #2a5c97;
            font-weight: normal;
        }
    
        .steps {
            font-size: 16px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right;
            margin-top: -40px;
            padding-right: 15px;
        }
    
        .fieldlabels {
            color: gray;
            text-align: left
        }
    
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }
    
        #progressbar .active {
            color: #2a5c97
        }
    
        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 33%;
            float: left;
            position: relative;
            font-weight: 400
        }
    
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f02d";
        }
    
        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f003";
        }
    
        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }
    
        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f09d"
        }
    
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }
    
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }
    
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #2a5c97
        }
    
        .progress {
            height: 20px
        }
    
        .progress-bar {
            background-color: #2a5c97
        }
    
        .fit-image {
            width: 100%;
            object-fit: cover
        }
    
        p,ul,ol {
            margin-bottom: 6px;
        }
    
        p.sub-title{
            font-size:12px;
            color:#aaa;
            margin-bottom:0;
        }
    
        .agreement-box{
            border: 1px solid #ddd;
            padding: 15px 15px 0px 15px;
            border-radius: 4px;
            height: 90%;
            overflow-y: scroll;
            text-align: justify;
        }
    
        .agreement-box label{ 
            font-size:13px;
            font-weight:600;
            text-align: justify;
            margin: 2px 0;
        }
    
        .agreement-box li{
            list-style-type: disc;
            list-style-position: inside;
            text-indent: -1em;
            padding-left: 1em !important;
        }
    </style>
    <div class="container">
    <!--New Design Format -->
    <div class="container-fluid2">
        <div class="row ">
            <div class="col-12">
                <div class="card ">
                    
                    <div class="" style="margin-top:8px;">
                
                    </div>
                    <form id="msform">
                        <div class="row">
                            <div class="col-md-12">
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Service Agreement</strong></li>
                                    <li id="personal" class=""><strong>Service Address</strong></li>
                                    <li id="payment"><strong>Payment Method</strong></li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                        </div> 
                                            
                        <fieldset style="position: relative; opacity: 1;">
                            <div class="form-card step1">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Service Agreement :</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps header-text">Step 1 - 3</h2>
                                    </div>
                                </div> 


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group agreement-box">
                                            <label>Weekly Maintenance Residential Service Agreement</label>
                                            <label style="font-size:12px;font-weight:500">This Maintenance Service Agreement is between Pool City and the Customer in accordance with the terms in this agreement. A qualified Pool City Technician will perform the following services:</label>
                                            <ul class="service-list">
                                            <li>Water chemistry will be tested and normal chemicals for selected packages will be included.</li>
                                            <li>Skimmer basket and pump basket will be checked and emptied as needed.</li>
                                            <li>Debris will be netted from the pool.</li>
                                            <li>Pool, floors, walls, steps etc. will be brushed.</li>
                                            <li>Equipment will be inspected for proper operation.</li>
                                            <li>Pool will be vacuumed per selected packages.</li>
                                            <li>Standard Cartridges Filter will be cleaned as needed.</li>
                                            <li>DE filters will back washed as necessary.</li>
                                            <li>Confirmation email on day of service.</li>
                                            </ul>
                                            <label style="font-size:12px;font-weight:600">Pool City and Customer agree as follows:</label>
                                            <ul class="service-list">
                                            <li>Preauthorization for related repairs, parts and services up to $200 will be performed as needed to avoid multiple call changes. Other amounts may need approval and a card-on-file prior to work being performed.</li>
                                            <li>DE Filters and Quad Cartridge Filters will be cleaned as needed for an addition charge ($95 or higher depending on the model).</li>
                                            
                                            <li>Customer agrees to notify Pool City of any concerns related to services provided by Pool City.
                                            </li><li>Customer must have a Pool City account
                                            </li><li>Customer must add their card on file in Payment tab prior to service start date
                                            </li><li>Autopay on credit/debit card required
                                            </li><li>Account balance must be kept current. Service is prepaid and due monthly on the 1st or annually. Any account 15-days past due will result in termination of service.
                                            </li><li>Initial visit may be performed prior to start date
                                            </li><li>Compromising weather: when it is raining, thunder/lighting, excessively windy or otherwise hazardous, the tech will not use poles/net/brush/etc. The chemicals in your pool will be balanced and your baskets will be emptied. There will be no vacuuming or netting until the following visit (weather permitting).
                                            </li><li>Pool covers will be removed by the customer only, Pool City will not remove covers.
                                            </li><li>Customer is responsible for water level in pool. Water timers can be purchased from Pool City.
                                            </li><li>Not responsible for damage around the pool area, excess debris in pool/spa due to acts of nature, grass and yard debris from lawn/gardening, pressure washing of patio/roof/etc, staining on tile or pool plaster (since plaster is composed of natural materials, a certain amount of shading, staining, and color variation is to be expected. Different forms of staining do occur in all pools and with proper chemistry can be held to a minimum).
                                            </li><li>Payments shall be made to Pool City via autopay, phone or online payments.
                                            </li><li>Your Pool City account requires a card-on-file for pool service auto-pay and invoice prepayments. 
                                            </li></ul>
                                            <label style="font-size:12px;font-weight:600">Terms of Agreement</label>

                            
                                            <ul class="service-list">
                                                <li>Prepaid month to month.  
                                                </li><li>Your account balance will be paid via card on file without recourse, your total charges will appear on your monthly credit card statement. 
                                                </li><li> Returns on chemicals are not permitted per Florida EPA, and products &amp; labor are not refundable. 
                                                </li><li>  Approved returns are given as store credit. </li>
                                                <li>  Pool City or the Customer may terminate the monthly swimming pool 
                                                maintenance agreement in writing or by telephone. </li>
                                                <li> Pool City is under no obligation to continue monthly swimming pool maintenance on accounts which are more than 15-days past due and chooses 
                                                to do so only at Pool City's discretion.</li><br>

                                                <label style="font-size:12px;font-weight:600">Dogs and Other Pets</label>

                                                <p class="serv-desc">We know your pets are a part of the family and treat them accordingly. 
                                                It is the customer’s responsibility to allow Pool City access to the pool area. 
                                                If you do not have a separate fenced off area of the yard for your pets, please 
                                                see that they are either inside or in their kennel/crate on your service days. 
                                                Pool City is not responsible for lost or escaped pets.
                                                </p>

                                                
                                                <label style="font-size:12px;font-weight:500">Denied Access counts as a visit and will be charged per Agreement.</label>
                                                <p class="serv-desc">
                                                The customer is responsible for arranging and allowing Pool City access to the pool area and equipment. 
                                                If you pay for one weekly visit and we are unable to access your pool
                                                 (ie. denied gate access, lock on gate won’t open, dog in backyard, etc) then 
                                                 we have fulfilled our agreement and will count as your regular weekly visit. 
                                                 You may order additional visits at $55.00 prior to the next scheduled visit.
                                                </p>
                                                <label style="font-size:12px;font-weight:600">Day Pool is Serviced</label>

                                                <p class="serv-desc">The pool address will determine which weekday your pool is serviced. 
                                                    Our techs work is considered fast-paced and our route must be arranged in the most
                                                    productive manner. If you need a specific day/time please let us know.</p>

                                                <label style="font-size:12px;font-weight:600">Cancellation </label>

                                                <p class="serv-desc">There is a 30-day cancelation notice. You will need to request and fill out our cancelation form. After form is received, 
                                                    Pool City will continue for up to 30-days until last paid visit is complete. 
                                                    Pool City will finsh any work already paid. No refunds on service and/or labor work. 
                                                    Your last payment will be prorated to the 30-day cancelation period. </p>

                                                <label style="font-size:12px;font-weight:600">Preauthorization</label>

                                                <p class="serv-desc">Your Pool City account is approved for jobs up to $200.
                                                <br>
                                                Sometimes when we arrive at a job site, things may be wrong that need fixed. We will help prevent down time and keep your pool operating as needed for your enjoyment by fixing this while on site. As an effort to keep our rates low and avoid charging $55-95 trip/service charges, we will perform jobs on site that are needed up to $200 to avoid multiple service call charges. Other amounts will need approval and a card-on-file prior to work being performed. 
                                                    This will help the pool to stay maintained without interuption. Common jobs include: pool chemicals used in addition to your selected maintenance package, algae treatments approx $25, repairs up to $200, etc. Please sign below preauthorizing these charges.</p>

                                                <p class="serv-desc">To avoid separate service call charges, Techs will perform necessary maintenance related jobs for additional charges. I understand the Preauthorization approval includes items/parts/services needed to properly maintain my pool and will be an additional charge to my card on file (examples include but not limited to: annual filter cartridge replacement, o-rings, pressure gauges, skimmer and pump baskets, skimmer weirs, water timers, skimmer socks, algae and phosphate treatments, etc) *</p>
                                                                                                        </ul>
                                        </div>
                                    </div>
                                </div>
                               
                              

                                <div class="row justify-content-center">
                                   
                                    <div class="col-12" style="margin-left:15px;"> 
                                            <div class="form-group checkbox">
                                                <label style="font: italic normal 600 14px/19px Open Sans;letter-spacing: 0px;color: #2A5C97;">
                                                    <input type="checkbox" value="1" name="agree" id="agree" onchange="enableagree()"><span> I Understand and Approve automatic charges for required maintenance work performed by Pool City.</span>
                                                        <br>
                                                        <span class="iaerror" style="color:red;"></span>
                                                </label>
                                            </div>
                                    </div>
                                </div> 
                            </div> 
                            <input type="button" name="next" id="agree-tab" class="next action-button disabled" value="I AGREE" style="font: normal normal 600 16px/22px Open Sans;border: 1px solid #e1e3e5;background: transparent linear-gradient(270deg, #2A5C97FC 0%, #95AECB80 100%) 0% 0% no-repeat padding-box;color:#fff;width: 180px;">
                        </fieldset>
                        <fieldset style="display: none; opacity: 0; position: relative;">
                            @livewire('services.address-component')
                            <input type="button" name="next" id="address-tab" class="next action-button disabled" value="Next" style="font: normal normal 600 16px/22px Open Sans;border: 1px solid #e1e3e5;background: transparent linear-gradient(270deg, #2A5C97FC 0%, #95AECB80 100%) 0% 0% no-repeat padding-box;color:#fff;width: 180px;"> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" style="font: normal normal 600 16px/22px Open Sans;border: 1px solid #e1e3e5;background: transparent linear-gradient(270deg, #2A5C97FC 0%, #95AECB80 100%) 0% 0% no-repeat padding-box;color:#fff;width: 180px;">
                        </fieldset>

                        <fieldset>
                            <div class="form-cardpay step3">
                                @livewire('services.weekly-checkout-component')                                     
                            </div>
                            <a href="#" onclick="checkout(4)" class="btn btn-default btn-md " id="enableagree" style="float:right;margin-top: 9px;margin-right: 5px;font: normal normal 600 16px/22px Open Sans;border: 1px solid #e1e3e5;background: transparent linear-gradient(270deg, #2A5C97FC 0%, #95AECB80 100%) 0% 0% no-repeat padding-box;color:#fff;width: 180px;height: 44px;">Checkout</a>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" style="border: 1px solid #e1e3e5;background: transparent linear-gradient(270deg, #2A5C97FC 0%, #95AECB80 100%) 0% 0% no-repeat padding-box;color:#fff;width: 180px;">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    <!--End New Design-->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-width" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <div class="row">
                <div class="col-sm-6">
                     <h3 class="modal-title title" id="addAddressModalLabel">Add Address</h3>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            </div>
        </div>
        <div class="modal-body">
            <div class="row" id="address-form">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" id="add_id" value="">
                            <label style="font-size:14px;"> Address Line 1 &nbsp;&nbsp;<span style="color:red;">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control pac-target-input" placeholder="Line 1" id="line1" name="line1" required="required" autocomplete="off">                         
                                <span class="error text-danger line1_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label style="font-size:14px;"> Address Line 2 &nbsp;&nbsp;</label>
                            <div class="form-group">
                                <input type="text" class="form-control pac-target-input" placeholder="Line 2" id="line2" name="line2" autocomplete="off"> 
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label style="font-size:14px;">City &nbsp;&nbsp;<span style="color:red;">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" id="city" name="city" required="required"> 
                                <span class="error text-danger city_error"></span>
                            </div>
                        </div>     
                        <div class="col-sm-4">
                            <label style="font-size:14px;">State &nbsp;&nbsp;<span style="color:red;">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="State" id="state" name="state" required="required"> 
                                <span class="error text-danger state_error"></span>
                            </div>
                        </div>                           
                        <div class="col-sm-4">
                            <label style="font-size:14px;">ZIP &nbsp;&nbsp;<span style="color:red;">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ZIP" id="postal_code" name="postal_code" onkeypress="return onlyNumberKey(event)" minlength="5" maxlength="6" required=""> 
                                <span class="error text-danger zip_error"></span>
                            </div>
                        </div>                                       
                    </div>                
                </div>

                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Property Instructions:&nbsp;</label>     
                            @if(isset($propertInstruction)) 
                                @if(isset($propertInstruction['error']))
                                   {{ $propertInstruction['error'] }}
                                @elseif(isset($propertInstruction['data']))
                                @foreach($propertInstruction['data'] as $p_ins)
                                <div class="form-check instruction-con">
                                    <input class="form-check-input pro_instruction" type="checkbox" value="{{$p_ins['id']}}" id="pro_ins_{{$p_ins['id']}}"/>
                                    <label class="form-check-label" for="pro_ins_{{$p_ins['id']}}"> {{ $p_ins['description'] }} </label>
                                </div> 
                                @endforeach
                                @endif
                            @endif
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group additionalIns">
                                <label for="additionalIns">Additional Instruction : </label>
                                <textarea class="form-control" id="additionalIns" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-main" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-submit-btn addAddress btn-main" >Save</button>
        </div>
      </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        //init default address
        var default_add_id = $('.user-addresses input[name=user_address]:checked').val();
        var default_add_data = $('.user-addresses input[name=user_address]:checked').attr('data-details');
        if(default_add_id && default_add_data){
            default_add_data = $.parseJSON(default_add_data);
            showAddDetails(default_add_id, default_add_data);
        }
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        setProgressBar(current);
        $(".next").click(function() {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
    
            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;
    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });
    
        $(".previous").click(function() {
    
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
    
            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
            //show the previous fieldset
            previous_fs.show();
    
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;
    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });
    
        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }
    
        $(".submit").click(function() {
            return false;
        })
    
    
        // Ajax Add Address
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click','.user-addresses .card-input', function(){
            var userAddID = $(this).parent().find('input[name=user_address]').val();
            var data = $(this).parent().find('input[name=user_address]').attr('data-details');
            default_add_data = $.parseJSON(data);
            showAddDetails(userAddID,data);
        });    

        $("body").on('click','.showAddForm', function(e){
            resetAddressform();
            initAddModel();
            $('#addAddressModal').modal('toggle');
        });

        $("body").on('click','.showUpdateAddress', function(e){
            var data = $(this).parents('.user-addresses').find('input[name=user_address]').data('details');
            resetAddressform();
            initUpdateModel();
            $('#addAddressModal #add_id').val(data.id);
            $('#addAddressModal #line1').val(data.addressLine1);
            $('#addAddressModal #line2').val(data.addressLine2);
            $('#addAddressModal #state').val(data.state);
            $('#addAddressModal #city').val(data.city);
            $('#addAddressModal #postal_code').val(data.zip);
            $('#addAddressModal #additionalIns').val(data.otherInstructions);
            $.each(data.instructions, function(key, value) {
                $('#pro_ins_'+value.id).prop('checked',true);
            });
            $('#addAddressModal').modal('toggle');
        });

        $("body").on('click','.updateAddress', function(e){
            $('.alert-container').remove();
            $('.error').html("");
            e.preventDefault();
            var id              =   $('#address-form #add_id').val();
            var line1           =   $('#address-form #line1').val();
            var line2           =   $('#address-form #line2').val();
            var state           =   $('#address-form #state').val();
            var city            =   $('#address-form #city').val();
            var postal_code     =   $('#address-form #postal_code').val();
            var otherInstructions = $('#additionalIns').val();
            var error = false;
            if(line1 == '' || line1 == null)
            {
                $('.line1_error').html('This is a required field!');     
                error = true;      
            }
            if(state == '' || state == null)
            {
                $('.state_error').html('This is a required field!'); 
                error = true;          
            }
            if(city == '' || city == null)
            {
                $('.city_error').html('This is a required field!');  
                error = true;         
            }
            if(postal_code == '' || postal_code == null)
            {
                $('.zip_error').html('This is a required field!');
                error = true;           
            }
    
            var pro_instruction = new Array();
            $('.pro_instruction:checked').each(function() {
                pro_instruction.push(this.value);
            });
            
            if(error == false)
            {
                $('.loading').show();
                var data = {
                        id:id,
                        line1:line1,
                        line2:line2,
                        state:state,
                        city:city,
                        postal_code:postal_code,
                        pro_instruction:pro_instruction,
                        otherInstructions:otherInstructions
                };
            
                $.ajax({
                    type:'POST',
                    url:"{{ route('weeklyService.addAddress') }}",
                    data:data,
                    success:function(response){
                        window.livewire.emit('refreshComponent', 'hi');
                        setTimeout(function(){ 
                            $('#addAddressModal').modal('toggle');
                            $('.loading').hide();
                        }, 2000);
                    }
                });
            }            
        });

        $("body").on('click','.addAddress', function(e){
            $('.alert-container').remove();
            $('.error').html("");
            e.preventDefault();
            var id = 0;
            var line1           =   $('#address-form #line1').val();
            var line2           =   $('#address-form #line2').val();
            var state           =   $('#address-form #state').val();
            var city            =   $('#address-form #city').val();
            var postal_code     =   $('#address-form #postal_code').val();
            var otherInstructions = $('#additionalIns').val();
            var error = false;
            if(line1 == '' || line1 == null)
            {
                $('.line1_error').html('This is a required field!');     
                error = true;      
            }
            if(state == '' || state == null)
            {
                $('.state_error').html('This is a required field!'); 
                error = true;          
            }
            if(city == '' || city == null)
            {
                $('.city_error').html('This is a required field!');  
                error = true;         
            }
            if(postal_code == '' || postal_code == null)
            {
                $('.zip_error').html('This is a required field!');
                error = true;           
            }
    
            var pro_instruction = new Array();
            $('.pro_instruction:checked').each(function() {
                pro_instruction.push(this.value);
            });
            
            if(error == false)
            {
                $('.loading').show();
                var data = {
                        id:id,
                        line1:line1,
                        line2:line2,
                        state:state,
                        city:city,
                        postal_code:postal_code,
                        pro_instruction:pro_instruction,
                        otherInstructions:otherInstructions
                };
            
                $.ajax({
                    type:'POST',
                    url:"{{ route('weeklyService.addAddress') }}",
                    data:data,
                    success:function(response){
                        window.livewire.emit('refreshComponent', 'hi');
                        setTimeout(function(){ 
                            $('#addAddressModal').modal('toggle');
                            $('.loading').hide();
                        }, 1000);
                    }
                });
            }
        });
    
    });
    
    function enableagree() {
        var agree = $('#agree').is(":checked");
        if (agree) {
            $('#agree-tab').removeClass('disabled');
        } else {
            $('#agree-tab').addClass('disabled');
        }
    }
    
    function showAddDetails(userAddID,data)
    {
        $('.show-instruction').hide();
        var address = '';
        var otherInstructions = '';
        var instructions = '';
        if(data.addressLine1){ address += data.addressLine1+",<br/>"; }
        if(data.addressLine2){ address += data.addressLine2+",<br/>"; }
        if(data.city){ address += data.city+",<br/>"; }
        if(data.state){ address += data.state+",<br/>"; }
        if(data.zip){ address += data.zip; }
        if(data.otherInstructions){
            otherInstructions = data.otherInstructions;
            $('.show-other-ins').html('<span class="pl-3"><strong>Other Instructions</strong></span><ul><li>'+otherInstructions+'</li></ul>');
            $('.show-other-ins').show();
        }

        if(data.instructions){
            instructions = data.instructions;
            var instructionsHtml = '<span class="pl-3"><strong>Property Instructions</strong></span><ul>';
            $.each(instructions, function(key, value) {
                instructionsHtml += '<li>'+value.description+'</li>';
            });
            instructionsHtml += '</ul>';
            $('.show-prop-ins').html(instructionsHtml);
            $('.show-prop-ins').show();
        }

        $('.address-details .address').html(address);
        $('.address-details').show();
        if (agree) {
            $('#address-tab').removeClass('disabled');
        } else {
            $('#address-tab').addClass('disabled');
        }        
    }
    function resetAddressform() {  
                $('.alert-container').remove();
                $('#line1').val('');
                $('#line2').val('');
                $('#city').val('');
                $('#state').val('');
                $('#postal_code').val('');
                $('#pins').val('');
                $('#other').val('');
                $('#instructions').val('');
                $('.error').html('');
                $('#additionalIns').val("");
                $('.pro_instruction:checked').each(function() { 
                    this.checked = false; 
                });
    }

    function initUpdateModel()
    {     
        $('#addAddressModal .title').text("Update Address");
        $('#addAddressModal .add-submit-btn').addClass("updateAddress");
        $('#addAddressModal .add-submit-btn').removeClass("addAddress");
        $('#addAddressModal .add-submit-btn').text("Update");
    }

    function initAddModel()
    {     
        $('#addAddressModal .title').text("Add Address");
        $('#addAddressModal .add-submit-btn').addClass("addAddress");
        $('#addAddressModal .add-submit-btn').removeClass("updateAddress");
        $('#addAddressModal .add-submit-btn').text("Save");
    }
    </script>
    
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDdH9T5u9n-sAM3_mK8C1Ne8LwMysAhW4o&libraries=places'></script>
    <script type="text/javascript">
    var addresses="";  
    var input = document.getElementById('line1');
    if(input)
    {
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function(){
            initplace(autocomplete);
        });
     }
    
    var input2 = document.getElementById('line2');
    if(input2)
    {
        var autocomplete1 = new google.maps.places.Autocomplete(input2);
        autocomplete1.addListener('place_changed', function(){
            initplaces(autocomplete1);
        });
    }
      
    var inputx1 = document.getElementById('line1');
    if(inputx1)
    {
        var autocompletex1 = new google.maps.places.Autocomplete(inputx1);
        autocompletex1.addListener('place_changed', function(){
            initplacex1(autocompletex1);
        });
    }
    
    var inputx2 = document.getElementById('line2');
    if(inputx2)
    {
        var autocompletex2 = new google.maps.places.Autocomplete(inputx2);
        autocompletex2.addListener('place_changed', function(){
            initplacesx2(autocompletex2);
        });
    }
    
    </script>
    
    <script>
    function initplace(autocomplete)
    {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }
        if (place.address_components) {
            var arrlen= place.address_components.length;
            for(var i= arrlen-1;i>=0;i--)
            {
                if(place.address_components[i].types[0]=='postal_code')
                {
                    $('#postal_code').val(place.address_components[i].short_name);
                }
                else if(place.address_components[i].types[0]=='administrative_area_level_1')
                {
                    $('#state').val(place.address_components[i].long_name);
                }
                else if(place.address_components[i].types[0]=='locality')
                {
                    $('#city').val(place.address_components[i].long_name);
                }
            }
        }        
    }
    
    
    function initplaces(autocomplete)
    {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }
        if (place.address_components) {
            return false;
        }        
    }
    
    function initplacex1(autocomplete)
    {  
        var place = autocomplete.getPlace();
        if (!place.geometry) {  
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }
        if (place.address_components) {
            var arrlen= place.address_components.length;
            for(var i= arrlen-1;i>=0;i--)
            {
                if(place.address_components[i].types[0]=='postal_code')
                {
                    $('#postal_code').val(place.address_components[i].short_name);
                }
                else if(place.address_components[i].types[0]=='administrative_area_level_1')
                {
                    $('#state').val(place.address_components[i].long_name);
                }
                else if(place.address_components[i].types[0]=='locality')
                {
                    $('#city').val(place.address_components[i].long_name);    
                }
            }
        }
    }
    
    function initplacesx2(autocomplete)
    {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }
        if (place.address_components) {
            return false;        
        }
    }
    </script>
    @endpush
    @section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @endsection
