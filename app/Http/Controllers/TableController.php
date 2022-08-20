<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\table0;use App\table1;use App\table2;use App\table3;
use App\table4;use App\table5;use App\table6;use App\table7;
use App\table8;use App\table9;use App\table10;use App\table11;

class TableController extends Controller
{
    function table0(Request $required){

        $t0 = new table0;
        $t0->Panchayat_name = $required->form0_id1;
        $t0->Hamlet_name = $required->form0_id2;
        $t0->Block_name = $required->form0_id34;
        $t0->Head_of_household = $required->form0_id3;
        $t0->Door_no = $required->form0_id4;
        $t0->Family_members = $required->form0_id5;
        $t0->Is_toilet = $required->form0_id6;
        $t0->Is_there_water_facility = $required->form0_id7;
        $t0->Use_toilet_daily = $required->form0_id8;
        $t0->Year = $required->form0_id9;
        $t0->Build_by = $required->form0_id10;
        $t0->One_absorb_pit = $required->form0_id11;
        $t0->Two_absorb_pit = $required->form0_id12;
        $t0->Soak_pit = $required->form0_id13;
        $t0->Gas = $required->form0_id14;
        $t0->Usage = $required->form0_id15;
        $t0->Has_cavity = $required->form0_id16;
        $t0->Disposed_of = $required->form0_id17;
        $t0->Is_damaged = $required->form0_id18;
        $t0->Faults = $required->form0_id19;
        $t0->Without_toilet_houses = $required->form0_id20;
        $t0->Without_toilet_already_benefited = $required->form0_id21;
        $t0->Not_enough_space_tobuild_toilet = $required->form0_id22;
        $t0->Shared_toilet = $required->form0_id23;
        $t0->Household_use = $required->form0_id24;
        $t0->Enough_space_tobuild_toilet = $required->form0_id25;
        $t0->Grading_at_home = $required->form0_id26;
        $t0->Veg_and_kitchen_waste = $required->form0_id27;
        $t0->Plastic_waste = $required->form0_id28;
        $t0->Dry_waste = $required->form0_id29;
        $t0->Existing_facilities = $required->form0_id30;
        $t0->Management_facilities = $required->form0_id31;
        $t0->Has_Livestock = $required->form0_id32;
        $t0->How_many_times = $required->form0_id33;
        $t0->Entered_id = session('user_id');
        $t0->save();
        return redirect('table0')->with('msg','Data Inserted Successfully !');

    }

    function table1(Request $required){

        $t1 = new table1;
        $t1->Panchayat_name = $required->form1_id1;
        $t1->Hamlet_name = $required->form1_id2;
        $t1->Block_name = $required->form1_id8;
        $t1->Ntotal_houses = $required->form1_id3;
        $t1->Ntotal_shops = $required->form1_id4;
        $t1->Ntotal_companies = $required->form1_id5;
        $t1->Npopulation_2011 = $required->form1_id6;
        $t1->Npopulation_current = $required->form1_id7;
        $t1->Entered_id = session('user_id');
        $t1->save();
        return redirect('table1')->with('msg',' Inserted Successfully !');

    }

    function table2(Request $required){

        $t2 = new table2;
        $t2->Panchayat_name = $required->form2_id1;
        $t2->Hamlet_name = $required->form2_id2;
        $t2->Block_name = $required->form2_id25;
        $t2->Total_houses = $required->form2_id3;
        $t2->Population = $required->form2_id4;
        $t2->One_absorb_pit = $required->form2_id5;
        $t2->Two_absorb_pit = $required->form2_id6;
        $t2->With_septic_tank = $required->form2_id7;
        $t2->Without_septic_tank = $required->form2_id8;
        $t2->Other_options = $required->form2_id9;
        $t2->Total = $required->form2_id10;
        $t2->Everybody_uses = $required->form2_id11;
        $t2->Few_uses = $required->form2_id12;
        $t2->No_one_use = $required->form2_id13;
        $t2->No_awarness = $required->form2_id14;
        $t2->Broken_toilet = $required->form2_id15;
        $t2->Small_repair = $required->form2_id16;
        $t2->Totally_broken = $required->form2_id17;
        $t2->Nhouse_without_toilet = $required->form2_id18;
        $t2->Already_beneficial_scheme = $required->form2_id19;
        $t2->Not_enough_space = $required->form2_id20;
        $t2->Shared_toilet = $required->form2_id21;
        $t2->Sanitary_facilities = $required->form2_id22;
        $t2->No_space = $required->form2_id23;
        $t2->Nsbg_scheme = $required->form2_id24;
        $t2->Entered_id = session('user_id');
        $t2->save();
        return redirect('table2')->with('msg','Data Inserted Successfully !');

    }

