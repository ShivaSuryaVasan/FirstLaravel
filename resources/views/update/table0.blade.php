@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Format_A') }}</div>
                    <div class="container">
                    <form action="/update0" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $value['id'] }}">
                        <div class="form-row" style="padding-top: 2em;">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form0_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form0_id2"  value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>
                            
                        
                            <div class="form-group col-md-6">
                                <label for="form0_id">Head of the Household Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form0_id3"  value="{{ $value['Head_of_household'] }}" placeholder="Name..">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="form0_id">Door No.</label>
                                <input type="text" class="form-control" name="form0_id4"  value="{{ $value['Door_no'] }}" placeholder="Door no..">
                            </div>

                            <div class="form-group col-md-3" style="margin-left:12em;">
                                <label for="form0_id">No.of Family Members</label>
                                <input type="number" class="form-control" name="form0_id5"  value="{{ $value['Family_members'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-12" id="toilet" onclick=isChecked()>
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id6">
                                    <input class="form-check-input" id="form0_id6" type="checkbox" value="Yes" name="form0_id6"
                                    <?php
                                        if($value['Is_toilet'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Is There a Toilet<label>
                                </div>
                            </div>

                        <div id="toilet-has">
<!-- Toilet Has -->
                        <div class="form-row" style="margin-left:1px;">
                            <div class="form-group col-md-12">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id7">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form0_id7"
                                    <?php
                                        if( $value['Is_there_water_facility'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
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
                                <input type="number" class="form-control" name="form0_id8" value="{{ $value['Use_Toilet_daily'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Details of Toilet Construction</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Year</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id9" value="{{ $value['Year'] }}" placeholder="yyyy..">
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id10" id="form0_id10" onclick="radio(0)"
                                <?php
                                    if( $value['Build_by'] != "Build by own"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Project Name</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id10" id="form0_id10" value="Build by own" onclick="radio(1)"
                                <?php
                                    if( $value['Build_by'] == "Build by own"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Build By Own</label>
                            </div>
                            <div class="form-group col-md-6"></div>

    <!-- if yes -->     
                            <div class="form-group col-md-3" style="margin-top:1em;">
                                <input type="text" class="form-control" name="form0_id10" id="form0_id11" value="{{ $value['Build_by'] }}" placeholder="Project Name..">
                            </div>
                            <div class="form-group col-md-12"></div>
    <!-- end -->
                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Type of Enclosure</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-3">
                                <label for="form0_id12">One Absorb Pit</label>
                                <input type="number" class="form-control" name="form0_id11"  value="{{ $value['One_Absorb_pit'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-3"  style="margin-left:12em;">
                                <label for="form0_id13">Two Absorb Pit</label>
                                <input type="number" class="form-control" name="form0_id12"  value="{{ $value['Two_Absorb_pit'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id13" id="form0_id13" value="With Soak pit"
                                <?php
                                    if($value['Soak_pit'] == "With Soak pit"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="inlineRadio1">Soak Pit /</label>
                            </div>
                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id13" id="form0_id13" value="Without soak pit"
                                <?php
                                    if($value['Soak_pit'] == "Without soak pit"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="inlineRadio2">Without Soak Pit</label>
                            </div>
                            <div class="form-group col-md-5"></div>

                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id14" id="form0_id14" value="Bio Gas"
                                <?php
                                    if($value['Gas'] == "Bio Gas"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Bio Gas /</label>
                            </div>
                            <div class="form-group col-md-3 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id14" id="form0_id14" value="Go bar Gas"
                                <?php
                                    if($value['Gas'] == "Go bar Gas"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Go bar Gas</label>
                            </div>
                            <div class="form-group col-md-5"></div>

                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form0_id">Use of Closet</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Everyone uses"
                                <?php
                                    if($value['Usage'] == "Everyone uses"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Toilet Shared by Everyone in House</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Few uses"
                                <?php
                                    if($value['Usage'] == "Few uses"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Used by Few in House</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Not in use"
                                <?php
                                    if($value['Usage'] == "Not in use"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Not in Use</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id15" id="form0_id15" value="Damaged"
                                <?php
                                    if($value['Usage'] == "Damaged"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Damaged / Clogged Toilet</label>
                            </div>

                            <div class="form-group col-md-12" style="margin-top:1em;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id16">
                                    <input class="form-check-input" type="checkbox" value="Yes" id="form0_id16" name="form0_id16" onclick=Cavity()
                                    <?php
                                        if($value['Has_cavity'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Has Cavity Filled Before<label>
                                </div>
                            </div>
    <!-- if yes  -->
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <input type="hidden" value="No" name="form0_id17">
                                    <input class="form-control" name="form0_id17" id="form0_id17" rows="3" value="{{ $value['Disposed_of'] }}" placeholder="Where it Disposed of .."></textarea>
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
                                    <input class="form-check-input" type="checkbox" id="form0_id18" value="Yes" onclick="isDamaged()" name="form0_id18"
                                    <?php
                                        if($value['Is_damaged'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Is Damaged<label>
                                </div>
                            </div>
<!-- ifyes -->
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <input type="hidden" value="No" name="form0_id19">
                                    <input type=textarea class="form-control" name="form0_id19" id="form0_id19" value="{{ $value['Faults'] }}" rows="3" placeholder="Describe the faults.."></textarea>
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
                                <input type="number" class="form-control" name="form0_id20" value="{{ $value['Without_Toilet_houses'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">House Without Toilet Who Already benefited from Toilet Project</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id21" value="{{ $value['Without_Toilet_Already_benefited'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id22">Families Have no Enough Space to Build Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id22" value="{{ $value['Not_Enough_space_tobuild_toilet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id23">Families Shared Toilet</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id23" value="{{ $value['Shared_Toilet'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Household Use :</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id24" id="form0_id24" value="Public Toilet"
                                <?php
                                    if($value['Household_use'] == "Public Toilet"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Public Toilet</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id24" id="form0_id24" value="Community Toilet"
                                <?php
                                    if($value['Household_use'] == "Community Toilet"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Community Toilet</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id25">Household have Enough Space to Build Toilet</label>
                            </div>
                            <div class="form-group col-md-3"style="margin-top:1em;">
                                <input type="number" class="form-control" name="form0_id25" value="{{ $value['Enough_Space_tobuild_toilet'] }}" placeholder="Count..">
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
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form0_id26"
                                    <?php
                                        if($value['Grading_at_home'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
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
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Own Compost pit"
                                <?php
                                    if($value['Veg_and_Kitchen_waste'] == "Own Compost pit"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Own Compost Pit</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Community Compost Pit"
                                <?php
                                    if($value['Veg_and_Kitchen_waste'] == "Community Compost Pit"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Community Compost Pit</label>
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Dumped Outside"
                                <?php
                                    if($value['Veg_and_Kitchen_waste'] == "Dumped Outside"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Dumped Outside</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.5em;">
                                <input class="form-check-input" type="radio" name="form0_id27" id="form0_id27" value="Provided Sanitation Office"
                                <?php
                                    if($value['Veg_and_Kitchen_waste'] == "Provided Sanitation Office"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Provided to Sanitation Office</label>
                            </div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id">Plastic Waste</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Burned"
                                <?php
                                    if($value['Plastic_waste'] == "Burned"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Burned</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Put Outside"
                                <?php
                                    if($value['Plastic_waste'] == "Put Outside"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Put Outside</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Given to Municipality"
                                <?php
                                    if($value['Plastic_waste'] == "Given to Municipality"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Given to Municipality</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id28" id="form0_id28" value="Sold"
                                <?php
                                    if($value['Plastic_waste'] == "Sold"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Sold</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-group col-md-6" style="margin-top:1em;">
                                <label for="form0_id">Dry Waste</label>
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Burned"
                                <?php
                                    if($value['Dry_waste'] == "Burned"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Burned</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:11.2em;">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Put Outside"
                                <?php
                                    if($value['Dry_waste'] == "Put Outside"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Put Outside</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Given to Municipality"
                                <?php
                                    if($value['Dry_waste'] == "Given to Municipality"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Given to Municipality</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id29" id="form0_id29" value="Sold"
                                <?php
                                    if($value['Dry_waste'] == "Sold"){
                                        echo "checked";
                                    }
                                ?>
                                >
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
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Home Garden"
                                <?php
                                    if($value['Existing_facilities'] == "Home Garden"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Home Garden</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:8.6em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Absorb Pit(Own)"
                                <?php
                                    if($value['Existing_facilities'] == "Absorb Pit(Own)"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Absorb Pit(Own)</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Absorb Pit(MGNREGS)"
                                <?php
                                    if($value['Existing_facilities'] == "Absorb Pit(MGNREGS)"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Absorb Pit(MGNREGS)</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:4.55em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Discharges in Drains"
                                <?php
                                    if($value['Existing_facilities'] == "Discharges in Drains"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Discharges in Drains</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Discharges in Outside"
                                <?php
                                    if($value['Existing_facilities'] == "Discharges in Outside"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Discharges in Outside</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="Any Other"
                                <?php
                                    if($value['Existing_facilities'] == "Any Other"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Any Other</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:5.1em;">
                                <input class="form-check-input" type="radio" name="form0_id30" id="form0_id30" value="No Facilities"
                                <?php
                                    if($value['Existing_facilities'] == "No Facilities"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">No Facilities</label>
                            </div>

                            <div class="form-group col-md-6" style="text-align:center;margin-top:1em;">
                                <label for="form0_id">Management Facilities Established</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Home Garden"
                                <?php
                                    if($value['Management_facilities'] == "Home Garden"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Home Garden</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:8.6em;">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Aborb Pit(Own)"
                                <?php
                                    if($value['Management_facilities'] == "Aborb Pit(Own)"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Absorb Pit(Own)</label>
                            </div>
                            <div class="form-group col-md-4"></div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Absorb Pit(MGNREGS)"
                                <?php
                                    if($value['Management_facilities'] == "Absorb Pit(MGNREGS)"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Absorb Pit(MGNREGS)</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left:4.55em;">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Connected to sewage"
                                <?php
                                    if($value['Management_facilities'] == "Connected to sewage"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Connected to Sewage</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="form0_id31" id="form0_id31" value="Any Other"
                                <?php
                                    if($value['Management_facilities'] == "Any Other"){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <label class="form-check-label" for="form0_id">Any Other</label>
                            </div>

                            <div class="form-group col-md-12" style="margin-top:1em;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form0_id32">
                                    <input class="form-check-input" type="checkbox" value="Yes" id="form0_id32" onclick="isLivestock()" name="form0_id32"
                                    <?php
                                        if($value['Has_Livestock'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Do You have Live Stock<label>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form0_id33" id="form0_id33" value="{{ $value['How_many_times'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6"></div>

                            <div style="margin-bottom:2em;margin-left:2em;margin-top:1em;">
                                <button type="submit" class="btn btn-primary">Update</button>
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
