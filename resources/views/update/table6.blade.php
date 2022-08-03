@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sanitation Facilities in Public Places - Basic') }}</div>
                    <div class="container">
                    <form action="/update6" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form6_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputnoofhamlets">Total No.of Hamlets</label>
                                <input type="number" class="form-control" name="form6_id2" value="{{ $value['Nhamelet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Total No.of Schools</label>
                                <input type="number" class="form-control" name="form6_id3" value="{{ $value['Nschool'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Schools</label>
                                <input type="number" class="form-control" name="form6_id4" value="{{ $value['SToilet_in_school'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Total No.of Anganwadi Centers</label>
                                <input type="number" class="form-control" name="form6_id5" value="{{ $value['Nanganwadi'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Anganwadi Centers</label>
                                <input type="number" class="form-control" name="form6_id6" value="{{ $value['AToilet_in_anganwadi'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Total No.of Government Offices</label>
                                <input type="number" class="form-control" name="form6_id7" value="{{ $value['Ngovernment'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Government Offices</label>
                                <input type="number" class="form-control" name="form6_id8" value="{{ $value['GToilet_in_government'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Other Public Places</label>
                                <input type="number" class="form-control" name="form6_id9" value="{{ $value['Other_public_places'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Other Public Places</label>
                                <input type="number" class="form-control" name="form6_id10" value="{{ $value['PToilet_in_places'] }}" placeholder="Count..">
                            </div>

                            <div style="margin-bottom:2em;">
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
