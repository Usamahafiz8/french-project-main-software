<div class="text-heading">
    Configuration du plancher haut
</div>
<!-- <div class="row">
    <div class="col-lg-12 align-self-center">
        <h2><span style="color: #54ba9e;">
            </span></h2>
    </div>
</div> -->
<?php
if(isset($step2_data->attic_area))
{
  $attic_area = json_decode($step2_data->attic_area);
  $attic_area = (int)$attic_area;
}
?>
<hr color=' #54ba9e'>
<form role="form" method="POST" class="form-horizontal" id="step2form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="customerId" value="{{$customerId}}">
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="email">Type de plancher haut</label>
                <select name="s2_low_floor_type" class="form_select_opt form-control">
                    <option value="0" <?php if(isset($step2_data->low_floor_type)) { echo ($step2_data->low_floor_type == '"0"') ? 'selected' : ''; } ?>>Combles perdus</option>
                    <option value="1" <?php if(isset($step2_data->low_floor_type)) { echo ($step2_data->low_floor_type == '"1"') ? 'selected' : ''; } ?>>Combles aménagés</option>
                    <option value="2" <?php if(isset($step2_data->low_floor_type)) { echo ($step2_data->low_floor_type == '"2"') ? 'selected' : ''; } ?>>Toiture terrasse</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="s2_bigwork">Gros-œuvre</label>
                <select name="s2_bigwork" class="form_select_opt form-control">
                    <option  value="3" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"3"') ? 'selected' : ''; } ?>>Bois</option>
                    <option value="2" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"2"') ? 'selected' : ''; } ?>>Béton ou terre </option>
                    <option value="1" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"1"') ? 'selected' : ''; } ?>>Plafond</option>
                    <option value="0" <?php if(isset($step2_data->bigwork)) { echo ($step2_data->bigwork == '"0"') ? 'selected' : ''; } ?>>Je ne sais pas</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="s2_lfg_insulation">Isolation</label>
                <select name="s2_lfg_insulation" class="form_select_opt form-control">
                    <option  value="0" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"0"') ? 'selected' : ''; } ?>>Aucune</option>
                    <option value="1" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"1"') ? 'selected' : ''; } ?>> > 10 ans </option>
                    <option value="2" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"2"') ? 'selected' : ''; } ?>>5 à 10 ans </option>
                    <option value="3" <?php if(isset($step2_data->lfg_insulation)) { echo ($step2_data->lfg_insulation == '"3"') ? 'selected' : ''; } ?>>
                        < 5 ans </option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="s2_insulation_thick">Epaisseur de l'isolant</label>
                <input class="form-control" type="text" placeholder="In centimeter" name="s2_insulation_thick" value="<?php echo $step2_data->insulation_thickness ?? ''; ?>">
            </div>
        </div>
    </div>
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-3 align-self-center">
            <label>Si combles aménageables renseigner </label>
        </div>
        <div class="col-lg-9">

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="s2_crawlers_surface">Surface des rampants</label>
                        <input class="form-control" type="text" placeholder="In meter Square" name="s2_crawlers_surface" value="<?php echo $step2_data->crawlers_surface ?? ''; ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="s2_exterior_ceiling">Surface du plafond extérieur</label>
                        <input class="form-control" type="text" placeholder="In meter Square" name="s2_exterior_ceiling" value="<?php echo $step2_data->exterior_ceiling ?? ''; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div><!---row end---->
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-3 align-self-center">
            <label>Si combles perdus renseigner</label>
        </div>
        <div class="col-lg-9">

            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Surface des combles perdus</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" placeholder="meter Square" name="s2_attic_area_val" value="<?php echo $step2_data->attic_area_val ?? ''; ?>">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-1"></div> -->
                <div class="col-lg-6">
                        <div class="row">
                        <div class="col-sm-6">
                            <input class="form-check-input" type="radio" name="s2_attic_area" value="0" id="cap_aa" <?php if(isset($step2_data->attic_area)) { echo ($attic_area == 0) ? 'checked' : ''; } ?>>
                            <label class="form-check-label" for="occupancy1">Isolation déroulé</label>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-check-input" type="radio" name="s2_attic_area" value="1" id="cap_aa" <?php if(isset($step2_data->attic_area)) { echo ($attic_area == 1) ? 'checked' : ''; } ?>>
                            <label class="form-check-label" for="occupancy1">Isolation soufflée</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!---row end---->
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-6">
                        <label>Photo</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="s2_photo">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-6">
                        <label> Photo Plancher Haut 1</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="s2_hf_photo1">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-6">
                        <label> Photo Plancher Haut 2</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="s2_hf_photo2">
                    </div>
                </div>

            </div>
        </div>

    </div>
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-2 align-self-center">
            <label>Observations</label>
        </div>
        <div class="col-lg-10">
            <textarea name="s2_comments" class="form-control" rows="3"><?php echo $step2_data->comments ?? ''; ?></textarea>
        </div>
    </div>
    <hr color=' #54ba9e'>
</form>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp;
    <br />
    <br />
    <button type="button" class="button-29  next" id="step2Submit">sauvegarder et suivant</button>
</div>