@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Basic Detail Form') }}</div>
                    <table id="showtable" class="table table-striped table-bordered table-responsive" width="100%">
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
                            <th>Hamlet_name</th>
                            <th>Total_No.of_House</th>
                            <th>Total_No.of_Shops</th>
                            <th>Total_No.of_Companies</th>
                            <th>Population_in_2011</th>
                            <th>Population_Currently</th>

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
                                <th class="th">Hamlet_name</th>
                                <th class="th">Total No.of House</th>
                                <th class="th">Total No.of Shops</th>
                                <th class="th">Total No.of Companies</th>
                                <th class="th">Population in 2011</th>
                                <th class="th">Population Currently</th>

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
                                            <a href={{ "edit1/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{ "delete1/".$value['id'] }}  class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Ntotal_houses']}}</td>
                                        <td>{{ $value['Ntotal_shops']}}</td>
                                        <td>{{ $value['Ntotal_companies']}}</td>
                                        <td>{{ $value['Npopulation_2011']}}</td>
                                        <td>{{ $value['Npopulation_current']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                @endif

                            @elseif(Auth::user()->role == 'user')

                                @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['Ntotal_houses']}}</td>
                                        <td>{{ $value['Ntotal_shops']}}</td>
                                        <td>{{ $value['Ntotal_companies']}}</td>
                                        <td>{{ $value['Npopulation_2011']}}</td>
                                        <td>{{ $value['Npopulation_current']}}</td>

                                @endif

                            @else

                                    <td>
                                        <a href={{ "edit1/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href={{ "delete1/".$value['id'] }}  class="btn btn-primary btn-sm">Delete</a>
                                    </td>
                                    <td>{{ $value['id']}}</td>
                                    <td>{{ $value['Panchayat_name']}}</td>
                                    <td>{{ $value['Hamlet_name']}}</td>
                                    <td>{{ $value['Ntotal_houses']}}</td>
                                    <td>{{ $value['Ntotal_shops']}}</td>
                                    <td>{{ $value['Ntotal_companies']}}</td>
                                    <td>{{ $value['Npopulation_2011']}}</td>
                                    <td>{{ $value['Npopulation_current']}}</td>

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