    function table3(Request $required){

        $t3 = new table3;
        $t3->Panchayat_name = $required->form3_id1;
        $t3->Hamlet_name = $required->form3_id2;
        $t3->Block_name = $required->form3_id6;
        $t3->Health_complexes = $required->form3_id3;
        $t3->Location = $required->form3_id4;
        $t3->Fully_functional = $required->form3_id5;
        $t3->Partially_used = $required->form3_id6;
        $t3->Not_in_use = $required->form3_id7;
        $t3->Dilapidated_premises = $required->form3_id8;
        $t3->Totally_dilapidated_premises = $required->form3_id9;
        $t3->User_group = $required->form3_id10;
        $t3->Self_help_group = $required->form3_id11;
        $t3->Village_panchayat = $required->form3_id12;
        $t3->Project = $required->form3_id13;
        $t3->Assessment = $required->form3_id14;
        $t3->Current_status_of_work = $required->form3_id15;
        $t3->Entered_id = session('user_id');
        $t3->save();
        return redirect('table3')->with('msg','Data Inserted Successfully !');

    }

    function table4(Request $required){

        $t4 = new table4;
        $t4->Panchayat_name = $required->form4_id1;
        $t4->Hamlet_name = $required->form4_id2;
        $t4->Block_name = $required->form4_id18;
        $t4->School_name = $required->form4_id3;
        $t4->S_has_toilet = $required->form4_id4;
        $t4->Bstudent_toilet = $required->form4_id5;
        $t4->Gstudent_toilet = $required->form4_id6;
        $t4->Ntotal = $required->form4_id7;
        $t4->N_In_use = $required->form4_id8;
        $t4->N_Not_in_use = $required->form4_id9;
        $t4->Required_unit = $required->form4_id10;
        $t4->Estimate = $required->form4_id11;
        $t4->Anganwadi_name = $required->form4_id12;
        $t4->A_has_toilet = $required->form4_id13;
        $t4->A_is_toilet_use = $required->form4_id14;
        $t4->Toilet_required = $required->form4_id15;
        $t4->P_has_toilet = $required->form4_id16;
        $t4->P_is_toilet_use = $required->form4_id17;
        $t4->Entered_id = session('user_id');
        $t4->save();
        return redirect('table4')->with('msg','Data Inserted Successfully !');

    }

    function table5(Request $required){

        $t5 = new table5;
        $t5->Panchayat_name = $required->form5_id1;
        $t5->Hamlet_name = $required->form5_id2;
        $t5->Block_name = $required->form5_id19;
        $t5->Ntemple = $required->form5_id3;
        $t5->Toilet_in_temple = $required->form5_id4;
        $t5->General_toilet_temple = $required->form5_id5;
        $t5->Nmarket = $required->form5_id6;
        $t5->General_toilet_market = $required->form5_id7;
        $t5->Nvao_office = $required->form5_id8;
        $t5->General_toilet_VAO_office = $required->form5_id9;
        $t5->Ncooperative_store = $required->form5_id10;
        $t5->Toilet_cooperative_store = $required->form5_id11;
        $t5->NVPSN_building = $required->form5_id12;
        $t5->General_toilet_VPSN_building = $required->form5_id13;
        $t5->Toilet_SHG_building = $required->form5_id14;
        $t5->Toilet_community = $required->form5_id15;
        $t5-> Toilet_Library = $required->form5_id16;
        $t5->Toilet_Theater = $required->form5_id17;
        $t5->Toilet_bus_shelter = $required->form5_id18;
        $t5->Entered_id = session('user_id');
        $t5->save();
        return redirect('table5')->with('msg','Data Inserted Successfully !');

    }

    function table6(Request $required){

        $t6 = new table6;
        $t6->Panchayat_name = $required->form6_id1;
        $t6->Block_name = $required->form6_id11;
        $t6->Nhamelet = $required->form6_id2;
        $t6->Nschool = $required->form6_id3;
        $t6->SToilet_in_school = $required->form6_id4;
        $t6->Nanganwadi = $required->form6_id5;
        $t6->AToilet_in_anganwadi = $required->form6_id6;
        $t6->Ngovernment = $required->form6_id7;
        $t6->GToilet_in_government = $required->form6_id8;
        $t6->Other_public_places = $required->form6_id9;
        $t6->PToilet_in_places = $required->form6_id10;
        $t6->Entered_id = session('user_id');
        $t6->save();
        return redirect('table6')->with('msg','Data Inserted Successfully !');

    }

