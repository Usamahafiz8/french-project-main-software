$(document).ready(function(){
  var i=2;
    $(".s4_addRows").click(function(){
        var s4_row = '<tr>' +
          '<td class="s4_td1"><input type="checkbox" name="s4_record"><input type="hidden" class="row_num" name="row_num" value="'+i+'"></td>' +
          '<td class="s4_td1"><select name="s4_kind_opening" class="form_select_opt form-control"><option value="0" selected>Fenêtre</option><option value="1"> PF coulissante </option><option value="2"> Porte </option><option value="3"> Velux </option><option value="4"> Baie Vitrée </option><option value="5"> PF coulissante </option><option value="6"> Porte de garage </option><option value="7"> Brique de verre </option></select></td>' +
          '<td class="s4_td1"><input class="form-control s4_cop_no" type="text" name="s4_cop_no" id="name"></td>' +
          '<td class="s4_td1"><input class="form-control s4_cop_length" type="text" name="s4_cop_length" id="department"></td>' +
          '<td class="s4_td1"><input class="form-control s4_cop_height" type="text" name="s4_cop_height" id="department"></td>' +
          '<td class="s4_td1"><select name="s4_frame" class="form_select_opt form-control"><option value="0" selected>PVC</option><option value="1"> Bios </option><option value="2"> Alu </option><option value="3"> Aucun </option></select>    </td>' +
          '<td class="s4_td1"><select name="s4_glazing" class="form_select_opt form-control"><option value="0" selected>Simple vitrage</option><option value="1"> Double vitrage ancien (>10 ans) </option><option value="2"> Double vitrage récent (< 10 ans)  </option><option value="3"> Double vitrage VIR </option><option value="4"> Double fenêtre  </option><option value="5"> Aucun </option></select>    </td>' +
          '<td class="s4_td1"> <select name="s4_shutter" class="form_select_opt form-control"><option value="0" selected>Volet avec ajours </option><option value="1"> Volets battants bois </option><option value="2"> Volets battants PVC  </option><option value="3"> Volets roulants PVC  </option><option value="4"> Volets roulants alu </option><option value="5"> Persiennes coulissantes </option><option value="6"> Aucun </option></select>    </td>' +
            '</tr>';
        var s4_addrows1 = (s4_row);
        var s4_table1 = document.getElementById("s4_rowsTable").rows;
        var lastrow = s4_table1[s4_table1.length - 1];
        var s4_cop_no = $(lastrow).find(".s4_td1 .s4_cop_no").val();
        var s4_cop_length = $(lastrow).find(".s4_td1 .s4_cop_length").val();
        var s4_cop_height = $(lastrow).find(".s4_td1 .s4_cop_height").val();
       if(s4_cop_no == '' || s4_cop_length == '' || s4_cop_height == '')
       {
        window.alert("Please fill all the fields");
       }
       else{
        i = ++i;
        $("#s4_rowsTable").append(s4_addrows1);
       }
    });
    
    $(".s4_deleteRow").click(function(){
        $("#s4_rowsTable .s4_td1").find('input[name= "s4_record"]').each(function(){
            console.log("2");
            if($(this).is(":checked")){
           
            $(this).parents("tr").remove();
            }     
    });                  
    });


    //s6 table
    $(".s6_addRows").click(function(){
        var s6_row = '<tr>' +
          '<td class="s6_td1"><input type="checkbox" name="s6_record"></td>' +
          '<td class="s6_td1"><select name="s6_kind_opening" class="form_select_opt form-control"><option value="0" selected>Fenêtre</option><option value="1"> PF coulissante </option><option value="2"> Porte </option><option value="3"> Velux </option><option value="4"> Baie Vitrée </option><option value="5"> PF coulissante </option><option value="6"> Porte de garage </option><option value="7"> Brique de verre </option></select></td>' +
          '<td class="s6_td1"><input class="form-control s6_cop_no" type="text" name="s6_cop_no" id="name"></td>' +
          '<td class="s6_td1"><input class="form-control s6_cop_length" type="text" name="s6_cop_length" id="department"></td>' +
          '<td class="s6_td1"><input class="form-control s6_cop_height" type="text" name="s6_cop_height" id="department"></td>' +
          '<td class="s6_td1"><select name="s6_frame" class="form_select_opt form-control"><option value="0" selected>PVC</option><option value="1"> Bios </option><option value="2"> Alu </option><option value="3"> Aucun </option></select>    </td>' +
          '<td class="s6_td1"><select name="s6_glazing" class="form_select_opt form-control"><option value="0" selected>Simple vitrage</option><option value="1"> Double vitrage ancien (>10 ans) </option><option value="2"> Double vitrage récent (< 10 ans)  </option><option value="3"> Double vitrage VIR </option><option value="4"> Double fenêtre  </option><option value="5"> Aucun </option></select>    </td>' +
          '<td class="s6_td1"> <select name="s6_shutter" class="form_select_opt form-control"><option value="0" selected>Volet avec ajours </option><option value="1"> Volets battants bois </option><option value="2"> Volets battants PVC  </option><option value="3"> Volets roulants PVC  </option><option value="4"> Volets roulants alu </option><option value="5"> Persiennes coulissantes </option><option value="6"> Aucun </option></select>    </td>' +
            '</tr>';
        var s6_addrows1 = (s6_row);
        var s6_table1 = document.getElementById("s6_rowsTable").rows;
        var lastrow = s6_table1[s6_table1.length - 1];
        var s6_cop_no = $(lastrow).find(".s6_td1 .s6_cop_no").val();
        var s6_cop_length = $(lastrow).find(".s6_td1 .s6_cop_length").val();
        var s6_cop_height = $(lastrow).find(".s6_td1 .s6_cop_height").val();
       console.log(s6_cop_length);
       if(s6_cop_no == '' || s6_cop_length == '' || s6_cop_height == '')
       {
        window.alert("Please fill all the fields");
       }
       else{
        $("#s6_rowsTable").append(s6_addrows1);
       }
    });
    
    $(".s6_deleteRow").click(function(){
        $("#s6_rowsTable .s6_td1").find('input[name= "s6_record"]').each(function(){
            if($(this).is(":checked")){
           
            $(this).parents("tr").remove();
            }     
    });                  
    });


    //s8 table
 $(".s8_addRows").click(function(){
    var s8_row = '<tr>' +
      '<td class="s8_td1"><input type="checkbox" name="s8_record"></td>' +
      '<td class="s8_td1"><select name="s8_kind_opening" class="form_select_opt form-control"><option value="0" selected>Fenêtre</option><option value="1"> PF coulissante </option><option value="2"> Porte </option><option value="3"> Velux </option><option value="4"> Baie Vitrée </option><option value="5"> PF coulissante </option><option value="6"> Porte de garage </option><option value="7"> Brique de verre </option></select></td>' +
      '<td class="s8_td1"><input class="form-control s8_cop_no" type="text" name="s8_cop_no" id="name"></td>' +
      '<td class="s8_td1"><input class="form-control s8_cop_length" type="text" name="s8_cop_length" id="department"></td>' +
      '<td class="s8_td1"><input class="form-control s8_cop_height" type="text" name="s8_cop_height" id="department"></td>' +
      '<td class="s8_td1"><select name="s8_frame" class="form_select_opt form-control"><option value="0" selected>PVC</option><option value="1"> Bios </option><option value="2"> Alu </option><option value="3"> Aucun </option></select>    </td>' +
      '<td class="s8_td1"><select name="s8_glazing" class="form_select_opt form-control"><option value="0" selected>Simple vitrage</option><option value="1"> Double vitrage ancien (>10 ans) </option><option value="2"> Double vitrage récent (< 10 ans)  </option><option value="3"> Double vitrage VIR </option><option value="4"> Double fenêtre  </option><option value="5"> Aucun </option></select>    </td>' +
      '<td class="s8_td1"> <select name="s8_shutter" class="form_select_opt form-control"><option value="0" selected>Volet avec ajours </option><option value="1"> Volets battants bois </option><option value="2"> Volets battants PVC  </option><option value="3"> Volets roulants PVC  </option><option value="4"> Volets roulants alu </option><option value="5"> Persiennes coulissantes </option><option value="6"> Aucun </option></select>    </td>' +
        '</tr>';
    var s8_addrows1 = (s8_row);
    var s8_table1 = document.getElementById("s8_rowsTable").rows;
    var lastrow = s8_table1[s8_table1.length - 1];
    var s8_cop_no = $(lastrow).find(".s8_td1 .s8_cop_no").val();
    var s8_cop_length = $(lastrow).find(".s8_td1 .s8_cop_length").val();
    var s8_cop_height = $(lastrow).find(".s8_td1 .s8_cop_height").val();
   console.log(s8_cop_length);
   if(s8_cop_no == '' || s8_cop_length == '' || s8_cop_height == '')
   {
    window.alert("Please fill all the fields");
   }
   else{
    $("#s8_rowsTable").append(s8_addrows1);
   }
  });
  
  $(".s8_deleteRow").click(function(){
    $("#s8_rowsTable .s8_td1").find('input[name= "s8_record"]').each(function(){
        if($(this).is(":checked")){
       
        $(this).parents("tr").remove();
        }     
  });                  
  });


   //s10 table
 $(".s10_addRows").click(function(){
    var s10_row = '<tr>' +
      '<td class="s10_td1"><input type="checkbox" name="s10_record"></td>' +
      '<td class="s10_td1"><select name="s10_kind_opening" class="form_select_opt form-control"><option value="0" selected>Fenêtre</option><option value="1"> PF coulissante </option><option value="2"> Porte </option><option value="3"> Velux </option><option value="4"> Baie Vitrée </option><option value="5"> PF coulissante </option><option value="6"> Porte de garage </option><option value="7"> Brique de verre </option></select></td>' +
      '<td class="s10_td1"><input class="form-control s10_cop_no" type="text" name="s10_cop_no" id="name"></td>' +
      '<td class="s10_td1"><input class="form-control s10_cop_length" type="text" name="s10_cop_length" id="department"></td>' +
      '<td class="s10_td1"><input class="form-control s10_cop_height" type="text" name="s10_cop_height" id="department"></td>' +
      '<td class="s10_td1"><select name="s10_frame" class="form_select_opt form-control"><option value="0" selected>PVC</option><option value="1"> Bios </option><option value="2"> Alu </option><option value="3"> Aucun </option></select>    </td>' +
      '<td class="s10_td1"><select name="s10_glazing" class="form_select_opt form-control"><option value="0" selected>Simple vitrage</option><option value="1"> Double vitrage ancien (>10 ans) </option><option value="2"> Double vitrage récent (< 10 ans)  </option><option value="3"> Double vitrage VIR </option><option value="4"> Double fenêtre  </option><option value="5"> Aucun </option></select>    </td>' +
      '<td class="s10_td1"> <select name="s10_shutter" class="form_select_opt form-control"><option value="0" selected>Volet avec ajours </option><option value="1"> Volets battants bois </option><option value="2"> Volets battants PVC  </option><option value="3"> Volets roulants PVC  </option><option value="4"> Volets roulants alu </option><option value="5"> Persiennes coulissantes </option><option value="6"> Aucun </option></select>    </td>' +
        '</tr>';
    var s10_addrows1 = (s10_row);
    var s10_table1 = document.getElementById("s10_rowsTable").rows;
    var lastrow = s10_table1[s10_table1.length - 1];
    var s10_cop_no = $(lastrow).find(".s10_td1 .s10_cop_no").val();
    var s10_cop_length = $(lastrow).find(".s10_td1 .s10_cop_length").val();
    var s10_cop_height = $(lastrow).find(".s10_td1 .s10_cop_height").val();
   console.log(s10_cop_length);
   if(s10_cop_no == '' || s10_cop_length == '' || s10_cop_height == '')
   {
    window.alert("Please fill all the fields");
   }
   else{
    $("#s10_rowsTable").append(s10_addrows1);
   }
  });
  
  $(".s10_deleteRow").click(function(){
    $("#s10_rowsTable .s10_td1").find('input[name= "s10_record"]').each(function(){
        if($(this).is(":checked")){
       
        $(this).parents("tr").remove();
        }     
  });                  
  });



   //s13 table
 $(".s13_addRows").click(function(){

    var s13_row = '<tr>' +
    '<td class="s13_td1"><input type="checkbox" name="s13_record"></td>'+
    '<td class="s13_td1">'+
         '<select name="s13_em_sys_type" class="form_select_opt s13_em_sys_type form-control">'+
             '<option value="0" selected> Cast iron radiator</option>'+
             '<option value="1"> Steel radiator </option>'+
             '<option value="2"> Fan coil </option>'+
             '<option value="3"> Underfloor heating </option>'+
             '<option value="4"> Other </option>'+
         '</select>'+
     '</td>'+
     '<td class="s13_td1"><input class="form-control s13_heated_area" type="text" name="s13_heated_area"></td>'+
        '</tr>';
    var s13_addrows1 = (s13_row);
    var s13_table1 = document.getElementById("s13_rowsTable").rows;
    var lastrow = s13_table1[s13_table1.length - 1];
    var s13_heated_area = $(lastrow).find(".s13_td1 .s13_heated_area").val();
    
   if(s13_heated_area == '')
   {
    window.alert("Please fill all the fields");
   }
   else{
    $("#s13_rowsTable").append(s13_addrows1);
   }
  });
  
  $(".s13_deleteRow").click(function(){
    $("#s13_rowsTable .s13_td1").find('input[name= "s13_record"]').each(function(){
        if($(this).is(":checked")){
       
        $(this).parents("tr").remove();
        }     
  });                  
  });
});