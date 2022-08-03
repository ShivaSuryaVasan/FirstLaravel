@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Solid Waste Management Plan - Details of Infrastructure Created') }}</div>
                    <table id="showtable" class="table-responsive table table-hover">
                        <thead>
                            <tr>
                                
                                @if(Auth::user()->role == 'admin')
                                <!-- table width not working fine -->
                                    <th style="width:10%;">Action_Action_Action</th>
                                @elseif(Auth::user()->role == 'superadmin')
                                    <th style="width:10%;">Action_Action_Action</th>
                                @endif

                                <th>Id</th>
                                <th>Panchayat_name</th>
                                <th>Hamlet_name</th>
                                <th>Total_No.of_House</th>
                                <th>Cleaner_Members_Count</th>
                                <th>Garbage_Triangle_Good_Condition</th>
                                <th>Minor_Repair</th>
                                <th>Completely_Damaged</th>
                                <th>Needed_New_Vehicle</th>
                                <th>Garbage_Pushcart_Good_Condition</th>
                                <th>Minor_Repair</th>
                                <th>Completely_Damaged</th>
                                <th>Needed_New_Vehicle</th>
                                <th>Garbage_Bins_Good_Condition</th>
                                <th>Minor_Repair</th>
                                <th>Completely_Damaged</th>
                                <th>Needed_New_Bins</th>
                                <th>Garbage_E-cart_Good_Condition</th>
                                <th>Minor_Repair</th>
                                <th>Completely_Damaged</th>
                                <th>Needed_New_E-Cart</th>
                                <th>Are_There_any_other_Vehicle</th>
                                <th>Fertilizer_No.of_Existing_Pits</th>
                                <th>No.of_Pits_Required</th>
                                <th>Grading_Shed_Good_Condition</th>
                                <th>Minor_Repair</th>
                                <th>Completely_Damaged</th>
                                <th>Needed_New_Shed</th>
                                <th>Vermi_Composting_Barn_Good_Condition</th>
                                <th>Minor_Repair</th>
                                <th>Completely_Damaged</th>
                                <th>Is_Earthworm_Left_in_Use</th>
                                
                                @if(Auth::user()->role == 'admin')
                                    <th>Entered_id</th>
                                @endif

                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                                                
                                @if(Auth::user()->role == 'admin')
                                    <th></th>
                                @elseif(Auth::user()->role == 'superadmin')
                                    <th></th>
                                @endif

                                <th class="th">Id</th>
                                <th class="th">Panchayat_name</th>
                                <th class="th">Hamlet_name</th>
                                <th class="th">Total_No.of_House</th>
                                <th class="th">Cleaner_Members_Count</th>
                                <th class="th">Garbage_Triangle_Good_Condition</th>
                                <th class="th">Minor_Repair</th>
                                <th class="th">Completely_Damaged</th>
                                <th class="th">Needed_New_Vehicle</th>
                                <th class="th">Garbage_Pushcart_Good_Condition</th>
                                <th class="th">Minor_Repair</th>
                                <th class="th">Completely_Damaged</th>
                                <th class="th">Needed_New_Vehicle</th>
                                <th class="th">Garbage_Bins_Good_Condition</th>
                                <th class="th">Minor_Repair</th>
                                <th class="th">Completely_Damaged</th>
                                <th class="th">Needed_New_Bins</th>
                                <th class="th">Garbage_E-cart_Good_Condition</th>
                                <th class="th">Minor_Repair</th>
                                <th class="th">Completely_Damaged</th>
                                <th class="th">Needed_New_E-Cart</th>
                                <th class="th">Are_There_any_other_Vehicle</th>
                                <th class="th">Fertilizer_No.of_Existing_Pits</th>
                                <th class="th">No.of_Pits_Required</th>
                                <th class="th">Grading_Shed_Good_Condition</th>
                                <th class="th">Minor_Repair</th>
                                <th class="th">Completely_Damaged</th>
                                <th class="th">Needed_New_Shed</th>
                                <th class="th">Vermi_Composting_Barn_Good_Condition</th>
                                <th class="th">Minor_Repair</th>
                                <th class="th">Completely_Damaged</th>
                                <th class="th">Is_Earthworm_Left_in_Use</th>
                                
                                @if(Auth::user()->role == 'admin')
                                    <th class="th">Entered_id</th>
                                @endif

                            </tr>
                        </tfoot>
                        <tbody>
                    
                            @foreach($values as $value)

                                @if(Auth::user()->role == 'admin')

                                    @if($value['Panchayat_name'] == Auth::user()->panchayat_name)
                                        </tr>
                                        <td>
                                            <div>
                                                <a href={{ "edit8/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{"delete8/".$value['id'] }} class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Nhouse']}}</td>
                                        <td>{{ $value['Ncleaner']}}</td>
                                        <td>{{ $value['Tgood_condition']}}</td>
                                        <td>{{ $value['Tminor_repair']}}</td>
                                        <td>{{ $value['Tcompletely_damaged']}}</td>
                                        <td>{{ $value['Tneeded']}}</td>
                                        <td>{{ $value['Pgood_condition']}}</td>
                                        <td>{{ $value['Pminor_repair']}}</td>
                                        <td>{{ $value['Pcompletely_damaged']}}</td>
                                        <td>{{ $value['Pneeded']}}</td>
                                        <td>{{ $value['Bgood_condition']}}</td>
                                        <td>{{ $value['Bminor_repair']}}</td>
                                        <td>{{ $value['Bcompletely_damaged']}}</td>
                                        <td>{{ $value['Bneeded']}}</td>
                                        <td>{{ $value['Egood_condition']}}</td>
                                        <td>{{ $value['Eminor_repair']}}</td>
                                        <td>{{ $value['Ecompletely_damaged']}}</td>
                                        <td>{{ $value['Eneeded']}}</td>
                                        <td>{{ $value['Other_vehicle']}}</td>
                                        <td>{{ $value['Nexisting_pits']}}</td>
                                        <td>{{ $value['Npits_required']}}</td>
                                        <td>{{ $value['Sgood_condition']}}</td>
                                        <td>{{ $value['Sminor_repair']}}</td>
                                        <td>{{ $value['Scompletely_damaged']}}</td>
                                        <td>{{ $value['Sneeded']}}</td>
                                        <td>{{ $value['Vgood_condition']}}</td>
                                        <td>{{ $value['Vminor_repair']}}</td>
                                        <td>{{ $value['Vcompletely_damaged']}}</td>
                                        <td>{{ $value['Is_earthworm']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Nhouse']}}</td>
                                        <td>{{ $value['Ncleaner']}}</td>
                                        <td>{{ $value['Tgood_condition']}}</td>
                                        <td>{{ $value['Tminor_repair']}}</td>
                                        <td>{{ $value['Tcompletely_damaged']}}</td>
                                        <td>{{ $value['Tneeded']}}</td>
                                        <td>{{ $value['Pgood_condition']}}</td>
                                        <td>{{ $value['Pminor_repair']}}</td>
                                        <td>{{ $value['Pcompletely_damaged']}}</td>
                                        <td>{{ $value['Pneeded']}}</td>
                                        <td>{{ $value['Bgood_condition']}}</td>
                                        <td>{{ $value['Bminor_repair']}}</td>
                                        <td>{{ $value['Bcompletely_damaged']}}</td>
                                        <td>{{ $value['Bneeded']}}</td>
                                        <td>{{ $value['Egood_condition']}}</td>
                                        <td>{{ $value['Eminor_repair']}}</td>
                                        <td>{{ $value['Ecompletely_damaged']}}</td>
                                        <td>{{ $value['Eneeded']}}</td>
                                        <td>{{ $value['Other_vehicle']}}</td>
                                        <td>{{ $value['Nexisting_pits']}}</td>
                                        <td>{{ $value['Npits_required']}}</td>
                                        <td>{{ $value['Sgood_condition']}}</td>
                                        <td>{{ $value['Sminor_repair']}}</td>
                                        <td>{{ $value['Scompletely_damaged']}}</td>
                                        <td>{{ $value['Sneeded']}}</td>
                                        <td>{{ $value['Vgood_condition']}}</td>
                                        <td>{{ $value['Vminor_repair']}}</td>
                                        <td>{{ $value['Vcompletely_damaged']}}</td>
                                        <td>{{ $value['Is_earthworm']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <div>
                                                <a href={{ "edit8/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{ "delete8/".$value['id'] }}  class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Nhouse']}}</td>
                                        <td>{{ $value['Ncleaner']}}</td>
                                        <td>{{ $value['Tgood_condition']}}</td>
                                        <td>{{ $value['Tminor_repair']}}</td>
                                        <td>{{ $value['Tcompletely_damaged']}}</td>
                                        <td>{{ $value['Tneeded']}}</td>
                                        <td>{{ $value['Pgood_condition']}}</td>
                                        <td>{{ $value['Pminor_repair']}}</td>
                                        <td>{{ $value['Pcompletely_damaged']}}</td>
                                        <td>{{ $value['Pneeded']}}</td>
                                        <td>{{ $value['Bgood_condition']}}</td>
                                        <td>{{ $value['Bminor_repair']}}</td>
                                        <td>{{ $value['Bcompletely_damaged']}}</td>
                                        <td>{{ $value['Bneeded']}}</td>
                                        <td>{{ $value['Egood_condition']}}</td>
                                        <td>{{ $value['Eminor_repair']}}</td>
                                        <td>{{ $value['Ecompletely_damaged']}}</td>
                                        <td>{{ $value['Eneeded']}}</td>
                                        <td>{{ $value['Other_vehicle']}}</td>
                                        <td>{{ $value['Nexisting_pits']}}</td>
                                        <td>{{ $value['Npits_required']}}</td>
                                        <td>{{ $value['Sgood_condition']}}</td>
                                        <td>{{ $value['Sminor_repair']}}</td>
                                        <td>{{ $value['Scompletely_damaged']}}</td>
                                        <td>{{ $value['Sneeded']}}</td>
                                        <td>{{ $value['Vgood_condition']}}</td>
                                        <td>{{ $value['Vminor_repair']}}</td>
                                        <td>{{ $value['Vcompletely_damaged']}}</td>
                                        <td>{{ $value['Is_earthworm']}}</td>
                                        
                                @endif
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div style="margin-bottom:2em;">
                        <a class="btn btn-primary" style="margin-left:2em;" href="\{{ Auth::user()->role }}" role="button">Back</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
