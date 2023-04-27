<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Configuration des murs extérieurs
        <br />
        facade est
    </div>
</div>
<hr color=' #54ba9e'>

<form role="form" method="POST" class="form-horizontal" id="step5form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}">

<div class="row">
    <div class="col-lg-3 align-self-center">
        <label>Composition du mur extérieur</label>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s5_rock">Pierre</label>
                    <select name="s5_rock" class="form_select_opt form-control">
                        <option value="2" <?php if(isset($step5_data->rock)) { echo ($step5_data->rock == 2) ? 'selected' : ''; } ?>>Pierres locales maçonées</option>
                        <option value="1" <?php if(isset($step5_data->rock)) { echo ($step5_data->rock == 1) ? 'selected' : ''; } ?>> Pierres meuliéres</option>
                        <option value="3" <?php if(isset($step5_data->rock)) { echo ($step5_data->rock == 3) ? 'selected' : ''; } ?>> Autre</option>
                        <option value="0" <?php if(isset($step5_data->rock)) { echo ($step5_data->rock == 0) ? 'selected' : ''; } ?>> Non</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s5_concrete">Béton</label>
                    <select name="s5_concrete" class="form_select_opt form-control">
                    <option value="1" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == 1) ? 'selected' : ''; } ?>>Parpaing</option>
                        <option value="2" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == 2) ? 'selected' : ''; } ?>>Béton banché </option>
                        <option value="3" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == 3) ? 'selected' : ''; } ?>>Béton de mâchefer</option>
                        <option value="4" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == 4) ? 'selected' : ''; } ?>>Béton cellulaire</option>
                        <option value="0" <?php if(isset($step5_data->concrete)) { echo ($step5_data->concrete == 0) ? 'selected' : ''; } ?>> Non</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s5_brick">Brique</label>
                    <select name="s5_brick" class="form_select_opt form-control">
                        <option value="3" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == 3) ? 'selected' : ''; } ?>>Brique pleine</option>
                        <option value="2" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == 2) ? 'selected' : ''; } ?>> Brique alvéolée</option>
                        <option value="1" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == 1) ? 'selected' : ''; } ?>>Brique creuse</option>
                        <option value="0" <?php if(isset($step5_data->brick)) { echo ($step5_data->brick == 0) ? 'selected' : ''; } ?>> Non</option>
                    </select>
                </div>
            </div>
        </div><!---- row end--->
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="s5_earth">Terre</label>
                    <select name="s5_earth" class="form_select_opt form-control">
                        <option value="2" <?php if(isset($step5_data->earth)) { echo ($step5_data->earth == 2) ? 'selected' : ''; } ?>>Pisé</option>
                        <option value="1" <?php if(isset($step5_data->earth)) { echo ($step5_data->earth == 1) ? 'selected' : ''; } ?>>Torchis / Pan de bois</option>
                        <option value="0" <?php if(isset($step5_data->earth)) { echo ($step5_data->earth == 0) ? 'selected' : ''; } ?>>Non</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="s5_drink">Bois</label>
                    <select name="s5_drink" class="form_select_opt form-control">
                        <option value="2" <?php if(isset($step5_data->drink)) { echo ($step5_data->drink == 2) ? 'selected' : ''; } ?>>Madrier</option>
                        <option value="1" <?php if(isset($step5_data->drink)) { echo ($step5_data->drink == 1) ? 'selected' : ''; } ?>>Ossature bois</option>
                        <option value="0" <?php if(isset($step5_data->drink)) { echo ($step5_data->drink == 0) ? 'selected' : ''; } ?>>Non</option>
                    </select>
                </div>
            </div>

        </div><!---- row end--->
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s5_wall_thickness">Epaisseur du mur</label>
                    <input class="form-control" type="text" placeholder="centimeter" name="s5_wall_thickness" value="<?php echo $step5_data->wall_thickness ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s5_insulation">Isolation</label>
                    <select name="s5_insulation" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == 0) ? 'selected' : ''; } ?>>Aucune</option>
                        <option value="1" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == 1) ? 'selected' : ''; } ?>> > 10 ans </option>
                        <option value="2" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == 2) ? 'selected' : ''; } ?>> 5 to 10 ans </option>
                        <option value="3" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == 3) ? 'selected' : ''; } ?>>< 5 ans </option>
                        <option value="4" <?php if(isset($step5_data->insulation)) { echo ($step5_data->insulation == 4) ? 'selected' : ''; } ?>>Je ne sais pas </option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s5_thickness">Epaisseur de l' isolant</label>
                    <input class="form-control" type="text" placeholder="In centimeter" name="s5_thickness" value="<?php echo $step5_data->thickness ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s5_facade_orientation">Orientation de la facade</label>
                    <select name="s5_facade_orientation" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step5_data->facade_orientation)) { echo ($step5_data->facade_orientation == 0) ? 'selected' : ''; } ?>>NE</option>
                        <option value="1" <?php if(isset($step5_data->facade_orientation)) { echo ($step5_data->facade_orientation == 1) ? 'selected' : ''; } ?>>E</option>
                        <option value="2" <?php if(isset($step5_data->facade_orientation)) { echo ($step5_data->facade_orientation == 2) ? 'selected' : ''; } ?>>ES</option>
                    </select>
                </div>
            </div>
        </div><!---- row end--->

    </div><!--col-lg-9 end--->


