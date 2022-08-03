@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Details of Sanitary Complexes') }}</div>
                    <div class="container">
                    <form action="/update3" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form3_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form3_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Details of Health Complexes</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputmembers">Women's Health complex/<br>
                                                          Men's Health complex/<br>
                                                          Community Toilet</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form3_id3" rows="3" value="{{ $value['Health_complexes'] }}" placeholder="Complexes.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputmembers">Location</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form3_id4" rows="3" value="{{ $value['Location'] }}" placeholder="Location.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Details of Campus Usage</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Fully Functional</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id5" value="{{ $value['Fully_functional'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Partially Used</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id6" value="{{ $value['Partially_used'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Not in Use</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id7" value="{{ $value['Not_in_use'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Not in Use</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Dilapidated Premises</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id8" value="{{ $value['Dilapidated_premises'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Totally Dilapidated Premises</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id9" value="{{ $value['Totally_dilapidated_premises'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Maintenance</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form3_id">User Group</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id10" value="{{ $value['User_group'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Self Help Group</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id11" value="{{ $value['Self_help_group'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Village Panchayat</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id12" value="{{ $value['Village_panchayat'] }}" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">If any Maintenance Work is Currently Undertaken</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form3_id">Project</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form3_id13" value="{{ $value['Project'] }}" placeholder="text..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Assessment</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form3_id14" value="{{ $value['Assessment'] }}" placeholder="text..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Current Status of Work</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form3_id15" value="{{ $value['Current_status_of_work'] }}" placeholder="text..">
                            </div>
                            
                            <div style="margin-bottom:2em;margin-left:2em;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-primary" style="margin-left:2em;" href="\{{ Auth::user()->role }}" role="button">Back</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