    function table7(Request $required){

        $t7 = new table7;
        $t7->Panchayat_name = $required->form7_id1;
        $t7->Block_name = $required->form7_id14;
        $t7->Garbage_process = $required->form7_id2;
        $t7->Nengaged_collectors = $required->form7_id3;
        $t7->Collected_volume = $required->form7_id4;
        $t7->Bio_waste_volume = $required->form7_id5;
        $t7->Flexible_waste = $required->form7_id6;
        $t7->Recycling_waste = $required->form7_id7;
        $t7->Impossible_recycling = $required->form7_id8;
        $t7->Medical_waste = $required->form7_id9;
        $t7->Industrial_waste = $required->form7_id10;
        $t7->Health_waste = $required->form7_id11;
        $t7->Electronic_waste = $required->form7_id12;
        $t7->Contruction_waste = $required->form7_id13;
        $t7->Entered_id = session('user_id');
        $t7->save();
        return redirect('table7')->with('msg','Data Inserted Successfully !');

    }

    function table8(Request $required){

        $t8 = new table8;
        $t8->Panchayat_name = $required->form8_id1;
        $t8->Hamlet_name = $required->form8_id2;
        $t8->Block_name = $required->form8_id32;
        $t8->Nhouse = $required->form8_id3;
        $t8->Ncleaner = $required->form8_id4;
        $t8->Tgood_condition = $required->form8_id5;
        $t8->Tminor_repair = $required->form8_id6;
        $t8->Tcompletely_damaged = $required->form8_id7;
        $t8->Tneeded = $required->form8_id8;
        $t8->Pgood_condition = $required->form8_id9;
        $t8-> Pminor_repair = $required->form8_id10;
        $t8->Pcompletely_damaged = $required->form8_id11;
        $t8->Pneeded = $required->form8_id12;
        $t8->Bgood_condition = $required->form8_id13;
        $t8->Bminor_repair = $required->form8_id14;
        $t8->Bcompletely_damaged = $required->form8_id15;
        $t8->Bneeded = $required->form8_id16;
        $t8->Egood_condition = $required->form8_id17;
        $t8->Eminor_repair = $required->form8_id18;
        $t8->Ecompletely_damaged = $required->form8_id19;
        $t8-> Eneeded = $required->form8_id20;
        $t8->Other_vehicle = $required->form8_id21;
        $t8->Nexisting_pits = $required->form8_id22;
        $t8-> Npits_required = $required->form8_id23;
        $t8->Sgood_condition = $required->form8_id24;
        $t8-> Sminor_repair = $required->form8_id25;
        $t8->Scompletely_damaged = $required->form8_id26;
        $t8->Sneeded = $required->form8_id27;
        $t8->Vgood_condition = $required->form8_id28;
        $t8->Vminor_repair = $required->form8_id29;
        $t8->Vcompletely_damaged = $required->form8_id30;
        $t8->Is_earthworm = $required->form8_id31;
        $t8->Entered_id = session('user_id');
        $t8->save();
        return redirect('table8')->with('msg','Data Inserted Successfully !');

    }

    function table9(Request $required){

        $t9 = new table9;
        $t9->Panchayat_name = $required->form9_id1;
        $t9->Hamlet_name = $required->form9_id2;
        $t9->Block_name = $required->form9_id12;
        $t9->Ncleaner = $required->form9_id3;
        $t9->Cplace_name = $required->form9_id4;
        $t9->Clocation = $required->form9_id5;
        $t9->Cdistance = $required->form9_id6;
        $t9->Slocation = $required->form9_id7;
        $t9->Sdistance = $required->form9_id8;
        $t9->Vlocation = $required->form9_id9;
        $t9->Vdistance = $required->form9_id10;
        $t9->Post_in_panchayat = $required->form9_id11;
        $t9->Entered_id = session('user_id');
        $t9->save();
        return redirect('table9')->with('msg','Data Inserted Successfully !');

    }

