@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sanitation Facilities in Public Places') }}</div>
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
                                <th>Total_No.of_Temples</th>
                                <th>Toilet_Facilities_in_Temple_Campus</th>
                                <th>General_Toilet_Facility_in_Temple</th>
                                <th>Total_No.of_Market</th>
                                <th>General_Toilet_Facility_in_Market</th>
                                <th>Total_No.of_VAO_Offices</th>
                                <th>General_Toilet_Facility_in_VAO_Office</th>
                                <th>Total_No.of_Co-operative_Store</th>
                                <th>Toilet_Facility_in_Co-operative_store</th>
                                <th>Total_No.of_VPSN_Building</th>
                                <th>General_Toilet_Facility_in_VPSN_Building</th>
                                <th>Toilet_Facility_in_SHG_Building</th>
                                <th>Toilet_Facility_in_Community</th>
                                <th>Toilet_Facility_in_Library</th>
                                <th>Toilet_Facility_in_Theater</th>
                                <th>Toilet_Facility_in_Bus_Shelter</th>
                                
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
                                <th class="th">Total_No.of_Temples</th>
                                <th class="th">Toilet_Facilities_in_Temple_Campus</th>
                                <th class="th">General_Toilet_Facility_in_Temple</th>
                                <th class="th">Total_No.of_Market</th>
                                <th class="th">General_Toilet_Facility_in_Market</th>
                                <th class="th">Total_No.of_VAO_Offices</th>
                                <th class="th">General_Toilet_Facility_in_VAO_Office</th>
                                <th class="th">Total_No.of_Co-operative_Store</th>
                                <th class="th">Toilet_Facility_in_Co-operative_store</th>
                                <th class="th">Total_No.of_VPSN_Building</th>
                                <th class="th">General_Toilet_Facility_in_VPSN_Building</th>
                                <th class="th">Toilet_Facility_in_SHG_Building</th>
                                <th class="th">Toilet_Facility_in_Community</th>
                                <th class="th">Toilet_Facility_in_Library</th>
                                <th class="th">Toilet_Facility_in_Theater</th>
                                <th class="th">Toilet_Facility_in_Bus_Shelter</th>
                                
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
                                            <a href={{ "edit5/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete5/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Ntemple']}}</td>
                                        <td>{{ $value['Toilet_in_temple']}}</td>
                                        <td>{{ $value['General_toilet_temple']}}</td>
                                        <td>{{ $value['Nmarket']}}</td>
                                        <td>{{ $value['General_toilet_market']}}</td>
                                        <td>{{ $value['Nvao_office']}}</td>
                                        <td>{{ $value['General_toilet_VAO_office']}}</td>
                                        <td>{{ $value['Ncooperative_store']}}</td>
                                        <td>{{ $value['Toilet_cooperative_store']}}</td>
                                        <td>{{ $value['NVPSN_building']}}</td>
                                        <td>{{ $value['General_toilet_VPSN_building']}}</td>
                                        <td>{{ $value['Toilet_SHG_building']}}</td>
                                        <td>{{ $value['Toilet_community']}}</td>
                                        <td>{{ $value['Toilet_Library']}}</td>
                                        <td>{{ $value['Toilet_Theater']}}</td>
                                        <td>{{ $value['Toilet_bus_shelter']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Ntemple']}}</td>
                                        <td>{{ $value['Toilet_in_temple']}}</td>
                                        <td>{{ $value['General_toilet_temple']}}</td>
                                        <td>{{ $value['Nmarket']}}</td>
                                        <td>{{ $value['General_toilet_market']}}</td>
                                        <td>{{ $value['Nvao_office']}}</td>
                                        <td>{{ $value['General_toilet_VAO_office']}}</td>
                                        <td>{{ $value['Ncooperative_store']}}</td>
                                        <td>{{ $value['Toilet_cooperative_store']}}</td>
                                        <td>{{ $value['NVPSN_building']}}</td>
                                        <td>{{ $value['General_toilet_VPSN_building']}}</td>
                                        <td>{{ $value['Toilet_SHG_building']}}</td>
                                        <td>{{ $value['Toilet_community']}}</td>
                                        <td>{{ $value['Toilet_Library']}}</td>
                                        <td>{{ $value['Toilet_Theater']}}</td>
                                        <td>{{ $value['Toilet_bus_shelter']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit5/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete5/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Ntemple']}}</td>
                                        <td>{{ $value['Toilet_in_temple']}}</td>
                                        <td>{{ $value['General_toilet_temple']}}</td>
                                        <td>{{ $value['Nmarket']}}</td>
                                        <td>{{ $value['General_toilet_market']}}</td>
                                        <td>{{ $value['Nvao_office']}}</td>
                                        <td>{{ $value['General_toilet_VAO_office']}}</td>
                                        <td>{{ $value['Ncooperative_store']}}</td>
                                        <td>{{ $value['Toilet_cooperative_store']}}</td>
                                        <td>{{ $value['NVPSN_building']}}</td>
                                        <td>{{ $value['General_toilet_VPSN_building']}}</td>
                                        <td>{{ $value['Toilet_SHG_building']}}</td>
                                        <td>{{ $value['Toilet_community']}}</td>
                                        <td>{{ $value['Toilet_Library']}}</td>
                                        <td>{{ $value['Toilet_Theater']}}</td>
                                        <td>{{ $value['Toilet_bus_shelter']}}</td>

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
