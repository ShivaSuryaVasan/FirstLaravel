@extends('layouts.app')

@section('content')

<div class="alert hide">
    <span class="msg">Data Inserted Successfully</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Details of Sanitary Complexes') }}</div>
                    <div class="container">
                    <form action="table3" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form3_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form3_id2" placeholder="Hamlet Name..">
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
                                    <textarea class="form-control" name="form3_id3" rows="3" placeholder="Complexes.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputmembers">Location</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form3_id4" rows="3" placeholder="Location.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Details of Campus Usage</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Fully Functional</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id5" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Partially Used</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Not in Use</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id7" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Not in Use</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Dilapidated Premises</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Totally Dilapidated Premises</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id9" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">Maintenance</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form3_id">User Group</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id10" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Self Help Group</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id11" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Village Panchayat</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form3_id12" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form3_id">If any Maintenance Work is Currently Undertaken</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form3_id">Project</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form3_id13" placeholder="text..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Assessment</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form3_id14" placeholder="text..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form3_id">Current Status of Work</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form3_id15" placeholder="text..">
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

@section('script')

<script>
    $('button').click(function(){
        $('.alert').removeClass("hide")
        $('.alert').delay(3000).hide(1500); 
    });
</script>

@endsection
