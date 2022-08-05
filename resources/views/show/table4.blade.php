@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Details of Institutional Santation') }}</div>
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
                                <th>Name_of_School</th>
                                <th>Is_There_a_Toilet</th>
                                <th>Student_Toilet_(Girls)</th>
                                <th>Student_Toilet_(Boys)</th>
                                <th>Total</th>
                                <th>In_Use</th>
                                <th>Not_in_Use</th>
                                <th>Required_Unit</th>
                                <th>Estimate</th>
                                <th>Anganwadi_Name</th>
                                <th>Is_There_a_Toilet</th>
                                <th>Is_Toilet_in_Use</th>
                                <th>Toilet_Required</th>
                                <th>Panchayat_council_office_Is_There_a_Toilet</th>
                                <th>Is_Toilet_in_Use</th>
                                
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
                                <th class="th">Name_of_School</th>
                                <th class="th">Is_There_a_Toilet</th>
                                <th class="th">Student_Toilet_(Girls)</th>
                                <th class="th">Student_Toilet_(Boys)</th>
                                <th class="th">Total</th>
                                <th class="th">In_Use</th>
                                <th class="th">Not_in_Use</th>
                                <th class="th">Required_Unit</th>
                                <th class="th">Estimate</th>
                                <th class="th">Anganwadi_Name</th>
                                <th class="th">Is_There_a_Toilet</th>
                                <th class="th">Is_Toilet_in_Use</th>
                                <th class="th">Toilet_Required</th>
                                <th class="th">Panchayat_council_office_Is_There_a_Toilet</th>
                                <th class="th">Is_Toilet_in_Use</th>
                                
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
                                            <a href={{ "edit4/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete4/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['School_name']}}</td>
                                        <td>{{ $value['S_has_toilet']}}</td>
                                        <td>{{ $value['Bstudent_toilet']}}</td>
                                        <td>{{ $value['Gstudent_toilet']}}</td>
                                        <td>{{ $value['Ntotal']}}</td>
                                        <td>{{ $value['N_In_use']}}</td>
                                        <td>{{ $value['N_Not_in_use']}}</td>
                                        <td>{{ $value['Required_unit']}}</td>
                                        <td>{{ $value['Estimate']}}</td>
                                        <td>{{ $value['Anganwadi_name']}}</td>
                                        <td>{{ $value['A_has_toilet']}}</td>
                                        <td>{{ $value['A_is_toilet_use']}}</td>
                                        <td>{{ $value['Toilet_required']}}</td>
                                        <td>{{ $value['P_has_toilet']}}</td>
                                        <td>{{ $value['P_is_toilet_use']}}</td>
                                        <td>{{ $value['Entered_id']}}</td>
                                    @endif

                                @elseif(Auth::user()->role == 'user')

                                    @if($value['Entered_id'] == Auth::user()->id)

                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['School_name']}}</td>
                                        <td>{{ $value['S_has_toilet']}}</td>
                                        <td>{{ $value['Bstudent_toilet']}}</td>
                                        <td>{{ $value['Gstudent_toilet']}}</td>
                                        <td>{{ $value['Ntotal']}}</td>
                                        <td>{{ $value['N_In_use']}}</td>
                                        <td>{{ $value['N_Not_in_use']}}</td>
                                        <td>{{ $value['Required_unit']}}</td>
                                        <td>{{ $value['Estimate']}}</td>
                                        <td>{{ $value['Anganwadi_name']}}</td>
                                        <td>{{ $value['A_has_toilet']}}</td>
                                        <td>{{ $value['A_is_toilet_use']}}</td>
                                        <td>{{ $value['Toilet_required']}}</td>
                                        <td>{{ $value['P_has_toilet']}}</td>
                                        <td>{{ $value['P_is_toilet_use']}}</td>

                                    @endif

                                @else

                                        <td>
                                            <a href={{ "edit4/".$value['id'] }} class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href={{"delete4/".$value['id'] }} class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                        <td>{{ $value['id']}}</td>
                                        <td>{{ $value['Panchayat_name']}}</td>
                                        <td>{{ $value['Hamlet_name']}}</td>
                                        <td>{{ $value['School_name']}}</td>
                                        <td>{{ $value['S_has_toilet']}}</td>
                                        <td>{{ $value['Bstudent_toilet']}}</td>
                                        <td>{{ $value['Gstudent_toilet']}}</td>
                                        <td>{{ $value['Ntotal']}}</td>
                                        <td>{{ $value['N_In_use']}}</td>
                                        <td>{{ $value['N_Not_in_use']}}</td>
                                        <td>{{ $value['Required_unit']}}</td>
                                        <td>{{ $value['Estimate']}}</td>
                                        <td>{{ $value['Anganwadi_name']}}</td>
                                        <td>{{ $value['A_has_toilet']}}</td>
                                        <td>{{ $value['A_is_toilet_use']}}</td>
                                        <td>{{ $value['Toilet_required']}}</td>
                                        <td>{{ $value['P_has_toilet']}}</td>
                                        <td>{{ $value['P_is_toilet_use']}}</td>
                                        
                                    @endif
                                    <tr>
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