</div><!---- row end--->
<hr color=' #54ba9e'>


<div class="row">
    <div class="col-lg-3 align-self-center">
        
        <label>Dimensions du mur extérieur</label>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="s5_height">Hauteur</label>
                            <input class="form-control" type="text" placeholder="In meter" name="s5_height" value="<?php echo $step5_data->height ?? ''; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="s5_length">Longueur</label>
                            <input class="form-control" type="text" placeholder="In meter" name="s5_length" value="<?php echo $step5_data->length ?? ''; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="s5_surface">Surface</label>
                            <input class="form-control" type="text" placeholder="In meter square" name="s5_surface" value="<?php echo $step5_data->surface ?? ''; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="s5_adjoining_area">Surface mitoyenne</label>
                            <input class="form-control" type="text" placeholder="In meter square" name="s5_adjoining_area" value="<?php echo $step5_data->adjoining_area ?? ''; ?>">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="">Si présences de sous-façades, ou si façade non rectangulaire, rensigner</label>
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="s5_area2">Surface 2 </label>
                <input class="form-control" type="text" name="s5_area2" value="<?php echo $step5_data->area2 ?? ''; ?>">
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="s5_area3">Surface 3</label>
                <input class="form-control" type="text" name="s5_area3" value="<?php echo $step5_data->area3 ?? ''; ?>">
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="s5_area4">Surface 4</label>
                <input class="form-control" type="text" name="s5_area4" value="<?php echo $step5_data->area4 ?? ''; ?>">
            </div><!--col-lg-3 end--->

        </div><!--row end--->
        <div class="row">

            <div class="col-lg-4">
                <label for="s5_t_srfc_area">Surface totale de la façade</label>
                <input class="form-control" type="text" name="s5_t_srfc_area" placeholder="meter square" value="<?php echo $step5_data->t_srfc_area ?? ''; ?>">
            </div><!--col-lg-4 end--->
            <div class="col-lg-4">
                <label for="s5_area_tobe_insltd">Surface à isoler</label>
                <div class="row">
                    <div class="col-lg-5">
                        <select name="s5_srfc_insulator_Type" class="form_select_opt form-control">
                            <option value="0" <?php if(isset($step5_data->srfc_insulator_Type)) { echo ($step5_data->srfc_insulator_Type == 0) ? 'selected' : ''; } ?>>ITE</option>
                            <option value="1" <?php if(isset($step5_data->srfc_insulator_Type)) { echo ($step5_data->srfc_insulator_Type == 1) ? 'selected' : ''; } ?>>ITI</option>
                        </select>
                    </div>
                    <div class="col-lg-7"><input class="form-control" type="text" name="s5_area_tobe_insltd" placeholder="In meter square" value="<?php echo $step5_data->area_tobe_insltd ?? ''; ?>"></div>
                </div>
            </div><!--col-lg-4 end--->
            <div class="col-lg-4">
                <label for="s5_photo">Photo</label>
                <input class="form-control" type="file" name="s5_photo">
            </div><!--col-lg-4 end--->

        </div><!--row end--->
    </div><!--col-lg-9 end--->
</div><!---- row end--->
<hr color=' #54ba9e'>

</form>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29  next" id="step5Submit">sauvegarder et suivant</button>
</div>