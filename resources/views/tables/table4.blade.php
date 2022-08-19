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
                <div class="card-header">{{ __('Details of Institutional Santation') }}</div>
                    <div class="container">
                    <form action="table4" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form4_id1" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form4_id2" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Block Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form4_id18" placeholder="Block Name..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Details of Schools Toilet</label>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form4_name">Name of School</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form4_id3" placeholder="Name..">
                            </div>

                            <!-- <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id4">
                                    <input class="form-check-input" type="checkbox" value="yes" name="form4_id4">
                                    <label class="form-check-label" for="form4_id">Is There a Toilet<label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Is There a Toilet :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id4" id="form4_id4" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, There is a Toilet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id4" value="No">
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">There is Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Student Toilet (Girls)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form4_id5" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Student Toilet (Boys)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form4_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Total</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form4_id7" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Application</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">In Use</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0"  class="form-control" name="form4_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Not in Use</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0"  class="form-control" name="form4_id9" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Not Toilet</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Required Unit</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0"  class="form-control" name="form4_id10" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Estimate</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0"  class="form-control" name="form4_id11" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Anganwadi Details</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Anganwadi Name</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form4_id12" placeholder="Name..">
                            </div>
                            
                            <!-- <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id13">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id13">
                                    <label class="form-check-label" for="defaultCheck1">Is There a Toilet<label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Is There a Toilet :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id13" id="form4_id13" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, There is a Toilet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id13" value="No">
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            <!-- <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id14">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id14">
                                    <label class="form-check-label" for="defaultCheck1">Is Toilet in Use<label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Is Toilet in Use :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id14" id="form4_id14" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, Toilet in Use</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id14" value="No">
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form4_id">Toilet Required</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0"  class="form-control" name="form4_id15" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form4_id">Panchayat Council Office</label>
                            </div>

                            <!-- <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id16">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id16">
                                    <label class="form-check-label" for="defaultCheck1">Is There a Toilet<label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Is There a Toilet :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id16" id="form4_id16" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, There a Toilet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id16" value="No">
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            

                            <!-- <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form4_id17">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form4_id17">
                                    <label class="form-check-label" for="defaultCheck1">Is Toilet in Use<label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Is Toilet in Use :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id17" id="form4_id17" value="Yes">
                                    <label class="form-check-label" for="form0_id">Yes, Toilet in Use</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form4_id17" value="No">
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