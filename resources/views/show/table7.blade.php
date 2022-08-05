@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Solid Waste Management Plan (Waste Audit)') }}</div>
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
                                <th>Garbage_Process_of_Days</th>
                                <th>No.of_Engaged_Garbage_Collectors</th>
                                <th>Collected_Garbage_Volume</th>
                                <th>Bio-Degradable_Waste_Volume</th>
                                <th>Flexible_Wasage</th>
                                <th>Recycling_Wasage</th>
                                <th>Recycling_Impossible_Wasage</th>
                                <th>Medical_Wasage</th>
                                <th>Industrial_Wasage</th>
                                <th>Health_Wasage</th>
                                <th>Electronic_Wasage</th>
                                <th>Contruction_Wasage</th>
                                
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
                                <th class="th">Garbage_Process_of_Days</th>
                                <th class="th">No.of_Engaged_Garbage_Collectors</th>
                                <th class="th">Collected_Garbage_Volume</th>
                                <th class="th">Bio-Degradable_Waste_Volume</th>
                                <th class="th">Flexible_Wasage</th>
                                <th class="th">Recycling_Wasage</th>
                                <th class="th">Recycling_Impossible_Wasage</th>
                                <th class="th">Medical_Wasage</th>
                                <th class="th">Industrial_Wasage</th>
                                <th class="th">Health_Wasage</th>
                                <th class="th">Electronic_Wasage</th>
                                <th class="th">Contruction_Wasage</th>
                                
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
                                            <a href={{ "edit7/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete7/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Garbage_process']}}</td>
                                        <td>{{ $value['Nengaged_collectors']}}</td>
                                        <td>{{ $value['Collected_volume']}}</td>
                                        <td>{{ $value['Bio_waste_volume']}}</td>
                                        <td>{{ $value['Flexible_waste']}}</td>
                                        <td>{{ $value['Recycling_waste']}}</td>
                                        <td>{{ $value['Impossible_recycling']}}</td>
                                        <td>{{ $value['Medical_waste']}}</td>
                                        <td>{{ $value['Industrial_waste']}}</td>
                                        <td>{{ $value['Health_waste']}}</td>
                                        <td>{{ $value['Electronic_waste']}}</td>
                                        <td>{{ $value['Contruction_waste']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Garbage_process']}}</td>
                                        <td>{{ $value['Nengaged_collectors']}}</td>
                                        <td>{{ $value['Collected_volume']}}</td>
                                        <td>{{ $value['Bio_waste_volume']}}</td>
                                        <td>{{ $value['Flexible_waste']}}</td>
                                        <td>{{ $value['Recycling_waste']}}</td>
                                        <td>{{ $value['Impossible_recycling']}}</td>
                                        <td>{{ $value['Medical_waste']}}</td>
                                        <td>{{ $value['Industrial_waste']}}</td>
                                        <td>{{ $value['Health_waste']}}</td>
                                        <td>{{ $value['Electronic_waste']}}</td>
                                        <td>{{ $value['Contruction_waste']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit7/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete7/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Garbage_process']}}</td>
                                        <td>{{ $value['Nengaged_collectors']}}</td>
                                        <td>{{ $value['Collected_volume']}}</td>
                                        <td>{{ $value['Bio_waste_volume']}}</td>
                                        <td>{{ $value['Flexible_waste']}}</td>
                                        <td>{{ $value['Recycling_waste']}}</td>
                                        <td>{{ $value['Impossible_recycling']}}</td>
                                        <td>{{ $value['Medical_waste']}}</td>
                                        <td>{{ $value['Industrial_waste']}}</td>
                                        <td>{{ $value['Health_waste']}}</td>
                                        <td>{{ $value['Electronic_waste']}}</td>
                                        <td>{{ $value['Contruction_waste']}}</td>

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
