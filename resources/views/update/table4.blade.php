@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Details of Institutional Santation') }}</div>
                    <div class="container">
                    <form action="/update4" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form4_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form4_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Details of Schools Toilet</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form4_name">Name of School</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form4_id3" value="{{ $value['School_name'] }}" placeholder="Name..">
                            </div>

                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id4">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id4"
                                    <?php 
                                        if($value['S_has_toilet'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form4_id">Is There a Toilet<label>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">There is Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Student Toilet (Girls)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id5" value="{{ $value['Bstudent_toilet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Student Toilet (Boys)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id6" value="{{ $value['Gstudent_toilet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Total</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id7" value="{{ $value['Ntotal'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Application</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">In Use</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id8" value="{{ $value['N_In_use'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Not in Use</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id9" value="{{ $value['N_Not_in_use'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Not Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Required Unit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id10" value="{{ $value['Required_unit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Estimate</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id11" value="{{ $value['Estimate'] }}"  placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Anganwadi Details</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Anganwadi Name</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form4_id12" value="{{ $value['Anganwadi_name'] }}" placeholder="Name..">
                            </div>
                            
                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id13">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id13"
                                    <?php 
                                        if($value['A_has_toilet'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Is There a Toilet<label>
                                </div>
                            </div>

                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id14">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id14"
                                    <?php 
                                        if($value['A_is_toilet_use'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Is Toilet in Use<label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Toilet Required</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form4_id15" value="{{ $value['Toilet_required'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Panchayat Council Office</label>
                            </div>

                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id16">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id16"
                                    <?php 
                                        if($value['P_has_toilet'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Is There a Toilet<label>
                                </div>
                            </div>

                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id17">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id17"
                                    <?php 
                                        if($value['P_is_toilet_use'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Is Toilet in Use<label>
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
