<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Architecture - Description Du Bati
    </div>
</div>

<hr color=' #54ba9e'>

<form role="form" method="POST" class="form-horizontal" id="step11form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}" class="customerId">

<div class="row">
    <div class="col-lg-3 align-self-center">
        <label>Configuration générale de la maison</label>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered" style="font-size: 14px;" id="s11_rowsTable">
                    <thead>
                        <tr>
                            <th style="width: 25%; text-align: center;"></th>
                            <th style="width: 25%; text-align: center;">Surface habitable </th>
                            <th style="width: 25%; text-align: center;">Surface non chauffée</th>
                            <th style="width: 25%; text-align: center;">Hauteur sous plafond</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($step11_dtl_data) > 0)
                        <tr>
                            <td>Sous-sol<input type="hidden" name="s11_row_num" class="s11_row_num" value="Sous-sol"></td>
                            <td><input class="form-control living_space" type="text" name="basement_ls" value="<?php echo $step11_dtl_data[0]['living_space']?>"></td>
                            <td><input class="form-control unheated_surface" type="text" name="basement_us" value="<?php echo $step11_dtl_data[0]['unheated_surface']?>"></td>
                            <td><input class="form-control cieling_height" type="text" name="basement_ch" value="<?php echo $step11_dtl_data[0]['cieling_height']?>"></td>
                        </tr>
                        <tr>
                            <td>Rez de chaussée<input type="hidden" name="s11_row_num" class="s11_row_num" value="Rez de chaussée"></td>
                            <td><input class="form-control living_space" type="text" name="groundfloor_ls" value="<?php echo $step11_dtl_data[1]['living_space']?>"></td>
                            <td><input class="form-control unheated_surface" type="text" name="groundfloor_us" value="<?php echo $step11_dtl_data[1]['unheated_surface']?>"></td>
                            <td><input class="form-control cieling_height" type="text" name="groundfloor_ch" value="<?php echo $step11_dtl_data[1]['cieling_height']?>"></td>
                        </tr>
                        <tr>
                            <td>1er étage<input type="hidden" name="s11_row_num" class="s11_row_num" value="1er étage"></td>
                            <td><input class="form-control living_space" type="text" name="frstfloor_ls" value="<?php echo $step11_dtl_data[2]['living_space']?>"></td>
                            <td><input class="form-control unheated_surface" type="text" name="frstfloor_us" value="<?php echo $step11_dtl_data[2]['unheated_surface']?>"></td>
                            <td><input class="form-control cieling_height" type="text" name="frstfloor_ch" value="<?php echo $step11_dtl_data[2]['cieling_height']?>"></td>
                        </tr>
                        <tr>
                            <td>2éme étage<input type="hidden" name="s11_row_num" class="s11_row_num" value="2éme étage"></td>
                            <td><input class="form-control living_space" type="text" name="scndfloor_ls" value="<?php echo $step11_dtl_data[3]['living_space']?>"></td>
                            <td><input class="form-control unheated_surface" type="text" name="scndfloor_us" value="<?php echo $step11_dtl_data[3]['unheated_surface']?>"></td>
                            <td><input class="form-control cieling_height" type="text" name="scndfloor_ch" value="<?php echo $step11_dtl_data[3]['cieling_height']?>"></td>
                        </tr>
                        <tr>
                            <td>3éme étage<input type="hidden" name="s11_row_num" class="s11_row_num" value="3éme étage"></td>
                            <td><input class="form-control living_space" type="text" name="thrdfloor_ls" value="<?php echo $step11_dtl_data[4]['living_space']?>"></td>
                            <td><input class="form-control unheated_surface" type="text" name="thrdfloor_us" value="<?php echo $step11_dtl_data[4]['unheated_surface']?>"></td>
                            <td><input class="form-control cieling_height" type="text" name="thrdfloor_ch" value="<?php echo $step11_dtl_data[4]['cieling_height']?>"></td>
                        </tr>
                        @else
                        <tr>
                            <td>Sous-sol<input type="hidden" name="s11_row_num" class="s11_row_num" value="Sous-sol"></td>
                            <td><input class="form-control living_space" type="text" name="basement_ls"></td>
                            <td><input class="form-control unheated_surface" type="text" name="basement_us"></td>
                            <td><input class="form-control cieling_height" type="text" name="basement_ch"></td>
                        </tr>
                        <tr>
                            <td>Rez de chaussée<input type="hidden" name="s11_row_num" class="s11_row_num" value="Rez de chaussée"></td>
                            <td><input class="form-control living_space" type="text" name="groundfloor_ls"></td>
                            <td><input class="form-control unheated_surface" type="text" name="groundfloor_us"></td>
                            <td><input class="form-control cieling_height" type="text" name="groundfloor_ch"></td>
                        </tr>
                        <tr>
                            <td>1er étage<input type="hidden" name="s11_row_num" class="s11_row_num" value="1er étage"></td>
                            <td><input class="form-control living_space" type="text" name="frstfloor_ls"></td>
                            <td><input class="form-control unheated_surface" type="text" name="frstfloor_us"></td>
                            <td><input class="form-control cieling_height" type="text" name="frstfloor_ch"></td>
                        </tr>
                        <tr>
                            <td>2éme étage<input type="hidden" name="s11_row_num" class="s11_row_num" value="2éme étage"></td>
                            <td><input class="form-control living_space" type="text" name="scndfloor_ls"></td>
                            <td><input class="form-control unheated_surface" type="text" name="scndfloor_us"></td>
                            <td><input class="form-control cieling_height" type="text" name="scndfloor_ch"></td>
                        </tr>
                        <tr>
                            <td>3éme étage<input type="hidden" name="s11_row_num" class="s11_row_num" value="3éme étage"></td>
                            <td><input class="form-control living_space" type="text" name="thrdfloor_ls"></td>
                            <td><input class="form-control unheated_surface" type="text" name="thrdfloor_us"></td>
                            <td><input class="form-control cieling_height" type="text" name="thrdfloor_ch"></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div><!----col-lg-12 end-->
        </div><!----row1 end-->

        <div class="row">
            <div class="col-lg-4">
                <label>Surface habitable totale</label>
                <input class="form-control" type="text" placeholder="In meter Square" name="lvngspace_total">
            </div>
            <div class="col-lg-4">
                <label>Enfouissement d u soussol</label>
                <select name="burial_of_subfloor" class="form_select_opt form-control">
                    <option value="0" <?php if(isset($step11_data['burial_of_subfloor'])) { echo ($step11_data['burial_of_subfloor'] == '"0"') ? 'selected' : ''; } ?>>Enterré</option>
                    <option value="1" <?php if(isset($step11_data['burial_of_subfloor'])) { echo ($step11_data['burial_of_subfloor'] == '"1"') ? 'selected' : ''; } ?>> Enfouissement d u soussol </option>
                    <option value="2" <?php if(isset($step11_data['burial_of_subfloor'])) { echo ($step11_data['burial_of_subfloor'] == '"2"') ? 'selected' : ''; } ?>> Semi-enterré </option>
                </select>
            </div>
            <div class="col-lg-4">
                <label>Forme du logement</label>
                <select name="housing_shape" class="form_select_opt form-control">
                    <option value="0" <?php if(isset($step11_data['housing_shape'])) { echo ($step11_data['housing_shape'] == '"0"') ? 'selected' : ''; } ?>>Compact</option>
                    <option value="1" <?php if(isset($step11_data['housing_shape'])) { echo ($step11_data['housing_shape'] == '"1"') ? 'selected' : ''; } ?>> Allongée </option>
                    <option value="2" <?php if(isset($step11_data['housing_shape'])) { echo ($step11_data['housing_shape'] == '"2"') ? 'selected' : ''; } ?>> En L </option>
                    <option value="3" <?php if(isset($step11_data['housing_shape'])) { echo ($step11_data['housing_shape'] == '"3"') ? 'selected' : ''; } ?>> En U </option>
                    <option value="4" <?php if(isset($step11_data['housing_shape'])) { echo ($step11_data['housing_shape'] == '"4"') ? 'selected' : ''; } ?>> Autre </option>
                </select>
            </div>
        </div><!----row2 end-->

    </div><!----col-lg-9 end-->
