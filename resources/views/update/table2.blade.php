@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Toilet Facilities in Household') }}</div>
                    <div class="container">
                    <form action="/update2" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf

                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form2_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form2_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Block Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form2_id25" value="{{ $value['Hamlet_name'] }}" placeholder="Block Name..">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="form2_id">Total No.of House</label>
                                <input type="number" class="form-control" name="form2_id3" value="{{ $value['Total_houses'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="form2_id">Population</label>
                                <input type="number" class="form-control" name="form2_id4" value="{{ $value['Population'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form2_id">House With Private Toilet</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-4">
                                <label for="form2_id">One Absorb Pit</label>
                                <input type="number" class="form-control" name="form2_id5" value="{{ $value['One_absorb_pit'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="form2_id">Two Absorb Pit</label>
                                <input type="number" class="form-control" name="form2_id6" value="{{ $value['Two_absorb_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Absorb Pit With Septic Tank</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id7" value="{{ $value['With_septic_tank'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Absorb Pit Without Septic Tank</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id8" value="{{ $value['Without_septic_tank'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="form2_id">Other Options</label>
                                <input type="number" class="form-control" name="form2_id9" value="{{ $value['Other_options'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="form2_id">Total</label>
                                <input type="number" class="form-control" name="form2_id10" value="{{ $value['Total'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">Usage of Private Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Everybody in House Uses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id11" value="{{ $value['Everybody_uses'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Few in House Uses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id12" value="{{ $value['Few_uses'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">No One Uses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id13" value="{{ $value['No_one_use'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">Toilet Not in Use</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">No Awarness</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id14" value="{{ $value['No_awarness'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Broken Toilets</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id15" value="{{ $value['Broken_toilet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">Broken Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Small Repair in Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id16" value="{{ $value['Small_repair'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">Totally Broken Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id17" value="{{ $value['Totally_broken'] }}" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form2_id">House Without Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">No.of House Without Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id18" value="{{ $value['Nhouse_without_toilet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">House Without Toilet has already benefited from Government Schemes</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id19" value="{{ $value['Already_beneficial_scheme'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">House With not Enough Place for Build a Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id20" value="{{ $value['Not_enough_space'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form2_id">House with Shared Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id21" value="{{ $value['Shared_toilet'] }}" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form2_id">House with Sanitary Facilities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id22" value="{{ $value['Sanitary_facilities'] }}" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form2_id">House With not eligible for Toilet Construction</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id23" value="{{ $value['No_space'] }}" placeholder="Count..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form2_id">Toilets Taken up under SBM(G) Scheme for 2022/23</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form2_id24" value="{{ $value['Nsbg_scheme'] }}" placeholder="Count..">
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
