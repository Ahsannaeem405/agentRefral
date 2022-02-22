

 <div class="ui-block-title">
                    <h6 class="title">Referrals </h6>
                    <!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"> -->
                    <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg></a>
                </div>
                <!-- W-Action -->
                <div class="ui-block">


                    <table class="event-item-table event-item-table-fixed-width">

                        <thead>

                            <tr>

                                <th class="author">
                                    Name
                                </th>
                                <th class="author">
                                    Email
                                </th>
                                 <th class="location">
                                    Badge
                                </th>

                                <th class="location">
                                    PLACE
                                </th>
                                <th class="add-event">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $l=0; @endphp
                            @foreach ($user as $key => $value_k) 
                           
                                @php 
                                $orders2 =collect($value_k);
                                $max_gold_id = $orders2->max('get_refrral_count');
                                $gold=$orders2->where('get_refrral_count','=',$max_gold_id);
                                
                                $silver_gold=$orders2->where('get_refrral_count','<',$max_gold_id);
                                $silver_gold =collect($silver_gold);
                                $silver_gold_id = $silver_gold->max('get_refrral_count');
                                $silver=$orders2->where('get_refrral_count','=',$silver_gold_id);
                                $bronze=$orders2->where('get_refrral_count','<',$silver_gold_id);
                                


                                @endphp
                                @if($max_gold_id!=0)
                                    @foreach ($gold as $key => $row_user) 
                                    @php $l++ @endphp
                                    <tr class="event-item">
                                        <td class="author">
                                            <div class="event-author inline-items">
                                                <div class="author-thumb">
                                                    <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                                </div>
                                                <div class="author-date">
                                                    {{$row_user->first_name}}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                {{$row_user->email}}
                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">
                                                <svg class="olymp-add-a-place-icon">
                                                    <use xlink:href="#olymp-add-a-place-icon"></use>
                                                </svg>
                                                @if($row_user->get_city!=null)
                                                <span>{{$row_user->get_city->name}}
                                                @endif
                                                 </span>
                                               
                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                Gold
                                            </div>
                                        </td>



                                        <td class="add-event">
                                        @if($my_badge==1)
                                            <button type="button" class="btn btn-success get_rev_id" data-toggle="modal" data-target="#exampleModal" rec="{{$row_user->id}}">Send Referrals</button>
                                        @else
                                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" disabled>Send Referrals</button>
                                        @endif
                                        </td>
                                    </tr>
                                  
                                    @endforeach
                                    @php $k=0; @endphp
                                    @foreach ($silver as $key => $row_user) 
                                    @php $k++ @endphp
                                    <tr class="event-item">
                                        <td class="author">
                                            <div class="event-author inline-items">
                                                <div class="author-thumb">
                                                    <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                                </div>
                                                <div class="author-date">
                                                    {{$row_user->first_name}}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                {{$row_user->email}}
                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">
                                                <svg class="olymp-add-a-place-icon">
                                                    <use xlink:href="#olymp-add-a-place-icon"></use>
                                                </svg>
                                                @if($row_user->get_city!=null)
                                                <span>{{$row_user->get_city->name}}
                                                @endif
                                                 </span>
                                               
                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                Silver
                                            </div>
                                        </td>




                                        <td class="add-event">
                                            <button type="button" class="btn btn-success get_rev_id" data-toggle="modal" data-target="#exampleModal" rec="{{$row_user->id}}">Send Referrals</button>
                                        </td>
                                    </tr>
                                 
                                    @endforeach
                                    @php $p=0; @endphp
                                    @foreach ($bronze as $key => $row_user) 
                                        @php $p++ @endphp
                                        <tr class="event-item">
                                            <td class="author">
                                                <div class="event-author inline-items">
                                                    <div class="author-thumb">
                                                        <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                                    </div>
                                                    <div class="author-date">
                                                        {{$row_user->first_name}} Sliver</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="location">
                                                <div class="place inline-items">

                                                    {{$row_user->email}}
                                                </div>
                                            </td>
                                            <td class="location">
                                                <div class="place inline-items">
                                                    <svg class="olymp-add-a-place-icon">
                                                        <use xlink:href="#olymp-add-a-place-icon"></use>
                                                    </svg>
                                                    @if($row_user->get_city!=null)
                                                    <span>{{$row_user->get_city->name}}
                                                    @endif
                                                     </span>
                                                   
                                                </div>
                                            </td>
                                            <td class="location">
                                            <div class="place inline-items">

                                                Bronze
                                            </div>
                                        </td>




                                            <td class="add-event">
                                                <button type="button" class="btn btn-success get_rev_id" data-toggle="modal" data-target="#exampleModal" rec="{{$row_user->id}}">Send Referrals</button>
                                            </td>
                                        </tr>
                                       
                                    @endforeach
                                @else
                                    @php $q=0; @endphp
                                    @foreach ($value_k as $key => $row_user) 
                                        @php $q++ @endphp
                                        <tr class="event-item">
                                            <td class="author">
                                                <div class="event-author inline-items">
                                                    <div class="author-thumb">
                                                        <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                                    </div>
                                                    <div class="author-date">
                                                        {{$row_user->first_name}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="location">
                                                <div class="place inline-items">

                                                    {{$row_user->email}}
                                                </div>
                                            </td>
                                            <td class="location">
                                                <div class="place inline-items">
                                                    <svg class="olymp-add-a-place-icon">
                                                        <use xlink:href="#olymp-add-a-place-icon"></use>
                                                    </svg>
                                                    @if($row_user->get_city!=null)
                                                    <span>{{$row_user->get_city->name}}
                                                    @endif
                                                     </span>
                                                   
                                                </div>
                                            </td>
                                            <td class="location">
                                                <div class="place inline-items">

                                                    Gold
                                                </div>
                                            </td>



                                            <td class="add-event">
                                            @if($my_badge==1)
                                                <button type="button" class="btn btn-success get_rev_id" data-toggle="modal" data-target="#exampleModal" rec="{{$row_user->id}}">Send Referrals</button>
                                            @else
                                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" disabled>Send Referrals</button>
                                            @endif
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                @endif    
                                
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ url('user/add/referral') }}">
                                                            @csrf
                                                            <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">
                                                            <div class="row">
                                                                {{-- <div class="col-12 d-flex justify-content-between">
                                                                    <p>Select an in-network agent to send a referral to </p>
                                                                    <button class="btn btn-success" style="height: 33px;">Find Agent</button>
                                                                </div>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Select Agent</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select> --}}
                                                            </div>
                                                            <style type="text/css">
                                                                .active {
                                                                    color: #000 !important;
                                                                    background-color: #08ddc1 !important;
                                                                    border-color: #08ddc1 !important;

                                                                }
                                                            </style>
                                                            <div class="container mt-3">
                                                                <div class="d-flex">
                                                                    <button type="button" class="btn btyn active" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Buyer">
                                                                        Buyer
                                                                    </button>
                                                                    <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Seller">
                                                                        Seller
                                                                    </button>
                                                                    <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Tenant">
                                                                        Tenant
                                                                    </button>
                                                                    <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Landlord">
                                                                        Landlord
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <input type="hidden" class="btyn_value" name="type" value="Buyer">
                                                                <input type="hidden" name="reciver_id" class="reciver_id" value="">

                                                                <div class="form-group">
                                                                    <label for="formControlRange">Referral Fee</label>
                                                                    <div style="display: flex;">
                                                                        <input id="rangeInput" type="range" min="0" value="24" max="99" oninput="amount.value=rangeInput.value" />
                                                                        <input id="amount" type="text" value="24" min="0" name="profit" max="99" oninput="rangeInput.value=amount.value" readonly style="width: 62px;border: none;">
                                                                        <span style="margin-top: 4%;margin-left: -6%;">%</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div>


                                                                <div class="form-group">
                                                                    <label for="formControlRange">Acceptence Deadline</label>
                                                                    <div style="display: flex;">
                                                                        <input id="rangeInput2" type="range" min="0" value="24" max="99" oninput="amount2.value=rangeInput2.value" />
                                                                        <input id="amount2" name="timeout" type="text" value="24" min="0" max="99" oninput="rangeInput2.value=amount2.value" readonly style="width: 62px;border: none;">
                                                                        <span style="margin-top: 4%;margin-left: -6%;">h</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="">Min </label>
                                                                        <input type="number" name="min" placeholder="Min Range">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="">Max </label>
                                                                        <input type="number" name="max" placeholder="Max Range">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="">Notes</label>
                                                                <input type="text" placeholder="Write a Message" name="notes">
                                                            </div>
                                                            <p>0/3000</p>
                                                            <div class="row">
                                                                <p>Select a client From Your Database or Create a new client</p>
                                                                <div class="col d-flex align-items-center">
                                                                    <input type="radio" name="contact" class="w-25 from-database" value="1"><span>Select from database</span>
                                                                </div>
                                                                <div class="col d-flex align-items-center">
                                                                    <input type="radio" name="contact" class="w-25 new-contact" value="2"><span>Create a new New Contact</span>
                                                                </div>

                                                            </div>
                                                            <div class="mt-3">
                                                                <select class="database" name="refer_id" style=" margin-top: 7px;
                                                                
                                                                 display:none">
                                                                    @foreach($ref_user as $row_ref_user)
                                                                    <option value="{{$row_ref_user->id}}">{{$row_ref_user->name}} </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="container">
                                                                <div class="row d-flex justify-content-end contact d-none" style="display:none">
                                                                    <div class="mt-3">
                                                                        <label for="">Name</label>
                                                                        <input type="text" placeholder="Write a Name" name="name">
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <label for="">Email</label>
                                                                        <input type="text" placeholder="Write a Email" name="email">
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <label for="">Phone</label>
                                                                        <input type="text" placeholder="Write a Phone" name="phone">
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="mt-5 text-end">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    $(document).ready(function() {


        $(".from-database").click(function() {

            $('.database').show();
            $('.contact').addClass("d-none");
        });
        $(".new-contact").click(function() {
            $('.database').hide();
            $('.contact').removeClass("d-none");
        });
        $(".btyn").click(function() {

            var data = $(this).attr('val');
            $(".btyn").removeClass("active")
            $(this).addClass("active");
            $(".btyn_value").val(data);

        });
        $(".get_rev_id").click(function() {

            var data = $(this).attr('rec');
            $(".reciver_id").val(data);
          

        });
        
       

    });
</script>