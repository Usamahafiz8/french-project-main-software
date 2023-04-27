<html>
    <head>
    <style>
            /** Define the margins of your page **/
            /* @page {
                margin: 60px 2px;
            } */
            @page {
                margin: 60px 0px 0px 0px;
            }
            .container{
                margin-left:5%;
                margin-right:5%;
            }
            header{
                position: fixed;
                top: -150px;
                left: -50px;
                right: 0px;
                height: auto;            
                line-height: 450px;
            }
            .header_logo{
                width:905px;
                height:auto
            }
            .head_text {
                width: 100%;
                font-size: 24px;
                color: #54ba9e;
                text-align: center;
                font-weight: bold;
            }
            .sub_head_text {
                width: 100%;
                font-size: 20px;
                color: #2e2f80;
                text-align: center;
                font-weight: bold;
            }
            .head_cell{
                border:1px solid #2e2f80;
                background-color: #2e2f80;
                color:white;
                width:90px;
                font-size:12px;
            }
            .cell{
                border:1px solid #2e2f80;
                background-color: #ECF2FF;
            }
            .td_head{
                width:145px !important;
                font-weight: bold !important;
                font-size:14px;
            }
            tr{
                height:0px;
            }

            td{
                font-size: 11px;
                height: 10px;
                padding:3px 2px 3px 2px;
            }
            .input_text{
                width: 170px;
                height: 20px;
                float: left;
                font-size: 12px;
                background-color: #ECF2FF;
                text-align: center;
            }
            input[type="checkbox"]{
                color:#2e2f80;
                transform: scale(0.7);
            }
             .input_comment{
                width: 500px;
                height: 90px;
                float: left;
                font-size: 12px;
                background-color: #ECF2FF;
                text-align: center;
            }
            .input_text_add{
                width: 370px;
                height: 50px;
                float: left;
                font-size: 12px;
                background-color: #ECF2FF;
                text-align: center;
            }
            .td_chkbox_input{
                width: 200px !important;
            }
            .no-outline{
            border:0;
            outline:0;
            /* outline: none; */
            }
            .img_div{
                width:80%;
                margin-left:10%;
                height:300px;
                border:1px solid #2e2f80;
            }
            /* footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 
                font-size: 20px !important;

                background-color: #008B8B;
                color: white;
                text-align: center;
                line-height: 35px;
            } */
        </style>
    </head>
    <body>
        
    <!-- Define header and footer blocks before your content -->
    <header>
        <img alt="" class="header_logo" src="http://cybillnerd.com//PDFheader.png">
    </header>

    <!-- <footer>
        Copyright © <?php echo date("Y");?> 
    </footer> -->

