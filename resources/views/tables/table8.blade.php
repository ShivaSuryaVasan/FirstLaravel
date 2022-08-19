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
                <div class="card-header">{{ __('Solid Waste Management Plan - Details of Infrastructure Created') }}</div>
                    <div class="container">
                    <form action="table8" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form8_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form8_id2" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Block Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form8_id32" placeholder="Block Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Total No.of House</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id3" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Cleaner Members Count</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id4" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Garbage Collection Triangle</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id5" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id7" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Vehicle</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Garbage Collector Pushcart</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id9" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id10" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id11" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Vehicle</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id12" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Street Garbage Bins</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id13" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id14" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id15" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Bins</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id16" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Garbage Collector E-Cart</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id17" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id18" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id19" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New E-Cart</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id20" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form8_id21">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form8_id21">
                                    <label class="form-check-label" for="defaultCheck1">Are There any other Vehicle</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Are There any other Vehicle :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form8_id21" id="form8_id21" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, There are other Vehicle</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form8_id21" value="No">
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Fertilizer Pits</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">No.of Existing Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id22" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">No.of Pits Required</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id23" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Solid Waste Grading Shed</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id24" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id25" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id26" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Shed</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id27" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Vermi Composting Barn</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id28" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id29" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form8_id30" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form8_id31">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form8_id31">
                                    <label class="form-check-label" for="defaultCheck1">Is Earthworm Left in Use</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3"></div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Is Earthworm Left in Use :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form8_id31" id="form8_id31" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, Earthworm Left in Use</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form8_id31" value="No">
                                    <label class="form-check-label" for="form0_id">No</label>
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