    function table10(Request $required){

        $t10 = new table10;
        $t10->Panchayat_name = $required->form10_id1;
        $t10->Hamlet_name = $required->form10_id2;
        $t10->Block_name = $required->form10_id38;
        $t10->Nstreet = $required->form10_id3;
        $t10->Mhouse = $required->form10_id4;
        $t10->Whome_garden = $required->form10_id5;
        $t10->WHouse_suction_well = $required->form10_id6;
        $t10->WHouse_connected_sewage = $required->form10_id7;
        $t10->WHouse_connected_community = $required->form10_id8;
        $t10->WHouse_with_amenities = $required->form10_id9;
        $t10->Whouse_GWMfacilities = $required->form10_id10;
        $t10->Wplace_with_stagnantwater = $required->form10_id11;
        $t10->Shouse_without_amenities = $required->form10_id12;
        $t10->Shome_garden = $required->form10_id13;
        $t10->Shouse_requiring_septic_tank = $required->form10_id14;
        $t10->Shouse_connected_sewage = $required->form10_id15;
        $t10->Shouse_connected_community = $required->form10_id16;
        $t10->Sother_facilities = $required->form10_id17;
        $t10->Rsoak_pit = $required->form10_id18;
        $t10->Rdrainage = $required->form10_id19;
        $t10->Rcommunity_soak_pit = $required->form10_id20;
        $t10->Rhorizontal_soak_pit = $required->form10_id21;
        $t10->Rvertical_soak_pit = $required->form10_id22;
        $t10->Rwater_stabilization = $required->form10_id23;
        $t10->Rrenovation_work = $required->form10_id24;
        $t10->Osoak_pit = $required->form10_id25;
        $t10->Odrainage = $required->form10_id26;
        $t10->Ocommunity_soak_pit = $required->form10_id27;
        $t10->Ohorizontal_soak_pit = $required->form10_id28;
        $t10->Overtical_soak_pit = $required->form10_id29;
        $t10->Orenovation_work = $required->form10_id30;
        $t10->Wsoak_pit = $required->form10_id31;
        $t10->Wdrainage = $required->form10_id32;
        $t10->Wcommunity_soak_pit = $required->form10_id33;
        $t10->Whorizontal_soak_pit = $required->form10_id34;
        $t10->Wvertical_soak_pit = $required->form10_id35;
        $t10->Wwater_stabilization = $required->form10_id36;
        $t10->Wrenovation_work = $required->form10_id37;
        $t10->Entered_id = session('user_id');
        $t10->save();
        return redirect('table10')->with('msg','Data Inserted Successfully !');

    }

    function table11(Request $required){

        $t11 = new table11;
        $t11->Panchayat_name = $required->form11_id1;
        $t11->Block_name = $required->form11_id17;
        $t11->Detail_of_work = $required->form11_id2;
        $t11->Total_amount_required = $required->form11_id3;
        $t11->MGNREGS = $required->form11_id4;
        $t11->Vtied_water_supply = $required->form11_id5;
        $t11->Vtied_sanitation = $required->form11_id6;
        $t11->Vunited = $required->form11_id7;
        $t11->Ltied_water_supply = $required->form11_id8;
        $t11->Ltied_sanitation = $required->form11_id9;
        $t11->Lunited = $required->form11_id10;
        $t11->Dtied_water_supply = $required->form11_id11;
        $t11->Dtied_sanitation = $required->form11_id12;
        $t11->Dunited = $required->form11_id13;
        $t11->SBM = $required->form11_id14;
        $t11->Miscellaneous_project = $required->form11_id15;
        $t11->Administrative_permission = $required->form11_id16;
        $t11->Entered_id = session('user_id');
        $t11->save();
        return redirect('table11')->with('msg','Data Inserted Successfully !');

    }

/*
|--------------------------------------------------------------------------
| Displaying the data from the database using show function
|--------------------------------------------------------------------------
|
| The below written content which fetches the data from the database so 
| careful while making changes.
|  
|
*/

    function show0(){
        $data = table0::all();
        return view('show.table0',['values'=>$data]);
    }

    function show1(){
        $data = table1::all();
        return view('show.table1',['values'=>$data]);
    }

    function show2(){
        $data = table2::all();
        return view('show.table2',['values'=>$data]);
    }

    function show3(){
        $data = table3::all();
        return view('show.table3',['values'=>$data]);
    }

    function show4(){
        $data = table4::all();
        return view('show.table4',['values'=>$data]);
    }

    function show5(){
        $data = table5::all();
        return view('show.table5',['values'=>$data]);
    }

    function show6(){
        $data = table6::all();
        return view('show.table6',['values'=>$data]);
    }

    function show7(){
        $data = table7::all();
        return view('show.table7',['values'=>$data]);
    }

    function show8(){
        $data = table8::all();
        return view('show.table8',['values'=>$data]);
    }

    function show9(){
        $data = table9::all();
        return view('show.table9',['values'=>$data]);
    }

    function show10(){
        $data = table10::all();
        return view('show.table10',['values'=>$data]);
    }

    function show11(){
        $data = table11::all();
        return view('show.table11',['values'=>$data]);
    }

/*
|--------------------------------------------------------------------------
| Delete the data from the database using delete function
|--------------------------------------------------------------------------
|
| The below written content which fetches the data from the database so 
| careful while making changes.
|  
|
*/
    function delete0($id){
        $data = table0::find($id);
        $data -> delete();
        return redirect('show0');
    }

