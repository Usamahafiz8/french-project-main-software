<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        VENTILATION
    </div>
</div>
<hr color=' #54ba9e'>
<form role="form" method="POST" class="form-horizontal" id="step12form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}" class="customerId">

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="s12_ventillation">systéme de ventilation</label>
            <select name="s12_ventillation" class="form_select_opt form-control">
                <option value="0" <?php if(isset($step12_data['ventillation'])) { echo ($step12_data['ventillation'] == '"0"') ? 'selected' : ''; } ?>> Par infiltration</option>
                <option value="1" <?php if(isset($step12_data['ventillation'])) { echo ($step12_data['ventillation'] == '"1"') ? 'selected' : ''; } ?>> Grilles hautes et basses</option>
                <option value="2" <?php if(isset($step12_data['ventillation'])) { echo ($step12_data['ventillation'] == '"2"') ? 'selected' : ''; } ?>> VMC Simple Flux Auto</option>
                <option value="3" <?php if(isset($step12_data['ventillation'])) { echo ($step12_data['ventillation'] == '"3"') ? 'selected' : ''; } ?>> VMC Double Flux </option>
                <option value="4" <?php if(isset($step12_data['ventillation'])) { echo ($step12_data['ventillation'] == '"4"') ? 'selected' : ''; } ?>> VMC Hygro A </option>
                <option value="5" <?php if(isset($step12_data['ventillation'])) { echo ($step12_data['ventillation'] == '"5"') ? 'selected' : ''; } ?>> VMC Hygro B</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="s12_no_pieces">Nombre de piéces</label>
            <input class="form-control" type="text" placeholder="" name="s12_no_pieces" value="<?php echo $step12_data->no_pieces ?? ''; ?>">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="s12_no_bathrooms">Nombre de salles de bains</label>
            <input class="form-control" type="text" placeholder="" name="s12_no_bathrooms" value="<?php echo $step12_data->no_bathrooms ?? ''; ?>">
        </div>
    </div>
</div> <!----row1 end-->


<hr color=' #54ba9e'>
<div class="row">
    <div class="col-lg-3 align-self-center">
        <label>Systeme De Chauffage et ECS</label>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_energy">Energie</label>
                    <select name="s12_energy" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step12_data['energy'])) { echo ($step12_data['energy'] == '"0"') ? 'selected' : ''; } ?>>Fioul</option>
                        <option value="1" <?php if(isset($step12_data['energy'])) { echo ($step12_data['energy'] == '"1"') ? 'selected' : ''; } ?>> Gaz</option>
                        <option value="2" <?php if(isset($step12_data['energy'])) { echo ($step12_data['energy'] == '"2"') ? 'selected' : ''; } ?>> Propane</option>
                        <option value="3" <?php if(isset($step12_data['energy'])) { echo ($step12_data['energy'] == '"3"') ? 'selected' : ''; } ?>> Bois </option>
                        <option value="4" <?php if(isset($step12_data['energy'])) { echo ($step12_data['energy'] == '"4"') ? 'selected' : ''; } ?>> Electricité </option>
                        <option value="5" <?php if(isset($step12_data['energy'])) { echo ($step12_data['energy'] == '"5"') ? 'selected' : ''; } ?>> Charbon</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_generator"> Générateur </label>
                    <select name="s12_generator" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"0"') ? 'selected' : ''; } ?>>Chaudière haute T°</option>
                        <option value="1" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"1"') ? 'selected' : ''; } ?>>Chaudière basse T°</option>
                        <option value="2" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"2"') ? 'selected' : ''; } ?>>Chaudière condensation</option>
                        <option value="3" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"3"') ? 'selected' : ''; } ?>>Convecteurs électriques</option>
                        <option value="4" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"4"') ? 'selected' : ''; } ?>>Poêle à bois</option>
                        <option value="5" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"5"') ? 'selected' : ''; } ?>> Insert</option>
                        <option value="6" <?php if(isset($step12_data['generator'])) { echo ($step12_data['generator'] == '"6"') ? 'selected' : ''; } ?>> Cheminée</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_year">Année</label>
                    <input class="form-control" type="date" placeholder="" name="s12_year">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_rated_p">P. nominale</label>
                    <input class="form-control" type="text" placeholder="" name="s12_rated_p" value="<?php echo $step12_data->rated_p ?? ''; ?>">
                </div>
            </div>
        </div> <!----row1 end-->
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s12_yield_p_nominal"> Rendement P. nominale </label>
                    <input class="form-control" type="text" placeholder="" name="s12_yield_p_nominal" value="<?php echo $step12_data->yield_p_nominal ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s12_plcd_in_heated_vol"> Placé dans un volume chauffé </label>
                    <select name="s12_plcd_in_heated_vol" class="form_select_opt form-control">
                        <option value="1" <?php if(isset($step12_data['plcd_in_heated_vol'])) { echo ($step12_data['plcd_in_heated_vol'] == '"1"') ? 'selected' : ''; } ?>>Oui</option>
                        <option value="0" <?php if(isset($step12_data['plcd_in_heated_vol'])) { echo ($step12_data['plcd_in_heated_vol'] == '"0"') ? 'selected' : ''; } ?>>Non</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s12_photo">Photo</label>
                    <input class="form-control" type="file" placeholder="" name="s12_photo">
                </div>
            </div>
        </div> <!----row2 end-->

    </div><!----col-lg-9 end-->
</div>
</form>
<hr color=' #54ba9e'>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29  next" id="step12Submit">sauvegarder et suivant</button>
</div>