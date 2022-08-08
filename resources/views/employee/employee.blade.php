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

                            @if(Auth::user()->role == 'superadmin')
                                <th></th>
                            @endif

                            <th>Id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Panchayat_name</th>
                            <th>Email</th>

                            @if(Auth::user()->role == 'admin')
                                <th>Entered_id</th>
                            @endif

                        </tr>
                        </thead>
                        
                        <tfoot>
                            <tr>
                                
                                @if(Auth::user()->role == 'superadmin')
                                    <th></th>
                                @endif

                                <th class="th">Id</th>
                                <th class="th">Name</th>
                                <th class="th">Role</th>
                                <th class="th">Panchayat_name</th>
                                <th class="th">Email</th>

                                @if(Auth::user()->role == 'admin')
                                    <th class="th">Entered_id</th>
                                @endif

                            </tr>
                        </tfoot>
                        <tbody>
                            
                        @foreach($values as $value)

                            @if(Auth::user()->role == 'admin')

                                @if($value['Panchayat_name'] == Auth::user()->panchayat_name)

                                    @if($value['role'] != Auth::user()->role)

                                        <tr>
                                            <td>{{ $value['id']}}</td>
                                            <td>{{ $value['name']}}</td>
                                            <td>{{ $value['role']}}</td>
                                            <td>{{ $value['panchayat_name']}}</td>
                                            <td>{{ $value['email']}}</td>
                                            <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @endif

                            @elseif(Auth::user()->role == 'superadmin')

                                @if(Auth::user()->name != 'SHIVA')

                                    @if($value['role'] != Auth::user()->role)
                                        
                                        <tr>
                                        <td>
                                            <a href={{ "/delete_employee/".$value['id'] }}  class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['name']}}</td>
                                        <td>{{ $value['role']}}</td>
                                        <td>{{ $value['panchayat_name']}}</td>
                                        <td>{{ $value['email']}}</td>
                                    @endif
                                
                                @else

                                    @if($value['name'] != Auth::user()->name)
                                    
                                        <tr>
                                        <td>
                                            <a href={{ "/delete_employee/".$value['id'] }}  class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['name']}}</td>
                                        <td>{{ $value['role']}}</td>
                                        <td>{{ $value['panchayat_name']}}</td>
                                        <td>{{ $value['email']}}</td>
                                    
                                    @endif
                                
                                @endif

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