    function delete1($id){
        $data = table1::find($id);
        $data -> delete();
        return redirect('show1');
    }

    function delete2($id){
        $data = table2::find($id);
        $data -> delete();
        return redirect('show2');
    }

    function delete3($id){
        $data = table3::find($id);
        $data -> delete();
        return redirect('show3');
    }

    function delete4($id){
        $data = table4::find($id);
        $data -> delete();
        return redirect('show4');
    }

    function delete5($id){
        $data = table5::find($id);
        $data -> delete();
        return redirect('show5');
    }

    function delete6($id){
        $data = table6::find($id);
        $data -> delete();
        return redirect('show6');
    }

    function delete7($id){
        $data = table7::find($id);
        $data -> delete();
        return redirect('show7');
    }

    function delete8($id){
        $data = table8::find($id);
        $data -> delete();
        return redirect('show8');
    }

    function delete9($id){
        $data = table9::find($id);
        $data -> delete();
        return redirect('show9');
    }

    function delete10($id){
        $data = table10::find($id);
        $data -> delete();
        return redirect('show10');
    }

    function delete11($id){
        $data = table11::find($id);
        $data -> delete();
        return redirect('show11');
    }

/*
|--------------------------------------------------------------------------
| Edit the data from the database using edit function
|--------------------------------------------------------------------------
|
| The below written content which fetches the data from the database so 
| careful while making changes.
|  
|
*/
    function edit0($id){
        $data = table0::find($id);
        return view('update.table0',['value' => $data]);
    }

    function edit1($id){
        $data = table1::find($id);
        return view('update.table1',['value' => $data]);
    }

    function edit2($id){
        $data = table2::find($id);
        return view('update.table2',['value' => $data]);
    }

    function edit3($id){
        $data = table3::find($id);
        return view('update.table3',['value' => $data]);
    }

    function edit4($id){
        $data = table4::find($id);
        return view('update.table4',['value' => $data]);
    }

    function edit5($id){
        $data = table5::find($id);
        return view('update.table5',['value' => $data]);
    }

    function edit6($id){
        $data = table6::find($id);
        return view('update.table6',['value' => $data]);
    }

    function edit7($id){
        $data = table7::find($id);
        return view('update.table7',['value' => $data]);
    }

    function edit8($id){
        $data = table8::find($id);
        return view('update.table8',['value' => $data]);
    }

    function edit9($id){
        $data = table9::find($id);
        return view('update.table9',['value' => $data]);
    }

    function edit10($id){
        $data = table10::find($id);
        return view('update.table10',['value' => $data]);
    }

    function edit11($id){
        $data = table11::find($id);
        return view('update.table11',['value' => $data]);
    }

/*
|--------------------------------------------------------------------------
| update the data from the database using update function
|--------------------------------------------------------------------------
|
| The below written content which fetches the data from the database so 
| careful while making changes.
|  
|
*/

    function update0(Request $required){

        $t0 = table0::find($required -> id);
        $t0->Panchayat_name = $required->form0_id1;
        $t0->Hamlet_name = $required->form0_id2;
        $t0->Block_name = $required->form0_id34;
        $t0->Head_of_household = $required->form0_id3;
        $t0->Door_no = $required->form0_id4;
        $t0->Family_members = $required->form0_id5;
        $t0->Is_toilet = $required->form0_id6;
        $t0->Is_there_water_facility = $required->form0_id7;
        $t0->Use_toilet_daily = $required->form0_id8;
        $t0->Year = $required->form0_id9;
        $t0->Build_by = $required->form0_id10;
        $t0->One_absorb_pit = $required->form0_id11;
        $t0->Two_absorb_pit = $required->form0_id12;
        $t0->Soak_pit = $required->form0_id13;
        $t0->Gas = $required->form0_id14;
        $t0->Usage = $required->form0_id15;
        $t0->Has_cavity = $required->form0_id16;
        $t0->Disposed_of = $required->form0_id17;
        $t0->Is_damaged = $required->form0_id18;
        $t0->Faults = $required->form0_id19;
        $t0->Without_toilet_houses = $required->form0_id20;
        $t0->Without_toilet_already_benefited = $required->form0_id21;
        $t0->Not_enough_space_tobuild_toilet = $required->form0_id22;
        $t0->Shared_toilet = $required->form0_id23;
        $t0->Household_use = $required->form0_id24;
        $t0->Enough_space_tobuild_toilet = $required->form0_id25;
        $t0->Grading_at_home = $required->form0_id26;
        $t0->Veg_and_kitchen_waste = $required->form0_id27;
        $t0->Plastic_waste = $required->form0_id28;
        $t0->Dry_waste = $required->form0_id29;
        $t0->Existing_facilities = $required->form0_id30;
        $t0->Management_facilities = $required->form0_id31;
        $t0->Has_Livestock = $required->form0_id32;
        $t0->How_many_times = $required->form0_id33;
        $t0->save();
        return redirect('show0');

    }

