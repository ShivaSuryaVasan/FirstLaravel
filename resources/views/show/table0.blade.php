@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Format_A') }}</div>
                    <table id="showtable" class="table table-striped table-bordered table-responsive">
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
                                <th>Head_of_household</th>
                                <th>Door.no</th>
                                <th>No.of.Family_members</th>
                                <th>Is_Toilet</th>
                                <th>Is_There_Water_facility</th>
                                <th>Use_Toilet_daily</th>
                                <th>Year</th>
                                <th>Build_by</th>
                                <th>One_Absorb_pit</th>
                                <th>Two_Absorb_pit</th>
                                <th>Soak_pit</th>
                                <th>Gas</th>
                                <th>Usage</th>
                                <th>Has_cavity</th>
                                <th>Disposed_of</th>
                                <th>Is_damaged</th>
                                <th>Faults</th>
                                <th>Without_Toilet_houses</th>
                                <th>Without_Toilet_Already_benefited</th>
                                <th>Not_Enough_space_tobuild_toilet</th>
                                <th>Shared_Toilet</th>
                                <th>Household_use</th>
                                <th>Enough_Space_tobuild_toilet</th>
                                <th>Grading_at_home</th>
                                <th>Veg_and_Kitchen_waste</th>
                                <th>Plastic_waste</th>
                                <th>Dry_waste</th>
                                <th>Existing_facilities</th>
                                <th>Management_facilities</th>
                                <th>Has_Livestock</th>
                                <th>How_many_times</th>
                                
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
                                <th class="th">Head_of_household</th>
                                <th class="th">Door.no</th>
                                <th class="th">No.of.Family_members</th>
                                <th class="th">Is_Toilet</th>
                                <th class="th">Is_There_Water_facility</th>
                                <th class="th">Use_Toilet_daily</th>
                                <th class="th">Year</th>
                                <th class="th">Build_by</th>
                                <th class="th">One_Absorb_pit</th>
                                <th class="th">Two_Absorb_pit</th>
                                <th class="th">Soak_pit</th>
                                <th class="th">Gas</th>
                                <th class="th">Usage</th>
                                <th class="th">Has_cavity</th>
                                <th class="th">Disposed_of</th>
                                <th class="th">Is_damaged</th>
                                <th class="th">Faults</th>
                                <th class="th">Without_Toilet_houses</th>
                                <th class="th">Without_Toilet_Already_benefited</th>
                                <th class="th">Not_Enough_space_tobuild_toilet</th>
                                <th class="th">Shared_Toilet</th>
                                <th class="th">Household_use</th>
                                <th class="th">Enough_Space_tobuild_toilet</th>
                                <th class="th">Grading_at_home</th>
                                <th class="th">Veg_and_Kitchen_waste</th>
                                <th class="th">Plastic_waste</th>
                                <th class="th">Dry_waste</th>
                                <th class="th">Existing_facilities</th>
                                <th class="th">Management_facilities</th>
                                <th class="th">Has_Livestock</th>
                                <th class="th">How_many_times</th>

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
                                                <a href={{ "edit0/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{"delete0/".$value['id'] }} class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Head_of_household']}}</td>
                                        <td>{{ $value['Door_no']}}</td>
                                        <td>{{ $value['Family_members']}}</td>
                                        <td>{{ $value['Is_toilet']}}</td>
                                        <td>{{ $value['Is_there_water_facility']}}</td>
                                        <td>{{ $value['Use_Toilet_daily']}}</td>
                                        <td>{{ $value['Year']}}</td>
                                        <td>{{ $value['Build_by']}}</td>
                                        <td>{{ $value['One_Absorb_pit']}}</td>
                                        <td>{{ $value['Two_Absorb_pit']}}</td>
                                        <td>{{ $value['Soak_pit']}}</td>
                                        <td>{{ $value['Gas']}}</td>
                                        <td>{{ $value['Usage']}}</td>
                                        <td>{{ $value['Has_cavity']}}</td>
                                        <td>{{ $value['Disposed_of']}}</td>
                                        <td>{{ $value['Is_damaged']}}</td>
                                        <td>{{ $value['Faults']}}</td>
                                        <td>{{ $value['Without_Toilet_houses']}}</td>
                                        <td>{{ $value['Without_Toilet_Already_benefited']}}</td>
                                        <td>{{ $value['Not_Enough_space_tobuild_toilet']}}</td>
                                        <td>{{ $value['Shared_Toilet']}}</td>
                                        <td>{{ $value['Household_use']}}</td>
                                        <td>{{ $value['Enough_Space_tobuild_toilet']}}</td>
                                        <td>{{ $value['Grading_at_home']}}</td>
                                        <td>{{ $value['Veg_and_Kitchen_waste']}}</td>
                                        <td>{{ $value['Plastic_waste']}}</td>
                                        <td>{{ $value['Dry_waste']}}</td>
                                        <td>{{ $value['Existing_facilities']}}</td>
                                        <td>{{ $value['Management_facilities']}}</td>
                                        <td>{{ $value['Has_Livestock']}}</td>
                                        <td>{{ $value['How_many_times']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Head_of_household']}}</td>
                                        <td>{{ $value['Door_no']}}</td>
                                        <td>{{ $value['Family_members']}}</td>
                                        <td>{{ $value['Is_toilet']}}</td>
                                        <td>{{ $value['Is_there_water_facility']}}</td>
                                        <td>{{ $value['Use_Toilet_daily']}}</td>
                                        <td>{{ $value['Year']}}</td>
                                        <td>{{ $value['Build_by']}}</td>
                                        <td>{{ $value['One_Absorb_pit']}}</td>
                                        <td>{{ $value['Two_Absorb_pit']}}</td>
                                        <td>{{ $value['Soak_pit']}}</td>
                                        <td>{{ $value['Gas']}}</td>
                                        <td>{{ $value['Usage']}}</td>
                                        <td>{{ $value['Has_cavity']}}</td>
                                        <td>{{ $value['Disposed_of']}}</td>
                                        <td>{{ $value['Is_damaged']}}</td>
                                        <td>{{ $value['Faults']}}</td>
                                        <td>{{ $value['Without_Toilet_houses']}}</td>
                                        <td>{{ $value['Without_Toilet_Already_benefited']}}</td>
                                        <td>{{ $value['Not_Enough_space_tobuild_toilet']}}</td>
                                        <td>{{ $value['Shared_Toilet']}}</td>
                                        <td>{{ $value['Household_use']}}</td>
                                        <td>{{ $value['Enough_Space_tobuild_toilet']}}</td>
                                        <td>{{ $value['Grading_at_home']}}</td>
                                        <td>{{ $value['Veg_and_Kitchen_waste']}}</td>
                                        <td>{{ $value['Plastic_waste']}}</td>
                                        <td>{{ $value['Dry_waste']}}</td>
                                        <td>{{ $value['Existing_facilities']}}</td>
                                        <td>{{ $value['Management_facilities']}}</td>
                                        <td>{{ $value['Has_Livestock']}}</td>
                                        <td>{{ $value['How_many_times']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <div>
                                                <a href={{ "edit0/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{"delete0/".$value['id'] }} class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Head_of_household']}}</td>
                                        <td>{{ $value['Door_no']}}</td>
                                        <td>{{ $value['Family_members']}}</td>
                                        <td>{{ $value['Is_toilet']}}</td>
                                        <td>{{ $value['Is_there_water_facility']}}</td>
                                        <td>{{ $value['Use_Toilet_daily']}}</td>
                                        <td>{{ $value['Year']}}</td>
                                        <td>{{ $value['Build_by']}}</td>
                                        <td>{{ $value['One_Absorb_pit']}}</td>
                                        <td>{{ $value['Two_Absorb_pit']}}</td>
                                        <td>{{ $value['Soak_pit']}}</td>
                                        <td>{{ $value['Gas']}}</td>
                                        <td>{{ $value['Usage']}}</td>
                                        <td>{{ $value['Has_cavity']}}</td>
                                        <td>{{ $value['Disposed_of']}}</td>
                                        <td>{{ $value['Is_damaged']}}</td>
                                        <td>{{ $value['Faults']}}</td>
                                        <td>{{ $value['Without_Toilet_houses']}}</td>
                                        <td>{{ $value['Without_Toilet_Already_benefited']}}</td>
                                        <td>{{ $value['Not_Enough_space_tobuild_toilet']}}</td>
                                        <td>{{ $value['Shared_Toilet']}}</td>
                                        <td>{{ $value['Household_use']}}</td>
                                        <td>{{ $value['Enough_Space_tobuild_toilet']}}</td>
                                        <td>{{ $value['Grading_at_home']}}</td>
                                        <td>{{ $value['Veg_and_Kitchen_waste']}}</td>
                                        <td>{{ $value['Plastic_waste']}}</td>
                                        <td>{{ $value['Dry_waste']}}</td>
                                        <td>{{ $value['Existing_facilities']}}</td>
                                        <td>{{ $value['Management_facilities']}}</td>
                                        <td>{{ $value['Has_Livestock']}}</td>
                                        <td>{{ $value['How_many_times']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                            
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
