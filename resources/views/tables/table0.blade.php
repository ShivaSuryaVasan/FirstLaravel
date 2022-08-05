@extends('layouts.app')

@section('content')

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
                <div class="card-header">{{ __('Format_A') }}</div>
                    <div class="container">
                    <form action="table0" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-row" style="padding-top: 2em;">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form0_id1" placeholder="Place Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form0_id2" placeholder="Hamlet Name..">
                            </div>
                            
                        
                            <div class="form-group col-md-6">
                                <label for="form0_id">Head of the Household Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form0_id3" placeholder="Name..">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="form0_id">Door No.</label>
                                <input type="text" class="form-control" name="form0_id4" placeholder="Door no..">
                            </div>

                            <div class="form-group col-md-3" style="margin-left:12em;">
                                <label for="form0_id">No.of Family Members</label>
                                <input type="number" class="form-control" name="form0_id5" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-12" id="toilet" onclick=isChecked()>
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id6">
                                    <input class="form-check-input" id="form0_id6" type="checkbox" value="Yes" name="form0_id6">
                                    <label class="form-check-label" for="form0_id">Is There a Toilet<label>
                                </div>
                            </div>

                        <div id="toilet-has" style="display:none;">
<!-- Toilet Has -->
                        <div class="form-row" style="margin-left:1px;">
                            <div class="form-group col-md-12">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id7">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form0_id7">
                                    <label class="form-check-label" for="form0_id">Is There Water Facility for Toilet<label>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Has Toilet Facility</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">No.of Members Use Toilet Daily</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id8" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Details of Toilet Construction</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Year</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id9" placeholder="yyyy..">
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id10" id="form0_id10" value="Project name" onclick="radio(0)">
                                <label class="form-check-label" for="form0_id">Project Name</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id10" id="form0_id10" value="Build by own" onclick="radio(1)">
                                <label class="form-check-label" for="form0_id">Build By Own</label>
                            </div>
                            <div class="form-group col-md-6"></div>

    <!-- if yes -->     
                            <div class="form-group col-md-3" style="margin-top:1em;">
                                <input type="text" class="form-control" style="display:none;" name="form0_id10" id="form0_id11" placeholder="Project Name..">
                            </div>
                            <div class="form-group col-md-12"></div>
    <!-- end -->
                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Type of Enclosure</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-3">
                                <label for="form0_id12">One Absorb Pit</label>
                                <input type="number" class="form-control" name="form0_id11" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-3"  style="margin-left:12em;">
                                <label for="form0_id13">Two Absorb Pit</label>
                                <input type="number" class="form-control" name="form0_id12" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id13" id="form0_id13" value="With Soak pit">
                                <label class="form-check-label" for="inlineRadio1">Soak Pit /</label>
                            </div>
                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id13" id="form0_id13" value="Without soak pit">
                                <label class="form-check-label" for="inlineRadio2">Without Soak Pit</label>
                            </div>
                            <div class="form-group col-md-5"></div>

                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id14" id="form0_id14" value="Bio Gas">
                                <label class="form-check-label" for="form0_id">Bio Gas /</label>
                            </div>
                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id14" id="form0_id14" value="Go bar Gas">
                                <label class="form-check-label" for="form0_id">Go bar Gas</label>
                            </div>
                            <div class="form-group col-md-5"></div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Use of Closet</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Everyone uses">
                                <label class="form-check-label" for="form0_id">Toilet Shared by Everyone in House</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Few uses">
                                <label class="form-check-label" for="form0_id">Used by Few in House</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Not in use">
                                <label class="form-check-label" for="form0_id">Not in Use</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Damaged">
                                <label class="form-check-label" for="form0_id">Damaged / Clogged Toilet</label>
                            </div>

                            <div class="form-group col-md-12" style="margin-top:1em;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id16">
                                    <input class="form-check-input" type="checkbox" value="Yes" id="form0_id16" name="form0_id16" onclick=Cavity()>
                                    <label class="form-check-label" for="form0_id">Has Cavity Filled Before<label>
                                </div>
                            </div>
    <!-- if yes  -->
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <input type="hidden" value="No" name="form0_id17">
                                    <textarea class="form-control" name="form0_id17" style="display:none;" id="form0_id17" rows="3" placeholder="Where it Disposed of .."></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-4"></div>
    <!-- end  -->
                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Toilet Not in Use</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-12" >
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id18">
                                    <input class="form-check-input" type="checkbox" id="form0_id18" value="Yes" onclick="isDamaged()" name="form0_id18">
                                    <label class="form-check-label" for="form0_id">Is Damaged<label>
                                </div>
                            </div>
