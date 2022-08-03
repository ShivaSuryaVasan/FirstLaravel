@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Details of Sanitary Complexes') }}</div>
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
                                <th>Health_Complexes</th>
                                <th>Location</th>
                                <th>Fully_Functional</th>
                                <th>Partially_Used</th>
                                <th>Not_In_Use</th>
                                <th>Dilapidated_Premises</th>
                                <th>Totally_Dilapidated_Premises</th>
                                <th>User_Group</th>
                                <th>Self_Help_Group</th>
                                <th>Village_Panchayat</th>
                                <th>Project</th>
                                <th>Assessment</th>
                                <th>Current_Status_of_Work</th>
                                
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
                                <th class="th">Health_Complexes</th>
                                <th class="th">Location</th>
                                <th class="th">Fully_Functional</th>
                                <th class="th">Partially_Used</th>
                                <th class="th">Not_In_Use</th>
                                <th class="th">Dilapidated_Premises</th>
                                <th class="th">Totally_Dilapidated_Premises</th>
                                <th class="th">User_Group</th>
                                <th class="th">Self_Help_Group</th>
                                <th class="th">Village_Panchayat</th>
                                <th class="th">Project</th>
                                <th class="th">Assessment</th>
                                <th class="th">Current_Status_of_Work</th>
                                
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
                                                <a href={{ "edit3/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{"delete3/".$value['id'] }} class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Health_complexes']}}</td>
                                        <td>{{ $value['Location']}}</td>
                                        <td>{{ $value['Fully_functional']}}</td>
                                        <td>{{ $value['Partially_used']}}</td>
                                        <td>{{ $value['Not_in_use']}}</td>
                                        <td>{{ $value['Dilapidated_premises']}}</td>
                                        <td>{{ $value['Totally_dilapidated_premises']}}</td>
                                        <td>{{ $value['User_group']}}</td>
                                        <td>{{ $value['Self_help_group']}}</td>
                                        <td>{{ $value['Village_panchayat']}}</td>
                                        <td>{{ $value['Project']}}</td>
                                        <td>{{ $value['Assessment']}}</td>
                                        <td>{{ $value['Current_status_of_work']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Health_complexes']}}</td>
                                        <td>{{ $value['Location']}}</td>
                                        <td>{{ $value['Fully_functional']}}</td>
                                        <td>{{ $value['Partially_used']}}</td>
                                        <td>{{ $value['Not_in_use']}}</td>
                                        <td>{{ $value['Dilapidated_premises']}}</td>
                                        <td>{{ $value['Totally_dilapidated_premises']}}</td>
                                        <td>{{ $value['User_group']}}</td>
                                        <td>{{ $value['Self_help_group']}}</td>
                                        <td>{{ $value['Village_panchayat']}}</td>
                                        <td>{{ $value['Project']}}</td>
                                        <td>{{ $value['Assessment']}}</td>
                                        <td>{{ $value['Current_status_of_work']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <div>
                                                <a href={{ "edit3/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                                <a href={{ "delete3/".$value['id'] }}  class="btn btn-primary btn-sm" style="margin-left:20px;">Delete</a>
                                            </div>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Health_complexes']}}</td>
                                        <td>{{ $value['Location']}}</td>
                                        <td>{{ $value['Fully_functional']}}</td>
                                        <td>{{ $value['Partially_used']}}</td>
                                        <td>{{ $value['Not_in_use']}}</td>
                                        <td>{{ $value['Dilapidated_premises']}}</td>
                                        <td>{{ $value['Totally_dilapidated_premises']}}</td>
                                        <td>{{ $value['User_group']}}</td>
                                        <td>{{ $value['Self_help_group']}}</td>
                                        <td>{{ $value['Village_panchayat']}}</td>
                                        <td>{{ $value['Project']}}</td>
                                        <td>{{ $value['Assessment']}}</td>
                                        <td>{{ $value['Current_status_of_work']}}</td>
        
                                @endif
                                </tr>
                            @endforeach
                            </tr>
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