<?php
  if (isset($step1_data->heatingmode_change)) {
      $heatingmode_chng_json = json_decode($step1_data->heatingmode_change);
        if($heatingmode_chng_json == null)
          {
            $heatingmode_chng_json = array('9');  
          }
  } else {
    $heatingmode_chng_json = array('9');
  }

  if (isset($step1_data->lost_attics_type)) {
    $lost_attics_type_json = json_decode($step1_data->lost_attics_type);
      if($lost_attics_type_json == null)
        {
          $lost_attics_type =  "false";
        }
        else{
          $lost_attics_type =  str_replace('"', '', $step1_data->lost_attics_type);
        }
        } 
  else {
    $lost_attics_type =  "false";
  }

  if(isset($step1_data->low_floor_type)) {
    $low_floor_type_json = json_decode($step1_data->low_floor_type);
      if($low_floor_type_json == null)
        {
          $low_floor_type =  "false";
        }
        else{
          $low_floor_type =  str_replace('"', '', $step1_data->low_floor_type);
        }
        } 
  else {
    $low_floor_type =  "false";
  }

  if(isset($step1_data->crawlers_type)) {
    $crawlers_type_json = json_decode($step1_data->crawlers_type);
      if($crawlers_type_json == null)
        {
          $crawlers_type =  "false";
        }
        else{
          $crawlers_type =  str_replace('"', '', $step1_data->crawlers_type);
        }
        } 
  else {
    $crawlers_type =  "false";
  }

  if(isset($step1_data->tdynamic_baloon_type)) {
    $tdynamic_baloon_type_json = json_decode($step1_data->tdynamic_baloon_type);
      if($tdynamic_baloon_type_json == null)
        {
          $tdynamic_baloon_type =  "false";
        }
        else{
          $tdynamic_baloon_type =  str_replace('"', '', $step1_data->tdynamic_baloon_type);
        }
        } 
  else {
    $tdynamic_baloon_type =  "false";
  }

  if(isset($step1_data->waterheater_type)) {
    $waterheater_type_json = json_decode($step1_data->waterheater_type);
      if($waterheater_type_json == null)
        {
          $waterheater_type =  "false";
        }
        else{
          $waterheater_type =  str_replace('"', '', $step1_data->waterheater_type);
        }
        } 
  else {
    $waterheater_type =  "false";
  }

      if(isset($step1_data->isolation_gesture_type))
      {
        $isolation_gesture_type = json_decode($step1_data->isolation_gesture_type);
        $isolation_gesture_type = (int)$isolation_gesture_type;
      }
      if(isset($step1_data->ventilation_sys_installation))
      {
        $ventilation_sys_installation = json_decode($step1_data->ventilation_sys_installation);
        $ventilation_sys_installation = (int)$ventilation_sys_installation;
      }
      
    
  ?>
    <main>    
        <div class="container" style="page-break-after: always;">
            <br>
            <h6 class="head_text">Relevé d’évaluation thermique d’une maison individuelle</h6>
            <p class="sub_head_text">INFORMATIONS GENERALES</p>
            <br>
            <table>
                <tr>
                    <td rowspan="2" class="td_head">Informations générales <br> de l'auditeur</td>
                    <td>Nom</td>
                    <td><span class="input_text"><?php echo $user_data->name ?? ''; ?></span></td>
                    <td>Prénom</td>
                    <td><span class="input_text"><?php echo $step1_data->aud_f_name ?? ''; ?></span></td>
                </tr>
                <tr>
                    <td>Date de visite</td>
                    <td><span class="input_text"><?php echo $step1_data->aud_visit_date ?? ''; ?></span></td>
                    <td>N° de relevé</td>
                    <td><span class="input_text"><?php echo $step1_data->aud_statemnt_no ?? ''; ?></span></td>
                </tr>
            </table>
            <hr style="padding:0px; margin:0px;">
            <table>
                <tr>
                    <td rowspan="3" class="td_head">Informations générales du client</td>
                    <td>Nom</td>
                    <td><span class="input_text"><?php echo $customer_data->name ?? ''; ?></span></td>
                    <td>Prénom</td>
                    <td><span class="input_text"><?php echo $customer_data->first_name ?? ''; ?></span></td>
                </tr>
                <tr>
                    <td>N° de téléphone</td>
                    <td><span class="input_text"><?php echo $customer_data->contact ?? ''; ?></span></td>
                    <td>Adresse email</td>
                    <td><span class="input_text"><?php echo $customer_data->email ?? ''; ?></span></td>
                </tr>
                <tr>
                    <td>Nombres de personnes <br> dans le foyer</td>
                    <td><span class="input_text"><?php echo $customer_data->people_on_hearth ?? ''; ?></span></td>
                    <td>Revenu fiscal</td>
                    <td><span class="input_text"><?php echo $customer_data->tax_income ?? ''; ?></span></td>
                </tr>
            </table>
            <table>
                <tr>
                        <td>Address</td>
                        <td rowspan="2"><span class="input_text_add"><?php echo $customer_data->address ?? ''; ?></span></td>
                        <td>Date de construction</td>
                        <td><span class="input_text"><?php echo $customer_data->construction_date ?? ''; ?></span></td>
                </tr>
                <tr>
                        <td></td>
                        <td>Altitude</td>
                        <td><span class="input_text"><?php echo $step1_data->altitude ?? ''; ?></span></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td class="td_head">Occupation du<br>logement</td>
                    <td><input type="checkbox" <?php if(isset($step1_data->occupancy_accomodation)){ echo ($step1_data->occupancy_accomodation == 0) ? 'checked' : '';}?>> <input type="text" class="no-outline" value="depuis plus d'un an" readonly></td>
                    <td><input type="checkbox" <?php if(isset($step1_data->occupancy_accomodation)){ echo ($step1_data->occupancy_accomodation == 1) ? 'checked' : '';}?>> <input type="text" class="no-outline" value="depuis moins d'un an" readonly></td>
                </tr>
            </table>
            <table>
                <tr>    
                    <td rowspan="2" class="td_head">Niveau de confort </td>
                    <td style="font-weight:bold">hiver</td>
                    <td><input type="checkbox" <?php if(isset($step1_data->winter_comfortlevel)) { echo ($step1_data->winter_comfortlevel == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="mauvais" readonly></td>
                    <td><input type="checkbox" <?php if(isset($step1_data->winter_comfortlevel)) { echo ($step1_data->winter_comfortlevel == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="correct" readonly></td>
                    <td><input type="checkbox" <?php if(isset($step1_data->winter_comfortlevel)) { echo ($step1_data->winter_comfortlevel == 2) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Bon" readonly></td>
                </tr>
                <tr>    
                    <td style="font-weight:bold">été</td>
                    <td><input type="checkbox" <?php if(isset($step1_data->summer_comfortlevel)) { echo ($step1_data->summer_comfortlevel == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="mauvais" readonly></td>
                    <td><input type="checkbox" <?php if(isset($step1_data->summer_comfortlevel)) { echo ($step1_data->summer_comfortlevel == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="correct" readonly></td>
                    <td><input type="checkbox" <?php if(isset($step1_data->summer_comfortlevel)) { echo ($step1_data->summer_comfortlevel == 2) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Bon" readonly></td>
                </tr>
            </table>
            <hr style="padding:0px; margin:0px;">
            <table>
            <?php
                if (isset($step1_data->client_goals)) {
                    $goals_json = json_decode($step1_data->client_goals);
                    if($step1_data->client_goals == null || $step1_data->client_goals == "null")
                    {
                        $goals_json = array('9');
                    }
                    
                } else {
                $goals_json = array('9');
                } 
                if (isset($step1_data->heatingmode_change)) {
                    $heatingmode_chng_json = json_decode($step1_data->heatingmode_change);
                    if($step1_data->heatingmode_change == null || $step1_data->heatingmode_change == "null")
                    {
                        $heatingmode_chng_json = array('9');
                    }
                  } else {
                    $heatingmode_chng_json = array('9');
                }
            ?>

                <tr>    
                    <td rowspan="4" class="td_head">Objectifs du client</td>
                    <td><input type="checkbox" <?php echo in_array('0', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value=" Améliorer le confort thermique" readonly></td>
                    <td><input type="checkbox" <?php echo in_array('1', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value=" Adapter/ réagencer le logement" readonly></td>
                </tr>
                <tr>    
                    <td><input type="checkbox" <?php echo in_array('2', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value="Embellir le logement " readonly></td>
                    <td><input type="checkbox" <?php echo in_array('3', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value="Réduire l'emprunte environnementale" readonly></td>
                </tr>
                <tr>    
                    <td><input type="checkbox" <?php echo in_array('4', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value="Faire des économies" readonly></td>
                    <td><input type="checkbox" <?php echo in_array('5', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value=" Résoudre une panne / une dégradation" readonly></td>
                </tr>
                <tr>    
                    <td><input type="checkbox" <?php echo in_array('6', $goals_json) ? 'checked' : ''; ?>><input type="text" class="no-outline td_chkbox_input" value="Augmenter la valeur du bien immobilier" readonly></td>
                </tr>
            </table>
            <hr style="padding:0px; margin:0px;">
            <table>
                <tr>    
                    <td rowspan="12" class="td_head">Préconisations (à remplir à la fin de la visite)</td>
                    <td style="font-weight:bold" colspan="3">Changement de mode de chauffage</td>
                </tr>
                <tr>    
                    <td><input type="checkbox" <?php echo in_array('0', $heatingmode_chng_json) ? 'checked' : ''; ?>><input type="text" class="no-outline" value="PAC A/E" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php echo in_array('1', $heatingmode_chng_json) ? 'checked' : ''; ?>><input type="text" class="no-outline" value="PAC A/A" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php echo in_array('2', $heatingmode_chng_json) ? 'checked' : ''; ?>><input type="text" class="no-outline" value="Chaudière pellets" readonly></td>
                    <td><input type="checkbox" <?php echo in_array('3', $heatingmode_chng_json) ? 'checked' : ''; ?>><input type="text" class="no-outline" value="Autre" readonly></td>
                </tr>
                <tr>    
                    <td style="font-weight:bold" colspan="3">Geste d'isolation</td>
                </tr>
                <tr>    
                    <td><input type="checkbox" <?php if(isset($step1_data->isolation_gesture_type)) { echo ($isolation_gesture_type == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITE" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step1_data->isolation_gesture_type)) { echo ($isolation_gesture_type == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITI" readonly style="width:50px"></td>
                    <td colspan="2"><span class="input_text"><?php echo $step1_data->isolation_gesture_val ?? ''; ?></span></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="checkbox" <?php if(isset($step1_data->low_floor_type)) { echo ($low_floor_type == "true") ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Plancher bas" readonly style="width:100px"></td>
                    <td colspan="2"><span class="input_text"><?php echo $step1_data->low_floor_val ?? ''; ?></span></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="checkbox" <?php if(isset($step1_data->lost_attics_type)) { echo ($lost_attics_type == "true") ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Combles perdus" readonly style="width:100px"></td>
                    <td colspan="2"><span class="input_text"><?php echo $step1_data->isolation_gesture_val ?? ''; ?></span></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="checkbox" <?php if(isset($step1_data->crawlers_type)) { echo ($crawlers_type == "true") ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Rampants" readonly style="width:100px"></td>
                    <td colspan="2"><span class="input_text"><?php echo $step1_data->crawlers_val ?? ''; ?></span></td>
                </tr>
                <tr>    
                    <td style="font-weight:bold" colspan="3">Changement de mode d'ECS</td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="checkbox" <?php if(isset($step1_data->tdynamic_baloon_type)) { echo ($tdynamic_baloon_type == "true") ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Ballon thermodynamique" readonly style="width:150px"></td>
                    <td colspan="2"><span class="input_text"><?php echo $step1_data->tdynamic_baloon_val ?? ''; ?></span></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="checkbox" <?php if(isset($step1_data->waterheater_type)) { echo ($waterheater_type == "true") ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Chauffe-eau solaire individuel" readonly style="width:150px"></td>
                    <td colspan="2"><span class="input_text"><?php echo $step1_data->waterheater_val ?? ''; ?></span></td>
                </tr>
            </table>
            <hr style="padding:0px; margin:0px;">
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Commentaires :</td>
                    <td colspan="3"><span class="input_comment"><?php echo $step1_data->comments ?? ''; ?></span></td>
                </tr>
            </table>
        </div>

        <!-- page 2 -->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Configuration du plancher haut</p>
            <br>
            <table>
                <tr>
                    <td class="td_head">Type de plancher haut</td>
                    <td><input type="checkbox" <?php if(isset($step2_data->low_floor_type)) { echo ($step2_data->low_floor_type == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Combles perdus" readonly style="width:110px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->low_floor_type)) { echo ($step2_data->low_floor_type == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Combles aménagés" readonly style="width:110px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->low_floor_type)) { echo ($step2_data->low_floor_type == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Toiture terrasse" readonlystyle="width:90px"></td>
                </tr>
                
            </table>
            <table>
                <tr>
                    <td class="td_head">Gros-œuvre</td>
                    <td><input type="checkbox" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Bois" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value=" Béton ou terre" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Plafond" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:110px"></td>
                </tr>
                <tr>
                    <td class="td_head">Isolation</td>
                    <td><input type="checkbox" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Aucune" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="> 10 ans" readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value=" 5 à 10 ans " readonly style="width:70px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="<5 ans" readonly style="width:70px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur de l'isolant</td>
                    <td style="width:100px;height:14px !important;font-size: 12px;background-color: #ECF2FF;"><?php echo $step2_data->insulation_thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php ($step2_data->insulation_thickness == '"0"') ? 'checked' : ''; ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:110px"></td>
                </tr>
                <tr>
                    <td class="td_head">Si combles aménageables  <br>renseigner</td>
                    <td colspan="2" style="width:500px;border-bottom:1px solid black;"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface des rampants</td>
                    <td style="width:100px;height:18px;font-size: 12px;height:22px;background-color: #ECF2FF;"><?php echo $step2_data->crawlers_surface ?? ''; ?></td>
                    <td class="td_head">Surface du plafond extérieur</td>
                    <td style="width:100px;height:18px;font-size:12px;background-color: #ECF2FF;"><?php echo $step2_data->exterior_ceiling ?? ''; ?></td>
                </tr>
                <tr>
                    <td class="td_head">Si combles perdus <br>renseigner</td>
                    <td colspan="3" style="width:500px;border-bottom:1px solid black;"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface des combles perdus</td>
                    <td style="width:100px;height:16px;font-size:12px;background-color:#ECF2FF;"><?php echo $step2_data->attic_area_val ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->attic_area)) { echo ($step2_data->attic_area == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Isolation déroulé" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step2_data->attic_area)) { echo ($step2_data->attic_area == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Isolation soufflée" readonly style="width:90px"></td>
                </tr>
            </table>
            <hr>
            <br><br>
            <h6>Photo</h6>
            <?php
            

            ?>
            <div class="img_div"><img src="<?php if(isset($step2_data->photo)) { echo 'http://cybillnerd.com/images/'.$step2_data->photo; }?>" width="80%" height="auto"></div>
            
        </div>
            <!-- Page 2 : 2 -->
        <div class="container" style="page-break-after: always;">
            <br><br>
            &nbsp;
            <p class="sub_head_text">PHOTO PLANCHER HAUT</p><br>
            <div class="img_div"><img src="<?php if(isset($step2_data->hf_photo1)) { echo 'http://cybillnerd.com/images/'.$step2_data->hf_photo1; }?>" width="80%" height="auto"></div>
            <br>
            <div class="img_div"><img src="<?php if(isset($step2_data->hf_photo1)) { echo 'http://cybillnerd.com/images/'.$step2_data->hf_photo1; }?>" width="80%" height="auto"></div>
            <br>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Observations :</td>
                    <td colspan="3"><span class="input_comment">test</span></td>
                </tr>
            </table>
        </div>

        <!-- Page 3-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Configuration des murs extérieurs</p>
            <p class="sub_head_text">FACADE NORD</p>
            <p class="sub_head_text">Composition du mur extérieur</p>
            
            <table>
                <tr>    
                    <td class="td_head">Gros -œuvre</td>
                    <td><input type="text" class="no-outline" value="Pierre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->rock)) { echo ($step3_data->rock == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pierres locales maçonées" readonly style="width:180px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->rock)) { echo ($step3_data->rock == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value=" Pierres meuliéres" readonly style="width:110px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->rock)) { echo ($step3_data->rock == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Autre" readonly style="width:70px"></td>
                    <!-- <td><input type="checkbox" <?php //if(isset($step3_data->rock)) { echo ($step3_data->rock == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Non" readonly style="width:70px"></td> -->
                </tr>
            </table>
            <table>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Béton" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->concrete)) { echo ($step3_data->concrete == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Parpaing" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->concrete)) { echo ($step3_data->concrete == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton banché" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->concrete)) { echo ($step3_data->concrete == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton de mâchefer" readonly style="width:120px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->concrete)) { echo ($step3_data->concrete == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Autre" readonly style="width:70px"></td>
                    
                </tr>
            </table>
            <table>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Brique" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->brick)) { echo ($step3_data->brick == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique pleine" readonly style="width:100px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->brick)) { echo ($step3_data->brick == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique alvéolée" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->brick)) { echo ($step3_data->brick == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique creuse" readonly style="width:120px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->brick)) { echo ($step3_data->brick == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique creuse" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Terre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->earth)) { echo ($step3_data->earth == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pisé" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->earth)) { echo ($step3_data->earth == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Torchis / Pan de bois" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Bois" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->drink)) { echo ($step3_data->drink == '"2"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Madrier" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->drink)) { echo ($step3_data->drink == '"1"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Ossature bois" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur du mur</td>
                    <td style="width:140px;height:14px;font-size: 12px;background-color: #ECF2FF;"><?php echo $step3_data->wall_thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->wall_thickness)){echo ($step3_data->wall_thickness == 0) ? 'checked' : '';} ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:160px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Isolation</td>
                    <td><input type="checkbox" <?php if(isset($step3_data->insulation)) { echo ($step3_data->insulation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Aucune" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->insulation)) { echo ($step3_data->insulation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="> 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->insulation)) { echo ($step3_data->insulation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="5 à 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->insulation)) { echo ($step3_data->insulation == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="<5 ans" readonly style="width:60px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->insulation)) { echo ($step3_data->insulation == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur de l' isolant</td>
                    <td style="width:140px;height:14px;font-size:12px;background-color: #ECF2FF;"><?php echo $step3_data->thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php echo ($step3_data->thickness == 0) ? 'checked' : ''; ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:110px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Orientation de la facade</td>
                    <td><input type="checkbox" <?php if(isset($step3_data->facade_orientation)) { echo ($step3_data->facade_orientation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="NE" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->facade_orientation)) { echo ($step3_data->facade_orientation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="N" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->facade_orientation)) { echo ($step3_data->facade_orientation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="NO" readonly style="width:90px"></td>
                    <td></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td rowspan="2" class="td_head">Dimensions du mur <br> extérieur</td>
                    <td>Hauteur</td>
                    <td><span class="input_text"><?php echo $step3_data->height ?? ''; ?></span></td>
                    <td>Longueur</td>
                    <td><span class="input_text"><?php echo $step3_data->length ?? ''; ?></span></td>
                </tr>
                <tr>
                    <td>Surface</td>
                    <td><span class="input_text"><?php echo $step3_data->surface ?? ''; ?></span></td>
                    <td>Surface mitoyenne</td>
                    <td><span class="input_text"><?php echo $step3_data->adjoining_area ?? ''; ?></span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Si présences de sous-façades ou si façade nonrectangulaire, rensigner</td>
                    <td>Surface 2</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step3_data->area2 ?? ''; ?>"</span></td>
                    <td>Surface 3</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step3_data->area3 ?? ''; ?>"</span></td>
                    <td>Surface 4</td>
                    <td style="width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step3_data->area4 ?? ''; ?>"</span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface totale de la façade</td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left"><span><?php echo $step3_data->t_srfc_area ?? ''; ?></span></td>
                    <td style="width:90px;">Surface à isoler</td>
                    <td><input type="checkbox" <?php if(isset($step3_data->srfc_insulator_Type)) { echo ($step3_data->srfc_insulator_Type == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITE" readonly style="width:20px"></td>
                    <td><input type="checkbox" <?php if(isset($step3_data->srfc_insulator_Type)) { echo ($step3_data->srfc_insulator_Type == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITI" readonly style="width:20px"></td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left;"><span><?php echo $step3_data->area_tobe_insltd ?? ''; ?></span></td>
                </tr>
            </table>
            <br>
            <h6>Photo</h6>
            
            <div class="img_div"><img src="<?php if(isset($step3_data->photo)) { echo 'http://cybillnerd.com/images/'.$step3_data->photo; }?>" width="80%" height="300px"></div>
        </div>
        <!-- Page 4-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Recensement des ouvrants</p>
            <br>
            <table>
                <tr>
                    <th class="head_cell">Kind opening</th>
                    <th class="head_cell">No.</td>
                    <th class="head_cell">L(m)</td>
                    <th class="head_cell">H(m) </td>
                    <th class="head_cell">Frame</td>
                    <th class="head_cell">Glazing</td>
                    <th class="head_cell">Shutter</td>
                </tr>
                <?php foreach ($step4_dtl_data as $s4_dtl_data) { ?>
                <tr>
                    <td class="cell">
                        <?php 
                        if(isset($s4_dtl_data['kind_opening'])) { 
                            echo ($s4_dtl_data['kind_opening'] == 0) ? 'Fenêtre' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 1) ? 'Porte-fenêtre' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 2) ? 'Porte' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 3) ? 'Velux' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 4) ? 'Bale Vitrée' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 5) ? 'PF coulissante' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 6) ? 'Porte de garage' : ''; 
                            echo ($s4_dtl_data['kind_opening'] == 7) ? 'Brique de verre ' : ''; 
                        } 
                        ?>
                    </td>
                    <td class="cell"><?php echo $s4_dtl_data['cop_no'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s4_dtl_data['cop_length'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s4_dtl_data['cop_height'] ?? ''; ?></td>
                    <td class="cell">
                        <?php
                            if(isset($s4_dtl_data['frame'])) { 
                                echo ($s4_dtl_data['frame'] == 0) ? 'PVC' : ''; 
                                echo ($s4_dtl_data['frame'] == 1) ? 'Bois' : ''; 
                                echo ($s4_dtl_data['frame'] == 2) ? 'Alu' : ''; 
                                echo ($s4_dtl_data['frame'] == 3) ? 'Aucun' : ''; 
                            } 
                        ?>
                        
                    </td>
                    <td class="cell">
                        <?php
                            if(isset($s4_dtl_data['glazing'])) { 
                            echo ($s4_dtl_data['glazing'] == 0) ? 'Simple vitrage' : ''; 
                            echo ($s4_dtl_data['glazing'] == 1) ? 'Double vitrage ancien (>10 ans)' : ''; 
                            echo ($s4_dtl_data['glazing'] == 2) ? 'Double vitrage récent (< 10 ans)' : ''; 
                            echo ($s4_dtl_data['glazing'] == 3) ? 'Double vitrage VIR' : ''; 
                            echo ($s4_dtl_data['glazing'] == 4) ? 'Double fenêtre' : ''; 
                            echo ($s4_dtl_data['glazing'] == 5) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                    <td class="cell">
                    <?php
                            if(isset($s4_dtl_data['shutter'])) { 
                            echo ($s4_dtl_data['shutter'] == 0) ? 'Volet avec ajours ' : ''; 
                            echo ($s4_dtl_data['shutter'] == 1) ? 'Volets battants Bois ' : ''; 
                            echo ($s4_dtl_data['shutter'] == 2) ? 'Volets battants PVC ' : ''; 
                            echo ($s4_dtl_data['shutter'] == 3) ? 'Volets roulants PVC ' : ''; 
                            echo ($s4_dtl_data['shutter'] == 4) ? 'Volets roulants alu ' : ''; 
                            echo ($s4_dtl_data['shutter'] == 5) ? 'Persiennes coulissantes' : ''; 
                            echo ($s4_dtl_data['shutter'] == 6) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br><br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step4_data->photo)) { echo 'http://cybillnerd.com/images/'.$step4_data->photo; }?>" width="80%" height="auto"></div>
            <br><br>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Commentaires :</td>
                    <td colspan="3"><span class="input_comment"><?php echo $step4_data->comments ?? ''; ?></span></td>
                </tr>
            </table>
        </div>

        <!-- Page 5-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Configuration des murs extérieurs</p>
            <p class="sub_head_text">FACADE EST</p>
            <p class="sub_head_text">Composition du mur extérieur</p>
            <table>
                <tr>    
                    <td class="td_head">Gros -œuvre</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value=" Pierres meuliéres" readonly style="width:110px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->rock)) { echo ($step5_data->rock == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pierres locales maçonées" readonly style="width:180px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->rock)) { echo ($step5_data->rock == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value=" Pierres meuliéres" readonly style="width:110px"></td>
                    
                </tr>
            </table>
            <table>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Béton" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Parpaing" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton banché" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton de mâchefer" readonly style="width:120px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Autre" readonly style="width:70px"></td>
                </tr>   
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Brique" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique pleine" readonly style="width:100px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique alvéolée" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique creuse" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Terre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->earth)) { echo ($step5_data->earth == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pisé" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->earth)) { echo ($step5_data->earth == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Torchis / Pan de bois" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Bois" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->drink)) { echo ($step5_data->drink == '"2"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Madrier" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->drink)) { echo ($step5_data->drink == '"1"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Ossature bois" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur du mur</td>
                    <td style="width:140px;height:14px;font-size: 12px;background-color: #ECF2FF;"><?php echo $step5_data->wall_thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->wall_thickness)){echo ($step5_data->wall_thickness == 0) ? 'checked' : '';} ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:160px"></td>
                    
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Isolation</td>
                    <td><input type="checkbox" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Aucune" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="> 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="5 à 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="<5 ans" readonly style="width:60px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur de l' isolant</td>
                    <td style="width:140px;height:14px;font-size:12px;background-color: #ECF2FF;"><?php echo $step5_data->thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->thickness)){ ($step5_data->thickness == 0) ? 'checked' : ''; }?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:110px"></td>
                    
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Orientation de la facade</td>
                    <td><input type="checkbox" <?php if(isset($step5_data->facade_orientation)) { echo ($step5_data->facade_orientation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="NE" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->facade_orientation)) { echo ($step5_data->facade_orientation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="E" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->facade_orientation)) { echo ($step5_data->facade_orientation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="SE" readonly style="width:90px"></td>
                    <td></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td rowspan="2" class="td_head">Dimensions du mur <br> extérieur</td>
                    <td>Hauteur</td>
                    <td><span class="input_text"><?php echo $step5_data->height ?? ''; ?></span></td>
                    <td>Longueur</td>
                    <td><span class="input_text"><?php echo $step5_data->length ?? ''; ?></span></td>
                </tr>
                <tr>
                    <td>Surface</td>
                    <td><span class="input_text"><?php echo $step5_data->surface ?? ''; ?></span></td>
                    <td>Surface mitoyenne</td>
                    <td><span class="input_text"><?php echo $step5_data->adjoining_area ?? ''; ?></span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Si présences de sous-façades ou si façade nonrectangulaire, rensigner</td>
                    <td>Surface 2</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step5_data->area2 ?? ''; ?>"</span></td>
                    <td>Surface 3</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step5_data->area3 ?? ''; ?>"</span></td>
                    <td>Surface 4</td>
                    <td style="width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step5_data->area4 ?? ''; ?>"</span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface totale de la façade</td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left"><span><?php echo $step3_data->t_srfc_area ?? ''; ?></span></td>
                    <td style="width:90px;">Surface à isoler</td>
                    <td><input type="checkbox" <?php if(isset($step5_data->srfc_insulator_Type)) { echo ($step5_data->srfc_insulator_Type == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITE" readonly style="width:20px"></td>
                    <td><input type="checkbox" <?php if(isset($step5_data->srfc_insulator_Type)) { echo ($step5_data->srfc_insulator_Type == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITI" readonly style="width:20px"></td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left;"><span><?php echo $step5_data->area_tobe_insltd ?? ''; ?></span></td>
                    
                </tr>
            </table>
            <br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step5_data->photo)) { echo 'http://cybillnerd.com/images/'.$step5_data->photo; }?>" width="80%" height="300px"></div>
        </div>
        <!-- page 6 -->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Recensement des ouvrants</p>
            <br>
            <table>
                <tr>
                    <th class="head_cell">Kind opening</th>
                    <th class="head_cell">No.</td>
                    <th class="head_cell">L(m)</td>
                    <th class="head_cell">H(m) </td>
                    <th class="head_cell">Frame</td>
                    <th class="head_cell">Glazing</td>
                    <th class="head_cell">Shutter</td>
                </tr>
                <?php foreach ($step4_dtl_data as $s6_dtl_data) { ?>
                <tr>
                    <td class="cell">
                        <?php 
                        if(isset($s6_dtl_data['kind_opening'])) { 
                            echo ($s6_dtl_data['kind_opening'] == 0) ? 'Fenêtre' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 1) ? 'Porte-fenêtre' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 2) ? 'Porte' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 3) ? 'Velux' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 4) ? 'Bale Vitrée' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 5) ? 'PF coulissante' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 6) ? 'Porte de garage' : ''; 
                            echo ($s6_dtl_data['kind_opening'] == 7) ? 'Brique de verre ' : ''; 
                        } 
                        ?>
                    </td>
                    <td class="cell"><?php echo $s6_dtl_data['cop_no'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s6_dtl_data['cop_length'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s6_dtl_data['cop_height'] ?? ''; ?></td>
                    <td class="cell">
                        <?php
                            if(isset($s6_dtl_data['frame'])) { 
                                echo ($s6_dtl_data['frame'] == 0) ? 'PVC' : ''; 
                                echo ($s6_dtl_data['frame'] == 1) ? 'Bois' : ''; 
                                echo ($s6_dtl_data['frame'] == 2) ? 'Alu' : ''; 
                                echo ($s6_dtl_data['frame'] == 3) ? 'Aucun' : ''; 
                            } 
                        ?>
                        
                    </td>
                    <td class="cell">
                        <?php
                            if(isset($s6_dtl_data['glazing'])) { 
                            echo ($s6_dtl_data['glazing'] == 0) ? 'Simple vitrage' : ''; 
                            echo ($s6_dtl_data['glazing'] == 1) ? 'Double vitrage ancien (>10 ans)' : ''; 
                            echo ($s6_dtl_data['glazing'] == 2) ? 'Double vitrage récent (< 10 ans)' : ''; 
                            echo ($s6_dtl_data['glazing'] == 3) ? 'Double vitrage VIR' : ''; 
                            echo ($s6_dtl_data['glazing'] == 4) ? 'Double fenêtre' : ''; 
                            echo ($s6_dtl_data['glazing'] == 5) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                    <td class="cell">
                    <?php
                            if(isset($s6_dtl_data['shutter'])) { 
                            echo ($s6_dtl_data['shutter'] == 0) ? 'Volet avec ajours ' : ''; 
                            echo ($s6_dtl_data['shutter'] == 1) ? 'Volets battants Bois ' : ''; 
                            echo ($s6_dtl_data['shutter'] == 2) ? 'Volets battants PVC ' : ''; 
                            echo ($s6_dtl_data['shutter'] == 3) ? 'Volets roulants PVC ' : ''; 
                            echo ($s6_dtl_data['shutter'] == 4) ? 'Volets roulants alu ' : ''; 
                            echo ($s6_dtl_data['shutter'] == 5) ? 'Persiennes coulissantes' : ''; 
                            echo ($s6_dtl_data['shutter'] == 6) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br><br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step6_data->photo)) { echo 'http://cybillnerd.com/images/'.$step6_data->photo; }?>" width="80%" height="auto"></div>
            <br><br>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Commentaires :</td>
                    <td colspan="3"><span class="input_comment"><?php echo $step6_data->comments ?? ''; ?></span></td>
                </tr>
            </table>
        </div>


        <!-- Page 7-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Configuration des murs extérieurs</p>
            <p class="sub_head_text">FACADE SUD</p>
            <p class="sub_head_text">Composition du mur extérieur</p>
            <table>
                <tr>    
                    <td class="td_head">Gros -œuvre</td>
                    <td><input type="text" class="no-outline" value="Pierre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->rock)) { echo ($step7_data->rock == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pierres locales maçonées" readonly style="width:180px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->rock)) { echo ($step7_data->rock == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value=" Pierres meuliéres" readonly style="width:110px"></td>
                </tr>
            </table>
            <table>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Béton" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->concrete)) { echo ($step7_data->concrete == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Parpaing" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->concrete)) { echo ($step7_data->concrete == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton banché" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->concrete)) { echo ($step7_data->concrete == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton de mâchefer" readonly style="width:120px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->concrete)) { echo ($step7_data->concrete == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Autre" readonly style="width:70px"></td>
                </tr>   
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Brique" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->brick)) { echo ($step7_data->brick == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique pleine" readonly style="width:100px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->brick)) { echo ($step7_data->brick == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique alvéolée" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->brick)) { echo ($step7_data->brick == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique creuse" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Terre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->earth)) { echo ($step7_data->earth == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pisé" readonly style="width:90px"></td>
                    <td colspan="2"><input type="checkbox" <?php if(isset($step7_data->earth)) { echo ($step7_data->earth == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Torchis / Pan de bois" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Bois" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->drink)) { echo ($step7_data->drink == '"2"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Madrier" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->drink)) { echo ($step7_data->drink == '"1"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Ossature bois" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur du mur</td>
                    <td style="width:140px;height:14px;font-size: 12px;background-color: #ECF2FF;"><?php echo $step7_data->wall_thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->wall_thickness)){echo ($step7_data->wall_thickness == 0) ? 'checked' : '';} ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:160px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Isolation</td>
                    <td><input type="checkbox" <?php if(isset($step7_data->insulation)) { echo ($step7_data->insulation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Aucune" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->insulation)) { echo ($step7_data->insulation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="> 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->insulation)) { echo ($step7_data->insulation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="5 à 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->insulation)) { echo ($step7_data->insulation == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="<5 ans" readonly style="width:60px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->insulation)) { echo ($step7_data->insulation == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur de l' isolant</td>
                    <td style="width:140px;height:14px;font-size:12px;background-color: #ECF2FF;"><?php echo $step7_data->thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->thickness)){ ($step7_data->thickness == 0) ? 'checked' : ''; }?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:110px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Orientation de la facade</td>
                    <td><input type="checkbox" <?php if(isset($step7_data->facade_orientation)) { echo ($step7_data->facade_orientation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="SO" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->facade_orientation)) { echo ($step7_data->facade_orientation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="S" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->facade_orientation)) { echo ($step7_data->facade_orientation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="SE" readonly style="width:90px"></td>
                    
                    <td></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td rowspan="2" class="td_head">Dimensions du mur <br> extérieur</td>
                    <td>Hauteur</td>
                    <td><span class="input_text"><?php echo $step7_data->height ?? ''; ?></span></td>
                    <td>Longueur</td>
                    <td><span class="input_text"><?php echo $step7_data->length ?? ''; ?></span></td>
                </tr>
                <tr>
                    <td>Surface</td>
                    <td><span class="input_text"><?php echo $step7_data->surface ?? ''; ?></span></td>
                    <td>Surface mitoyenne</td>
                    <td><span class="input_text"><?php echo $step7_data->adjoining_area ?? ''; ?></span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Si présences de sous-façades ou si façade nonrectangulaire, rensigner</td>
                    <td>Surface 2</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step7_data->area2 ?? ''; ?>"</span></td>
                    <td>Surface 3</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step7_data->area3 ?? ''; ?>"</span></td>
                    <td>Surface 4</td>
                    <td style="width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step7_data->area4 ?? ''; ?>"</span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface totale de la façade</td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left"><span>test</span></td>
                    <td style="width:90px;">Surface à isoler</td>
                    <td><input type="checkbox" <?php if(isset($step7_data->srfc_insulator_Type)) { echo ($step7_data->srfc_insulator_Type == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITE" readonly style="width:20px"></td>
                    <td><input type="checkbox" <?php if(isset($step7_data->srfc_insulator_Type)) { echo ($step7_data->srfc_insulator_Type == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITI" readonly style="width:20px"></td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left;"><span>test</span></td>
                </tr>
            </table>
            <br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step7_data->photo)) { echo 'http://cybillnerd.com/images/'.$step7_data->photo; }?>" width="80%" height="300px"></div>
        </div>
        <!-- page 8-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Recensement des ouvrants</p>
            <br>
            <table>
                <tr>
                    <th class="head_cell">Kind opening</th>
                    <th class="head_cell">No.</td>
                    <th class="head_cell">L(m)</td>
                    <th class="head_cell">H(m) </td>
                    <th class="head_cell">Frame</td>
                    <th class="head_cell">Glazing</td>
                    <th class="head_cell">Shutter</td>
                </tr>
                <?php foreach ($step4_dtl_data as $s8_dtl_data) { ?>
                <tr>
                    <td class="cell">
                        <?php 
                        if(isset($s8_dtl_data['kind_opening'])) { 
                            echo ($s8_dtl_data['kind_opening'] == 0) ? 'Fenêtre' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 1) ? 'Porte-fenêtre' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 2) ? 'Porte' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 3) ? 'Velux' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 4) ? 'Bale Vitrée' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 5) ? 'PF coulissante' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 6) ? 'Porte de garage' : ''; 
                            echo ($s8_dtl_data['kind_opening'] == 7) ? 'Brique de verre ' : ''; 
                        } 
                        ?>
                    </td>
                    <td class="cell"><?php echo $s8_dtl_data['cop_no'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s8_dtl_data['cop_length'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s8_dtl_data['cop_height'] ?? ''; ?></td>
                    <td class="cell">
                        <?php
                            if(isset($s8_dtl_data['frame'])) { 
                                echo ($s8_dtl_data['frame'] == 0) ? 'PVC' : ''; 
                                echo ($s8_dtl_data['frame'] == 1) ? 'Bois' : ''; 
                                echo ($s8_dtl_data['frame'] == 2) ? 'Alu' : ''; 
                                echo ($s8_dtl_data['frame'] == 3) ? 'Aucun' : ''; 
                            } 
                        ?>
                        
                    </td>
                    <td class="cell">
                        <?php
                            if(isset($s8_dtl_data['glazing'])) { 
                            echo ($s8_dtl_data['glazing'] == 0) ? 'Simple vitrage' : ''; 
                            echo ($s8_dtl_data['glazing'] == 1) ? 'Double vitrage ancien (>10 ans)' : ''; 
                            echo ($s8_dtl_data['glazing'] == 2) ? 'Double vitrage récent (< 10 ans)' : ''; 
                            echo ($s8_dtl_data['glazing'] == 3) ? 'Double vitrage VIR' : ''; 
                            echo ($s8_dtl_data['glazing'] == 4) ? 'Double fenêtre' : ''; 
                            echo ($s8_dtl_data['glazing'] == 5) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                    <td class="cell">
                    <?php
                            if(isset($s8_dtl_data['shutter'])) { 
                            echo ($s8_dtl_data['shutter'] == 0) ? 'Volet avec ajours ' : ''; 
                            echo ($s8_dtl_data['shutter'] == 1) ? 'Volets battants Bois ' : ''; 
                            echo ($s8_dtl_data['shutter'] == 2) ? 'Volets battants PVC ' : ''; 
                            echo ($s8_dtl_data['shutter'] == 3) ? 'Volets roulants PVC ' : ''; 
                            echo ($s8_dtl_data['shutter'] == 4) ? 'Volets roulants alu ' : ''; 
                            echo ($s8_dtl_data['shutter'] == 5) ? 'Persiennes coulissantes' : ''; 
                            echo ($s8_dtl_data['shutter'] == 6) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br><br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step8_data->photo)) { echo 'http://cybillnerd.com/images/'.$step8_data->photo; }?>" width="80%" height="auto"></div>
            <br><br>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Commentaires :</td>
                    <td colspan="3"><span class="input_comment"><?php echo $step8_data->comments ?? ''; ?></span></td>
                </tr>
            </table>
        </div>

        <!-- Page 9-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Configuration des murs extérieurs</p>
            <p class="sub_head_text">FACADE OUEST</p>
            <p class="sub_head_text">Composition du mur extérieur</p>
            <table>
                <tr>    
                    <td class="td_head">Gros -œuvre</td>
                    <td><input type="text" class="no-outline" value="Pierre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->rock)) { echo ($step9_data->rock == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pierres locales maçonées" readonly style="width:180px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->rock)) { echo ($step9_data->rock == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value=" Pierres meuliéres" readonly style="width:110px"></td>
                </tr>
            </table>
            <table>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Béton" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Parpaing" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton banché" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Béton de mâchefer" readonly style="width:120px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Autre" readonly style="width:70px"></td>
                </tr>   
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Brique" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique pleine" readonly style="width:100px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique alvéolée" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Brique creuse" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Terre" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->earth)) { echo ($step9_data->earth == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Pisé" readonly style="width:90px"></td>
                    <td colspan="2"><input type="checkbox" <?php if(isset($step9_data->earth)) { echo ($step9_data->earth == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Torchis / Pan de bois" readonly style="width:120px"></td>
                </tr>
                <tr>    
                    <td class="td_head"></td>
                    <td><input type="text" class="no-outline" value="Bois" readonly style="width:50px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->drink)) { echo ($step9_data->drink == '"2"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Madrier" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->drink)) { echo ($step9_data->drink == '"1"') ? 'selected' : ''; } ?>><input type="text" class="no-outline" value="Ossature bois" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur du mur</td>
                    <td style="width:140px;height:14px;font-size: 12px;background-color: #ECF2FF;"><?php echo $step9_data->wall_thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->wall_thickness)){echo ($step9_data->wall_thickness == 0) ? 'checked' : '';} ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:160px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Isolation</td>
                    <td><input type="checkbox" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Aucune" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="> 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="5 à 10 ans" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == '"3"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="<5 ans" readonly style="width:60px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == '"4"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:90px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur de l' isolant</td>
                    <td style="width:140px;height:14px;font-size:12px;background-color: #ECF2FF;"><?php echo $step9_data->thickness ?? ''; ?></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->wall_thickness)){echo ($step9_data->wall_thickness == 0) ? 'checked' : '';} ?>><input type="text" class="no-outline" value="Je ne sais pas" readonly style="width:110px"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Orientation de la facade</td>
                    <td><input type="checkbox" <?php if(isset($step9_data->facade_orientation)) { echo ($step9_data->facade_orientation == '"0"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="SO" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->facade_orientation)) { echo ($step9_data->facade_orientation == '"1"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="O" readonly style="width:90px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->facade_orientation)) { echo ($step9_data->facade_orientation == '"2"') ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="NO" readonly style="width:90px"></td>
                    <td></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td rowspan="2" class="td_head">Dimensions du mur <br> extérieur</td>
                    <td>Hauteur</td>
                    <td><span class="input_text"><?php echo $step9_data->height ?? ''; ?></span></td>
                    <td>Longueur</td>
                    <td><span class="input_text"><?php echo $step9_data->length ?? ''; ?></span></td>
                </tr>
                <tr>
                <td>Surface</td>
                    <td><span class="input_text"><?php echo $step9_data->surface ?? ''; ?></span></td>
                    <td>Surface mitoyenne</td>
                    <td><span class="input_text"><?php echo $step9_data->adjoining_area ?? ''; ?></span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Si présences de sous-façades ou si façade nonrectangulaire, rensigner</td>
                    <td>Surface 2</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step9_data->area2 ?? ''; ?>"</span></td>
                    <td>Surface 3</td>
                    <td style="padding:0px !important;width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step9_data->area3 ?? ''; ?>"</span></td>
                    <td>Surface 4</td>
                    <td style="width:100px;font-size:12px;background-color: #ECF2FF;"><span><?php echo $step9_data->area4 ?? ''; ?>"</span></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface totale de la façade</td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left"><span>test</span></td>
                    <td style="width:90px;">Surface à isoler</td>
                    <td><input type="checkbox" <?php if(isset($step9_data->srfc_insulator_Type)) { echo ($step9_data->srfc_insulator_Type == 0) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITE" readonly style="width:20px"></td>
                    <td><input type="checkbox" <?php if(isset($step9_data->srfc_insulator_Type)) { echo ($step9_data->srfc_insulator_Type == 1) ? 'checked' : ''; } ?>><input type="text" class="no-outline" value="ITI" readonly style="width:20px"></td>
                    <td style="padding:0px !important;width:70px;font-size:12px;background-color: #ECF2FF;float:left;"><span><?php echo $step9_data->area_tobe_insltd ?? ''; ?></span></td>
                </tr>
            </table>
            <br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step9_data->photo)) { echo 'http://cybillnerd.com/images/'.$step9_data->photo; }?>" width="80%" height="300px"></div>
        </div>
        <!-- page 10-->
        <div class="container" style="page-break-after: always;">
            <br>
            <p class="sub_head_text">Recensement des ouvrants</p>
            <br>
            <table>
                <tr>
                    <th class="head_cell">Kind opening</th>
                    <th class="head_cell">No.</td>
                    <th class="head_cell">L(m)</td>
                    <th class="head_cell">H(m) </td>
                    <th class="head_cell">Frame</td>
                    <th class="head_cell">Glazing</td>
                    <th class="head_cell">Shutter</td>
                </tr>
                <?php foreach ($step4_dtl_data as $s10_dtl_data) { ?>
                <tr>
                    <td class="cell">
                        <?php 
                        if(isset($s10_dtl_data['kind_opening'])) { 
                            echo ($s10_dtl_data['kind_opening'] == 0) ? 'Fenêtre' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 1) ? 'Porte-fenêtre' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 2) ? 'Porte' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 3) ? 'Velux' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 4) ? 'Bale Vitrée' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 5) ? 'PF coulissante' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 6) ? 'Porte de garage' : ''; 
                            echo ($s10_dtl_data['kind_opening'] == 7) ? 'Brique de verre ' : ''; 
                        } 
                        ?>
                    </td>
                    <td class="cell"><?php echo $s10_dtl_data['cop_no'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s10_dtl_data['cop_length'] ?? ''; ?></td>
                    <td class="cell"><?php echo $s10_dtl_data['cop_height'] ?? ''; ?></td>
                    <td class="cell">
                        <?php
                            if(isset($s10_dtl_data['frame'])) { 
                                echo ($s10_dtl_data['frame'] == 0) ? 'PVC' : ''; 
                                echo ($s10_dtl_data['frame'] == 1) ? 'Bois' : ''; 
                                echo ($s10_dtl_data['frame'] == 2) ? 'Alu' : ''; 
                                echo ($s10_dtl_data['frame'] == 3) ? 'Aucun' : ''; 
                            } 
                        ?>
                        
                    </td>
                    <td class="cell">
                        <?php
                            if(isset($s10_dtl_data['glazing'])) { 
                            echo ($s10_dtl_data['glazing'] == 0) ? 'Simple vitrage' : ''; 
                            echo ($s10_dtl_data['glazing'] == 1) ? 'Double vitrage ancien (>10 ans)' : ''; 
                            echo ($s10_dtl_data['glazing'] == 2) ? 'Double vitrage récent (< 10 ans)' : ''; 
                            echo ($s10_dtl_data['glazing'] == 3) ? 'Double vitrage VIR' : ''; 
                            echo ($s10_dtl_data['glazing'] == 4) ? 'Double fenêtre' : ''; 
                            echo ($s10_dtl_data['glazing'] == 5) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                    <td class="cell">
                    <?php
                            if(isset($s10_dtl_data['shutter'])) { 
                            echo ($s10_dtl_data['shutter'] == 0) ? 'Volet avec ajours ' : ''; 
                            echo ($s10_dtl_data['shutter'] == 1) ? 'Volets battants Bois ' : ''; 
                            echo ($s10_dtl_data['shutter'] == 2) ? 'Volets battants PVC ' : ''; 
                            echo ($s10_dtl_data['shutter'] == 3) ? 'Volets roulants PVC ' : ''; 
                            echo ($s10_dtl_data['shutter'] == 4) ? 'Volets roulants alu ' : ''; 
                            echo ($s10_dtl_data['shutter'] == 5) ? 'Persiennes coulissantes' : ''; 
                            echo ($s10_dtl_data['shutter'] == 6) ? 'Aucun' : ''; 
                            } 
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br><br>
            <h6>Photo</h6>
            <div class="img_div"><img src="<?php if(isset($step10_data->photo)) { echo 'http://cybillnerd.com/images/'.$step10_data->photo; }?>" width="80%" height="auto"></div>
            <br><br>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Commentaires :</td>
                    <td colspan="3"><span class="input_comment"><?php echo $step10_data->comments ?? ''; ?></span></td>
                </tr>
            </table>
        </div>

        <!-- page 11-->
        <div class="container" style="page-break-after: always;">
        <br>
            <p class="sub_head_text">ARCHITECTURE - DESCRIPTION DU BATI</p>
            
            <p>Configuration générale de la maison</p>
            <br>
            <table>
                <tr>
                    <th class="head_cell"></th>
                    <th class="head_cell">Surface habitable</td>
                    <th class="head_cell">Surface non chauffée</td>
                    <th class="head_cell">Hauteur sous plafond</td>
                </tr>
                <tr>
                    <td class="cell">Sous-sol</td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>
                <tr>
                    <td class="cell">Rez de chaussée</td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>
                <tr>
                    <td class="cell">1er étage</td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>
                <tr>
                    <td class="cell">2éme étage</td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>
                <tr>
                    <td class="cell">3éme étage</td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>   
            </table>
            <table>
                <tr>
                    <td class="td_head">Surface habitabletotale</td>
                    <td style="padding:0px !important;width:120px;font-size:12px;background-color: #ECF2FF;float:left"><span>test</span></td>
                    <td class="td_head" style="width:100px;">Enfouissement du soussol</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Non-enterré" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Semi-enterré" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Enterré" readonly style="width:65px"></td>
                </tr>
                <tr>
                    <td class="td_head">Forme du logement </td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Compact" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Allongée" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="En L" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="En U" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Autre" readonly style="width:65px"></td>
                </tr>
            </table>
            <hr>
            <p>Configuration du plancher bas</p>
            <br>
            <table>
                <tr>
                    <td class="td_head">Type de plancher bas </td>
                    <td colspan="2"><input type="checkbox"><input type="text" class="no-outline" value=" Sur sous-sol" readonly style="width:65px"></td>
                    <td colspan="2"><input type="checkbox"><input type="text" class="no-outline" value="Vide sanitaire" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Sur terre-plein" readonly></td>
                </tr>
                <tr>
                    <td class="td_head">Grosœuvre</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Bois" readonly style="width:65px"></td>
                    <td colspan="2"><input type="checkbox"><input type="text" class="no-outline" value="Béton ou terre" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Brique" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Je ne sais pas" readonly></td>
                </tr>
                <tr>
                    <td class="td_head">Isolation</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Aucune" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="> 10 ans" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value=" 5 à 10 ans" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="<5 ans" readonly style="width:65px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Je ne sais pas" readonly></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Epaisseur de l'isolant</td>
                    <td style="width:100px;height:18px;font-size:12px;background-color: #ECF2FF;">test</td>
                </tr>
                <tr>
                    <td class="td_head">Surface du plancher bas</td>
                    <td style="width:100px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                    <td class="td_head">Surface à isoler</td>
                    <td style="width:100px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                </tr>
            </table>
            <h6>Photo</h6>
            <div class="img_div"></div>
        </div>
        <!-- Page 11 : 2 -->
        <div class="container" style="page-break-after: always;">
            <br><br>
            &nbsp;
            <p class="sub_head_text">PHOTO PLANCHER BAS</p><br>
            <div class="img_div"></div><br>
            <div class="img_div"></div>
            <br>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Observations :</td>
                    <td colspan="3"><span class="input_comment">test</span></td>
                </tr>
            </table>
        </div>
        <!-- Page 12 -->
        <div class="container" style="page-break-after: always;">
            <br><br>
            &nbsp;
            <p class="sub_head_text">VENTILATION</p><br>
            
            <table>
                <tr>
                    <td class="td_head" rowspan="2">Systéme de ventilation </td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Par infiltration" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Grilles hauteset basses" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="VMC Simple Flux Auto" readonly></td>
                </tr>
                <tr>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="VMC Double Flux" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="VMC Hygro A" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="VMC Hygro B" readonly></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Nombre de piéces</td>
                    <td style="width:130px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                    <td class="td_head">Nombre de salles de bains</td>
                    <td style="width:130px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                </tr>
            </table>
            <hr>
            <p class="sub_head_text">SYSTEME DE CHAUFFAGE et ECS</p><br>
            <table>
                <tr>
                    <td class="td_head" rowspan="2">Energie </td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Fioul" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Gaz" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Propane" readonly></td>
                </tr>
                <tr>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Bois" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Charbon" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Electricité" readonly></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head" rowspan="2">Générateur </td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Insert" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Cheminée" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Poêle à bois" readonly style="width:65px;"></td>
                    <td colspan="2"><input type="checkbox"><input type="text" class="no-outline" value="Chaudière condensation" readonly style="width:65px;"></td>
                    
                </tr>
                <tr>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Convecteurs électriques" readonly style="width:100px;"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Chaudière basse T°" readonly style="width:120px;"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Chaudière haute T°" readonly style="width:110px;"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head" rowspan="2">Systeme De Chauffage et ECS</td>
                    <td>Année</td>
                    <td style="width:130px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                    <td style="width:54px;">P. nominale</td>
                    <td style="width:130px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                </tr>
                <tr>
                    <td>Rendement P. nominale</td>
                    <td style="width:130px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                    <td colspan="2">Placé dans un volume chauffé</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Oui" readonly></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Non" readonly></td>
                    
                </tr>
            </table>
            <h6>Photo</h6>
            <div class="img_div"></div>
        </div>

        <!-- Page 13 -->
        <div class="container" style="page-break-after: always;">
            <br><br>
            &nbsp;
            <table>
                <tr>
                    <td class="td_head" rowspan="2">Systéme d'émission</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Radiateur fonte" readonly style="width:75px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Radiateur acier" readonly style="width:75px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Ventilo-convecteur" readonly style="width:75px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Plancher chauffant" readonly style="width:75px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Autre" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">Surface chauffée par l'émission</td>
                    <td colspan="2" style="width:100px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                </tr>
            </table>
            <hr>
            <h6>Photo</h6>
            <div class="img_div"></div>
            <table>
                <tr>    
                    <td rowspan="3" class="td_head">Observations :</td>
                    <td colspan="3"><span class="input_comment">test</span></td>
                </tr>
            </table>
        </div>

        <!-- Page 14 & 15 -->
        <div class="container" style="page-break-after: always;">
        <br><br>
            <p class="sub_head_text">Production d'ECS</p><br>
            <table>
                <tr>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Instantanée" readonly style="width:105px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Générateur de chauffage" readonly style="width:125px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value=" Chauffe-eau gaz" readonly style="width:115px"></td>
                    <td colspan="3"><input type="checkbox"><input type="text" class="no-outline" value="Autre" readonly></td>
                </tr>
                <tr>
                <td><input type="checkbox"><input type="text" class="no-outline" value="Accumulation" readonly></td>
                <td><input type="checkbox"><input type="text" class="no-outline" value="Générateur de chauffage" readonly></td>
                <td><input type="checkbox"><input type="text" class="no-outline" value=" Chauffe-eau gaz" readonly></td>
                <td><input type="checkbox"><input type="text" class="no-outline" value=" Chauffe-eau électrique" readonly style="width:75px"></td>
                <td><input type="checkbox"><input type="text" class="no-outline" value="Ballon thermodynamique" readonly style="width:75px"></td>
                <td><input type="checkbox"><input type="text" class="no-outline" value="Autre" readonly></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td_head">Volume</td>
                    <td style="width:100px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                    <td class="td_head">Ancienneté ECS</td>
                    <td style="width:100px;height:16px;font-size:12px;background-color: #ECF2FF;">test</td>
                </tr>
                <tr>
                    <td class="td_head">Placé dans un volume chauffé</td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Oui" readonly style="width:50px;"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Non" readonly style="width:50px;"></td>
                </tr>
            </table>
            <hr>
            <h6>Photo</h6>
            <div class="img_div"></div>
            <hr>
            
        </div>
        <div class="container" style="page-break-after: never;">
        <p class="sub_head_text"></p><br>
            <table>
                <tr>
                    <td class="td_head">Puissance du compteur </td>
                    <td style="width:130px;height:14px !important;font-size: 12px;background-color: #ECF2FF;">test</td>
                    <td class="td_head">Compteur électrique </td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Triphasée" readonly style="width:75px"></td>
                    <td><input type="checkbox"><input type="text" class="no-outline" value="Monophasée" readonly style="width:75px"></td>
                    
                </tr>
            </table>
            <h6>Photo</h6>
            <div class="img_div"></div>
        </div>
    </main>
    </body>
</html>
