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
                <div class="card-header">{{ __('Solid Waste Management Plan (Waste Audit)') }}</div>
                    <div class="container">
                    <form action="table7" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="inputpachayatname">Panchayat Name</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form7_id1" placeholder="Place Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">Garbage Censorship in Process of Days</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id2" placeholder="Count in Days..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">No.of Engaged Garbage Collectors</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id3" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">Collected Garbage Volume</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id4" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form7_id">Bio-Degradable Waste Volume</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id5" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form7_id">Non-Biodegradable Waste</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Flexible Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id6" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Recycling Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id7" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Recycling Impossible Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id8" placeholder="In Kgs..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form7_id">Hazardous Waste</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Medical Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id9" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Industrial Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id10" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Health Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id11" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Electronic Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id12" placeholder="In Kgs..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form7_id">Contruction Wasage</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form7_id13" placeholder="In Kgs..">
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
