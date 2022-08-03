@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Work and Financial basics') }}</div>
                    <div class="container">
                    <form action="/update10" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form10_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form10_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total No.of Street</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id3" value="{{ $value['Nstreet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total No.of Houses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id4" value="{{ $value['Mhouse'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;">
                                <label for="form10_id">Existing SWM facilities :</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">House with Brown Water Management Facilities</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Home Garden</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id5" value="{{ $value['Whome_garden'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Private House Suction Well (ISP)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id6" value="{{ $value['WHouse_suction_well'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected to Sewage Drains</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id7" value="{{ $value['WHouse_connected_sewage'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected by Community Suction with Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id8" value="{{ $value['WHouse_connected_community'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House with Other Amenities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id9" value="{{ $value['WHouse_with_amenities'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total House with GWM Facilities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id10" value="{{ $value['Whouse_GWMfacilities'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total No.of Public Place with Stagnant Water</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id11" value="{{ $value['Wplace_with_stagnantwater'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;">
                                <label for="form10_id">Identifying the Gap (Requirement) :</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Street wise Analysis</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Without any Amenities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id12" value="{{ $value['Shouse_without_amenities'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Home Garden</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id13" value="{{ $value['Shome_garden'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Requiring Single-Family Septic Tank</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id14" value="{{ $value['Shouse_requiring_septic_tank'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected to Sewage Drains</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id15" value="{{ $value['Shouse_connected_sewage'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected to Community Sump Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id16" value="{{ $value['Shouse_connected_community'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Other Facilities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id17" value="{{ $value['Sother_facilities'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Required Works</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Individual Soak Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id18" value="{{ $value['Rsoak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Drainage in Mts</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id19" value="{{ $value['Rdrainage'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Community Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id20" value="{{ $value['Rcommunity_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Horizontal Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id21" value="{{ $value['Rhorizontal_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Vertical Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id22" value="{{ $value['Rvertical_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Waste Stabilization Pond/Pytroid Method</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id23" value="{{ $value['Rwater_stabilization'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Renovation Works</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id24" value="{{ $value['Rrenovation_work'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Not Started/ Ongoing Works</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Individual Soak Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id25" value="{{ $value['Osoak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Drainage in Mts</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id26" value="{{ $value['Odrainage'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Community Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id27" value="{{ $value['Ocommunity_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Horizontal Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id28" value="{{ $value['Ohorizontal_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Vertical Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id29" value="{{ $value['Overtical_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Renovation Works</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id30" value="{{ $value['Orenovation_work'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Work to be Proposed</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Individual Soak Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id31" value="{{ $value['Wsoak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Drainage in Mts</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id32" value="{{ $value['Wdrainage'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Community Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id33" value="{{ $value['Wcommunity_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Horizontal Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id34" value="{{ $value['Whorizontal_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Vertical Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id35" value="{{ $value['Wvertical_soak_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Waste Stabilization Pond/Pytroid Method</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id36" value="{{ $value['Wwater_stabilization'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Renovation Works</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id37" value="{{ $value['Wrenovation_work'] }}" placeholder="Count..">
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
