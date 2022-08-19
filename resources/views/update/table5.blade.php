@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sanitation Facilities in Public Places') }}</div>
                    <div class="container">
                    <form action="/update5" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" name="form5_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form5_id2" value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Block Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form5_id19" value="{{ $value['Hamlet_name'] }}" placeholder="Block Name..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form5_id">Public Places</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of Temples</label>
                                <input type="number" class="form-control" name="form5_id3" value="{{ $value['Ntemple'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form5_id">Toilet Facilities in Temple Campus</label>
                                <input type="number" class="form-control" name="form5_id4" value="{{ $value['Toilet_in_temple'] }}" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id5">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id5"
                                    <?php 
                                        // if($value['General_toilet_temple'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in Temple</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in Temple :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id5" id="form5_id5" value="Yes"
                                    <?php 
                                        if($value['General_toilet_temple'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id5" value="No"
                                    <?php 
                                        if($value['General_toilet_temple'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of Market</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id6" value="{{ $value['Nmarket'] }}" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id7">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id7"
                                    <?php 
                                        // if($value['General_toilet_market'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in Market</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in Market :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id7" id="form5_id7" value="Yes"
                                    <?php 
                                        if($value['General_toilet_market'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id7" value="No"
                                    <?php 
                                        if($value['General_toilet_market'] == "No"){
                                            echo "checked";
                                        }
                                    ?>>
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of VAO Offices</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id8" value="{{ $value['Nvao_office'] }}" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id9">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id9"
                                    <?php 
                                        // if($value['General_toilet_VAO_office'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in VAO Office</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in VAO Office :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id9" id="form5_id9" value="Yes"
                                    <?php 
                                        if($value['General_toilet_VAO_office'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id9" value="No"
                                    <?php 
                                        if($value['General_toilet_VAO_office'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of Co-operative Store</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id10" value="{{ $value['Ncooperative_store'] }}" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id11">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id11"
                                    <?php 
                                        // if($value['Toilet_cooperative_store'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Co-operative store</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in  Co-operative store :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id11" id="form5_id11" value="Yes"
                                    <?php 
                                        if($value['Toilet_cooperative_store'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id11" value="No"
                                    <?php 
                                        if($value['Toilet_cooperative_store'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form5_id">Total No.of VPSN Building</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form5_id12" value="{{ $value['NVPSN_building'] }}" placeholder="Count..">
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id13">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id13"
                                    <?php 
                                        // if($value['General_toilet_VPSN_building'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">General Toilet Facility in VPSN Building</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in VPSN Building :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id13" id="form5_id13" value="Yes"
                                    <?php 
                                        if($value['General_toilet_VPSN_building'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id13" value="No"
                                    <?php 
                                        if($value['General_toilet_VPSN_building'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6" style="text-align:center;">
                                <label for="form5_id">Toilet Facilities in Other Public Places</label>
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id14">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id14"
                                    <?php 
                                        // if($value['Toilet_SHG_building'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in SHG Building</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in SHG Building :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id14" id="form5_id14" value="Yes"
                                    <?php 
                                        if($value['Toilet_SHG_building'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id14" value="No"
                                    <?php 
                                        if($value['Toilet_SHG_building'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                                                        
                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id15">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id15"
                                    <?php 
                                        // if($value['Toilet_community'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Community</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in Community :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id15" id="form5_id15" value="Yes"
                                    <?php 
                                        if($value['Toilet_community'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id15" value="No"
                                    <?php 
                                        if($value['Toilet_community'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                                                        
                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id16">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id16"
                                    <?php 
                                        // if($value['Toilet_Library'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Library</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in Library :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id16" id="form5_id16" value="Yes"
                                    <?php 
                                        if($value['Toilet_Library'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id16" value="No"
                                    <?php 
                                        if($value['Toilet_Library'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>
                                                        
                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id17">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id17"
                                    <?php 
                                        // if($value['Toilet_Theater'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Theater</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">General Toilet Facility in Theater :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id17" id="form5_id17" value="Yes"
                                    <?php 
                                        if($value['Toilet_Theater'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id17" value="No"
                                    <?php 
                                        if($value['Toilet_Theater'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
                                </div>
                            </div>

                            <!-- <div class="form-group col-md-6" style="margin-right:1px;">
                                <div class="form-check">
                                    <input type="hidden" value="No" name="form5_id18">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="form5_id18"
                                    <?php 
                                        // if($value['Toilet_bus_shelter'] == "Yes"){
                                        //     echo "checked";
                                        // }
                                    ?>
                                    >
                                    <label class="form-check-label" for="defaultCheck1">Toilet Facility in Bus Shelter</label>
                                </div>
                            </div> -->

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label" for="form0_id">Toilet Facility in Bus Shelter :</label>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id18" id="form5_id18" value="Yes"
                                    <?php 
                                        if($value['Toilet_bus_shelter'] == "Yes"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">Yes, Having Toilet Facility</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="form5_id18" value="No"
                                    <?php 
                                        if($value['Toilet_bus_shelter'] == "No"){
                                            echo "checked";
                                        }
                                    ?>
                                    >
                                    <label class="form-check-label" for="form0_id">No</label>
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
