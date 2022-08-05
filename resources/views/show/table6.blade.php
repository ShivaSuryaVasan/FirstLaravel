@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sanitation Facilities in Public Places - Basic') }}</div>
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
                                <th>Panchayat_name</th>
                                <th>Total_No.of_Hamlets</th>
                                <th>Total_No.of_Schools</th>
                                <th>Toilet_Facility_Provided_Schools</th>
                                <th>Total_No.of_Anganwadi_Centers</th>
                                <th>Toilet_Facility_Provided_Anganwadi_Centers</th>
                                <th>Total_No.of_Government_Offices</th>
                                <th>Toilet_Facility_Provided_Government_Offices</th>
                                <th>Other_Public_Places</th>
                                <th>Toilet_Facility Provided_Other_Public_Places</th>
                                
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
                                <th class="th">Panchayat_name</th>
                                <th class="th">Total_No.of_Hamlets</th>
                                <th class="th">Total_No.of_Schools</th>
                                <th class="th">Toilet_Facility_Provided_Schools</th>
                                <th class="th">Total_No.of_Anganwadi_Centers</th>
                                <th class="th">Toilet_Facility_Provided_Anganwadi_Centers</th>
                                <th class="th">Total_No.of_Government_Offices</th>
                                <th class="th">Toilet_Facility_Provided_Government_Offices</th>
                                <th class="th">Other_Public_Places</th>
                                <th class="th">Toilet_Facility Provided_Other_Public_Places</th>
                                
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
                                            <a href={{ "edit6/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete6/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Nhamelet']}}</td>
                                        <td>{{ $value['Nschool']}}</td>
                                        <td>{{ $value['SToilet_in_school']}}</td>
                                        <td>{{ $value['Nanganwadi']}}</td>
                                        <td>{{ $value['AToilet_in_anganwadi']}}</td>
                                        <td>{{ $value['Ngovernment']}}</td>
                                        <td>{{ $value['GToilet_in_government']}}</td>
                                        <td>{{ $value['Other_public_places']}}</td>
                                        <td>{{ $value['PToilet_in_places']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Nhamelet']}}</td>
                                        <td>{{ $value['Nschool']}}</td>
                                        <td>{{ $value['SToilet_in_school']}}</td>
                                        <td>{{ $value['Nanganwadi']}}</td>
                                        <td>{{ $value['AToilet_in_anganwadi']}}</td>
                                        <td>{{ $value['Ngovernment']}}</td>
                                        <td>{{ $value['GToilet_in_government']}}</td>
                                        <td>{{ $value['Other_public_places']}}</td>
                                        <td>{{ $value['PToilet_in_places']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit6/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete6/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Nhamelet']}}</td>
                                        <td>{{ $value['Nschool']}}</td>
                                        <td>{{ $value['SToilet_in_school']}}</td>
                                        <td>{{ $value['Nanganwadi']}}</td>
                                        <td>{{ $value['AToilet_in_anganwadi']}}</td>
                                        <td>{{ $value['Ngovernment']}}</td>
                                        <td>{{ $value['GToilet_in_government']}}</td>
                                        <td>{{ $value['Other_public_places']}}</td>
                                        <td>{{ $value['PToilet_in_places']}}</td>

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
