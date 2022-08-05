@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('SWM - Activities - Mapping') }}</div>
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
                                <th>Cleanliness_Members_Count</th>
                                <th>Compost_Pit_Garbage_Collection_Center</th>
                                <th>Location</th>
                                <th>Garbage_Collected_from_Distance</th>
                                <th>Segregation_Shed_Location</th>
                                <th>Garbage_Collected_from_Distance</th>
                                <th>Vermi_Compost_Location</th>
                                <th>Urgakulli_from_Distance</th>
                                <th>Map_of_Garbage_Collection_Areas_Posted_in_Panchayat</th>
                                
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
                                <th class="th">Cleanliness_Members_Count</th>
                                <th class="th">Compost_Pit_Garbage_Collection_Center</th>
                                <th class="th">Location</th>
                                <th class="th">Garbage_Collected_from_Distance</th>
                                <th class="th">Segregation_Shed_Location</th>
                                <th class="th">Garbage_Collected_from_Distance</th>
                                <th class="th">Vermi_Compost_Location</th>
                                <th class="th">Urgakulli_from_Distance</th>
                                <th class="th">Map_of_Garbage_Collection_Areas_Posted_in_Panchayat</th>
                                
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
                                            <a href={{ "edit9/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete9/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Ncleaner']}}</td>
                                        <td>{{ $value['Cplace_name']}}</td>
                                        <td>{{ $value['Clocation']}}</td>
                                        <td>{{ $value['Cdistance']}}</td>
                                        <td>{{ $value['Slocation']}}</td>
                                        <td>{{ $value['Sdistance']}}</td>
                                        <td>{{ $value['Vlocation']}}</td>
                                        <td>{{ $value['Vdistance']}}</td>
                                        <td>{{ $value['Post_in_panchayat']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Ncleaner']}}</td>
                                        <td>{{ $value['Cplace_name']}}</td>
                                        <td>{{ $value['Clocation']}}</td>
                                        <td>{{ $value['Cdistance']}}</td>
                                        <td>{{ $value['Slocation']}}</td>
                                        <td>{{ $value['Sdistance']}}</td>
                                        <td>{{ $value['Vlocation']}}</td>
                                        <td>{{ $value['Vdistance']}}</td>
                                        <td>{{ $value['Post_in_panchayat']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit9/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete9/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Ncleaner']}}</td>
                                        <td>{{ $value['Cplace_name']}}</td>
                                        <td>{{ $value['Clocation']}}</td>
                                        <td>{{ $value['Cdistance']}}</td>
                                        <td>{{ $value['Slocation']}}</td>
                                        <td>{{ $value['Sdistance']}}</td>
                                        <td>{{ $value['Vlocation']}}</td>
                                        <td>{{ $value['Vdistance']}}</td>
                                        <td>{{ $value['Post_in_panchayat']}}</td>
                                        
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
