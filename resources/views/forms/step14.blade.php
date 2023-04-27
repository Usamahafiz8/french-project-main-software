<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Production d'ECS
    </div>
</div>

<hr color=' #54ba9e' >
<form role="form" method="POST" class="form-horizontal" id="step14form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}" class="customerId">


<div class="row">
    <div class="col-lg-4">
        <label>Production d'ECS Typer</label>
        <select name="s14_type" class="form_select_opt form-control">
            <option value="0" <?php if(isset($step14_data['type'])) { echo ($step14_data['type'] == '"0"') ? 'selected' : ''; } ?>>Instantanée</option>
            <option value="1" <?php if(isset($step14_data['type'])) { echo ($step14_data['type'] == '"1"') ? 'selected' : ''; } ?>> Générateur de chauffage</option>
            <option value="2" <?php if(isset($step14_data['type'])) { echo ($step14_data['type'] == '"2"') ? 'selected' : ''; } ?>>Chauffe-eau gaz </option>  
            <option value="3" <?php if(isset($step14_data['type'])) { echo ($step14_data['type'] == '"3"') ? 'selected' : ''; } ?>> Autre </option>
            
        </select>    
    </div>
    <div class="col-lg-4">
        <label>Accumulation</label>
        <select name="s14_accumulation" class="form_select_opt form-control">
            <option value="0" <?php if(isset($step14_data['accumulation'])) { echo ($step14_data['accumulation'] == '"0"') ? 'selected' : ''; } ?>>Instantanée</option>
            <option value="1" <?php if(isset($step14_data['accumulation'])) { echo ($step14_data['accumulation'] == '"1"') ? 'selected' : ''; } ?>> Générateur de chauffage</option>
            <option value="2" <?php if(isset($step14_data['accumulation'])) { echo ($step14_data['accumulation'] == '"2"') ? 'selected' : ''; } ?>> Chauffe-eau électrique </option>  
            <option value="3" <?php if(isset($step14_data['accumulation'])) { echo ($step14_data['accumulation'] == '"3"') ? 'selected' : ''; } ?>> Ballon thermodynamique  </option>
            <option value="4" <?php if(isset($step14_data['accumulation'])) { echo ($step14_data['accumulation'] == '"4"') ? 'selected' : ''; } ?>> Autre</option>
        </select>    
    </div>
    <div class="col-lg-4">
        <label for="s14_volume">Volume </label>
        <input class="form-control" type="text" name="s14_volume" value="<?php echo $step14_data->volume ?? ''; ?>">
    </div>
    
</div> <!----row1 end-->

<div class="row">
    <div class="col-lg-4">
        <label for="s14_ecs_seniority">Ancienneté ECS</label>
        <select name="s14_ecs_seniority" class="form_select_opt form-control">
            <option value="0" <?php if(isset($step14_data['ecs_seniority'])) { echo ($step14_data['ecs_seniority'] == '"0"') ? 'selected' : ''; } ?>>< 5 ans </option>
            <option value="1" <?php if(isset($step14_data['ecs_seniority'])) { echo ($step14_data['ecs_seniority'] == '"1"') ? 'selected' : ''; } ?>>5-10 Ans</option>
            <option value="2" <?php if(isset($step14_data['ecs_seniority'])) { echo ($step14_data['ecs_seniority'] == '"2"') ? 'selected' : ''; } ?>>10-15 ans</option>
            <option value="3" <?php if(isset($step14_data['ecs_seniority'])) { echo ($step14_data['ecs_seniority'] == '"3"') ? 'selected' : ''; } ?>>>15 ans</option>
        </select>    
    </div>
    <div class="col-lg-4">
        <label for="s14_plcd_in_heated_vol"> Placé dans un volume chauffé </label>
        <select name="s14_plcd_in_heated_vol" class="form_select_opt form-control">
            <option value="1" <?php if(isset($step14_data['plcd_in_heated_vol'])) { echo ($step14_data['plcd_in_heated_vol'] == '"1"') ? 'selected' : ''; } ?>>Oui</option>
            <option value="0" <?php if(isset($step14_data['plcd_in_heated_vol'])) { echo ($step14_data['plcd_in_heated_vol'] == '"0"') ? 'selected' : ''; } ?>>Non</option>
        </select>    
    </div>
    <div class="col-lg-4">Compteur électrique
        <label>Photo</label>
        <input class="form-control" type="file" name="s14_photo">
    </div>
    <div class="col-lg-4">
        
    </div>
</div> <!----row2 end-->

</form>
<div class="text-right">
        <button type="button" class="button-29  prev">précédente</button> 
        &nbsp; 
        <br/>
        <br/>
        <button type="button" class="button-29  next" id="step14Submit">sauvegarder et suivant</button>
</div>    