</div><!----row end-->
<hr color=' #54ba9e'>


<div class="row">
    <div class="col-lg-3 align-self-center">
        <label>Configuration du plancher bas
        </label>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="low_floor_type">Type de plancher bas </label>
                    <select name="low_floor_type" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step11_data->low_floor_type)) { echo ($step11_data->low_floor_type == '"0"') ? 'selected' : ''; } ?>> Sur sous-so</option>
                        <option value="1" <?php if(isset($step11_data->low_floor_type)) { echo ($step11_data->low_floor_type == '"1"') ? 'selected' : ''; } ?>>Vide sanitaire</option>
                        <option value="2" <?php if(isset($step11_data->low_floor_type)) { echo ($step11_data->low_floor_type == '"2"') ? 'selected' : ''; } ?>> Sur terre-plein</option>
                    </select>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="fatwork">Grosœuvre</label>
                    <select name="fatwork" class="form_select_opt form-control">
                        <option  value="0" <?php if(isset($step11_data->fatwork)) { echo ($step11_data->fatwork == '"0"') ? 'selected' : ''; } ?>>Bois</option>
                        <option value="1" <?php if(isset($step11_data->fatwork)) { echo ($step11_data->fatwork == '"1"') ? 'selected' : ''; } ?>>Béton ou terre </option>
                        <option value="2" <?php if(isset($step11_data->fatwork)) { echo ($step11_data->fatwork == '"2"') ? 'selected' : ''; } ?>>Brique</option>
                        <option value="3" <?php if(isset($step11_data->fatwork)) { echo ($step11_data->fatwork == '"3"') ? 'selected' : ''; } ?>>Je ne sais pas</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="insulation">Isolation</label>
                    <select name="lfg_insulation" class="form_select_opt form-control">
                        <option  value="4" <?php if(isset($step11_data['lfg_insulation'])) { echo ($step11_data['lfg_insulation'] == '"4"') ? 'selected' : ''; } ?>>Aucune</option>
                        <option value="3" <?php if(isset($step11_data['lfg_insulation'])) { echo ($step11_data['lfg_insulation'] == '"3"') ? 'selected' : ''; } ?>> > 10 ans </option>
                        <option value="2" <?php if(isset($step11_data['lfg_insulation'])) { echo ($step11_data['lfg_insulation'] == '"2"') ? 'selected' : ''; } ?>>5 à 10 ans </option>
                        <option value="1" <?php if(isset($step11_data['lfg_insulation'])) { echo ($step11_data['lfg_insulation'] == '"1"') ? 'selected' : ''; } ?>>
                            < 5 ans </option>
                        <option value="0" <?php if(isset($step11_data['lfg_insulation'])) { echo ($step11_data['lfg_insulation'] == '"0"') ? 'selected' : ''; } ?>> Je ne sais pas</option>
                    </select>
                </div>
            </div>
        </div> <!----row1 end-->
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lfg_insulation_thickness">Epaisseur de l'isolant</label>
                    <input class="form-control" type="text" placeholder="centimeter" name="lfg_insulation_thickness" value="<?php echo $step11_data->lfg_insulation_thickness ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lfg_btm_floor_area">Surfa ce d u plancher ba s </label>
                    Surface à isoler<input class="form-control" type="text" placeholder="meter square" name="lfg_btm_floor_area" value="<?php echo $step11_data->lfg_btm_floor_area ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lfg_insulated_area">Surface à isoler</label>
                    <input class="form-control" type="text" placeholder="meter square" name="lfg_insulated_area" value="<?php echo $step11_data->lfg_insulated_area ?? ''; ?>">
                </div>
            </div>


        </div> <!----row2 end-->

        <div class="row">

            <div class="col-lg-4">
                <label for="step11_photo">Photo</label>
                <input class="form-control" type="file" name="step11_photo">
            </div>
            <div class="col-lg-4">
                <label for="step11_photo1">Photo Plancher Bas 1</label>
                <input class="form-control" type="file" name="step11_photo1">
            </div>
            <div class="col-lg-4">
                <label for="step11_photo2">Photo Plancher Bas 2</label>
                <input class="form-control" type="file" name="step11_photo2">
            </div>

        </div> <!----row3 end-->

    </div><!----col-lg-9 end-->
</div><!----row end-->

<hr color=' #54ba9e'>

<div class="row">
    <div class="col-lg-3 align-self-center">
        <label>Observations</label>
    </div>
    <div class="col-lg-9">
        <textarea name="comments" class="form-control" rows="5"><?php echo $step11_data->comments ?? ''; ?></textarea>
    </div>
</div>

<hr color=' #54ba9e'>
</form>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29  next" id="step11Submit">sauvegarder et suivant</button>
</div>