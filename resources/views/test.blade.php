<html>
    <head>
        <title>Jquery</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
       <script>
           $(document).ready(function(){
        $(".addRows").click(function(){

            //console.log("clicking");            
            
            var addrows1 = ("<tr><td class='td1'><input type='checkbox' name='record'><td class='td1'><input class='fname' type='text' maxlength='50'></td> <td class='td1'><input class='lname' type='text' maxlength='50'></td> <td class='td1'><input class='email1' type='email'></td><td class='td1'><span id='mDelete' class='minusDelete' name='record1'></span></td></tr>");
            var email1 = document.getElementsByClassName("email1").value;
            var email2 = document.getElementById("email2").value;
            var fname1 = document.getElementsByClassName("fname");
            var lname1 = document.getElementsByClassName("lname");
           // console.log(email1,fname1,lname1);
            var table1 = document.getElementById("rowsTable").rows;
            var lastrow = table1[table1.length - 1];
            var f_name = $(lastrow).find(".td1 .fname").val();
            var l_name = $(lastrow).find(".td1 .lname").val();
            var u_email = $(lastrow).find(".td1 .email1").val();
           console.log(l_name);
           if(f_name == '' || l_name == '' || u_email == '')
           {
            window.alert("error");
           }
           else{
            $("#rowsTable").append(addrows1);
           }
          //  $("#rowsTable").append(addrows1);
         //   var lastrow = table1[table1.rows.length - 1];
           // console.log(lastrow);
           /* if(find('email1') == 0 || fname1 == '' || lname1 == '')
            {
                console.log("email reqired");
                return false;
            }
            else{
            $("#rowsTable").append(addrows1);

        } */
        });
        $(".minusDelete").mouseup(function(){
            console.log("1");
            $("#mDelete .minusDelete").find('span[name= "record1"]').each(function(){
                console.log("2");
                //if($(this).is(":checked")){
               
                $(this).parents("tr").remove();
                //}
         
        });                  
        });
        $(".lDelete").click(function(){
            $("#rowsTable .td1").find('input[name= "record"]').each(function(){
                
                var rowCount = $('#rowsTable tr').length-1;
                console.log(rowCount);

                
              $('#rowsTable tr[rowCount]').remove();


               /* if($(this).is(":checked")){
               
                $(this).parents("tr").remove();
                }
                */
         
        });                  
        });
        
        $(".deleteRow").click(function(){
            $("#rowsTable .td1").find('input[name= "record"]').each(function(){
                console.log("2");
                if($(this).is(":checked")){
               
                $(this).parents("tr").remove();
                }
         
        });                  
        });
        
    });
       </script> 
       <table id="rowsTable">
           <tr>
               <th>Selected</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email Address</th>
           </tr>
           <tr>
               <td class="td1"><input type="checkbox" name="record"></td>
               <td class="td1"><input type="text" class="fname" maxlength="50"></td>
               <td class="td1"><input type="text" class="lname" maxlength="50"></td>
               <td class="td1"><input type="email" class="email1" id="email2"></td>
               <td class="td1"><span id="mDelete" class="minusDelete" name="record1"></span></td>
           </tr>
           </table>
           <input type="button" value="Add Row" class="addRows">
           <input type="button" value="Delete Row" class="deleteRow">
           <input type="button" value="Delete Last Row" class="lDelete">
    </body>
</html>