@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Work and Financial basics') }}</div>
                    <div class="container">
                    <form action="table10" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form10_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form10_id2" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total No.of Street</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id3" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total No.of Houses</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id4" placeholder="Count..">
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
                                <input type="number" class="form-control" name="form10_id5" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Private House Suction Well (ISP)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected to Sewage Drains</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id7" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected by Community Suction with Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House with Other Amenities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id9" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total House with GWM Facilities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id10" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Total No.of Public Place with Stagnant Water</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id11" placeholder="Count..">
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
                                <input type="number" class="form-control" name="form10_id12" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Home Garden</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id13" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Requiring Single-Family Septic Tank</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id14" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected to Sewage Drains</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id15" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">House Connected to Community Sump Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id16" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Other Facilities</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id17" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Required Works</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Individual Soak Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id18" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Drainage in Mts</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id19" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Community Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id20" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Horizontal Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id21" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Vertical Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id22" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Waste Stabilization Pond/Pytroid Method</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id23" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Renovation Works</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id24" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Not Started/ Ongoing Works</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Individual Soak Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id25" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Drainage in Mts</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id26" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Community Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id27" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Horizontal Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id28" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Vertical Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id29" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Renovation Works</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id30" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center">
                                <label for="form10_id">Work to be Proposed</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Individual Soak Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id31" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Drainage in Mts</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id32" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Community Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id33" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Horizontal Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id34" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Vertical Soak Pit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id35" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Waste Stabilization Pond/Pytroid Method</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id36" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form10_id">Renovation Works</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form10_id37" placeholder="Count..">
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
