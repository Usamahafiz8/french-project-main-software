<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Step1;
use App\Models\Step2;
use App\Models\Step3;
use App\Models\Step4;
use App\Models\Step4Detail;
use App\Models\Step5;
use App\Models\Step6;
use App\Models\Step6Detail;
use App\Models\Step7;
use App\Models\Step8;
use App\Models\Step8Detail;
use App\Models\Step9;
use App\Models\Step10;
use App\Models\Step10Detail;
use App\Models\Step11;
use App\Models\Step11Detail;
use App\Models\Step12;
use App\Models\Step13;
use App\Models\Step13Detail;
use App\Models\Step14;
use App\Models\Step15;
class CustomerController extends Controller
{
    public function deletecustomer($id)
    {
        $customer_data = Customer::find($id);
        $customer_id = $customer_data->id;
        $customer_data->status = 0;
        $customer_data->update();
        return redirect()->back()->with('success', 'Customer Deleted Successfuly!');
    }
    public function customerdetails($id)
    {   
        $customer_data = Customer::find($id);
        $auditor_id = $customer_data->user_id;
        $user_data = User::where('id', $auditor_id)->first();
        $step1_data = Step1::where('customer_id', $id)->first();
        $step2_data = Step2::where('customer_id', $id)->first();
        $step3_data = Step3::where('customer_id', $id)->first();
        $step4_data = Step4::where('customer_id', $id)->first();
        $step5_data = Step5::where('customer_id', $id)->first();
        $step6_data = Step6::where('customer_id', $id)->first();
        $step7_data = Step7::where('customer_id', $id)->first();
        $step8_data = Step8::where('customer_id', $id)->first();
        $step9_data = Step9::where('customer_id', $id)->first();
        $step10_data = Step10::where('customer_id', $id)->first();
        $step11_data = Step11::where('customer_id', $id)->first();
        $step12_data = Step12::where('customer_id', $id)->first();
        $step13_data = Step13::where('customer_id', $id)->first();
        $step14_data = Step14::where('customer_id', $id)->first();
        $step15_data = Step15::where('customer_id', $id)->first();
        $step4_dtl_data = Step4Detail::where('customer_id', $id)->get();
        $step6_dtl_data = Step6Detail::where('customer_id', $id)->get();
        $step8_dtl_data = Step8Detail::where('customer_id', $id)->get();
        $step10_dtl_data = Step10Detail::where('customer_id', $id)->get();
        $step11_dtl_data = Step11Detail::where('customer_id', $id)->get();
        $step13_dtl_data = Step13Detail::where('customer_id', $id)->get();

        return view('customerDetails',compact('user_data','customer_data', 'step1_data', 'step2_data', 'step3_data','step4_data', 'step5_data', 'step6_data','step7_data', 'step8_data', 'step9_data','step10_data','step11_data','step12_data', 'step13_data', 'step14_data','step15_data','step4_dtl_data','step6_dtl_data','step8_dtl_data','step10_dtl_data','step11_dtl_data','step13_dtl_data'));
    }

    public function add_customer(Request $req)
    {
        $add_customer = new Customer();
        $add_customer->user_id = $req->user_id;
        $add_customer->name = $req->name;
        $add_customer->first_name = $req->first_name;
        $add_customer->email = $req->email;
        $add_customer->contact = $req->contact;
        $add_customer->address = $req->address;
        $add_customer->tax_income = $req->tax_income;
        $add_customer->people_on_hearth = $req->people_on_hearth;
        $add_customer->status = 1;
        $add_customer->save();  
        return redirect()->back()->with('success','Customer Created successfuly');
    }

    public function step1Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s1_aud_name = $request->input('s1_aud_name');  
        $s1_aud_f_name = $request->input('s1_aud_f_name');  
        $s1_aud_visit_date = $request->input('s1_aud_visit_date');  
        $s1_aud_st_num = $request->input('s1_aud_st_num');  
        $s1_cus_name = $request->input('s1_cus_name');  
        $s1_cus_f_name = $request->input('s1_cus_f_name');  
        $s1_cus_phone = $request->input('s1_cus_phone');  
        $s1_cus_email = $request->input('s1_cus_email');  
        $s1_people_on_earth = $request->input('s1_people_on_earth');  
        $s1_tax_income = $request->input('s1_tax_income');  
        $construction_date = $request->input('s1_cons_date');  
        $s1_altitude = $request->input('s1_altitude');  
        $s1_address = $request->input('s1_address');  
        $s1_accomodation = $request->input('s1_accomodation');  
        $s1_w_comfort_level = $request->input('s1_w_comfort_level');  
        $s1_s_comfort_level = $request->input('s1_s_comfort_level');  
        $s1_client_goals = $request->input('s1_client_goals');  
        $s1_heating_mode = $request->input('s1_heating_mode');  
        $isolationGesture = $request->input('isolationGesture');  
        $isolationGestureValue = $request->input('isolationGestureValue');  
        $lostAttics = $request->input('lostAttics');  
        $lostAtticsValue = $request->input('lostAtticsValue');  
        $lowfloor = $request->input('lowfloor');  
        $lowfloorValue = $request->input('lowfloorValue');  
        $s1_crawlers = $request->input('s1_crawlers');  
        $s1_crawlers_value = $request->input('s1_crawlers_value');  
        $s1_td_baloon = $request->input('s1_td_baloon');  
        $s1_td_baloon_val = $request->input('s1_td_baloon_val');  
        $waterheater_type = $request->input('s1_water_heater');  
        $s1_water_heater_val = $request->input('s1_water_heater_val');  
        $s1_cmv_hygro = $request->input('s1_cmv_hygro');  
        $s1_comments = $request->input('s1_comments');  
        

        $s1_client_goals_json = json_encode($s1_client_goals);
        $s1_heating_mode_json = json_encode($s1_heating_mode);

