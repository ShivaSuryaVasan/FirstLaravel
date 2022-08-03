@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SWM - Activities - Mapping') }}</div>
                    <div class="container">
                    <form action="/update9" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form9_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form9_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Cleanliness Members Count</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form9_id3" value="{{ $value['Ncleaner'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;margin-right:1px;">
                                <label for="form9_id">Compost Pit:</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Garbage Collection Center</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="form9_id4" value="{{ $value['Cplace_name'] }}" placeholder="Place Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Location</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form9_id5" rows="3" value="{{ $value['Clocation'] }}" placeholder="Location.."></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form9_id">Garbage Collected from Distance</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form9_id6" value="{{ $value['Cdistance'] }}" placeholder="Distance..">
                            </div>
                            
                            <div class="form-group col-md-6" style="text-align:center;margin-right:1px;">
                                <label for="form9_id">Segregation Shed:</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Location</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form9_id7" rows="3" value="{{ $value['Slocation'] }}" placeholder="Location.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Garbage Collected from Distance</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form9_id8" value="{{ $value['Sdistance'] }}" placeholder="Distance..">
                            </div>
                            <div class="form-group col-md-6" style="text-align:center;margin-right:1px;">
                                <label for="form9_id">Vermi Compost:</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Location</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form9_id9" rows="3" value="{{ $value['Vlocation'] }}" placeholder="Location.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form9_id">Urgakulli from Distance</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form9_id10" value="{{ $value['Vdistance'] }}" placeholder="Distance..">
                            </div>

                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form9_id11"/>
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form9_id11"
                                    <?php 
                                        if($value['Post_in_panchayat'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Has a map of garbage collection areas and time table been prepared and posted in panchayat?</label>
                                </div>
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
