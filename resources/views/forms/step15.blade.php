<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Compteur électrique
    </div>
</div>
<hr color=' #54ba9e'>

<form role="form" method="POST" class="form-horizontal" id="step12form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}" class="customerId">

<div class="row">
    <div class="col-lg-4">
        <label>Compteur électrique Taper</label>
        <select name="s15_meter_type" class="form_select_opt form-control">
            <option value="1" <?php if(isset($step15_data['meter_type'])) { echo ($step15_data['meter_type'] == '"1"') ? 'selected' : ''; } ?>>Monophasée</option>
            <option value="3" <?php if(isset($step15_data['meter_type'])) { echo ($step15_data['meter_type'] == '"3"') ? 'selected' : ''; } ?>>Triphasée</option>
        </select>
    </div>
    <div class="col-lg-4">
        <label for="s15_meter_power">Puissance du compteur</label>
        <select name="s15_meter_power" class="form_select_opt form-control">
            <option value="0" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"0"') ? 'selected' : ''; } ?>> 3 kVA </option>
            <option value="1" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"1"') ? 'selected' : ''; } ?>> 6 kVA </option>
            <option value="2" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"2"') ? 'selected' : ''; } ?>> 9 kVA </option>
            <option value="3" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"3"') ? 'selected' : ''; } ?>> 12 kVA </option>
            <option value="4" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"4"') ? 'selected' : ''; } ?>> 15 kVA </option>
            <option value="5" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"5"') ? 'selected' : ''; } ?>> 18 kVA </option>
            <option value="6" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"6"') ? 'selected' : ''; } ?>> 24 kVA </option>
            <option value="7" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"7"') ? 'selected' : ''; } ?>> 30 kVA </option>
            <option value="8" <?php if(isset($step15_data['meter_power'])) { echo ($step15_data['meter_power'] == '"8"') ? 'selected' : ''; } ?>> 36 kVA </option>
        </select>
    </div>
    <div class="col-lg-4">
        <label for="s15_photo">Photo </label>
        <input class="form-control" type="file" name="s15_photo">
    </div>
</div> <!----row1 end-->

</form>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button> &nbsp;
    <button type="button" class="button-sucss  complete" id="step15Submit">complet</button>
</div>