    function update1(Request $required){

        $t1 = table1::find($required -> id);
        $t1->Panchayat_name = $required->form1_id1;
        $t1->Hamlet_name = $required->form1_id2;
        $t1->Block_name = $required->form1_id8;
        $t1->Ntotal_houses = $required->form1_id3;
        $t1->Ntotal_shops = $required->form1_id4;
        $t1->Ntotal_companies = $required->form1_id5;
        $t1->Npopulation_2011 = $required->form1_id6;
        $t1->Npopulation_current = $required->form1_id7;
        $t1->save();
        return redirect('show1');
    }

    function update2(Request $required){

        $t2 = table2::find($required -> id);
        $t2->Panchayat_name = $required->form2_id1;
        $t2->Hamlet_name = $required->form2_id2;
        $t2->Block_name = $required->form2_id25;
        $t2->Total_houses = $required->form2_id3;
        $t2->Population = $required->form2_id4;
        $t2->One_absorb_pit = $required->form2_id5;
        $t2->Two_absorb_pit = $required->form2_id6;
        $t2->With_septic_tank = $required->form2_id7;
        $t2->Without_septic_tank = $required->form2_id8;
        $t2->Other_options = $required->form2_id9;
        $t2->Total = $required->form2_id10;
        $t2->Everybody_uses = $required->form2_id11;
        $t2->Few_uses = $required->form2_id12;
        $t2->No_one_use = $required->form2_id13;
        $t2->No_awarness = $required->form2_id14;
        $t2->Broken_toilet = $required->form2_id15;
        $t2->Small_repair = $required->form2_id16;
        $t2->Totally_broken = $required->form2_id17;
        $t2->Nhouse_without_toilet = $required->form2_id18;
        $t2->Already_beneficial_scheme = $required->form2_id19;
        $t2->Not_enough_space = $required->form2_id20;
        $t2->Shared_toilet = $required->form2_id21;
        $t2->Sanitary_facilities = $required->form2_id22;
        $t2->No_space = $required->form2_id23;
        $t2->Nsbg_scheme = $required->form2_id24;
        $t2->save();
        return redirect('show2');

    }

    function update3(Request $required){

        $t3 = table3::find($required -> id);
        $t3->Panchayat_name = $required->form3_id1;
        $t3->Hamlet_name = $required->form3_id2;
        $t3->Block_name = $required->form3_id16;
        $t3->Health_complexes = $required->form3_id3;
        $t3->Location = $required->form3_id4;
        $t3->Fully_functional = $required->form3_id5;
        $t3->Partially_used = $required->form3_id6;
        $t3->Not_in_use = $required->form3_id7;
        $t3->Dilapidated_premises = $required->form3_id8;
        $t3->Totally_dilapidated_premises = $required->form3_id9;
        $t3->User_group = $required->form3_id10;
        $t3->Self_help_group = $required->form3_id11;
        $t3->Village_panchayat = $required->form3_id12;
        $t3->Project = $required->form3_id13;
        $t3->Assessment = $required->form3_id14;
        $t3->Current_status_of_work = $required->form3_id15;
        $t3->save();
        return redirect('show3');

    }

    function update4(Request $required){

        $t4 = table4::find($required -> id);
        $t4->Panchayat_name = $required->form4_id1;
        $t4->Hamlet_name = $required->form4_id2;
        $t4->Block_name = $required->form4_id18;
        $t4->School_name = $required->form4_id3;
        $t4->S_has_toilet = $required->form4_id4;
        $t4->Bstudent_toilet = $required->form4_id5;
        $t4->Gstudent_toilet = $required->form4_id6;
        $t4->Ntotal = $required->form4_id7;
        $t4->N_In_use = $required->form4_id8;
        $t4->N_Not_in_use = $required->form4_id9;
        $t4->Required_unit = $required->form4_id10;
        $t4->Estimate = $required->form4_id11;
        $t4->Anganwadi_name = $required->form4_id12;
        $t4->A_has_toilet = $required->form4_id13;
        $t4->A_is_toilet_use = $required->form4_id14;
        $t4->Toilet_required = $required->form4_id15;
        $t4->P_has_toilet = $required->form4_id16;
        $t4->P_is_toilet_use = $required->form4_id17;
        $t4->save();
        return redirect('show4');

    }

