
<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Recensement de s ouvrants 
        <br />
        facade sud
    </div>
</div>
<hr color=' #54ba9e'>

<form role="form" method="POST" class="form-horizontal" id="step8form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}" class="customerId">

<div class="row">
    <div class="col-lg-2">
        <div class="form-group">
            <label for="s8_tbl_func">Input any number</label>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <input class="form-control" type="number" name="s8_tbl_val" min="0" max="100" id="s8_tbl_val" value="0" value="<?php echo $step8_data->tbl_val ?? ''; ?>">
        </div>
    </div>
</div>

<div class="row" id="s8_tableToHide">
    <div class="col-lg-12 align-self-center">
        <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <input type="button" value="Delete Row" class="s8_deleteRow deleteRow btn btn-danger btn-sm">
                <input type="button" value="Add Row" class="s8_addRows addRows btn btn-success btn-sm">
    
            </div>
        </div>
        <div class="table-responsive">
            <div class="table-wrapper" style="width:90vh">
                <!-- <div class="table-title">
                </div> -->
                <table class="table table-bordered" id="s8_rowsTable">
                    <tr>
                        <th>sélectionner</th>
                        <th>Type d’ouverture</th>
                        <th>Nbr</th>
                        <th>L(m) </th>
                        <th>H(m)</th>
                        <th>Huisserie</th>
                        <th>Vitrage</th>
                        <th>Volet</th>
                    </tr>
                    
                    @if(count($step8_dtl_data) == 0)
                    <tr>
                        <td class="s8_td1"><input type="checkbox" name="s8_record"></td>
                        <td class="s8_td1">
                            <select name="s8_kind_opening" class="form_select_opt s8_kind_opening form-control">
                                <option value="0" >Fenêtre</option>
                                <option value="1">Porte-fenêtre </option>
                                <option value="2"> Porte </option>
                                <option value="3"> Velux </option>
                                <option value="4"> Bale Vitrée </option>
                                <option value="5"> PF coulissante </option>
                                <option value="6"> Porte de garage </option>
                                <option value="7"> Brique de verre </option>
                            </select>
                        </td>
                        <td class="s8_td1"><input class="form-control s8_cop_no" type="text" name="s8_cop_no"></td>
                        <td class="s8_td1"><input class="form-control s8_cop_length" type="text" name="s8_cop_length"></td>
                        <td class="s8_td1"><input class="form-control s8_cop_height" type="text" name="s8_cop_height"></td>
                        <td class="s8_td1">
                            <select name="s8_frame" class="form_select_opt form-control">
                                <option value="0" >PVC</option>
                                <option value="1"> Bios </option>
                                <option value="2"> Alu </option>
                                <option value="3"> Aucun </option>
                            </select>
                        </td>
                        <td class="s8_td1">
                            <select name="s8_glazing" class="form_select_opt form-control">
                                <option value="0" >Simple vitrage</option>
                                <option value="1"> Double vitrage ancien (>10 ans) </option>
                                <option value="2"> Double vitrage récent (< 10 ans) </option>
                                <option value="3"> Double vitrage VIR </option>
                                <option value="4"> Double fenêtre </option>
                                <option value="5"> Aucun </option>
                            </select>
                        </td>
                        <td class="s8_td1">
                            <select name="s8_shutter" class="form_select_opt form-control">
                                <option value="0" >Volet avec ajours </option>
                                <option value="1"> Volets battants bois </option>
                                <option value="2"> Volets battants PVC </option>
                                <option value="3"> Volets roulants PVC </option>
                                <option value="4"> Volets roulants alu </option>
                                <option value="5"> Persiennes coulissantes </option>
                                <option value="6"> Aucun </option>
                            </select>
                        </td>
                    </tr>
                    @else
                        @foreach ($step8_dtl_data as $s8_dtl_data)
                        <tr>
                            <td class="s8_td1"><input type="checkbox" name="s8_record"></td>
                            <td class="s8_td1">
                                <select name="s8_kind_opening" class="form_select_opt s8_kind_opening form-control">
                                    <option value="0" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 0) ? 'selected' : ''; } ?>>Fenêtre</option>
                                    <option value="1" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 1) ? 'selected' : ''; } ?>>Porte-fenêtre </option>
                                    <option value="2" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 2) ? 'selected' : ''; } ?>> Porte </option>
                                    <option value="3" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 3) ? 'selected' : ''; } ?>> Velux </option>
                                    <option value="4" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 4) ? 'selected' : ''; } ?>> Bale Vitrée </option>
                                    <option value="5" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 5) ? 'selected' : ''; } ?>> PF coulissante </option>
                                    <option value="6" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 6) ? 'selected' : ''; } ?>> Porte de garage </option>
                                    <option value="7" <?php if(isset($s8_dtl_data['kind_opening'])) { echo ($s8_dtl_data['kind_opening'] == 7) ? 'selected' : ''; } ?>> Brique de verre </option>
                                </select>
                            </td>
                            <td class="s8_td1"><input class="form-control s8_cop_no" type="text" name="s8_cop_no" value="<?php echo $s8_dtl_data['cop_no'] ?? ''; ?>"></td>
                            <td class="s8_td1"><input class="form-control s8_cop_length" type="text" name="s8_cop_length" value="<?php echo $s8_dtl_data['cop_length'] ?? ''; ?>"></td>
                            <td class="s8_td1"><input class="form-control s8_cop_height" type="text" name="s8_cop_height" value="<?php echo $s8_dtl_data['cop_height'] ?? ''; ?>"></td>
                            <td class="s8_td1">
                                <select name="s8_frame" class="form_select_opt form-control">
                                    <option value="0" <?php if(isset($s8_dtl_data['frame'])) { echo ($s8_dtl_data['frame'] == 0) ? 'selected' : ''; } ?>>PVC</option>
                                    <option value="1" <?php if(isset($s8_dtl_data['frame'])) { echo ($s8_dtl_data['frame'] == 1) ? 'selected' : ''; } ?>> Bios </option>
                                    <option value="2" <?php if(isset($s8_dtl_data['frame'])) { echo ($s8_dtl_data['frame'] == 2) ? 'selected' : ''; } ?>> Alu </option>
                                    <option value="3" <?php if(isset($s8_dtl_data['frame'])) { echo ($s8_dtl_data['frame'] == 3) ? 'selected' : ''; } ?>> Aucun </option>
                                </select>
                            </td>
                            <td class="s8_td1">
                                <select name="s8_glazing" class="form_select_opt form-control">
                                    <option value="0" <?php if(isset($s8_dtl_data['glazing'])) { echo ($s8_dtl_data['glazing'] == 0) ? 'selected' : ''; } ?>>Simple vitrage</option>
                                    <option value="1" <?php if(isset($s8_dtl_data['glazing'])) { echo ($s8_dtl_data['glazing'] == 1) ? 'selected' : ''; } ?>> Double vitrage ancien (>10 ans) </option>
                                    <option value="2" <?php if(isset($s8_dtl_data['glazing'])) { echo ($s8_dtl_data['glazing'] == 2) ? 'selected' : ''; } ?>> Double vitrage récent (< 10 ans) </option>
                                    <option value="3" <?php if(isset($s8_dtl_data['glazing'])) { echo ($s8_dtl_data['glazing'] == 3) ? 'selected' : ''; } ?>> Double vitrage VIR </option>
                                    <option value="4" <?php if(isset($s8_dtl_data['glazing'])) { echo ($s8_dtl_data['glazing'] == 4) ? 'selected' : ''; } ?>> Double fenêtre </option>
                                    <option value="5" <?php if(isset($s8_dtl_data['glazing'])) { echo ($s8_dtl_data['glazing'] == 5) ? 'selected' : ''; } ?>> Aucun </option>
                                </select>
                            </td>
                            <td class="s8_td1">
                                <select name="s8_shutter" class="form_select_opt form-control">
                                    <option value="0" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 0) ? 'selected' : ''; } ?>>Volet avec ajours </option>
                                    <option value="1" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 1) ? 'selected' : ''; } ?>> Volets battants bois </option>
                                    <option value="2" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 2) ? 'selected' : ''; } ?>> Volets battants PVC </option>
                                    <option value="3" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 3) ? 'selected' : ''; } ?>> Volets roulants PVC </option>
                                    <option value="4" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 4) ? 'selected' : ''; } ?>> Volets roulants alu </option>
                                    <option value="5" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 5) ? 'selected' : ''; } ?>> Persiennes coulissantes </option>
                                    <option value="6" <?php if(isset($s8_dtl_data['shutter'])) { echo ($s8_dtl_data['shutter'] == 6) ? 'selected' : ''; } ?>> Aucun </option>
                                </select>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </table>

            </div>
        </div>
    </div><!---col-lg-9---->
</div>

<br />
<hr color=' #54ba9e'>
<div class="row">
    <div class="col-lg-2">
        <label for="s8_photo">Photo</label>
    </div>
    <div class="col-lg-3">
        <input class="form-control" type="file" name="s8_photo">
    </div>
    <div class="col-lg-7">
    </div>
</div>

<div class="row">
    <div class="col-lg-2 align-self-center">
        <label>Comments</label>
    </div>
    <div class="col-lg-10">
        <textarea name="s8_comments" class="form-control" rows="5"><?php echo $step8_data->comments ?? ''; ?></textarea>
    </div>
</div>
<hr color=' #54ba9e'>
</form>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29 next" id="step8Submit">sauvegarder et suivant</button>
</div>