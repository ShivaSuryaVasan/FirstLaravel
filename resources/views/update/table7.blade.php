@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solid Waste Management Plan (Waste Audit)') }}</div>
                    <div class="container">
                    <form action="/update7" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="inputpachayatname">Panchayat Name</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form7_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">Garbage Censorship in Process of Days</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id2" value="{{ $value['Garbage_process'] }}" placeholder="Count in Days..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">No.of Engaged Garbage Collectors</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id3" value="{{ $value['Nengaged_collectors'] }}" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">Collected Garbage Volume</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id4" value="{{ $value['Collected_volume'] }}" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">Bio-Degradable Waste Volume</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id5" value="{{ $value['Bio_waste_volume'] }}" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form7_id">Non-Biodegradable Waste</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Flexible Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id6" value="{{ $value['Flexible_waste'] }}" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Recycling Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id7" value="{{ $value['Recycling_waste'] }}" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Recycling Impossible Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id8" value="{{ $value['Impossible_recycling'] }}"  placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form7_id">Hazardous Waste</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Medical Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id9" value="{{ $value['Medical_waste'] }}" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Industrial Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id10" value="{{ $value['Industrial_waste'] }}" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Health Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id11" value="{{ $value['Health_waste'] }}" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Electronic Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id12" value="{{ $value['Electronic_waste'] }}"  placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Contruction Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id13" value="{{ $value['Contruction_waste'] }}" placeholder="In Kgs..">
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
