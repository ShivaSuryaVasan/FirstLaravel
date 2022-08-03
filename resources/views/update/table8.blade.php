@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solid Waste Management Plan - Details of Infrastructure Created') }}</div>
                    <div class="container">
                    <form action="/update8" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form8_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form8_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Total No.of House</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id3" value="{{ $value['Nhouse'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Cleaner Members Count</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id4" value="{{ $value['Ncleaner'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Garbage Collection Triangle</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id5" value="{{ $value['Tgood_condition'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id6" value="{{ $value['Tminor_repair'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id7" value="{{ $value['Tcompletely_damaged'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Vehicle</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id8" value="{{ $value['Tneeded'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Garbage Collector Pushcart</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id9" value="{{ $value['Pgood_condition'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id10" value="{{ $value['Pminor_repair'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id11" value="{{ $value['Pcompletely_damaged'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Vehicle</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id12" value="{{ $value['Pneeded'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Street Garbage Bins</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id13" value="{{ $value['Bgood_condition'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id14" value="{{ $value['Bminor_repair'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id15" value="{{ $value['Bcompletely_damaged'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Bins</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id16" value="{{ $value['Bneeded'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Garbage Collector E-Cart</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id17" value="{{ $value['Egood_condition'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id18" value="{{ $value['Eminor_repair'] }}"  placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id19" value="{{ $value['Ecompletely_damaged'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New E-Cart</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id20" value="{{ $value['Eneeded'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form8_id21">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form8_id21"
                                    <?php 
                                        if($value['Other_vehicle']=="Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Are There any other Vehicle</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Fertilizer Pits</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">No.of Existing Pits</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id22" value="{{ $value['Nexisting_pits'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">No.of Pits Required</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id23" value="{{ $value['Npits_required'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Solid Waste Grading Shed</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id24" value="{{ $value['Sgood_condition'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id25" value="{{ $value['Sminor_repair'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id26" value="{{ $value['Scompletely_damaged'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Needed New Shed</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id27" value="{{ $value['Sneeded'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form8_id">Vermi Composting Barn</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Good Condition</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id28" value="{{ $value['Vgood_condition'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Minor Repair</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id29" value="{{ $value['Vminor_repair'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form8_id">Completely Damaged</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form8_id30" value="{{ $value['Vcompletely_damaged'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form8_id31">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form8_id31"
                                    <?php 
                                        if($value['Is_earthworm']=="Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Is Earthworm Left in Use</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3"></div>

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