        $isolationGesture_json = json_encode($isolationGesture);
        $lostAttics_json = json_encode($lostAttics);
        $lowfloor_json = json_encode($lowfloor);
        $s1_crawlers_json = json_encode($s1_crawlers);
        $s1_td_baloon_json = json_encode($s1_td_baloon);
        $waterheater_type_json = json_encode($waterheater_type);
        $s1_cmv_hygro_json = json_encode($s1_cmv_hygro);
        
        
        if (Step1::where('customer_id', $customerId)->exists()) {

            $step1_query = Step1::where('customer_id', $customerId)->first();
            $step1_id = $auditor_id = $step1_query->id;
            $step1_update = Step1::find($step1_id);

            $step1_update->customer_id = $customerId;
            $step1_update->aud_f_name = $s1_aud_f_name;
            $step1_update->aud_visit_date = $s1_aud_visit_date;
            $step1_update->aud_statemnt_no = $s1_aud_st_num;
            $step1_update->people_in_hearth = $s1_people_on_earth;
            $step1_update->tax_income = $s1_tax_income;
            $step1_update->construction_date = $construction_date;
            $step1_update->altitude = $s1_altitude;
            $step1_update->occupancy_accomodation = $s1_accomodation;
            $step1_update->winter_comfortlevel = $s1_w_comfort_level;
            $step1_update->summer_comfortlevel = $s1_s_comfort_level;
            $step1_update->client_goals = $s1_client_goals_json;
            $step1_update->heatingmode_change = $s1_heating_mode_json;
            $step1_update->isolation_gesture_type = $isolationGesture_json;
            $step1_update->isolation_gesture_val = $isolationGestureValue;
            $step1_update->low_floor_type = $lowfloor_json;
            $step1_update->low_floor_val = $lowfloorValue;
            $step1_update->lost_attics_type = $lostAttics_json;
            $step1_update->lost_attics_val = $lostAtticsValue;
            $step1_update->crawlers_type = $s1_crawlers_json;
            $step1_update->crawlers_val = $s1_crawlers_value;
            $step1_update->tdynamic_baloon_type = $s1_td_baloon_json;
            $step1_update->tdynamic_baloon_val = $s1_td_baloon_val;
            $step1_update->waterheater_type = $waterheater_type_json;
            $step1_update->waterheater_val = $s1_water_heater_val;
            $step1_update->ventilation_sys_installation = $s1_cmv_hygro_json;
            $step1_update->comments = $s1_comments;
            $step1_update->update();  

            return response()->json(['success'=>'Data updated successfully.']);
        } else {
            $add_step1 = new Step1();

            $add_step1->customer_id = $customerId;
            $add_step1->aud_f_name = $s1_aud_f_name;
            $add_step1->aud_visit_date = $s1_aud_visit_date;
            $add_step1->aud_statemnt_no = $s1_aud_st_num;
            $add_step1->people_in_hearth = $s1_people_on_earth;
            $add_step1->tax_income = $s1_tax_income;
            $add_step1->construction_date = $construction_date;
            $add_step1->altitude = $s1_altitude;
            $add_step1->occupancy_accomodation = $s1_accomodation;
            $add_step1->winter_comfortlevel = $s1_w_comfort_level;
            $add_step1->summer_comfortlevel = $s1_s_comfort_level;
            $add_step1->client_goals = $s1_client_goals_json;
            $add_step1->heatingmode_change = $s1_heating_mode_json;
            $add_step1->isolation_gesture_type = $isolationGesture_json;
            $add_step1->isolation_gesture_val = $isolationGestureValue;
            $add_step1->low_floor_type = $lowfloor_json;
            $add_step1->low_floor_val = $lowfloorValue;
            $add_step1->lost_attics_type = $lostAttics_json;
            $add_step1->lost_attics_val = $lostAtticsValue;
            $add_step1->crawlers_type = $s1_crawlers_json;
            $add_step1->crawlers_val = $s1_crawlers_value;
            $add_step1->tdynamic_baloon_type = $s1_td_baloon_json;
            $add_step1->tdynamic_baloon_val = $s1_td_baloon_val;
            $add_step1->waterheater_type = $waterheater_type_json;
            $add_step1->waterheater_val = $s1_water_heater_val;
            $add_step1->ventilation_sys_installation = $s1_cmv_hygro_json;
            $add_step1->comments = $s1_comments;
            $add_step1->save();  
                        
            return response()->json(['success'=>'Data saved successfully.']);
        }
        
        
    }


    public function step2Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s2_low_floor_type = json_encode($request->input('s2_low_floor_type'));
        $s2_bigwork = json_encode($request->input('s2_bigwork'));
        $s2_lfg_insulation = json_encode($request->input('s2_lfg_insulation'));
        $s2_insulation_thick = $request->input('s2_insulation_thick');  
        $s2_crawlers_surface = $request->input('s2_crawlers_surface');  
        $s2_exterior_ceiling = $request->input('s2_exterior_ceiling');  
        $s2_attic_area = json_encode($request->input('s2_attic_area'));
        $s2_attic_area_val = $request->input('s2_attic_area_val');  
        $s2_photo = $request->file('s2_photo');  
        $s2_hf_photo1 = $request->file('s2_hf_photo1');  
        $s2_hf_photo2 = $request->file('s2_hf_photo2');  
        $s2_comments = $request->input('s2_comments');  
        
        if (Step2::where('customer_id', $customerId)->exists()) {
            $step2_query = Step2::where('customer_id', $customerId)->first();
            $step2_id = $step2_query->id;
            $step2_update = Step2::find($step2_id);
            $step2_update->customer_id = $customerId;
            $step2_update->low_floor_type = $s2_low_floor_type;
            $step2_update->bigwork = $s2_bigwork;
            $step2_update->lfg_insulation = $s2_lfg_insulation;
            $step2_update->insulation_thickness = $s2_insulation_thick;
            $step2_update->crawlers_surface = $s2_crawlers_surface;
            $step2_update->exterior_ceiling = $s2_exterior_ceiling;
            $step2_update->attic_area = $s2_attic_area;
            $step2_update->attic_area_val = $s2_attic_area_val;
            $step2_update->comments = $s2_comments;
            
            if ($s2_photo != null) {
                $s2_photo_name = time() . '_' . $s2_photo->getClientOriginalName();
                $s2_photo->move(public_path('images'), $s2_photo_name);
                $step2_update->photo = $s2_photo_name;
            }
            if ($s2_hf_photo1 != null) {
                $s2_hf_photo1_name = time() . '_' . $s2_hf_photo1->getClientOriginalName();
                $s2_hf_photo1->move(public_path('images'), $s2_hf_photo1_name);
                $step2_update->hf_photo1 = $s2_hf_photo1_name;
            }
            if ($s2_hf_photo2 != null) {
                $s2_hf_photo2_name = time() . '_' . $s2_hf_photo2->getClientOriginalName();
                $s2_hf_photo2->move(public_path('images'), $s2_hf_photo2_name);
                $step2_update->hf_photo2 = $s2_hf_photo2_name;
            }

            $step2_update->update();  
            return response()->json(['success'=>'Step2 updated successfully.']);
        } else {
            $add_step2 = new Step2();
            $add_step2->customer_id = $customerId;
            $add_step2->low_floor_type = $s2_low_floor_type;
            $add_step2->bigwork = $s2_bigwork;
            $add_step2->lfg_insulation = $s2_lfg_insulation;
            $add_step2->insulation_thickness = $s2_insulation_thick;
            $add_step2->crawlers_surface = $s2_crawlers_surface;
            $add_step2->exterior_ceiling = $s2_exterior_ceiling;
            $add_step2->attic_area = $s2_attic_area;
            $add_step2->attic_area_val = $s2_attic_area_val;
            $add_step2->comments = $s2_comments;
            if ($s2_photo != null) {
                $s2_photo_name = time() . '_' . $s2_photo->getClientOriginalName();
                $s2_photo->move(public_path('images'), $s2_photo_name);
                $add_step2->photo = $s2_photo_name;
            }
            if ($s2_hf_photo1 != null) {
                $s2_hf_photo1_name = time() . '_' . $s2_hf_photo1->getClientOriginalName();
                $s2_hf_photo1->move(public_path('images'), $s2_hf_photo1_name);
                $add_step2->hf_photo1 = $s2_hf_photo1_name;
            }
            if ($s2_hf_photo2 != null) {
                $s2_hf_photo2_name = time() . '_' . $s2_hf_photo2->getClientOriginalName();
                $s2_hf_photo2->move(public_path('images'), $s2_hf_photo2_name);
                $add_step2->hf_photo2 = $s2_hf_photo2_name;
            }
            $add_step2->save();  
            return response()->json(['success'=>'Step2 saved successfully.']);
        }
    }


