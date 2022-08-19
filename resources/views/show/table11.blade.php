@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Work and Financial basics') }}</div>
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
                                <th>Block_name</th>
                                <th>Detail_of_Work</th>
                                <th>Total_Amount_Required</th>
                                <th>Fund_for_Work_MGNREGS</th>
                                <th>Village_Panchayat_Tied_Water_Supply</th>
                                <th>Tied_Sanitation</th>
                                <th>United</th>
                                <th>Local_Panchayat_Tied_Water_Supply</th>
                                <th>Tied_Sanitation</th>
                                <th>United</th>
                                <th>District_Panchayat_Tied_Water_Supply</th>
                                <th>Tied_Sanitation</th>
                                <th>United</th>
                                <th>SBM(G)</th>
                                <th>Miscellaneous_Project</th>
                                <th>Details_Administration_Permission</th>
                                
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
                                <th class="th">Block_name</th>
                                <th class="th">Detail_of_Work</th>
                                <th class="th">Total_Amount_Required</th>
                                <th class="th">Fund_for_Work_MGNREGS</th>
                                <th class="th">Village_Panchayat_Tied_Water_Supply</th>
                                <th class="th">Tied_Sanitation</th>
                                <th class="th">United</th>
                                <th class="th">Local_Panchayat_Tied_Water_Supply</th>
                                <th class="th">Tied_Sanitation</th>
                                <th class="th">United</th>
                                <th class="th">District_Panchayat_Tied_Water_Supply</th>
                                <th class="th">Tied_Sanitation</th>
                                <th class="th">United</th>
                                <th class="th">SBM(G)</th>
                                <th class="th">Miscellaneous_Project</th>
                                <th class="th">Details_Administration_Permission</th>
                                
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
                                            <a href={{ "edit11/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete11/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Detail_of_work']}}</td>
                                        <td>{{ $value['Total_amount_required']}}</td>
                                        <td>{{ $value['MGNREGS']}}</td>
                                        <td>{{ $value['Vtied_water_supply']}}</td>
                                        <td>{{ $value['Vtied_sanitation']}}</td>
                                        <td>{{ $value['Vunited']}}</td>
                                        <td>{{ $value['Ltied_water_supply']}}</td>
                                        <td>{{ $value['Ltied_sanitation']}}</td>
                                        <td>{{ $value['Lunited']}}</td>
                                        <td>{{ $value['Dtied_water_supply']}}</td>
                                        <td>{{ $value['Dtied_sanitation']}}</td>
                                        <td>{{ $value['Dunited']}}</td>
                                        <td>{{ $value['SBM']}}</td>
                                        <td>{{ $value['Miscellaneous_project']}}</td>
                                        <td>{{ $value['Administrative_permission']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Detail_of_work']}}</td>
                                        <td>{{ $value['Total_amount_required']}}</td>
                                        <td>{{ $value['MGNREGS']}}</td>
                                        <td>{{ $value['Vtied_water_supply']}}</td>
                                        <td>{{ $value['Vtied_sanitation']}}</td>
                                        <td>{{ $value['Vunited']}}</td>
                                        <td>{{ $value['Ltied_water_supply']}}</td>
                                        <td>{{ $value['Ltied_sanitation']}}</td>
                                        <td>{{ $value['Lunited']}}</td>
                                        <td>{{ $value['Dtied_water_supply']}}</td>
                                        <td>{{ $value['Dtied_sanitation']}}</td>
                                        <td>{{ $value['Dunited']}}</td>
                                        <td>{{ $value['SBM']}}</td>
                                        <td>{{ $value['Miscellaneous_project']}}</td>
                                        <td>{{ $value['Administrative_permission']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit11/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete11/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Block_name']}}</td>
                                        <td>{{ $value['Detail_of_work']}}</td>
                                        <td>{{ $value['Total_amount_required']}}</td>
                                        <td>{{ $value['MGNREGS']}}</td>
                                        <td>{{ $value['Vtied_water_supply']}}</td>
                                        <td>{{ $value['Vtied_sanitation']}}</td>
                                        <td>{{ $value['Vunited']}}</td>
                                        <td>{{ $value['Ltied_water_supply']}}</td>
                                        <td>{{ $value['Ltied_sanitation']}}</td>
                                        <td>{{ $value['Lunited']}}</td>
                                        <td>{{ $value['Dtied_water_supply']}}</td>
                                        <td>{{ $value['Dtied_sanitation']}}</td>
                                        <td>{{ $value['Dunited']}}</td>
                                        <td>{{ $value['SBM']}}</td>
                                        <td>{{ $value['Miscellaneous_project']}}</td>
                                        <td>{{ $value['Administrative_permission']}}</td>
                                        
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
