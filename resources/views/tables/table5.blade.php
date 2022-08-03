@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sanitation Facilities in Public Places') }}</div>
                    <div class="container">
                    <form action="table5" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form5_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form5_id2" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form5_id">Public Places</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of Temples</label>
                                <input type="number" class="form-control" name="form5_id3" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form5_id">Toilet Facilities in Temple Campus</label>
                                <input type="number" class="form-control" name="form5_id4" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id5">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id5">
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in Temple</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of Market</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id7">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id7">
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in Market</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of VAO Offices</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id9">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id9">
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in VAO Office</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of Co-operative Store</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id10" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id11">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id11">
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Co-operative store</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of VPSN Building</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id12" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id13">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id13">
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in VPSN Building</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form5_id">Toilet Facilities in Other Public Places</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id14">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id14">
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in SHG Building</label>
                                </div>
                            </div>
                                                        
                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id15">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id15">
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Community</label>
                                </div>
                            </div>
                                                        
                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id16">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id16">
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Library</label>
                                </div>
                            </div>
                                                        
                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id17">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id17">
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Theater</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id18">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id18">
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Bus Shelter</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3"></div>

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