public function step3Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s3_rock = json_encode($request->input('s3_rock'));
        $s3_concrete = json_encode($request->input('s3_concrete'));
        $s3_brick = json_encode($request->input('s3_brick'));
        $s3_earth = json_encode($request->input('s3_earth'));
        $s3_drink = json_encode($request->input('s3_drink'));
        $s3_wall_thickness = $request->input('s3_wall_thickness');  
        $s3_insulation = json_encode($request->input('s3_insulation'));
        $s3_thickness = $request->input('s3_thickness');  
        $s3_facade_orientation = json_encode($request->input('s3_facade_orientation'));
        $s3_height = $request->input('s3_height');  
        $s3_length = $request->input('s3_length');  
        $s3_surface = $request->input('s3_surface');  
        $s3_adjoining_area = $request->input('s3_adjoining_area');  
        $s3_area2 = $request->input('s3_area2');  
        $s3_area3 = $request->input('s3_area3');  
        $s3_area4 = $request->input('s3_area4');  
        $s3_t_srfc_area = $request->input('s3_t_srfc_area');  
        $s3_srfc_insulator_Type = json_encode($request->input('s3_srfc_insulator_Type'));
        $s3_area_tobe_insltd = $request->input('s3_area_tobe_insltd');  
        $s3_photo = $request->file('s3_photo');          

        
        if (Step3::where('customer_id', $customerId)->exists()) {
            $step3_query = Step3::where('customer_id', $customerId)->first();
            $step3_id = $step3_query->id;
            $step3_update = Step3::find($step3_id);
            $step3_update->rock = $s3_rock;
            $step3_update->concrete = $s3_concrete;
            $step3_update->brick  = $s3_brick;
            $step3_update->earth = $s3_earth;
            $step3_update->drink = $s3_drink;
            $step3_update->wall_thickness = $s3_wall_thickness;
            $step3_update->insulation  = $s3_insulation;
            $step3_update->thickness = $s3_thickness;
            $step3_update->facade_orientation = $s3_facade_orientation;
            $step3_update->height = $s3_height;
            $step3_update->length  = $s3_length;
            $step3_update->surface = $s3_surface;
            $step3_update->adjoining_area = $s3_adjoining_area;
            $step3_update->area2 = $s3_area2;
            $step3_update->area3  = $s3_area3;
            $step3_update->area4 = $s3_area4;
            $step3_update->t_srfc_area = $s3_t_srfc_area;
            $step3_update->srfc_insulator_Type  = $s3_srfc_insulator_Type;
            $step3_update->area_tobe_insltd = $s3_area_tobe_insltd;
            
            if ($s3_photo != null) {
                $s3_photo_name = time() . '_' . $s3_photo->getClientOriginalName();
                $s3_photo->move(public_path('images'), $s3_photo_name);
                $step3_update->photo = $s3_photo_name;
            }
            
            $step3_update->update();  
            return response()->json(['success'=>'Step3 updated successfully.']);
        } else {
            $add_step3 = new Step3();
            $add_step3->customer_id = $customerId;
            $add_step3->rock = $s3_rock;
            $add_step3->concrete = $s3_concrete;
            $add_step3->brick  = $s3_brick;
            $add_step3->earth = $s3_earth;
            $add_step3->drink = $s3_drink;
            $add_step3->wall_thickness = $s3_wall_thickness;
            $add_step3->insulation  = $s3_insulation;
            $add_step3->thickness = $s3_thickness;
            $add_step3->facade_orientation = $s3_facade_orientation;
            $add_step3->height = $s3_height;
            $add_step3->length  = $s3_length;
            $add_step3->surface = $s3_surface;
            $add_step3->adjoining_area = $s3_adjoining_area;
            $add_step3->area2 = $s3_area2;
            $add_step3->area3  = $s3_area3;
            $add_step3->area4 = $s3_area4;
            $add_step3->t_srfc_area = $s3_t_srfc_area;
            $add_step3->srfc_insulator_Type  = $s3_srfc_insulator_Type;
            $add_step3->area_tobe_insltd = $s3_area_tobe_insltd;
            
            if ($s3_photo != null) {
                $s3_photo_name = time() . '_' . $s3_photo->getClientOriginalName();
                $s3_photo->move(public_path('images'), $s3_photo_name);
                $add_step3->photo = $s3_photo_name;
            }
            
            $add_step3->save();  
            return response()->json(['success'=>'Step3 saved successfully.']);
        }
    }
    public function step4Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $s4_tbl_val = $request->input('s4_tbl_val');    
            $s4_photo = $request->file('s4_photo');  
            $s4_comments = $request->input('s4_comments');    
            if($s4_tbl_val == 100)
            {
                Step4Detail::where('customer_id', $customerId)->delete();    
            }
            if (Step4::where('customer_id', $customerId)->exists()) {
                $step4_query = Step4::where('customer_id', $customerId)->first();
                $step4_id = $step4_query->id;
                $step4_update = Step4::find($step4_id);
                $step4_update->tbl_val = $s4_tbl_val;
                $step4_update->comments = $s4_comments;
                if ($s4_photo != null) {
                    $s4_photo_name = time() . '_' . $s4_photo->getClientOriginalName();
                    $s4_photo->move(public_path('images'), $s4_photo_name);
                    $step4_update->photo = $s4_photo_name;
                }        
                $step4_update->update();
                return response()->json("step4 updated");        
            }
            else{
                $add_step4 = New Step4();
                $add_step4->customer_id  = $customerId;
                $add_step4->tbl_val = $s4_tbl_val;
                $add_step4->comments = $s4_comments;
                if ($s4_photo != null) {
                    $s4_photo_name = time() . '_' . $s4_photo->getClientOriginalName();
                    $s4_photo->move(public_path('images'), $s4_photo_name);
                    $add_step4->photo = $s4_photo_name;
                }        
                $add_step4->save();
                return response()->json("step4 saved");        
            }    
            
        }
    public function step4Details(Request $request)
    {   
        $s4_tbl_rows = $request->input('rows');    
        $customerId = $s4_tbl_rows[0]['customer_id'];

        if (Step4Detail::where('customer_id', $customerId)->exists()) {
            $step4_dtl_query = Step4Detail::where('customer_id', $customerId)->get();
            $step4_dtl_count =Step4Detail::where('customer_id', $customerId)->count();
            $s4_q_id = array();
            if($step4_dtl_count == count($s4_tbl_rows))
            {
                foreach($step4_dtl_query as $step_q)
                {
                    array_push($s4_q_id, $step_q->id);
                }
                for($i=0; $i<count($s4_q_id); $i++)
                {
                    $step4_dtl_update = Step4Detail::find($s4_q_id[$i]);        
                    $step4_dtl_update->kind_opening = $s4_tbl_rows[$i]['kind_opening'];
                    $step4_dtl_update->cop_no = $s4_tbl_rows[$i]['cop_no'];
                    $step4_dtl_update->cop_length = $s4_tbl_rows[$i]['cop_length'];
                    $step4_dtl_update->cop_height = $s4_tbl_rows[$i]['cop_height'];
                    $step4_dtl_update->frame = $s4_tbl_rows[$i]['frame'];
                    $step4_dtl_update->glazing = $s4_tbl_rows[$i]['glazing'];
                    $step4_dtl_update->shutter = $s4_tbl_rows[$i]['shutter'];
                    $step4_dtl_update->update();
                    return response()->json("step 4 dtls updated");        
                }
            }
            else if($step4_dtl_count < count($s4_tbl_rows))
            {
                foreach($step4_dtl_query as $step_q)
                {
                    array_push($s4_q_id, $step_q->id);
                }
                for($i=0; $i<count($s4_q_id); $i++)
                {
                    $step4_dtl_update = Step4Detail::find($s4_q_id[$i]);        
                    $step4_dtl_update->kind_opening = $s4_tbl_rows[$i]['kind_opening'];
                    $step4_dtl_update->cop_no = $s4_tbl_rows[$i]['cop_no'];
                    $step4_dtl_update->cop_length = $s4_tbl_rows[$i]['cop_length'];
                    $step4_dtl_update->cop_height = $s4_tbl_rows[$i]['cop_height'];
                    $step4_dtl_update->frame = $s4_tbl_rows[$i]['frame'];
                    $step4_dtl_update->glazing = $s4_tbl_rows[$i]['glazing'];
                    $step4_dtl_update->shutter = $s4_tbl_rows[$i]['shutter'];
                    $step4_dtl_update->update();
                    // return response()->json("step 4 dtls updated");        
                }
                for($j=$step4_dtl_count; $j<count($s4_tbl_rows); $j++)
                {
                    $step4_dtl_addnew = new Step4Detail();
                    $step4_dtl_addnew->customer_id = $customerId;
                    $step4_dtl_addnew->kind_opening = $s4_tbl_rows[$j]['kind_opening'];
                    $step4_dtl_addnew->cop_no = $s4_tbl_rows[$j]['cop_no'];
                    $step4_dtl_addnew->cop_length = $s4_tbl_rows[$j]['cop_length'];
                    $step4_dtl_addnew->cop_height = $s4_tbl_rows[$j]['cop_height'];
                    $step4_dtl_addnew->frame = $s4_tbl_rows[$j]['frame'];
                    $step4_dtl_addnew->glazing = $s4_tbl_rows[$j]['glazing'];
                    $step4_dtl_addnew->shutter = $s4_tbl_rows[$j]['shutter'];
                    $step4_dtl_addnew->save();
                }
            }
            else{
                foreach($step4_dtl_query as $step_q)
                {
                    array_push($s4_q_id, $step_q->id);
                }
                for($i=0; $i<count($s4_tbl_rows); $i++)
                {
                    $step4_dtl_update = Step4Detail::find($s4_q_id[$i]);        
                    $step4_dtl_update->kind_opening = $s4_tbl_rows[$i]['kind_opening'];
                    $step4_dtl_update->cop_no = $s4_tbl_rows[$i]['cop_no'];
                    $step4_dtl_update->cop_length = $s4_tbl_rows[$i]['cop_length'];
                    $step4_dtl_update->cop_height = $s4_tbl_rows[$i]['cop_height'];
                    $step4_dtl_update->frame = $s4_tbl_rows[$i]['frame'];
                    $step4_dtl_update->glazing = $s4_tbl_rows[$i]['glazing'];
                    $step4_dtl_update->shutter = $s4_tbl_rows[$i]['shutter'];
                    $step4_dtl_update->update();
                    // return response()->json("step 4 dtls updated");        
                }
                for($i=count($s4_tbl_rows); $i<count($s4_q_id); $i++){
                    Step4Detail::where('id',$s4_q_id[$i])->delete();
                }
            }
            return response()->json("step 4 dtls updated");        
            
        }
        else{
            for($i = 0; $i<count($s4_tbl_rows); $i++)
            {
            $add_step4_dtl = New Step4Detail();
            $add_step4_dtl->customer_id  = $customerId;
            $add_step4_dtl->kind_opening = $s4_tbl_rows[$i]['kind_opening'];
            $add_step4_dtl->cop_no = $s4_tbl_rows[$i]['cop_no'];
            $add_step4_dtl->cop_length = $s4_tbl_rows[$i]['cop_length'];
            $add_step4_dtl->cop_height = $s4_tbl_rows[$i]['cop_height'];
            $add_step4_dtl->frame = $s4_tbl_rows[$i]['frame'];
            $add_step4_dtl->glazing = $s4_tbl_rows[$i]['glazing'];
            $add_step4_dtl->shutter = $s4_tbl_rows[$i]['shutter'];
            $add_step4_dtl->save();
            }
            return response()->json("step4 dtls saved");        
            
        }    
    }
    public function step5Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s5_rock = json_encode($request->input('s5_rock'));
        $s5_concrete = json_encode($request->input('s5_concrete'));
        $s5_brick = json_encode($request->input('s5_brick'));
        $s5_earth = json_encode($request->input('s5_earth'));
        $s5_drink = json_encode($request->input('s5_drink'));
        $s5_wall_thickness = $request->input('s5_wall_thickness');  
        $s5_insulation = json_encode($request->input('s5_insulation'));
        $s5_thickness = $request->input('s5_thickness');  
        $s5_facade_orientation = json_encode($request->input('s5_facade_orientation'));
        $s5_height = $request->input('s5_height');  
        $s5_length = $request->input('s5_length');  
        $s5_surface = $request->input('s5_surface');  
        $s5_adjoining_area = $request->input('s5_adjoining_area');  
        $s5_area2 = $request->input('s5_area2');  
        $s5_area3 = $request->input('s5_area3');  
        $s5_area4 = $request->input('s5_area4');  
        $s5_t_srfc_area = $request->input('s5_t_srfc_area');  
        $s5_srfc_insulator_Type = json_encode($request->input('s5_srfc_insulator_Type'));
        $s5_area_tobe_insltd = $request->input('s5_area_tobe_insltd');  
        $s5_photo = $request->file('s5_photo');          

        if (Step5::where('customer_id', $customerId)->exists()) {
            $step5_query = Step5::where('customer_id', $customerId)->first();
            $step5_id = $step5_query->id;
            $step5_update = Step5::find($step5_id);
            $step5_update->rock = $s5_rock;
            $step5_update->concrete = $s5_concrete;
            $step5_update->brick  = $s5_brick;
            $step5_update->earth = $s5_earth;
            $step5_update->drink = $s5_drink;
            $step5_update->wall_thickness = $s5_wall_thickness;
            $step5_update->insulation  = $s5_insulation;
            $step5_update->thickness = $s5_thickness;
            $step5_update->facade_orientation = $s5_facade_orientation;
            $step5_update->height = $s5_height;
            $step5_update->length  = $s5_length;
            $step5_update->surface = $s5_surface;
            $step5_update->adjoining_area = $s5_adjoining_area;
            $step5_update->area2 = $s5_area2;
            $step5_update->area3  = $s5_area3;
            $step5_update->area4 = $s5_area4;
            $step5_update->t_srfc_area = $s5_t_srfc_area;
            $step5_update->srfc_insulator_Type  = $s5_srfc_insulator_Type;
            $step5_update->area_tobe_insltd = $s5_area_tobe_insltd;
            
            if ($s5_photo != null) {
                $s5_photo_name = time() . '_' . $s5_photo->getClientOriginalName();
                $s5_photo->move(public_path('images'), $s5_photo_name);
                $step5_update->photo = $s5_photo_name;
            }
            
            $step5_update->update();  
            return response()->json(['success'=>'step5 updated successfully.']);
        } else {
            $add_step5 = new Step5();
            $add_step5->customer_id = $customerId;
            $add_step5->rock = $s5_rock;
            $add_step5->concrete = $s5_concrete;
            $add_step5->brick  = $s5_brick;
            $add_step5->earth = $s5_earth;
            $add_step5->drink = $s5_drink;
            $add_step5->wall_thickness = $s5_wall_thickness;
            $add_step5->insulation  = $s5_insulation;
            $add_step5->thickness = $s5_thickness;
            $add_step5->facade_orientation = $s5_facade_orientation;
            $add_step5->height = $s5_height;
            $add_step5->length  = $s5_length;
            $add_step5->surface = $s5_surface;
            $add_step5->adjoining_area = $s5_adjoining_area;
            $add_step5->area2 = $s5_area2;
            $add_step5->area3  = $s5_area3;
            $add_step5->area4 = $s5_area4;
            $add_step5->t_srfc_area = $s5_t_srfc_area;
            $add_step5->srfc_insulator_Type  = $s5_srfc_insulator_Type;
            $add_step5->area_tobe_insltd = $s5_area_tobe_insltd;
            
            if ($s5_photo != null) {
                $s5_photo_name = time() . '_' . $s5_photo->getClientOriginalName();
                $s5_photo->move(public_path('images'), $s5_photo_name);
                $add_step5->photo = $s5_photo_name;
            }
            
            $add_step5->save();  
            return response()->json(['success'=>'step5 saved successfully.']);
        }
    }

    public function step6Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $s6_tbl_val = $request->input('s6_tbl_val');    
            $s6_photo = $request->file('s6_photo');  
            $s6_comments = $request->input('s6_comments');    
            if($s6_tbl_val == 100)
            {
                Step6Detail::where('customer_id', $customerId)->delete();    
            }
            if (step6::where('customer_id', $customerId)->exists()) {
                $step6_query = step6::where('customer_id', $customerId)->first();
                $step6_id = $step6_query->id;
                $step6_update = step6::find($step6_id);
                $step6_update->tbl_val = $s6_tbl_val;
                $step6_update->comments = $s6_comments;
                if ($s6_photo != null) {
                    $s6_photo_name = time() . '_' . $s6_photo->getClientOriginalName();
                    $s6_photo->move(public_path('images'), $s6_photo_name);
                    $step6_update->photo = $s6_photo_name;
                }        
                $step6_update->update();
                return response()->json("step6 updated");        
            }
            else{
                $add_step6 = New step6();
                $add_step6->customer_id  = $customerId;
                $add_step6->tbl_val = $s6_tbl_val;
                $add_step6->comments = $s6_comments;
                if ($s6_photo != null) {
                    $s6_photo_name = time() . '_' . $s6_photo->getClientOriginalName();
                    $s6_photo->move(public_path('images'), $s6_photo_name);
                    $add_step6->photo = $s6_photo_name;
                }        
                $add_step6->save();
                return response()->json("step6 saved");        
            }    
            
        }
    public function step6Details(Request $request)
    {   
        $s6_tbl_rows = $request->input('rows');    
        $customerId = $s6_tbl_rows[0]['customer_id'];

        if (Step6Detail::where('customer_id', $customerId)->exists()) {
            $step6_dtl_query = Step6Detail::where('customer_id', $customerId)->get();
            $step6_dtl_count =Step6Detail::where('customer_id', $customerId)->count();
            $s6_q_id = array();
            if($step6_dtl_count == count($s6_tbl_rows))
            {
                foreach($step6_dtl_query as $step_q)
                {
                    array_push($s6_q_id, $step_q->id);
                }
                for($i=0; $i<count($s6_q_id); $i++)
                {
                    $step6_dtl_update = Step6Detail::find($s6_q_id[$i]);        
                    $step6_dtl_update->kind_opening = $s6_tbl_rows[$i]['kind_opening'];
                    $step6_dtl_update->cop_no = $s6_tbl_rows[$i]['cop_no'];
                    $step6_dtl_update->cop_length = $s6_tbl_rows[$i]['cop_length'];
                    $step6_dtl_update->cop_height = $s6_tbl_rows[$i]['cop_height'];
                    $step6_dtl_update->frame = $s6_tbl_rows[$i]['frame'];
                    $step6_dtl_update->glazing = $s6_tbl_rows[$i]['glazing'];
                    $step6_dtl_update->shutter = $s6_tbl_rows[$i]['shutter'];
                    $step6_dtl_update->update();
                    return response()->json("step 6 dtls updated");        
                }
            }
            else if($step6_dtl_count < count($s6_tbl_rows))
            {
                foreach($step6_dtl_query as $step_q)
                {
                    array_push($s6_q_id, $step_q->id);
                }
                for($i=0; $i<count($s6_q_id); $i++)
                {
                    $step6_dtl_update = Step6Detail::find($s6_q_id[$i]);        
                    $step6_dtl_update->kind_opening = $s6_tbl_rows[$i]['kind_opening'];
                    $step6_dtl_update->cop_no = $s6_tbl_rows[$i]['cop_no'];
                    $step6_dtl_update->cop_length = $s6_tbl_rows[$i]['cop_length'];
                    $step6_dtl_update->cop_height = $s6_tbl_rows[$i]['cop_height'];
                    $step6_dtl_update->frame = $s6_tbl_rows[$i]['frame'];
                    $step6_dtl_update->glazing = $s6_tbl_rows[$i]['glazing'];
                    $step6_dtl_update->shutter = $s6_tbl_rows[$i]['shutter'];
                    $step6_dtl_update->update();
                    // return response()->json("step 6 dtls updated");        
                }
                for($j=$step6_dtl_count; $j<count($s6_tbl_rows); $j++)
                {
                    $step6_dtl_addnew = new Step6Detail();
                    $step6_dtl_addnew->customer_id = $customerId;
                    $step6_dtl_addnew->kind_opening = $s6_tbl_rows[$j]['kind_opening'];
                    $step6_dtl_addnew->cop_no = $s6_tbl_rows[$j]['cop_no'];
                    $step6_dtl_addnew->cop_length = $s6_tbl_rows[$j]['cop_length'];
                    $step6_dtl_addnew->cop_height = $s6_tbl_rows[$j]['cop_height'];
                    $step6_dtl_addnew->frame = $s6_tbl_rows[$j]['frame'];
                    $step6_dtl_addnew->glazing = $s6_tbl_rows[$j]['glazing'];
                    $step6_dtl_addnew->shutter = $s6_tbl_rows[$j]['shutter'];
                    $step6_dtl_addnew->save();
                }
            }
            else{
                foreach($step6_dtl_query as $step_q)
                {
                    array_push($s6_q_id, $step_q->id);
                }
                for($i=0; $i<count($s6_tbl_rows); $i++)
                {
                    $step6_dtl_update = Step6Detail::find($s6_q_id[$i]);        
                    $step6_dtl_update->kind_opening = $s6_tbl_rows[$i]['kind_opening'];
                    $step6_dtl_update->cop_no = $s6_tbl_rows[$i]['cop_no'];
                    $step6_dtl_update->cop_length = $s6_tbl_rows[$i]['cop_length'];
                    $step6_dtl_update->cop_height = $s6_tbl_rows[$i]['cop_height'];
                    $step6_dtl_update->frame = $s6_tbl_rows[$i]['frame'];
                    $step6_dtl_update->glazing = $s6_tbl_rows[$i]['glazing'];
                    $step6_dtl_update->shutter = $s6_tbl_rows[$i]['shutter'];
                    $step6_dtl_update->update();
                    // return response()->json("step 6 dtls updated");        
                }
                for($i=count($s6_tbl_rows); $i<count($s6_q_id); $i++){
                    step6Detail::where('id',$s6_q_id[$i])->delete();
                }
            }
            return response()->json("step 6 dtls updated");        
            
        }
        else{
            for($i = 0; $i<count($s6_tbl_rows); $i++)
            {
            $add_step6_dtl = New step6Detail();
            $add_step6_dtl->customer_id  = $customerId;
            $add_step6_dtl->kind_opening = $s6_tbl_rows[$i]['kind_opening'];
            $add_step6_dtl->cop_no = $s6_tbl_rows[$i]['cop_no'];
            $add_step6_dtl->cop_length = $s6_tbl_rows[$i]['cop_length'];
            $add_step6_dtl->cop_height = $s6_tbl_rows[$i]['cop_height'];
            $add_step6_dtl->frame = $s6_tbl_rows[$i]['frame'];
            $add_step6_dtl->glazing = $s6_tbl_rows[$i]['glazing'];
            $add_step6_dtl->shutter = $s6_tbl_rows[$i]['shutter'];
            $add_step6_dtl->save();
            }
            return response()->json("step6 dtls saved");        
            
        }    
    }

    public function step7Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s7_rock = json_encode($request->input('s7_rock'));
        $s7_concrete = json_encode($request->input('s7_concrete'));
        $s7_brick = json_encode($request->input('s7_brick'));
        $s7_earth = json_encode($request->input('s7_earth'));
        $s7_drink = json_encode($request->input('s7_drink'));
        $s7_wall_thickness = $request->input('s7_wall_thickness');  
        $s7_insulation = json_encode($request->input('s7_insulation'));
        $s7_thickness = $request->input('s7_thickness');  
        $s7_facade_orientation = json_encode($request->input('s7_facade_orientation'));
        $s7_height = $request->input('s7_height');  
        $s7_length = $request->input('s7_length');  
        $s7_surface = $request->input('s7_surface');  
        $s7_adjoining_area = $request->input('s7_adjoining_area');  
        $s7_area2 = $request->input('s7_area2');  
        $s7_area3 = $request->input('s7_area3');  
        $s7_area4 = $request->input('s7_area4');  
        $s7_t_srfc_area = $request->input('s7_t_srfc_area');  
        $s7_srfc_insulator_Type = json_encode($request->input('s7_srfc_insulator_Type'));
        $s7_area_tobe_insltd = $request->input('s7_area_tobe_insltd');  
        $s7_photo = $request->file('s7_photo');          

        if (step7::where('customer_id', $customerId)->exists()) {
            $step7_query = step7::where('customer_id', $customerId)->first();
            $step7_id = $step7_query->id;
            $step7_update = step7::find($step7_id);
            $step7_update->rock = $s7_rock;
            $step7_update->concrete = $s7_concrete;
            $step7_update->brick  = $s7_brick;
            $step7_update->earth = $s7_earth;
            $step7_update->drink = $s7_drink;
            $step7_update->wall_thickness = $s7_wall_thickness;
            $step7_update->insulation  = $s7_insulation;
            $step7_update->thickness = $s7_thickness;
            $step7_update->facade_orientation = $s7_facade_orientation;
            $step7_update->height = $s7_height;
            $step7_update->length  = $s7_length;
            $step7_update->surface = $s7_surface;
            $step7_update->adjoining_area = $s7_adjoining_area;
            $step7_update->area2 = $s7_area2;
            $step7_update->area3  = $s7_area3;
            $step7_update->area4 = $s7_area4;
            $step7_update->t_srfc_area = $s7_t_srfc_area;
            $step7_update->srfc_insulator_Type  = $s7_srfc_insulator_Type;
            $step7_update->area_tobe_insltd = $s7_area_tobe_insltd;
            
            if ($s7_photo != null) {
                $s7_photo_name = time() . '_' . $s7_photo->getClientOriginalName();
                $s7_photo->move(public_path('images'), $s7_photo_name);
                $step7_update->photo = $s7_photo_name;
            }
            
            $step7_update->update();  
            return response()->json(['success'=>'step7 updated successfully.']);
        } else {
            $add_step7 = new step7();
            $add_step7->customer_id = $customerId;
            $add_step7->rock = $s7_rock;
            $add_step7->concrete = $s7_concrete;
            $add_step7->brick  = $s7_brick;
            $add_step7->earth = $s7_earth;
            $add_step7->drink = $s7_drink;
            $add_step7->wall_thickness = $s7_wall_thickness;
            $add_step7->insulation  = $s7_insulation;
            $add_step7->thickness = $s7_thickness;
            $add_step7->facade_orientation = $s7_facade_orientation;
            $add_step7->height = $s7_height;
            $add_step7->length  = $s7_length;
            $add_step7->surface = $s7_surface;
            $add_step7->adjoining_area = $s7_adjoining_area;
            $add_step7->area2 = $s7_area2;
            $add_step7->area3  = $s7_area3;
            $add_step7->area4 = $s7_area4;
            $add_step7->t_srfc_area = $s7_t_srfc_area;
            $add_step7->srfc_insulator_Type  = $s7_srfc_insulator_Type;
            $add_step7->area_tobe_insltd = $s7_area_tobe_insltd;
            
            if ($s7_photo != null) {
                $s7_photo_name = time() . '_' . $s7_photo->getClientOriginalName();
                $s7_photo->move(public_path('images'), $s7_photo_name);
                $add_step7->photo = $s7_photo_name;
            }
            
            $add_step7->save();  
            return response()->json(['success'=>'step7 saved successfully.']);
        }
    }

    public function step8Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $s8_tbl_val = $request->input('s8_tbl_val');    
            $s8_photo = $request->file('s8_photo');  
            $s8_comments = $request->input('s8_comments');    
            if($s8_tbl_val == 100)
            {
                Step8Detail::where('customer_id', $customerId)->delete();    
            }
            if (Step8::where('customer_id', $customerId)->exists()) {
                $step8_query = Step8::where('customer_id', $customerId)->first();
                $step8_id = $step8_query->id;
                $step8_update = Step8::find($step8_id);
                $step8_update->tbl_val = $s8_tbl_val;
                $step8_update->comments = $s8_comments;
                if ($s8_photo != null) {
                    $s8_photo_name = time() . '_' . $s8_photo->getClientOriginalName();
                    $s8_photo->move(public_path('images'), $s8_photo_name);
                    $step8_update->photo = $s8_photo_name;
                }        
                $step8_update->update();
                return response()->json("step8 updated");        
            }
            else{
                $add_step8 = New Step8();
                $add_step8->customer_id  = $customerId;
                $add_step8->tbl_val = $s8_tbl_val;
                $add_step8->comments = $s8_comments;
                if ($s8_photo != null) {
                    $s8_photo_name = time() . '_' . $s8_photo->getClientOriginalName();
                    $s8_photo->move(public_path('images'), $s8_photo_name);
                    $add_step8->photo = $s8_photo_name;
                }        
                $add_step8->save();
                return response()->json("step8 saved");        
            }    
            
        }
    public function step8Details(Request $request)
    {   
        $s8_tbl_rows = $request->input('rows');    
        $customerId = $s8_tbl_rows[0]['customer_id'];

        if (Step8Detail::where('customer_id', $customerId)->exists()) {
            $step8_dtl_query = Step8Detail::where('customer_id', $customerId)->get();
            $step8_dtl_count =Step8Detail::where('customer_id', $customerId)->count();
            $s8_q_id = array();
            if($step8_dtl_count == count($s8_tbl_rows))
            {
                foreach($step8_dtl_query as $step_q)
                {
                    array_push($s8_q_id, $step_q->id);
                }
                for($i=0; $i<count($s8_q_id); $i++)
                {
                    $step8_dtl_update = Step8Detail::find($s8_q_id[$i]);        
                    $step8_dtl_update->kind_opening = $s8_tbl_rows[$i]['kind_opening'];
                    $step8_dtl_update->cop_no = $s8_tbl_rows[$i]['cop_no'];
                    $step8_dtl_update->cop_length = $s8_tbl_rows[$i]['cop_length'];
                    $step8_dtl_update->cop_height = $s8_tbl_rows[$i]['cop_height'];
                    $step8_dtl_update->frame = $s8_tbl_rows[$i]['frame'];
                    $step8_dtl_update->glazing = $s8_tbl_rows[$i]['glazing'];
                    $step8_dtl_update->shutter = $s8_tbl_rows[$i]['shutter'];
                    $step8_dtl_update->update();
                    return response()->json("step 8 dtls updated");        
                }
            }
            else if($step8_dtl_count < count($s8_tbl_rows))
            {
                foreach($step8_dtl_query as $step_q)
                {
                    array_push($s8_q_id, $step_q->id);
                }
                for($i=0; $i<count($s8_q_id); $i++)
                {
                    $step8_dtl_update = Step8Detail::find($s8_q_id[$i]);        
                    $step8_dtl_update->kind_opening = $s8_tbl_rows[$i]['kind_opening'];
                    $step8_dtl_update->cop_no = $s8_tbl_rows[$i]['cop_no'];
                    $step8_dtl_update->cop_length = $s8_tbl_rows[$i]['cop_length'];
                    $step8_dtl_update->cop_height = $s8_tbl_rows[$i]['cop_height'];
                    $step8_dtl_update->frame = $s8_tbl_rows[$i]['frame'];
                    $step8_dtl_update->glazing = $s8_tbl_rows[$i]['glazing'];
                    $step8_dtl_update->shutter = $s8_tbl_rows[$i]['shutter'];
                    $step8_dtl_update->update();
                    // return response()->json("step 8 dtls updated");        
                }
                for($j=$step8_dtl_count; $j<count($s8_tbl_rows); $j++)
                {
                    $step8_dtl_addnew = new Step8Detail();
                    $step8_dtl_addnew->customer_id = $customerId;
                    $step8_dtl_addnew->kind_opening = $s8_tbl_rows[$j]['kind_opening'];
                    $step8_dtl_addnew->cop_no = $s8_tbl_rows[$j]['cop_no'];
                    $step8_dtl_addnew->cop_length = $s8_tbl_rows[$j]['cop_length'];
                    $step8_dtl_addnew->cop_height = $s8_tbl_rows[$j]['cop_height'];
                    $step8_dtl_addnew->frame = $s8_tbl_rows[$j]['frame'];
                    $step8_dtl_addnew->glazing = $s8_tbl_rows[$j]['glazing'];
                    $step8_dtl_addnew->shutter = $s8_tbl_rows[$j]['shutter'];
                    $step8_dtl_addnew->save();
                }
            }
            else{
                foreach($step8_dtl_query as $step_q)
                {
                    array_push($s8_q_id, $step_q->id);
                }
                for($i=0; $i<count($s8_tbl_rows); $i++)
                {
                    $step8_dtl_update = Step8Detail::find($s8_q_id[$i]);        
                    $step8_dtl_update->kind_opening = $s8_tbl_rows[$i]['kind_opening'];
                    $step8_dtl_update->cop_no = $s8_tbl_rows[$i]['cop_no'];
                    $step8_dtl_update->cop_length = $s8_tbl_rows[$i]['cop_length'];
                    $step8_dtl_update->cop_height = $s8_tbl_rows[$i]['cop_height'];
                    $step8_dtl_update->frame = $s8_tbl_rows[$i]['frame'];
                    $step8_dtl_update->glazing = $s8_tbl_rows[$i]['glazing'];
                    $step8_dtl_update->shutter = $s8_tbl_rows[$i]['shutter'];
                    $step8_dtl_update->update();
                    // return response()->json("step 8 dtls updated");        
                }
                for($i=count($s8_tbl_rows); $i<count($s8_q_id); $i++){
                    step8Detail::where('id',$s8_q_id[$i])->delete();
                }
            }
            return response()->json("step 8 dtls updated");        
            
        }
        else{
            for($i = 0; $i<count($s8_tbl_rows); $i++)
            {
            $add_step8_dtl = New Step8Detail();
            $add_step8_dtl->customer_id  = $customerId;
            $add_step8_dtl->kind_opening = $s8_tbl_rows[$i]['kind_opening'];
            $add_step8_dtl->cop_no = $s8_tbl_rows[$i]['cop_no'];
            $add_step8_dtl->cop_length = $s8_tbl_rows[$i]['cop_length'];
            $add_step8_dtl->cop_height = $s8_tbl_rows[$i]['cop_height'];
            $add_step8_dtl->frame = $s8_tbl_rows[$i]['frame'];
            $add_step8_dtl->glazing = $s8_tbl_rows[$i]['glazing'];
            $add_step8_dtl->shutter = $s8_tbl_rows[$i]['shutter'];
            $add_step8_dtl->save();
            }
            return response()->json("step8 dtls saved");        
            
        }    
    }
    public function step9Store(Request $request)
{   
    $customerId = $request->input('customerId');  
    $s9_rock = json_encode($request->input('s9_rock'));
    $s9_concrete = json_encode($request->input('s9_concrete'));
    $s9_brick = json_encode($request->input('s9_brick'));
    $s9_earth = json_encode($request->input('s9_earth'));
    $s9_drink = json_encode($request->input('s9_drink'));
    $s9_wall_thickness = $request->input('s9_wall_thickness');  
    $s9_insulation = json_encode($request->input('s9_insulation'));
    $s9_thickness = $request->input('s9_thickness');  
    $s9_facade_orientation = json_encode($request->input('s9_facade_orientation'));
    $s9_height = $request->input('s9_height');  
    $s9_length = $request->input('s9_length');  
    $s9_surface = $request->input('s9_surface');  
    $s9_adjoining_area = $request->input('s9_adjoining_area');  
    $s9_area2 = $request->input('s9_area2');  
    $s9_area3 = $request->input('s9_area3');  
    $s9_area4 = $request->input('s9_area4');  
    $s9_t_srfc_area = $request->input('s9_t_srfc_area');  
    $s9_srfc_insulator_Type = json_encode($request->input('s9_srfc_insulator_Type'));
    $s9_area_tobe_insltd = $request->input('s9_area_tobe_insltd');  
    $s9_photo = $request->file('s9_photo');          

    if (step9::where('customer_id', $customerId)->exists()) {
        $step9_query = step9::where('customer_id', $customerId)->first();
        $step9_id = $step9_query->id;
        $step9_update = step9::find($step9_id);
        $step9_update->rock = $s9_rock;
        $step9_update->concrete = $s9_concrete;
        $step9_update->brick  = $s9_brick;
        $step9_update->earth = $s9_earth;
        $step9_update->drink = $s9_drink;
        $step9_update->wall_thickness = $s9_wall_thickness;
        $step9_update->insulation  = $s9_insulation;
        $step9_update->thickness = $s9_thickness;
        $step9_update->facade_orientation = $s9_facade_orientation;
        $step9_update->height = $s9_height;
        $step9_update->length  = $s9_length;
        $step9_update->surface = $s9_surface;
        $step9_update->adjoining_area = $s9_adjoining_area;
        $step9_update->area2 = $s9_area2;
        $step9_update->area3  = $s9_area3;
        $step9_update->area4 = $s9_area4;
        $step9_update->t_srfc_area = $s9_t_srfc_area;
        $step9_update->srfc_insulator_Type  = $s9_srfc_insulator_Type;
        $step9_update->area_tobe_insltd = $s9_area_tobe_insltd;
        
        if ($s9_photo != null) {
            $s9_photo_name = time() . '_' . $s9_photo->getClientOriginalName();
            $s9_photo->move(public_path('images'), $s9_photo_name);
            $step9_update->photo = $s9_photo_name;
        }
        
        $step9_update->update();  
        return response()->json(['success'=>'step9 updated successfully.']);
    } else {
        $add_step9 = new step9();
        $add_step9->customer_id = $customerId;
        $add_step9->rock = $s9_rock;
        $add_step9->concrete = $s9_concrete;
        $add_step9->brick  = $s9_brick;
        $add_step9->earth = $s9_earth;
        $add_step9->drink = $s9_drink;
        $add_step9->wall_thickness = $s9_wall_thickness;
        $add_step9->insulation  = $s9_insulation;
        $add_step9->thickness = $s9_thickness;
        $add_step9->facade_orientation = $s9_facade_orientation;
        $add_step9->height = $s9_height;
        $add_step9->length  = $s9_length;
        $add_step9->surface = $s9_surface;
        $add_step9->adjoining_area = $s9_adjoining_area;
        $add_step9->area2 = $s9_area2;
        $add_step9->area3  = $s9_area3;
        $add_step9->area4 = $s9_area4;
        $add_step9->t_srfc_area = $s9_t_srfc_area;
        $add_step9->srfc_insulator_Type  = $s9_srfc_insulator_Type;
        $add_step9->area_tobe_insltd = $s9_area_tobe_insltd;
        
        if ($s9_photo != null) {
            $s9_photo_name = time() . '_' . $s9_photo->getClientOriginalName();
            $s9_photo->move(public_path('images'), $s9_photo_name);
            $add_step9->photo = $s9_photo_name;
        }
        
        $add_step9->save();  
        return response()->json(['success'=>'step9 saved successfully.']);
    }
}
public function step10Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $s10_tbl_val = $request->input('s10_tbl_val');    
            $s10_photo = $request->file('s10_photo');  
            $s10_comments = $request->input('s10_comments');    
            if($s10_tbl_val == 100)
            {
                Step10Detail::where('customer_id', $customerId)->delete();    
            }
            if (Step10::where('customer_id', $customerId)->exists()) {
                $step10_query = Step10::where('customer_id', $customerId)->first();
                $step10_id = $step10_query->id;
                $step10_update = Step10::find($step10_id);
                $step10_update->tbl_val = $s10_tbl_val;
                $step10_update->comments = $s10_comments;
                if ($s10_photo != null) {
                    $s10_photo_name = time() . '_' . $s10_photo->getClientOriginalName();
                    $s10_photo->move(public_path('images'), $s10_photo_name);
                    $step10_update->photo = $s10_photo_name;
                }        
                $step10_update->update();
                return response()->json("Step10 updated");        
            }
            else{
                $add_step10 = New Step10();
                $add_step10->customer_id  = $customerId;
                $add_step10->tbl_val = $s10_tbl_val;
                $add_step10->comments = $s10_comments;
                if ($s10_photo != null) {
                    $s10_photo_name = time() . '_' . $s10_photo->getClientOriginalName();
                    $s10_photo->move(public_path('images'), $s10_photo_name);
                    $add_step10->photo = $s10_photo_name;
                }        
                $add_step10->save();
                return response()->json("Step10 saved");        
            }    
            
        }
    public function step10Details(Request $request)
    {   
        $s10_tbl_rows = $request->input('rows');    
        $customerId = $s10_tbl_rows[0]['customer_id'];

        if (Step10Detail::where('customer_id', $customerId)->exists()) {
            $step10_dtl_query = Step10Detail::where('customer_id', $customerId)->get();
            $step10_dtl_count =Step10Detail::where('customer_id', $customerId)->count();
            $s10_q_id = array();
            if($step10_dtl_count == count($s10_tbl_rows))
            {
                foreach($step10_dtl_query as $step_q)
                {
                    array_push($s10_q_id, $step_q->id);
                }
                for($i=0; $i<count($s10_q_id); $i++)
                {
                    $step10_dtl_update = Step10Detail::find($s10_q_id[$i]);        
                    $step10_dtl_update->kind_opening = $s10_tbl_rows[$i]['kind_opening'];
                    $step10_dtl_update->cop_no = $s10_tbl_rows[$i]['cop_no'];
                    $step10_dtl_update->cop_length = $s10_tbl_rows[$i]['cop_length'];
                    $step10_dtl_update->cop_height = $s10_tbl_rows[$i]['cop_height'];
                    $step10_dtl_update->frame = $s10_tbl_rows[$i]['frame'];
                    $step10_dtl_update->glazing = $s10_tbl_rows[$i]['glazing'];
                    $step10_dtl_update->shutter = $s10_tbl_rows[$i]['shutter'];
                    $step10_dtl_update->update();
                    return response()->json("step 10 dtls updated");        
                }
            }
            else if($step10_dtl_count < count($s10_tbl_rows))
            {
                foreach($step10_dtl_query as $step_q)
                {
                    array_push($s10_q_id, $step_q->id);
                }
                for($i=0; $i<count($s10_q_id); $i++)
                {
                    $step10_dtl_update = Step10Detail::find($s10_q_id[$i]);        
                    $step10_dtl_update->kind_opening = $s10_tbl_rows[$i]['kind_opening'];
                    $step10_dtl_update->cop_no = $s10_tbl_rows[$i]['cop_no'];
                    $step10_dtl_update->cop_length = $s10_tbl_rows[$i]['cop_length'];
                    $step10_dtl_update->cop_height = $s10_tbl_rows[$i]['cop_height'];
                    $step10_dtl_update->frame = $s10_tbl_rows[$i]['frame'];
                    $step10_dtl_update->glazing = $s10_tbl_rows[$i]['glazing'];
                    $step10_dtl_update->shutter = $s10_tbl_rows[$i]['shutter'];
                    $step10_dtl_update->update();
                    // return response()->json("step 10 dtls updated");        
                }
                for($j=$step10_dtl_count; $j<count($s10_tbl_rows); $j++)
                {
                    $step10_dtl_addnew = new Step10Detail();
                    $step10_dtl_addnew->customer_id = $customerId;
                    $step10_dtl_addnew->kind_opening = $s10_tbl_rows[$j]['kind_opening'];
                    $step10_dtl_addnew->cop_no = $s10_tbl_rows[$j]['cop_no'];
                    $step10_dtl_addnew->cop_length = $s10_tbl_rows[$j]['cop_length'];
                    $step10_dtl_addnew->cop_height = $s10_tbl_rows[$j]['cop_height'];
                    $step10_dtl_addnew->frame = $s10_tbl_rows[$j]['frame'];
                    $step10_dtl_addnew->glazing = $s10_tbl_rows[$j]['glazing'];
                    $step10_dtl_addnew->shutter = $s10_tbl_rows[$j]['shutter'];
                    $step10_dtl_addnew->save();
                }
            }
            else{
                foreach($step10_dtl_query as $step_q)
                {
                    array_push($s10_q_id, $step_q->id);
                }
                for($i=0; $i<count($s10_tbl_rows); $i++)
                {
                    $step10_dtl_update = Step10Detail::find($s10_q_id[$i]);        
                    $step10_dtl_update->kind_opening = $s10_tbl_rows[$i]['kind_opening'];
                    $step10_dtl_update->cop_no = $s10_tbl_rows[$i]['cop_no'];
                    $step10_dtl_update->cop_length = $s10_tbl_rows[$i]['cop_length'];
                    $step10_dtl_update->cop_height = $s10_tbl_rows[$i]['cop_height'];
                    $step10_dtl_update->frame = $s10_tbl_rows[$i]['frame'];
                    $step10_dtl_update->glazing = $s10_tbl_rows[$i]['glazing'];
                    $step10_dtl_update->shutter = $s10_tbl_rows[$i]['shutter'];
                    $step10_dtl_update->update();
                    // return response()->json("step 10 dtls updated");        
                }
                for($i=count($s10_tbl_rows); $i<count($s10_q_id); $i++){
                    Step10Detail::where('id',$s10_q_id[$i])->delete();
                }
            }
            return response()->json("step 10 dtls updated");        
            
        }
        else{
            for($i = 0; $i<count($s10_tbl_rows); $i++)
            {
            $add_step10_dtl = New Step10Detail();
            $add_step10_dtl->customer_id  = $customerId;
            $add_step10_dtl->kind_opening = $s10_tbl_rows[$i]['kind_opening'];
            $add_step10_dtl->cop_no = $s10_tbl_rows[$i]['cop_no'];
            $add_step10_dtl->cop_length = $s10_tbl_rows[$i]['cop_length'];
            $add_step10_dtl->cop_height = $s10_tbl_rows[$i]['cop_height'];
            $add_step10_dtl->frame = $s10_tbl_rows[$i]['frame'];
            $add_step10_dtl->glazing = $s10_tbl_rows[$i]['glazing'];
            $add_step10_dtl->shutter = $s10_tbl_rows[$i]['shutter'];
            $add_step10_dtl->save();
            }
            return response()->json("Step10 dtls saved");        
            
        }    
    }

    public function step11Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $lvngspace_total = $request->input('lvngspace_total');    
            $burial_of_subfloor = json_encode($request->input('burial_of_subfloor'));
            $housing_shape = json_encode($request->input('housing_shape'));
            $low_floor_type = json_encode($request->input('low_floor_type'));
            $fatwork = json_encode($request->input('fatwork'));
            $lfg_insulation = json_encode($request->input('lfg_insulation'));
            $lfg_insulation_thickness = $request->input('lfg_insulation_thickness');    
            $lfg_btm_floor_area = $request->input('lfg_btm_floor_area');    
            $lfg_insulated_area = $request->input('lfg_insulated_area');    
            $step11_photo = $request->file('step11_photo');    
            $step11_photo1 = $request->file('step11_photo1');    
            $step11_photo2 = $request->file('step11_photo2');    
            $s11_comments = $request->input('s11_comments');    

            if (Step11::where('customer_id', $customerId)->exists()) {
                $step11_query = Step11::where('customer_id', $customerId)->first();
                $step11_id = $step11_query->id;
                $step11_update = Step11::find($step11_id);
                $step11_update->lvngspace_total = $lvngspace_total;
                $step11_update->burial_of_subfloor = $burial_of_subfloor;
                $step11_update->housing_shape = $housing_shape;
                $step11_update->low_floor_type = $low_floor_type;
                $step11_update->fatwork = $fatwork;
                $step11_update->lfg_insulation = $lfg_insulation;
                $step11_update->lfg_insulation_thickness= $lfg_insulation_thickness;
                $step11_update->lfg_btm_floor_area = $lfg_btm_floor_area;
                $step11_update->lfg_insulated_area = $lfg_insulated_area;
                $step11_update->comments = $s11_comments;
                if ($step11_photo != null) {
                    $step11_photo_name = time() . '_' . $step11_photo->getClientOriginalName();
                    $step11_photo->move(public_path('images'), $step11_photo_name);
                    $step11_update->photo = $step11_photo_name;
                }        
                if ($step11_photo1 != null) {
                    $step11_photo1_name = time() . '_' . $step11_photo1->getClientOriginalName();
                    $step11_photo1->move(public_path('images'), $step11_photo1_name);
                    $step11_update->photo1 = $step11_photo1_name;
                }        
                if ($step11_photo2 != null) {
                    $step11_photo2_name = time() . '_' . $step11_photo2->getClientOriginalName();
                    $step11_photo2->move(public_path('images'), $step11_photo2_name);
                    $step11_update->photo2 = $step11_photo2_name;
                }        
                $step11_update->update();
                return response()->json("Step11 updated");        
            }
            else{
                $add_step11 = New Step11();
                $add_step11->customer_id  = $customerId;
                $add_step11->lvngspace_total = $lvngspace_total;
                $add_step11->burial_of_subfloor = $burial_of_subfloor;
                $add_step11->housing_shape = $housing_shape;
                $add_step11->low_floor_type = $low_floor_type;
                $add_step11->fatwork = $fatwork;
                $add_step11->lfg_insulation = $lfg_insulation;
                $add_step11->lfg_insulation_thickness= $lfg_insulation_thickness;
                $add_step11->lfg_btm_floor_area = $lfg_btm_floor_area;
                $add_step11->lfg_insulated_area = $lfg_insulated_area;
                $add_step11->comments = $s11_comments;
                if ($step11_photo != null) {
                    $step11_photo_name = time() . '_' . $step11_photo->getClientOriginalName();
                    $step11_photo->move(public_path('images'), $step11_photo_name);
                    $add_step11->photo = $step11_photo_name;
                }        
                if ($step11_photo1 != null) {
                    $step11_photo1_name = time() . '_' . $step11_photo1->getClientOriginalName();
                    $step11_photo1->move(public_path('images'), $step11_photo1_name);
                    $add_step11->photo1 = $step11_photo1_name;
                }        
                if ($step11_photo2 != null) {
                    $step11_photo2_name = time() . '_' . $step11_photo2->getClientOriginalName();
                    $step11_photo2->move(public_path('images'), $step11_photo2_name);
                    $add_step11->photo2 = $step11_photo2_name;
                }        
                $add_step11->save();    
                
                return response()->json("Step11 saved");        
            }    
            
        }
    public function step11Details(Request $request)
    {   
        $s11_tbl_rows = $request->input('rows');    
        $customerId = $s11_tbl_rows[0]['customer_id'];
        
        if (Step11Detail::where('customer_id', $customerId)->exists()) {

            $step11_dtl_query = Step11Detail::where('customer_id', $customerId)->get();
            $s11_q_id = array();
            foreach($step11_dtl_query as $step_q)
            {
                array_push($s11_q_id, $step_q->id);
            }
            for($i=0;$i<count($s11_q_id); $i++)
            {
                $step11_dtls_update = Step11Detail::find($s11_q_id[$i]);
                $step11_dtls_update->row_name  = $s11_tbl_rows[$i]['s11_row_num'];
                $step11_dtls_update->living_space  = $s11_tbl_rows[$i]['living_space'];
                $step11_dtls_update->unheated_surface  = $s11_tbl_rows[$i]['unheated_surface'];
                $step11_dtls_update->cieling_height  = $s11_tbl_rows[$i]['cieling_height'];
                $step11_dtls_update->update();
            }
            return response()->json("step11 dtls updated");        
            
        }
        else
        {
            foreach($s11_tbl_rows as $value)
            {
                $add_step11_dtl = new Step11Detail();
                $add_step11_dtl->customer_id  = $customerId;
                $add_step11_dtl->row_name  = $value['s11_row_num'];
                $add_step11_dtl->living_space  = $value['living_space'];
                $add_step11_dtl->unheated_surface  = $value['unheated_surface'];
                $add_step11_dtl->cieling_height  = $value['cieling_height'];
                $add_step11_dtl->save();
            }
            return response()->json("step11 dtls added");        
        }
        
    }

    public function step12Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $ventillation = json_encode($request->input('ventillation'));
            $no_pieces = $request->input('no_pieces');    
            $no_bathrooms = $request->input('no_bathrooms');    
            $energy = json_encode($request->input('energy'));
            $generator = json_encode($request->input('generator'));
            $year = json_encode($request->input('year'));
            $rated_p = $request->input('rated_p');    
            $yield_p_nominal = $request->input('yield_p_nominal');    
            $plcd_in_heated_vol = json_encode($request->input('plcd_in_heated_vol'));
            $photo = $request->file('photo');    
            
            

            if (Step12::where('customer_id', $customerId)->exists()) {
                $step12_query = Step12::where('customer_id', $customerId)->first();
                $step12_id = $step12_query->id;
                $step12_update = Step12::find($step12_id);
                $step12_update->ventillation = $ventillation;
                $step12_update->no_pieces = $no_pieces;
                $step12_update->no_bathrooms = $no_bathrooms;
                $step12_update->energy = $energy;
                $step12_update->generator = $generator;
                $step12_update->year = $year;
                $step12_update->rated_p = $rated_p;
                $step12_update->yield_p_nominal = $yield_p_nominal;
                $step12_update->plcd_in_heated_vol = $plcd_in_heated_vol;
                
                if ($photo != null) {
                    $photo_name = time() . '_' . $photo->getClientOriginalName();
                    $photo->move(public_path('images'), $photo_name);
                    $step12_update->photo = $photo_name;
                }        
                $step12_update->update();
                return response()->json("step12 updated");        
            }
            else{
                $add_step12 = New Step12();
                $add_step12->customer_id  = $customerId;
                $add_step12->ventillation = $ventillation;
                $add_step12->no_pieces = $no_pieces;
                $add_step12->no_bathrooms = $no_bathrooms;
                $add_step12->energy = $energy;
                $add_step12->generator = $generator;
                $add_step12->year = $year;
                $add_step12->rated_p = $rated_p;
                $add_step12->yield_p_nominal = $yield_p_nominal;
                $add_step12->plcd_in_heated_vol = $plcd_in_heated_vol;
                
                if ($photo != null) {
                    $photo_name = time() . '_' . $photo->getClientOriginalName();
                    $photo->move(public_path('images'), $photo_name);
                    $add_step12->photo = $photo_name;
                }        
         
                $add_step12->save();    
                
                return response()->json("step12 saved");        
            }    
            
        }
        public function step13Store(Request $request)
        {   
            $customerId = $request->input('customerId');    
            $photo = $request->file('photo');  
            $comments = $request->input('comments');    
            
            if (Step13::where('customer_id', $customerId)->exists()) {
                $step13_query = Step13::where('customer_id', $customerId)->first();
                $step13_id = $step13_query->id;
                $step13_update = Step13::find($step13_id);

                $step13_update->comments = $comments;
                if ($photo != null) {
                    $photo_name = time() . '_' . $photo->getClientOriginalName();
                    $photo->move(public_path('images'), $photo_name);
                    $step13_update->photo = $photo_name;
                }        
                $step13_update->update();
                return response()->json("Step13 updated");        
            }
            else{
                $add_step13 = New Step13();
                $add_step13->customer_id  = $customerId;
                $add_step13->comments = $comments;
                if ($photo != null) {
                    $photo_name = time() . '_' . $photo->getClientOriginalName();
                    $photo->move(public_path('images'), $photo_name);
                    $add_step13->photo = $photo_name;
                }        
                $add_step13->save();
                return response()->json("Step13 saved");        
            }    
            
    }
    public function step13Details(Request $request)
    {   
        $s13_tbl_rows = $request->input('rows');    
        $customerId = $s13_tbl_rows[0]['customer_id'];

        if (Step13Detail::where('customer_id', $customerId)->exists()) {
            $step13_dtl_query = Step13Detail::where('customer_id', $customerId)->get();
            $step13_dtl_count =Step13Detail::where('customer_id', $customerId)->count();
            $s13_q_id = array();
            if($step13_dtl_count == count($s13_tbl_rows))
            {
                foreach($step13_dtl_query as $step_q)
                {
                    array_push($s13_q_id, $step_q->id);
                }
                for($i=0; $i<count($s13_q_id); $i++)
                {
                    $step13_dtl_update = Step13Detail::find($s13_q_id[$i]);        
                    $step13_dtl_update->type = $s13_tbl_rows[$i]['type'];
                    $step13_dtl_update->heated_area = $s13_tbl_rows[$i]['heated_area'];
                    $step13_dtl_update->update();
                    return response()->json("step 13 dtls updated");        
                }
            }
            else if($step13_dtl_count < count($s13_tbl_rows))
            {
                foreach($step13_dtl_query as $step_q)
                {
                    array_push($s13_q_id, $step_q->id);
                }
                for($i=0; $i<count($s13_q_id); $i++)
                {
                    $step13_dtl_update = Step13Detail::find($s13_q_id[$i]);        
                    $step13_dtl_update->type = $s13_tbl_rows[$i]['type'];
                    $step13_dtl_update->heated_area = $s13_tbl_rows[$i]['heated_area'];
                    $step13_dtl_update->update();
                }
                for($j=$step13_dtl_count; $j<count($s13_tbl_rows); $j++)
                {
                    $step13_dtl_addnew = new Step13Detail();
                    $step13_dtl_addnew->customer_id = $customerId;
                    $step13_dtl_addnew->type = $s13_tbl_rows[$j]['type'];
                    $step13_dtl_addnew->heated_area = $s13_tbl_rows[$j]['heated_area'];
                    $step13_dtl_addnew->save();
                }
            }
            else{
                foreach($step13_dtl_query as $step_q)
                {
                    array_push($s13_q_id, $step_q->id);
                }
                for($i=0; $i<count($s13_tbl_rows); $i++)
                {
                    $step13_dtl_update = Step13Detail::find($s13_q_id[$i]);        
                    $step13_dtl_update->type = $s13_tbl_rows[$i]['type'];
                    $step13_dtl_update->heated_area = $s13_tbl_rows[$i]['heated_area'];
                    $step13_dtl_update->update();
                    // return response()->json("step 13 dtls updated");        
                }
                for($i=count($s13_tbl_rows); $i<count($s13_q_id); $i++){
                    Step13Detail::where('id',$s13_q_id[$i])->delete();
                }
            }
            return response()->json("step 13 dtls updated");        
            
        }
        else{
            for($i = 0; $i<count($s13_tbl_rows); $i++)
            {
            $add_step13_dtl = New Step13Detail();
            $add_step13_dtl->customer_id  = $customerId;
            $add_step13_dtl->type = $s13_tbl_rows[$i]['type'];
            $add_step13_dtl->heated_area = $s13_tbl_rows[$i]['heated_area'];
     
            $add_step13_dtl->save();
            }
            return response()->json("step13 dtls saved");        
            
        }    
    }
    public function step14Store(Request $request)
    {   
        $customerId = $request->input('customerId');    
        $type = json_encode($request->input('type'));
        $accumulation = json_encode($request->input('accumulation'));
        $volume = $request->input('volume');    
        $ecs_seniority = json_encode($request->input('ecs_seniority'));
        $plcd_in_heated_vol = json_encode($request->input('plcd_in_heated_vol'));
        $photo = $request->file('photo');    
     
        if (Step14::where('customer_id', $customerId)->exists()) {
            $step14_query = Step14::where('customer_id', $customerId)->first();
            $step14_id = $step14_query->id;
            $step14_update = Step14::find($step14_id);
            $step14_update->type = $type;
            $step14_update->accumulation = $accumulation;
            $step14_update->volume = $volume;
            $step14_update->ecs_seniority = $ecs_seniority;
            $step14_update->plcd_in_heated_vol = $plcd_in_heated_vol;
            
            if ($photo != null) {
                $photo_name = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('images'), $photo_name);
                $step14_update->photo = $photo_name;
            }        
            $step14_update->update();
            return response()->json("step14 updated");        
        }
        else{
            $add_step14 = New Step14();
            $add_step14->customer_id  = $customerId;
            $add_step14->type = $type;
            $add_step14->accumulation = $accumulation;
            $add_step14->volume = $volume;
            $add_step14->ecs_seniority = $ecs_seniority;
            $add_step14->plcd_in_heated_vol = $plcd_in_heated_vol;
            
            if ($photo != null) {
                $photo_name = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('images'), $photo_name);
                $add_step14->photo = $photo_name;
            }        
     
            $add_step14->save();    
            
            return response()->json("step14 saved");        
        }    
        
    }

    public function step15Store(Request $request)
    {   
        $customerId = $request->input('customerId');    
        $meter_type = json_encode($request->input('meter_type'));
        $meter_power = json_encode($request->input('meter_power'));
        $photo = $request->file('photo');    
     
        if (Step15::where('customer_id', $customerId)->exists()) {
            $step15_query = Step15::where('customer_id', $customerId)->first();
            $step15_id = $step15_query->id;
            $step15_update = Step15::find($step15_id);
            $step15_update->meter_type = $meter_type;
            $step15_update->meter_power = $meter_power;
            
            if ($photo != null) {
                $photo_name = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('images'), $photo_name);
                $step15_update->photo = $photo_name;
            }        
            $step15_update->update();
            return response()->json("step15 updated");        
        }
        else{
            $add_step15 = New Step15();
            $add_step15->customer_id  = $customerId;
            $add_step15->meter_type = $meter_type;
            $add_step15->meter_power = $meter_power;
            
            if ($photo != null) {
                $photo_name = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('images'), $photo_name);
                $add_step15->photo = $photo_name;
            }        
     
            $add_step15->save();    
            
            return response()->json("step15 saved");        
        }    
        
    }

}
