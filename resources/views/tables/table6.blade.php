@extends('layouts.app')

@section('content')

<div class="alert hide">
    <span class="msg">Data Inserted Successfully</span>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                                    
        @if(session()->get('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

            <div class="card">
                <div class="card-header">{{ __('Sanitation Facilities in Public Places - Basic') }}</div>
                    <div class="container">
                    <form action="table6" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form6_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputnoofhamlets">Total No.of Hamlets</label>
                                <input type="number" class="form-control" name="form6_id2" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Total No.of Schools</label>
                                <input type="number" class="form-control" name="form6_id3" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Schools</label>
                                <input type="number" class="form-control" name="form6_id4" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Total No.of Anganwadi Centers</label>
                                <input type="number" class="form-control" name="form6_id5" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Anganwadi Centers</label>
                                <input type="number" class="form-control" name="form6_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Total No.of Government Offices</label>
                                <input type="number" class="form-control" name="form6_id7" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Government Offices</label>
                                <input type="number" class="form-control" name="form6_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form6_id">Other Public Places</label>
                                <input type="number" class="form-control" name="form6_id9" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form6_id">Toilet Facility Provided Other Public Places</label>
                                <input type="number" class="form-control" name="form6_id10" placeholder="Count..">
                            </div>

                            <div style="margin-bottom:2em;">
                                <button type="submit" onclick=alertme() class="btn btn-primary">Submit</button>
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
