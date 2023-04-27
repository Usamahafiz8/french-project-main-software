// jQuery code to hide the div when a specific value is inputted
$(document).ready(function() {
    $('#s4_tbl_val').on('input', function() {
      var inputValue = $(this).val();
      if (inputValue == '100') {
        $('#s4_tableToHide').hide();
      } else {
        $('#s4_tableToHide').show();
      }
    });

    $('#s6_tbl_val').on('input', function() {
        var inputValue = $(this).val();
        if (inputValue == '100') {
          $('#s6_tableToHide').hide();
        } else {
          $('#s6_tableToHide').show();
        }
      });

      $('#s8_tbl_val').on('input', function() {
        var inputValue = $(this).val();
        if (inputValue == '100') {
          $('#s8_tableToHide').hide();
        } else {
          $('#s8_tableToHide').show();
        }
      });

      $('#s10_tbl_val').on('input', function() {
        var inputValue = $(this).val();
        if (inputValue == '100') {
          $('#s10_tableToHide').hide();
        } else {
          $('#s10_tableToHide').show();
        }
      });
  });

  
  

$(function () {
      
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
});

$('#step1Submit').click(function (e) {
    e.preventDefault();

        var s1_client_goals = [];
        var s1_heating_mode = [];

        
        var customerId = $('input[name="customerId"]').val();
        var s1_aud_name = $('input[name="s1_aud_name"]').val();
        var s1_aud_f_name = $('input[name="s1_aud_f_name"]').val();
        var s1_aud_visit_date = $('input[name="s1_aud_visit_date"]').val();
        var s1_aud_st_num = $('input[name="s1_aud_st_num"]').val();
        var s1_cus_name = $('input[name="s1_cus_name"]').val();
        var s1_cus_f_name = $('input[name="s1_cus_f_name"]').val();
        var s1_cus_phone = $('input[name="s1_cus_phone"]').val();
        var s1_cus_email = $('input[name="s1_cus_email"]').val();
        var s1_people_on_earth = $('input[name="s1_people_on_earth"]').val();
        var s1_tax_income = $('input[name="s1_tax_income"]').val();
        var s1_cons_date = $('input[name="s1_cons_date"]').val();
        var s1_altitude = $('input[name="s1_altitude"]').val();


        var s1_address = $('textarea[name="s1_address"]').val();
        var s1_accomodation = $('select[name="s1_accomodation"]').val();
        var s1_w_comfort_level = $('select[name="s1_w_comfort_level"]').val();
        var s1_s_comfort_level = $('select[name="s1_s_comfort_level"]').val();
        

        
        $('input[name="s1_client_goals"]:checked').each(function() {
            s1_client_goals.push($(this).val());
        });
        
        $('input[name="s1_heating_mode"]:checked').each(function() {
            s1_heating_mode.push($(this).val());
        });
        
        
        var isolationGesture = $('input[name="s1_isolation_gesture"]:checked').val();
        var isolationGestureValue = $('input[name="s1_isolation_ges_val"]').val();
        if(isolationGesture == null)
        {
            isolationGesture = "9";
        }
        var lostAttics = $('input[name="s1_lost_attics"]:checked').val();
        var lostAtticsValue = $('input[name="s1_lost_attics_val"]').val();

        var lowfloor = $('input[name="s1_lowfloor"]:checked').val();
        var lowfloorValue = $('input[name="s1_lowfloor_value"]').val();

        var s1_crawlers = $('input[name="s1_crawlers"]:checked').val();
        var s1_crawlers_value = $('input[name="s1_crawlers_value"]').val();

        var s1_td_baloon = $('input[name="s1_td_baloon"]:checked').val();
        var s1_td_baloon_val = $('input[name="s1_td_baloon_val"]').val();

        var s1_water_heater = $('input[name="s1_water_heater"]:checked').val();
        var s1_water_heater_val = $('input[name="s1_water_heater_val"]').val();

        var s1_cmv_hygro = $('input[name="s1_cmv_hygro"]:checked').val();
        if(s1_cmv_hygro == null)
        {
            s1_cmv_hygro = "9";
        }
        var s1_comments = $('textarea[name="s1_comments"]').val()
        
    
    $.ajax({
        
        data: {
            customerId: customerId,
            s1_aud_name: s1_aud_name,
            s1_aud_f_name: s1_aud_f_name,
            s1_aud_visit_date: s1_aud_visit_date,
            s1_aud_st_num: s1_aud_st_num,
            s1_cus_name: s1_cus_name,
            s1_cus_f_name: s1_cus_f_name,
            s1_cus_phone: s1_cus_phone,
            s1_cus_email: s1_cus_email,
            s1_people_on_earth: s1_people_on_earth,
            s1_tax_income: s1_tax_income,
            s1_cons_date: s1_cons_date,
            s1_altitude: s1_altitude,

            s1_address: s1_address,
            s1_accomodation: s1_accomodation,
            s1_w_comfort_level: s1_w_comfort_level,
            s1_s_comfort_level: s1_s_comfort_level,
            s1_client_goals: s1_client_goals,
            s1_heating_mode : s1_heating_mode,
            isolationGesture: isolationGesture,
            isolationGestureValue: isolationGestureValue,
            lostAttics: lostAttics,
            lostAtticsValue: lostAtticsValue,
            lowfloor: lowfloor,
            lowfloorValue: lowfloorValue,
            s1_crawlers: s1_crawlers,
            s1_crawlers_value: s1_crawlers_value,
            s1_td_baloon: s1_td_baloon,
            s1_td_baloon_val: s1_td_baloon_val,
            s1_water_heater: s1_water_heater,
            s1_water_heater_val: s1_water_heater_val,
            s1_cmv_hygro: s1_cmv_hygro,
            s1_comments: s1_comments,
        
    
        },

        url: "/save_step1",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});


$('#step2Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s2_low_floor_type', $('select[name="s2_low_floor_type"]').val());
    formData.append('s2_bigwork', $('select[name="s2_bigwork"]').val());
    formData.append('s2_lfg_insulation', $('select[name="s2_lfg_insulation"]').val());
    formData.append('s2_insulation_thick', $('input[name="s2_insulation_thick"]').val());
    formData.append('s2_crawlers_surface', $('input[name="s2_crawlers_surface"]').val());
    formData.append('s2_exterior_ceiling', $('input[name="s2_exterior_ceiling"]').val());
    formData.append('s2_attic_area', $('input[name="s2_attic_area"]:checked').val());
    formData.append('s2_attic_area_val', $('input[name="s2_attic_area_val"]').val());
    formData.append('s2_photo', $('input[name="s2_photo"]')[0].files[0]);
    formData.append('s2_hf_photo1', $('input[name="s2_hf_photo1"]')[0].files[0]);
    formData.append('s2_hf_photo2', $('input[name="s2_hf_photo2"]')[0].files[0]);
    formData.append('s2_comments', $('textarea[name="s2_comments"]').val());

    $.ajax({
        data: formData,
        url: "/save_step2",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});
// php artisan migrate --path=/database/migrations/2023_04_15_104112_create_step5_table.php
$('#step3Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s3_rock', $('select[name="s3_rock"]').val());
    formData.append('s3_concrete', $('select[name="s3_concrete"]').val());
    formData.append('s3_brick', $('select[name="s3_brick"]').val());
    formData.append('s3_earth', $('select[name="s3_earth"]').val());
    formData.append('s3_drink', $('select[name="s3_drink"]').val());
    formData.append('s3_wall_thickness', $('input[name="s3_wall_thickness"]').val());
    formData.append('s3_insulation', $('select[name="s3_insulation"]').val());
    formData.append('s3_thickness', $('input[name="s3_thickness"]').val());
    formData.append('s3_facade_orientation', $('select[name="s3_facade_orientation"]').val());
    formData.append('s3_height', $('input[name="s3_height"]').val());
    formData.append('s3_length', $('input[name="s3_length"]').val());
    formData.append('s3_surface', $('input[name="s3_surface"]').val());
    formData.append('s3_adjoining_area', $('input[name="s3_adjoining_area"]').val());
    formData.append('s3_area2', $('input[name="s3_area2"]').val());
    formData.append('s3_area3', $('input[name="s3_area3"]').val());
    formData.append('s3_area4', $('input[name="s3_area4"]').val());
    formData.append('s3_t_srfc_area', $('input[name="s3_t_srfc_area"]').val());
    formData.append('s3_srfc_insulator_Type', $('select[name="s3_srfc_insulator_Type"]').val());
    formData.append('s3_area_tobe_insltd', $('input[name="s3_area_tobe_insltd"]').val());
    formData.append('s3_photo', $('input[name="s3_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step3",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});

$('#step4Submit').click(function (e) {
    e.preventDefault();    
    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s4_tbl_val', $('input[name="s4_tbl_val"]').val());
    formData.append('s4_photo', $('input[name="s4_photo"]')[0].files[0]);
    formData.append('s4_comments', $('textarea[name="s4_comments"]').val());
    if($('input[name="s4_tbl_val"]').val() == 100)
    {
        $.ajax({
            data:formData,
            url: "/save_step4",
            type: "POST",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function (data) {
            console.log('success:',data);
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
                console.log('Status:', status);
                console.log('Response:', xhr.responseJSON);
            }
        });
    }
    else{
        var rows = [];
        $('#s4_rowsTable tr:not(:first)').each(function() {
            var row = {
                row_num : $(this).find('.row_num').val(),
                customer_id : $('input[name="customerId"]').val(),
                kind_opening : $(this).find('select[name="s4_kind_opening"]').val(),
                cop_no : $(this).find('.s4_cop_no').val(),
                cop_length : $(this).find('.s4_cop_length').val(),
                cop_height : $(this).find('.s4_cop_height').val(),
                frame : $(this).find('select[name="s4_frame"]').val(),
                glazing : $(this).find('select[name="s4_glazing"]').val(),
                shutter : $(this).find('select[name="s4_shutter"]').val()
            };
            rows.push(row);
        });
        $.ajax({
                data:formData,
                url: "/save_step4",
                type: "POST",
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function (data) {
                console.log('success:',data);
                    //success start
                        $.ajax({
                        data: {
                            rows:rows
                        },
                        url: "/details_step4",
                        type: "POST",
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            console.log('success2:', data);
                        },
                        error: function (xhr, status, error) {
                            console.log('Error:', error);
                            console.log('Status:', status);
                            console.log('Response:', xhr.responseJSON);
                        }
                    });
        
                    //success end
                },
                error: function (xhr, status, error) {
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseJSON);
                }
            });
    }
    
    
});

$('#step5Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s5_rock', $('select[name="s5_rock"]').val());
    formData.append('s5_concrete', $('select[name="s5_concrete"]').val());
    formData.append('s5_brick', $('select[name="s5_brick"]').val());
    formData.append('s5_earth', $('select[name="s5_earth"]').val());
    formData.append('s5_drink', $('select[name="s5_drink"]').val());
    formData.append('s5_wall_thickness', $('input[name="s5_wall_thickness"]').val());
    formData.append('s5_insulation', $('select[name="s5_insulation"]').val());
    formData.append('s5_thickness', $('input[name="s5_thickness"]').val());
    formData.append('s5_facade_orientation', $('select[name="s5_facade_orientation"]').val());
    formData.append('s5_height', $('input[name="s5_height"]').val());
    formData.append('s5_length', $('input[name="s5_length"]').val());
    formData.append('s5_surface', $('input[name="s5_surface"]').val());
    formData.append('s5_adjoining_area', $('input[name="s5_adjoining_area"]').val());
    formData.append('s5_area2', $('input[name="s5_area2"]').val());
    formData.append('s5_area3', $('input[name="s5_area3"]').val());
    formData.append('s5_area4', $('input[name="s5_area4"]').val());
    formData.append('s5_t_srfc_area', $('input[name="s5_t_srfc_area"]').val());
    formData.append('s5_srfc_insulator_Type', $('select[name="s5_srfc_insulator_Type"]').val());
    formData.append('s5_area_tobe_insltd', $('input[name="s5_area_tobe_insltd"]').val());
    formData.append('s5_photo', $('input[name="s5_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step5",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});

$('#step6Submit').click(function (e) {
    e.preventDefault();    
    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s6_tbl_val', $('input[name="s6_tbl_val"]').val());
    formData.append('s6_photo', $('input[name="s6_photo"]')[0].files[0]);
    formData.append('s6_comments', $('textarea[name="s6_comments"]').val());
    if($('input[name="s6_tbl_val"]').val() == 100)
    {
        $.ajax({
            data:formData,
            url: "/save_step6",
            type: "POST",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function (data) {
            console.log('success:',data);
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
                console.log('Status:', status);
                console.log('Response:', xhr.responseJSON);
            }
        });
    }
    else{
        var rows = [];
        $('#s6_rowsTable tr:not(:first)').each(function() {
            var row = {
                customer_id : $('input[name="customerId"]').val(),
                kind_opening : $(this).find('select[name="s6_kind_opening"]').val(),
                cop_no : $(this).find('.s6_cop_no').val(),
                cop_length : $(this).find('.s6_cop_length').val(),
                cop_height : $(this).find('.s6_cop_height').val(),
                frame : $(this).find('select[name="s6_frame"]').val(),
                glazing : $(this).find('select[name="s6_glazing"]').val(),
                shutter : $(this).find('select[name="s6_shutter"]').val()
            };
            rows.push(row);
        });
        $.ajax({
                data:formData,
                url: "/save_step6",
                type: "POST",
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function (data) {
                console.log('success:',data);
                    //success start
                        $.ajax({
                        data: {
                            rows:rows
                        },
                        url: "/details_step6",
                        type: "POST",
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            console.log('success2:', data);
                        },
                        error: function (xhr, status, error) {
                            console.log('Error:', error);
                            console.log('Status:', status);
                            console.log('Response:', xhr.responseJSON);
                        }
                    });
        
                    //success end
                },
                error: function (xhr, status, error) {
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseJSON);
                }
            });
    }
    
    
});
$('#step7Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s7_rock', $('select[name="s7_rock"]').val());
    formData.append('s7_concrete', $('select[name="s7_concrete"]').val());
    formData.append('s7_brick', $('select[name="s7_brick"]').val());
    formData.append('s7_earth', $('select[name="s7_earth"]').val());
    formData.append('s7_drink', $('select[name="s7_drink"]').val());
    formData.append('s7_wall_thickness', $('input[name="s7_wall_thickness"]').val());
    formData.append('s7_insulation', $('select[name="s7_insulation"]').val());
    formData.append('s7_thickness', $('input[name="s7_thickness"]').val());
    formData.append('s7_facade_orientation', $('select[name="s7_facade_orientation"]').val());
    formData.append('s7_height', $('input[name="s7_height"]').val());
    formData.append('s7_length', $('input[name="s7_length"]').val());
    formData.append('s7_surface', $('input[name="s7_surface"]').val());
    formData.append('s7_adjoining_area', $('input[name="s7_adjoining_area"]').val());
    formData.append('s7_area2', $('input[name="s7_area2"]').val());
    formData.append('s7_area3', $('input[name="s7_area3"]').val());
    formData.append('s7_area4', $('input[name="s7_area4"]').val());
    formData.append('s7_t_srfc_area', $('input[name="s7_t_srfc_area"]').val());
    formData.append('s7_srfc_insulator_Type', $('select[name="s7_srfc_insulator_Type"]').val());
    formData.append('s7_area_tobe_insltd', $('input[name="s7_area_tobe_insltd"]').val());
    formData.append('s7_photo', $('input[name="s7_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step7",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});
$('#step8Submit').click(function (e) {
    e.preventDefault();    
    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s8_tbl_val', $('input[name="s8_tbl_val"]').val());
    formData.append('s8_photo', $('input[name="s8_photo"]')[0].files[0]);
    formData.append('s8_comments', $('textarea[name="s8_comments"]').val());
    if($('input[name="s8_tbl_val"]').val() == 100)
    {
        $.ajax({
            data:formData,
            url: "/save_step8",
            type: "POST",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function (data) {
            console.log('success:',data);
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
                console.log('Status:', status);
                console.log('Response:', xhr.responseJSON);
            }
        });
    }
    else{
        var rows = [];
        $('#s8_rowsTable tr:not(:first)').each(function() {
            var row = {
                customer_id : $('input[name="customerId"]').val(),
                kind_opening : $(this).find('select[name="s8_kind_opening"]').val(),
                cop_no : $(this).find('.s8_cop_no').val(),
                cop_length : $(this).find('.s8_cop_length').val(),
                cop_height : $(this).find('.s8_cop_height').val(),
                frame : $(this).find('select[name="s8_frame"]').val(),
                glazing : $(this).find('select[name="s8_glazing"]').val(),
                shutter : $(this).find('select[name="s8_shutter"]').val()
            };
            rows.push(row);
        });
        $.ajax({
                data:formData,
                url: "/save_step8",
                type: "POST",
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function (data) {
                console.log('success:',data);
                    //success start
                        $.ajax({
                        data: {
                            rows:rows
                        },
                        url: "/details_step8",
                        type: "POST",
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            console.log('success2:', data);
                        },
                        error: function (xhr, status, error) {
                            console.log('Error:', error);
                            console.log('Status:', status);
                            console.log('Response:', xhr.responseJSON);
                        }
                    });
        
                    //success end
                },
                error: function (xhr, status, error) {
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseJSON);
                }
            });
    }
    
    
});
$('#step9Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s9_rock', $('select[name="s9_rock"]').val());
    formData.append('s9_concrete', $('select[name="s9_concrete"]').val());
    formData.append('s9_brick', $('select[name="s9_brick"]').val());
    formData.append('s9_earth', $('select[name="s9_earth"]').val());
    formData.append('s9_drink', $('select[name="s9_drink"]').val());
    formData.append('s9_wall_thickness', $('input[name="s9_wall_thickness"]').val());
    formData.append('s9_insulation', $('select[name="s9_insulation"]').val());
    formData.append('s9_thickness', $('input[name="s9_thickness"]').val());
    formData.append('s9_facade_orientation', $('select[name="s9_facade_orientation"]').val());
    formData.append('s9_height', $('input[name="s9_height"]').val());
    formData.append('s9_length', $('input[name="s9_length"]').val());
    formData.append('s9_surface', $('input[name="s9_surface"]').val());
    formData.append('s9_adjoining_area', $('input[name="s9_adjoining_area"]').val());
    formData.append('s9_area2', $('input[name="s9_area2"]').val());
    formData.append('s9_area3', $('input[name="s9_area3"]').val());
    formData.append('s9_area4', $('input[name="s9_area4"]').val());
    formData.append('s9_t_srfc_area', $('input[name="s9_t_srfc_area"]').val());
    formData.append('s9_srfc_insulator_Type', $('select[name="s9_srfc_insulator_Type"]').val());
    formData.append('s9_area_tobe_insltd', $('input[name="s9_area_tobe_insltd"]').val());
    formData.append('s9_photo', $('input[name="s9_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step9",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});

$('#step10Submit').click(function (e) {
    e.preventDefault();    
    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s10_tbl_val', $('input[name="s10_tbl_val"]').val());
    formData.append('s10_photo', $('input[name="s10_photo"]')[0].files[0]);
    formData.append('s10_comments', $('textarea[name="s10_comments"]').val());
    if($('input[name="s10_tbl_val"]').val() == 100)
    {
        $.ajax({
            data:formData,
            url: "/save_step10",
            type: "POST",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function (data) {
            console.log('success:',data);
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
                console.log('Status:', status);
                console.log('Response:', xhr.responseJSON);
            }
        });
    }
    else{
        var rows = [];
        $('#s10_rowsTable tr:not(:first)').each(function() {
            var row = {
                customer_id : $('input[name="customerId"]').val(),
                kind_opening : $(this).find('select[name="s10_kind_opening"]').val(),
                cop_no : $(this).find('.s10_cop_no').val(),
                cop_length : $(this).find('.s10_cop_length').val(),
                cop_height : $(this).find('.s10_cop_height').val(),
                frame : $(this).find('select[name="s10_frame"]').val(),
                glazing : $(this).find('select[name="s10_glazing"]').val(),
                shutter : $(this).find('select[name="s10_shutter"]').val()
            };
            rows.push(row);
        });
        $.ajax({
                data:formData,
                url: "/save_step10",
                type: "POST",
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function (data) {
                console.log('success:',data);
                    //success start
                        $.ajax({
                        data: {
                            rows:rows
                        },
                        url: "/details_step10",
                        type: "POST",
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            console.log('success2:', data);
                        },
                        error: function (xhr, status, error) {
                            console.log('Error:', error);
                            console.log('Status:', status);
                            console.log('Response:', xhr.responseJSON);
                        }
                    });
        
                    //success end
                },
                error: function (xhr, status, error) {
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseJSON);
                }
            });
    }
    
    
});


$('#step11Submit').click(function (e) {
    e.preventDefault();    
    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('lvngspace_total', $('input[name="lvngspace_total"]').val());
    formData.append('burial_of_subfloor', $('select[name="burial_of_subfloor"]').val());
    formData.append('housing_shape', $('select[name="housing_shape"]').val());
    formData.append('low_floor_type', $('select[name="low_floor_type"]').val());
    formData.append('fatwork', $('select[name="fatwork"]').val());
    formData.append('lfg_insulation', $('select[name="lfg_insulation"]').val());
    formData.append('lfg_insulation_thickness', $('input[name="lfg_insulation_thickness"]').val());
    formData.append('lfg_btm_floor_area', $('input[name="lfg_btm_floor_area"]').val());
    formData.append('lfg_insulated_area', $('input[name="lfg_insulated_area"]').val());
    formData.append('step11_photo', $('input[name="step11_photo"]')[0].files[0]);
    formData.append('step11_photo1', $('input[name="step11_photo1"]')[0].files[0]);
    formData.append('step11_photo2', $('input[name="step11_photo2"]')[0].files[0]);
    formData.append('s11_comments', $('textarea[name="comments"]').val());

    var rows = [];
        $('#s11_rowsTable tbody tr').each(function() {
            var row = {
                customer_id : $('input[name="customerId"]').val(),
                s11_row_num : $(this).find('.s11_row_num').val(),
                living_space : $(this).find('.living_space').val(),
                unheated_surface : $(this).find('.unheated_surface').val(),
                cieling_height : $(this).find('.cieling_height').val()
            };
            rows.push(row);
        });

    $.ajax({
        data:formData,
        url: "/save_step11",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
        console.log('success:',data);
        //success start
        $.ajax({
            data: {
                rows:rows
            },
            url: "/details_step11",
            type: "POST",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log('success2:', data);
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
                console.log('Status:', status);
                console.log('Response:', xhr.responseJSON);
            }
        });
        //success end
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
    
    
    
});

$('#step12Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('ventillation', $('select[name="s12_ventillation"]').val());
    formData.append('no_pieces', $('input[name="s12_no_pieces"]').val());
    formData.append('no_bathrooms', $('input[name="s12_no_bathrooms"]').val());
    formData.append('energy', $('select[name="s12_energy"]').val());
    formData.append('generator', $('select[name="s12_generator"]').val());
    formData.append('year', $('select[name="s12_year"]').val());
    formData.append('rated_p', $('input[name="s12_rated_p"]').val());
    formData.append('yield_p_nominal', $('input[name="s12_yield_p_nominal"]').val());
    formData.append('plcd_in_heated_vol', $('select[name="s12_plcd_in_heated_vol"]').val());
    formData.append('photo', $('input[name="s12_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step12",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});

$('#step13Submit').click(function (e) {
    e.preventDefault();    
    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('photo', $('input[name="s13_photo"]')[0].files[0]);
    formData.append('comments', $('textarea[name="s13_comments"]').val());
    
    var rows = [];
        $('#s13_rowsTable tr:not(:first)').each(function() {
            var row = {
                customer_id : $('input[name="customerId"]').val(),
                type : $(this).find('select[name="s13_em_sys_type"]').val(),
                heated_area : $(this).find('.s13_heated_area').val(),
            };
            rows.push(row);
        });
        $.ajax({
                data:formData,
                url: "/save_step13",
                type: "POST",
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function (data) {
                console.log('success:',data);
                    //success start
                        $.ajax({
                        data: {
                            rows:rows
                        },
                        url: "/details_step13",
                        type: "POST",
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            console.log('success2:', data);
                        },
                        error: function (xhr, status, error) {
                            console.log('Error:', error);
                            console.log('Status:', status);
                            console.log('Response:', xhr.responseJSON);
                        }
                    });
        
                    //success end
                },
                error: function (xhr, status, error) {
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseJSON);
                }
            });
        
});
$('#step14Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('type', $('select[name="s14_type"]').val());
    formData.append('accumulation', $('select[name="s14_accumulation"]').val());
    formData.append('volume', $('input[name="s14_volume"]').val());
    formData.append('ecs_seniority', $('select[name="s14_ecs_seniority"]').val());
    formData.append('plcd_in_heated_vol', $('select[name="s14_plcd_in_heated_vol"]').val());
    formData.append('photo', $('input[name="s14_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step14",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});

$('#step15Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('meter_type', $('select[name="s15_meter_type"]').val());
    formData.append('meter_power', $('select[name="s15_meter_power"]').val());
    formData.append('photo', $('input[name="s15_photo"]')[0].files[0]);

    $.ajax({
        data: formData,
        url: "/save_step15",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});

//working ajax request
// $('#step4Submit').click(function (e) {
//     e.preventDefault();    
//     var formData = new FormData();
//     formData.append('customerId', $('input[name="customerId"]').val());
//     formData.append('s4_tbl_val', $('input[name="s4_tbl_val"]').val());
//     formData.append('s4_photo', $('input[name="s4_photo"]')[0].files[0]);
//     formData.append('s4_comments', $('textarea[name="s4_comments"]').val());

//     var rows = [];
//     $('#s4_rowsTable tr:not(:first)').each(function() {
//         var row = {
//             customer_id : $(this).find('.customerId').val(),
//             kind_opening : $(this).find('select[name="s4_kind_opening"]').val(),
//             cop_no : $(this).find('.s4_cop_no').val(),
//             cop_length : $(this).find('.s4_cop_length').val(),
//             cop_height : $(this).find('.s4_cop_height').val(),
//             frame : $(this).find('select[name="s4_frame"]').val(),
//             glazing : $(this).find('select[name="s4_glazing"]').val(),
//             shutter : $(this).find('select[name="s4_shutter"]').val()
//         };
//         rows.push(row);
//     });
//     $.ajax({
//         data:formData,
//         url: "/save_step4",
//         type: "POST",
//         dataType: 'json',
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         processData: false,
//         contentType: false,
//         success: function (data) {
//         console.log('success:',data);
//             //success start
//                 $.ajax({
//                 data: {
//                     rows:rows
//                 },
//                 url: "/details_step4",
//                 type: "POST",
//                 dataType: 'json',
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 success: function (data) {
//                     console.log('success2:', data);
//                 },
//                 error: function (xhr, status, error) {
//                     console.log('Error:', error);
//                     console.log('Status:', status);
//                     console.log('Response:', xhr.responseJSON);
//                 }
//             });

//             //success end
//         },
//         error: function (xhr, status, error) {
//             console.log('Error:', error);
//             console.log('Status:', status);
//             console.log('Response:', xhr.responseJSON);
//         }
//     });
// });

    