    function update5(Request $required){

        $t5 = table5::find($required -> id);
        $t5->Panchayat_name = $required->form5_id1;
        $t5->Hamlet_name = $required->form5_id2;
        $t5->Block_name = $required->form5_id19;
        $t5->Ntemple = $required->form5_id3;
        $t5->Toilet_in_temple = $required->form5_id4;
        $t5->General_toilet_temple = $required->form5_id5;
        $t5->Nmarket = $required->form5_id6;
        $t5->General_toilet_market = $required->form5_id7;
        $t5->Nvao_office = $required->form5_id8;
        $t5->General_toilet_VAO_office = $required->form5_id9;
        $t5->Ncooperative_store = $required->form5_id10;
        $t5->Toilet_cooperative_store = $required->form5_id11;
        $t5->NVPSN_building = $required->form5_id12;
        $t5->General_toilet_VPSN_building = $required->form5_id13;
        $t5->Toilet_SHG_building = $required->form5_id14;
        $t5->Toilet_community = $required->form5_id15;
        $t5-> Toilet_Library = $required->form5_id16;
        $t5->Toilet_Theater = $required->form5_id17;
        $t5->Toilet_bus_shelter = $required->form5_id18;
        $t5->save();
        return redirect('show5');

    }

    function update6(Request $required){

        $t6 = table6::find($required -> id);
        $t6->Panchayat_name = $required->form6_id1;
        $t6->Block_name = $required->form6_id10;
        $t6->Nhamelet = $required->form6_id2;
        $t6->Nschool = $required->form6_id3;
        $t6->SToilet_in_school = $required->form6_id4;
        $t6->Nanganwadi = $required->form6_id5;
        $t6->AToilet_in_anganwadi = $required->form6_id6;
        $t6->Ngovernment = $required->form6_id7;
        $t6->GToilet_in_government = $required->form6_id8;
        $t6->Other_public_places = $required->form6_id9;
        $t6->PToilet_in_places = $required->form6_id10;
        $t6->save();
        return redirect('show6');

    }

    function update7(Request $required){

        $t7 = table7::find($required -> id);
        $t7->Panchayat_name = $required->form7_id1;
        $t7->Block_name = $required->form7_id14;
        $t7->Garbage_process = $required->form7_id2;
        $t7->Nengaged_collectors = $required->form7_id3;
        $t7->Collected_volume = $required->form7_id4;
        $t7->Bio_waste_volume = $required->form7_id5;
        $t7->Flexible_waste = $required->form7_id6;
        $t7->Recycling_waste = $required->form7_id7;
        $t7->Impossible_recycling = $required->form7_id8;
        $t7->Medical_waste = $required->form7_id9;
        $t7->Industrial_waste = $required->form7_id10;
        $t7->Health_waste = $required->form7_id11;
        $t7->Electronic_waste = $required->form7_id12;
        $t7->Contruction_waste = $required->form7_id13;
        $t7->save();
        return redirect('show7');

    }

    function update8(Request $required){

        $t8 = table8::find($required -> id);
        $t8->Panchayat_name = $required->form8_id1;
        $t8->Hamlet_name = $required->form8_id2;
        $t8->Block_name = $required->form8_id32;
        $t8->Nhouse = $required->form8_id3;
        $t8->Ncleaner = $required->form8_id4;
        $t8->Tgood_condition = $required->form8_id5;
        $t8->Tminor_repair = $required->form8_id6;
        $t8->Tcompletely_damaged = $required->form8_id7;
        $t8->Tneeded = $required->form8_id8;
        $t8->Pgood_condition = $required->form8_id9;
        $t8-> Pminor_repair = $required->form8_id10;
        $t8->Pcompletely_damaged = $required->form8_id11;
        $t8->Pneeded = $required->form8_id12;
        $t8->Bgood_condition = $required->form8_id13;
        $t8->Bminor_repair = $required->form8_id14;
        $t8->Bcompletely_damaged = $required->form8_id15;
        $t8->Bneeded = $required->form8_id16;
        $t8->Egood_condition = $required->form8_id17;
        $t8->Eminor_repair = $required->form8_id18;
        $t8->Ecompletely_damaged = $required->form8_id19;
        $t8-> Eneeded = $required->form8_id20;
        $t8->Other_vehicle = $required->form8_id21;
        $t8->Nexisting_pits = $required->form8_id22;
        $t8-> Npits_required = $required->form8_id23;
        $t8->Sgood_condition = $required->form8_id24;
        $t8-> Sminor_repair = $required->form8_id25;
        $t8->Scompletely_damaged = $required->form8_id26;
        $t8->Sneeded = $required->form8_id27;
        $t8->Vgood_condition = $required->form8_id28;
        $t8->Vminor_repair = $required->form8_id29;
        $t8->Vcompletely_damaged = $required->form8_id30;
        $t8->Is_earthworm = $required->form8_id31;
        $t8->save();
        return redirect('show8');

    }

