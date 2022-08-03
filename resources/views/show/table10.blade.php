@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('GWM Facilities') }}</div>
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
                                <th>Panchayat_Name</th>
                                <th>Hamlet_Name</th>
                                <th>Total_No.of_Street</th>
                                <th>Total_No.of_Houses</th>
                                <th>Brown_Water_Management_Facilities_Home_Garden</th>
                                <th>Private_House_Suction_Well</th>
                                <th>House_Connected_to_Sewage_Drains</th>
                                <th>House_Connected_by_Community_Suction_with_Pit</th>
                                <th>House_with_Other_Amenities</th>
                                <th>Total_House_with_GWM_Facilities</th>
                                <th>Total_No.of_Public_Place_with_Stagnant_Water</th>
                                <th>Street_wise_Analysis_House_Without_any_Amenities</th>
                                <th>Home_Garden</th>
                                <th>House_Requiring_Single-Family_Septic_Tank</th>
                                <th>House_Connected_to_Sewage_Drains</th>
                                <th>House_Connected_to_Community_Sump_Pit</th>
                                <th>Other_Facilities</th>
                                <th>Required_Works_Individual_Soak_Pits</th>
                                <th>Drainage_in_Mts</th>
                                <th>Community_Soak_Pit</th>
                                <th>Horizontal_Soak_Pit</th>
                                <th>Vertical_Soak_Pit</th>
                                <th>Waste_Stabilization_Pond</th>
                                <th>Renovation_Works</th>
                                <th>Ongoing_Works_Individual_Soak_Pits</th>
                                <th>Drainage_in_Mts</th>
                                <th>Community_Soak_Pit</th>
                                <th>Horizontal_Soak_Pit</th>
                                <th>Vertical_Soak_Pit</th>
                                <th>Renovation_Works</th>
                                <th>Work_to_be_Proposed_Individual_Soak_Pits</th>
                                <th>Drainage_in_Mts</th>
                                <th>Community_Soak_Pit</th>
                                <th>Horizontal_Soak_Pit</th>
                                <th>Vertical_Soak_Pit</th>
                                <th>Waste_Stabilization_Pond</th>
                                <th>Renovation_Works</th>
                                
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
                                <th class="th">Panchayat_Name</th>
                                <th class="th">Hamlet_Name</th>
                                <th class="th">Total_No.of_Street</th>
                                <th class="th">Total_No.of_Houses</th>
                                <th class="th">Brown_Water_Management_Facilities_Home_Garden</th>
                                <th class="th">Private_House_Suction_Well</th>
                                <th class="th">House_Connected_to_Sewage_Drains</th>
                                <th class="th">House_Connected_by_Community_Suction_with_Pit</th>
                                <th class="th">House _with_Other_Amenities</th>
                                <th class="th">Total_House_with_GWM_Facilities</th>
                                <th class="th">Total_No.of_Public_Place_with_Stagnant_Water</th>
                                <th class="th">Street_wise_Analysis_House_Without_any_Amenities</th>
                                <th class="th">Home_Garden</th>
                                <th class="th">House_Requiring_Single-Family_Septic_Tank</th>
                                <th class="th">House_Connected_to_Sewage_Drains</th>
                                <th class="th">House_Connected_to_Community_Sump_Pit</th>
                                <th class="th">Other_Facilities</th>
                                <th class="th">Required_Works_Individual_Soak_Pits</th>
                                <th class="th">Drainage_in_Mts</th>
                                <th class="th">Community_Soak_Pit</th>
                                <th class="th">Horizontal_Soak_Pit</th>
                                <th class="th">Vertical_Soak_Pit</th>
                                <th class="th">Waste_Stabilization_Pond</th>
                                <th class="th">Renovation_Works</th>
                                <th class="th">Ongoing_Works_Individual_Soak_Pits</th>
                                <th class="th">Drainage_in_Mts</th>
                                <th class="th">Community_Soak_Pit</th>
                                <th class="th">Horizontal_Soak_Pit</th>
                                <th class="th">Vertical_Soak_Pit</th>
                                <th class="th">Renovation_Works</th>
                                <th class="th">Work_to_be_Proposed_Individual_Soak_Pits</th>
                                <th class="th">Drainage_in_Mts</th>
                                <th class="th">Community_Soak_Pit</th>
                                <th class="th">Horizontal_Soak_Pit</th>
                                <th class="th">Vertical_Soak_Pit</th>
                                <th class="th">Waste_Stabilization_Pond</th>
                                <th class="th">Renovation_Works</th>
                                
                                @if(Auth::user()->role == 'admin')
                                    <th class="th">Entered_id</th>
                                @endif

                            </tr>
                        </tfoot>
                        <tbody>
                        
                            @foreach($values as $value)

                                @if(Auth::user()->role == 'admin')

                                    @if($value['Panchayat_name'] == Auth::user()->panchayat_name)
                                        <tr>
                                        <td>
                                            <div>
                                                <a href={{ "edit10/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{"delete10/".$value['id'] }} class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Nstreet']}}</td>
                                        <td>{{ $value['Mhouse']}}</td>
                                        <td>{{ $value['Whome_garden']}}</td>
                                        <td>{{ $value['WHouse_suction_well']}}</td>
                                        <td>{{ $value['WHouse_connected_sewage']}}</td>
                                        <td>{{ $value['WHouse_connected_community']}}</td>
                                        <td>{{ $value['WHouse_with_amenities']}}</td>
                                        <td>{{ $value['Whouse_GWMfacilities']}}</td>
                                        <td>{{ $value['Wplace_with_stagnantwater']}}</td>
                                        <td>{{ $value['Shouse_without_amenities']}}</td>
                                        <td>{{ $value['Shome_garden']}}</td>
                                        <td>{{ $value['Shouse_requiring_septic_tank']}}</td>
                                        <td>{{ $value['Shouse_connected_sewage']}}</td>
                                        <td>{{ $value['Shouse_connected_community']}}</td>
                                        <td>{{ $value['Sother_facilities']}}</td>
                                        <td>{{ $value['Rsoak_pit']}}</td>
                                        <td>{{ $value['Rdrainage']}}</td>
                                        <td>{{ $value['Rcommunity_soak_pit']}}</td>
                                        <td>{{ $value['Rhorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Rvertical_soak_pit']}}</td>
                                        <td>{{ $value['Rwater_stabilization']}}</td>
                                        <td>{{ $value['Rrenovation_work']}}</td>
                                        <td>{{ $value['Osoak_pit']}}</td>
                                        <td>{{ $value['Odrainage']}}</td>
                                        <td>{{ $value['Ocommunity_soak_pit']}}</td>
                                        <td>{{ $value['Ohorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Overtical_soak_pit']}}</td>
                                        <td>{{ $value['Orenovation_work']}}</td>
                                        <td>{{ $value['Wsoak_pit']}}</td>
                                        <td>{{ $value['Wdrainage']}}</td>
                                        <td>{{ $value['Wcommunity_soak_pit']}}</td>
                                        <td>{{ $value['Whorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Wvertical_soak_pit']}}</td>
                                        <td>{{ $value['Wwater_stabilization']}}</td>
                                        <td>{{ $value['Wrenovation_work']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Nstreet']}}</td>
                                        <td>{{ $value['Mhouse']}}</td>
                                        <td>{{ $value['Whome_garden']}}</td>
                                        <td>{{ $value['WHouse_suction_well']}}</td>
                                        <td>{{ $value['WHouse_connected_sewage']}}</td>
                                        <td>{{ $value['WHouse_connected_community']}}</td>
                                        <td>{{ $value['WHouse_with_amenities']}}</td>
                                        <td>{{ $value['Whouse_GWMfacilities']}}</td>
                                        <td>{{ $value['Wplace_with_stagnantwater']}}</td>
                                        <td>{{ $value['Shouse_without_amenities']}}</td>
                                        <td>{{ $value['Shome_garden']}}</td>
                                        <td>{{ $value['Shouse_requiring_septic_tank']}}</td>
                                        <td>{{ $value['Shouse_connected_sewage']}}</td>
                                        <td>{{ $value['Shouse_connected_community']}}</td>
                                        <td>{{ $value['Sother_facilities']}}</td>
                                        <td>{{ $value['Rsoak_pit']}}</td>
                                        <td>{{ $value['Rdrainage']}}</td>
                                        <td>{{ $value['Rcommunity_soak_pit']}}</td>
                                        <td>{{ $value['Rhorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Rvertical_soak_pit']}}</td>
                                        <td>{{ $value['Rwater_stabilization']}}</td>
                                        <td>{{ $value['Rrenovation_work']}}</td>
                                        <td>{{ $value['Osoak_pit']}}</td>
                                        <td>{{ $value['Odrainage']}}</td>
                                        <td>{{ $value['Ocommunity_soak_pit']}}</td>
                                        <td>{{ $value['Ohorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Overtical_soak_pit']}}</td>
                                        <td>{{ $value['Orenovation_work']}}</td>
                                        <td>{{ $value['Wsoak_pit']}}</td>
                                        <td>{{ $value['Wdrainage']}}</td>
                                        <td>{{ $value['Wcommunity_soak_pit']}}</td>
                                        <td>{{ $value['Whorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Wvertical_soak_pit']}}</td>
                                        <td>{{ $value['Wwater_stabilization']}}</td>
                                        <td>{{ $value['Wrenovation_work']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <div>
                                                <a href={{ "edit10/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{ "delete10/".$value['id'] }}  class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Nstreet']}}</td>
                                        <td>{{ $value['Mhouse']}}</td>
                                        <td>{{ $value['Whome_garden']}}</td>
                                        <td>{{ $value['WHouse_suction_well']}}</td>
                                        <td>{{ $value['WHouse_connected_sewage']}}</td>
                                        <td>{{ $value['WHouse_connected_community']}}</td>
                                        <td>{{ $value['WHouse_with_amenities']}}</td>
                                        <td>{{ $value['Whouse_GWMfacilities']}}</td>
                                        <td>{{ $value['Wplace_with_stagnantwater']}}</td>
                                        <td>{{ $value['Shouse_without_amenities']}}</td>
                                        <td>{{ $value['Shome_garden']}}</td>
                                        <td>{{ $value['Shouse_requiring_septic_tank']}}</td>
                                        <td>{{ $value['Shouse_connected_sewage']}}</td>
                                        <td>{{ $value['Shouse_connected_community']}}</td>
                                        <td>{{ $value['Sother_facilities']}}</td>
                                        <td>{{ $value['Rsoak_pit']}}</td>
                                        <td>{{ $value['Rdrainage']}}</td>
                                        <td>{{ $value['Rcommunity_soak_pit']}}</td>
                                        <td>{{ $value['Rhorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Rvertical_soak_pit']}}</td>
                                        <td>{{ $value['Rwater_stabilization']}}</td>
                                        <td>{{ $value['Rrenovation_work']}}</td>
                                        <td>{{ $value['Osoak_pit']}}</td>
                                        <td>{{ $value['Odrainage']}}</td>
                                        <td>{{ $value['Ocommunity_soak_pit']}}</td>
                                        <td>{{ $value['Ohorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Overtical_soak_pit']}}</td>
                                        <td>{{ $value['Orenovation_work']}}</td>
                                        <td>{{ $value['Wsoak_pit']}}</td>
                                        <td>{{ $value['Wdrainage']}}</td>
                                        <td>{{ $value['Wcommunity_soak_pit']}}</td>
                                        <td>{{ $value['Whorizontal_soak_pit']}}</td>
                                        <td>{{ $value['Wvertical_soak_pit']}}</td>
                                        <td>{{ $value['Wwater_stabilization']}}</td>
                                        <td>{{ $value['Wrenovation_work']}}</td>
                                        
                                @endif
                                <tr>
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
