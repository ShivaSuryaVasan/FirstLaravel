@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Toilet Facilities in Household') }}</div>
                    <table id="showtable" class="table-responsive table table-hover">
                        <thead>
                            <tr>

                                @if(Auth::user()->role == 'admin')
                                    <th></th>
                                    <th></th>
                                @elseif(Auth::user()->role == 'superadmin')
                                    <th></th>
                                    <th></th>
                                @endif

                                <th>Id</th>
                                <th>Panchayat_Name</th>
                                <th>Hamlet_Name</th>
                                <th>Block_name</th>
                                <th>Total_No.of_House</th>
                                <th>Population</th>
                                <th>One_Absorb_Pit</th>
                                <th>Two_Absorb_Pit</th>
                                <th>Absorb_Pit_With_Septic_Tank</th>
                                <th>Absorb_Pit_Without_Septic_Tank</th>
                                <th>Other_Options</th>
                                <th>Total</th>
                                <th>Everybody_in_House_Uses</th>
                                <th>Few_in_House_Uses</th>
                                <th>No_One_Uses</th>
                                <th>No_Awarness</th>
                                <th>Broken_Toilets</th>
                                <th>Small_Repair_in_Toilet</th>
                                <th>Totally_Broken_Toilet</th>
                                <th>No.of_House_Without_Toilet</th>
                                <th>House_Without_Toilet_has_already_benefited_from_Government_Schemes</th>
                                <th>House_With_not_Enough_Place_for_Build_a_Toilet</th>
                                <th>House_with_Shared_Toilet</th>
                                <th>House_with_Sanitary_Facilities</th>
                                <th>House_With_not_eligible_for_Toilet_Construction</th>
                                <th>Toilets_Taken_up_under_SBM(G)_Scheme_for_2022/23</th>

                                @if(Auth::user()->role == 'admin')
                                    <th>Entered_id</th>
                                @endif

                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                                                
                                @if(Auth::user()->role == 'admin')
                                    <th></th>
                                    <th></th>
                                @elseif(Auth::user()->role == 'superadmin')
                                    <th></th>
                                    <th></th>
                                @endif

                                <th class="th">Id</th>
                                <th class="th">Panchayat_Name</th>
                                <th class="th">Hamlet_Name</th>
                                <th class="th">Block_name</th>
                                <th class="th">Total_No.of_House</th>
                                <th class="th">Population</th>
                                <th class="th">One_Absorb_Pit</th>
                                <th class="th">Two_Absorb_Pit</th>
                                <th class="th">Absorb_Pit_With_Septic_Tank</th>
                                <th class="th">Absorb_Pit_Without_Septic_Tank</th>
                                <th class="th">Other_Options</th>
                                <th class="th">Total</th>
                                <th class="th">Everybody_in_House_Uses</th>
                                <th class="th">Few_in_House_Uses</th>
                                <th class="th">No_One_Uses</th>
                                <th class="th">No_Awarness</th>
                                <th class="th">Broken_Toilets</th>
                                <th class="th">Small_Repair_in_Toilet</th>
                                <th class="th">Totally_Broken_Toilet</th>
                                <th class="th">No.of_House_Without_Toilet</th>
                                <th class="th">House_Without_Toilet_has_already_benefited_from_Government_Schemes</th>
                                <th class="th">House_With_not_Enough_Place_for_Build_a_Toilet</th>
                                <th class="th">House_with_Shared_Toilet</th>
                                <th class="th">House_with_Sanitary_Facilities</th>
                                <th class="th">House_With_not_eligible_for_Toilet_Construction</th>
                                <th class="th">Toilets_Taken_up_under_SBM(G)_Scheme_for_2022/23</th>
                                
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
                                            <a href={{ "edit2/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete2/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Total_houses']}}</td>
                                        <td>{{ $value['Population']}}</td>
                                        <td>{{ $value['One_absorb_pit']}}</td>
                                        <td>{{ $value['Two_absorb_pit']}}</td>
                                        <td>{{ $value['With_septic_tank']}}</td>
                                        <td>{{ $value['Without_septic_tank']}}</td>
                                        <td>{{ $value['Other_options']}}</td>
                                        <td>{{ $value['Total']}}</td>
                                        <td>{{ $value['Everybody_uses']}}</td>
                                        <td>{{ $value['Few_uses']}}</td>
                                        <td>{{ $value['No_one_use']}}</td>
                                        <td>{{ $value['No_awarness']}}</td>
                                        <td>{{ $value['Broken_toilet']}}</td>
                                        <td>{{ $value['Small_repair']}}</td>
                                        <td>{{ $value['Totally_broken']}}</td>
                                        <td>{{ $value['Nhouse_without_toilet']}}</td>
                                        <td>{{ $value['Already_beneficial_scheme']}}</td>
                                        <td>{{ $value['Not_enough_space']}}</td>
                                        <td>{{ $value['Shared_toilet']}}</td>
                                        <td>{{ $value['Sanitary_facilities']}}</td>
                                        <td>{{ $value['No_space']}}</td>
                                        <td>{{ $value['Nsbg_scheme']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Total_houses']}}</td>
                                        <td>{{ $value['Population']}}</td>
                                        <td>{{ $value['One_absorb_pit']}}</td>
                                        <td>{{ $value['Two_absorb_pit']}}</td>
                                        <td>{{ $value['With_septic_tank']}}</td>
                                        <td>{{ $value['Without_septic_tank']}}</td>
                                        <td>{{ $value['Other_options']}}</td>
                                        <td>{{ $value['Total']}}</td>
                                        <td>{{ $value['Everybody_uses']}}</td>
                                        <td>{{ $value['Few_uses']}}</td>
                                        <td>{{ $value['No_one_use']}}</td>
                                        <td>{{ $value['No_awarness']}}</td>
                                        <td>{{ $value['Broken_toilet']}}</td>
                                        <td>{{ $value['Small_repair']}}</td>
                                        <td>{{ $value['Totally_broken']}}</td>
                                        <td>{{ $value['Nhouse_without_toilet']}}</td>
                                        <td>{{ $value['Already_beneficial_scheme']}}</td>
                                        <td>{{ $value['Not_enough_space']}}</td>
                                        <td>{{ $value['Shared_toilet']}}</td>
                                        <td>{{ $value['Sanitary_facilities']}}</td>
                                        <td>{{ $value['No_space']}}</td>
                                        <td>{{ $value['Nsbg_scheme']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit2/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete2/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Total_houses']}}</td>
                                        <td>{{ $value['Population']}}</td>
                                        <td>{{ $value['One_absorb_pit']}}</td>
                                        <td>{{ $value['Two_absorb_pit']}}</td>
                                        <td>{{ $value['With_septic_tank']}}</td>
                                        <td>{{ $value['Without_septic_tank']}}</td>
                                        <td>{{ $value['Other_options']}}</td>
                                        <td>{{ $value['Total']}}</td>
                                        <td>{{ $value['Everybody_uses']}}</td>
                                        <td>{{ $value['Few_uses']}}</td>
                                        <td>{{ $value['No_one_use']}}</td>
                                        <td>{{ $value['No_awarness']}}</td>
                                        <td>{{ $value['Broken_toilet']}}</td>
                                        <td>{{ $value['Small_repair']}}</td>
                                        <td>{{ $value['Totally_broken']}}</td>
                                        <td>{{ $value['Nhouse_without_toilet']}}</td>
                                        <td>{{ $value['Already_beneficial_scheme']}}</td>
                                        <td>{{ $value['Not_enough_space']}}</td>
                                        <td>{{ $value['Shared_toilet']}}</td>
                                        <td>{{ $value['Sanitary_facilities']}}</td>
                                        <td>{{ $value['No_space']}}</td>
                                        <td>{{ $value['Nsbg_scheme']}}</td>

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
</body>
@endsection
