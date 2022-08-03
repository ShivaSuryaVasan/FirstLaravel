@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Employee Details') }}</div>
                    <table id="showtable" class="table table-striped table-bordered table-responsive">

                        <thead>
                            <tr>
                                @if(Auth::user()->role == 'superadmin')
                                    <th style="width:10%">Action_Action</th>
                                @endif

                                <th>Id</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Panchayat_name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
<!-- Footer -->
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
                            </tr>
                            </tfoot>
<!-- End Footer -->
                            <tbody>

                            @foreach($values as $value)

                            <tr>

                                @if(Auth::user()->role == 'superadmin')

                                    @if($value['role'] != 'superadmin')
                                        <td>
                                            <a href={{ "/delete_employee/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['name']}}</td>
                                        <td>{{ $value['role']}}</td>
                                        <td>{{ $value['panchayat_name']}}</td>
                                        <td>{{ $value['email']}}</td>

                                    @endif

                                @elseif(Auth::user()->role == 'admin')

                                    @if($value['panchayat_name'] == Auth::user()->panchayat_name)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['name']}}</td>
                                        <td>{{ $value['role']}}</td>
                                        <td>{{ $value['panchayat_name']}}</td>
                                        <td>{{ $value['email']}}</td>

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