<!-- ifyes -->
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <input type="hidden" value="No" name="form0_id19">
                                    <textarea class="form-control" style="display:none" name="form0_id19" id="form0_id19" rows="3" placeholder="Describe the faults.."></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-4"></div>
<!-- end -->
                        </div>
                        </div>
<!-- end of toilet has -->
                        <div id="no-toilet">
<!-- there is no Toilet -->
                        <div class="form-row" style="margin-left:1px;">
                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">There is No Toilet</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">No.of House Without Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id20" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">House Without Toilet Who Already benefited from Toilet Project</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id21" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id22">Families Have no Enough Space to Build Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id22" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id23">Families Shared Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id23" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Household Use :</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id24" id="form0_id24" value="Public Toilet">
                                <label class="form-check-label" for="form0_id">Public Toilet</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id24" id="form0_id24" value="Community Toilet">
                                <label class="form-check-label" for="form0_id">Community Toilet</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id25">Household have Enough Space to Build Toilet</label>
                            </div>
                            <div class="form-group col-md-3"style="margin-top:1em;">
                                <input type="number" class="form-control" name="form0_id25" placeholder="Count..">
                            </div>
                            
<!-- End no Toilet -->
                        </div>
                        </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Solid Waste Disposal :</label>
                            </div>

                            <div class="form-group col-md-12" style="margin-top:1em;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id26">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form0_id26">
                                    <label class="form-check-label" for="form0_id">Is Grading Done at Home<label>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Existing Solid Waste System</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6">
                                <label for="form0_id27">Veg. Waste Other Kitchen Waste</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Own Compost pit">
                                <label class="form-check-label" for="form0_id">Own Compost Pit</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Community Compost Pit">
                                <label class="form-check-label" for="form0_id">Community Compost Pit</label>
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Dumped Outside">
                                <label class="form-check-label" for="form0_id">Dumped Outside</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.5em;">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Provided Sanitation Office">
                                <label class="form-check-label" for="form0_id">Provided to Sanitation Office</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id">Plastic Waste</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Burned">
                                <label class="form-check-label" for="form0_id">Burned</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Put Outside">
                                <label class="form-check-label" for="form0_id">Put Outside</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Given to Municipality">
                                <label class="form-check-label" for="form0_id">Given to Municipality</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Sold">
                                <label class="form-check-label" for="form0_id">Sold</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id">Dry Waste</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Burned">
                                <label class="form-check-label" for="form0_id">Burned</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Put Outside">
                                <label class="form-check-label" for="form0_id">Put Outside</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Given to Municipality">
                                <label class="form-check-label" for="form0_id">Given to Municipality</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Sold">
                                <label class="form-check-label" for="form0_id">Sold</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id">Gray Water/ Waste Water Disposal :</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Existing Facilities</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Home Garden">
                                <label class="form-check-label" for="form0_id">Home Garden</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:8.6em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Absorb Pit(Own)">
                                <label class="form-check-label" for="form0_id">Absorb Pit(Own)</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Absorb Pit(MGNREGS)">
                                <label class="form-check-label" for="form0_id">Absorb Pit(MGNREGS)</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:4.55em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Discharges in Drains">
                                <label class="form-check-label" for="form0_id">Discharges in Drains</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Discharges in Outside">
                                <label class="form-check-label" for="form0_id">Discharges in Outside</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Any Other">
                                <label class="form-check-label" for="form0_id">Any Other</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="No Facilities">
                                <label class="form-check-label" for="form0_id">No Facilities</label>
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;margin-top:1em;">
                                <label for="form0_id">Management Facilities Established</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Home Garden">
                                <label class="form-check-label" for="form0_id">Home Garden</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:8.6em;">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Aborb Pit(Own)">
                                <label class="form-check-label" for="form0_id">Absorb Pit(Own)</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Absorb Pit(MGNREGS)">
                                <label class="form-check-label" for="form0_id">Absorb Pit(MGNREGS)</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:4.55em;">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Connected to sewage">
                                <label class="form-check-label" for="form0_id">Connected to Sewage</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Any Other">
                                <label class="form-check-label" for="form0_id">Any Other</label>
                            </div>

                            <div class="form-group col-md-12" style="margin-top:1em;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id32">
                                    <input class="form-check-input" type="checkbox" value="Yes" id="form0_id32" onclick="isLivestock()" name="form0_id32">
                                    <label class="form-check-label" for="form0_id">Do You have Live Stock<label>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" style="display:none;" name="form0_id33" id="form0_id33" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div style="margin-bottom:2em;margin-left:2em;margin-top:1em;">
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

@section('script')

<script>
    $('button').click(function(){
        $('.alert').removeClass("hide")
        $('.alert').delay(3000).hide(1500); 
    });
</script>

@endsection
