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
                <div class="card-header">{{ __('Toilet Facilities in Household') }}</div>
                    <div class="container">
                    <form action="table2" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form2_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form2_id2" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="form2_id">Total No.of House</label>
                                <input type="number" class="form-control" name="form2_id3" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="form2_id">Population</label>
                                <input type="number" class="form-control" name="form2_id4" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form2_id">House With Private Toilet</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-4">
                                <label for="form2_id">One Absorb Pit</label>
                                <input type="number" class="form-control" name="form2_id5" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="form2_id">Two Absorb Pit</label>
                                <input type="number" class="form-control" name="form2_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Absorb Pit With Septic Tank</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id7" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Absorb Pit Without Septic Tank</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="form2_id">Other Options</label>
                                <input type="number" class="form-control" name="form2_id9" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="form2_id">Total</label>
                                <input type="number" class="form-control" name="form2_id10" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">Usage of Private Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Everybody in House Uses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id11" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Few in House Uses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id12" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">No One Uses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id13" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">Toilet Not in Use</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">No Awarness</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id14" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Broken Toilets</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id15" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">Broken Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Small Repair in Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id16" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Totally Broken Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id17" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">House Without Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">No.of House Without Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id18" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">House Without Toilet has already benefited from Government Schemes</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id19" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">House With not Enough Place for Build a Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id20" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">House with Shared Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id21" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form2_id">House with Sanitary Facilities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id22" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form2_id">House With not eligible for Toilet Construction</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id23" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form2_id">Toilets Taken up under SBM(G) Scheme for 2022/23</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id24" placeholder="Count..">
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