    function update9(Request $required){

        $t9 = table9::find($required -> id);
        $t9->Panchayat_name = $required->form9_id1;
        $t9->Hamlet_name = $required->form9_id2;
        $t9->Block_name = $required->form9_id12;
        $t9->Ncleaner = $required->form9_id3;
        $t9->Cplace_name = $required->form9_id4;
        $t9->Clocation = $required->form9_id5;
        $t9->Cdistance = $required->form9_id6;
        $t9->Slocation = $required->form9_id7;
        $t9->Sdistance = $required->form9_id8;
        $t9->Vlocation = $required->form9_id9;
        $t9->Vdistance = $required->form9_id10;
        $t9->Post_in_panchayat = $required->form9_id11;
        $t9->save();
        return redirect('show9');

    }

    function update10(Request $required){

        $t10 = table10::find($required -> id);
        $t10->Panchayat_name = $required->form10_id1;
        $t10->Hamlet_name = $required->form10_id2;
        $t10->Block_name = $required->form10_id38;
        $t10->Nstreet = $required->form10_id3;
        $t10->Mhouse = $required->form10_id4;
        $t10->Whome_garden = $required->form10_id5;
        $t10->WHouse_suction_well = $required->form10_id6;
        $t10->WHouse_connected_sewage = $required->form10_id7;
        $t10->WHouse_connected_community = $required->form10_id8;
        $t10->WHouse_with_amenities = $required->form10_id9;
        $t10->Whouse_GWMfacilities = $required->form10_id10;
        $t10->Wplace_with_stagnantwater = $required->form10_id11;
        $t10->Shouse_without_amenities = $required->form10_id12;
        $t10->Shome_garden = $required->form10_id13;
        $t10->Shouse_requiring_septic_tank = $required->form10_id14;
        $t10->Shouse_connected_sewage = $required->form10_id15;
        $t10->Shouse_connected_community = $required->form10_id16;
        $t10->Sother_facilities = $required->form10_id17;
        $t10->Rsoak_pit = $required->form10_id18;
        $t10->Rdrainage = $required->form10_id19;
        $t10->Rcommunity_soak_pit = $required->form10_id20;
        $t10->Rhorizontal_soak_pit = $required->form10_id21;
        $t10->Rvertical_soak_pit = $required->form10_id22;
        $t10->Rwater_stabilization = $required->form10_id23;
        $t10->Rrenovation_work = $required->form10_id24;
        $t10->Osoak_pit = $required->form10_id25;
        $t10->Odrainage = $required->form10_id26;
        $t10->Ocommunity_soak_pit = $required->form10_id27;
        $t10->Ohorizontal_soak_pit = $required->form10_id28;
        $t10->Overtical_soak_pit = $required->form10_id29;
        $t10->Orenovation_work = $required->form10_id30;
        $t10->Wsoak_pit = $required->form10_id31;
        $t10->Wdrainage = $required->form10_id32;
        $t10->Wcommunity_soak_pit = $required->form10_id33;
        $t10->Whorizontal_soak_pit = $required->form10_id34;
        $t10->Wvertical_soak_pit = $required->form10_id35;
        $t10->Wwater_stabilization = $required->form10_id36;
        $t10->Wrenovation_work = $required->form10_id37;
        $t10->save();
        return redirect('show10');

    }

    function update11(Request $required){

        $t11 = table11::find($required -> id);
        $t11->Panchayat_name = $required->form11_id1;
        $t11->Block_name = $required->form11_id17;
        $t11->Detail_of_work = $required->form11_id2;
        $t11->Total_amount_required = $required->form11_id3;
        $t11->MGNREGS = $required->form11_id4;
        $t11->Vtied_water_supply = $required->form11_id5;
        $t11->Vtied_sanitation = $required->form11_id6;
        $t11->Vunited = $required->form11_id7;
        $t11->Ltied_water_supply = $required->form11_id8;
        $t11->Ltied_sanitation = $required->form11_id9;
        $t11->Lunited = $required->form11_id10;
        $t11->Dtied_water_supply = $required->form11_id11;
        $t11->Dtied_sanitation = $required->form11_id12;
        $t11->Dunited = $required->form11_id13;
        $t11->SBM = $required->form11_id14;
        $t11->Miscellaneous_project = $required->form11_id15;
        $t11->Administrative_permission = $required->form11_id16;
        $t11->save();
        return redirect('show11');

    }

}
