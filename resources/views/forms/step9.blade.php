
<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Configuration des murs extérieurs
        <br />
        facade Ouest
    </div>
</div>
<hr color=' #54ba9e' >

<form role="form" method="POST" class="form-horizontal" id="step9form" enctype="multipart/form-data">
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
                    <label for="s9_rock">Pierre</label>
                    <select name="s9_rock" class="form_select_opt form-control">
                        <option value="2" <?php if(isset($step9_data->rock)) { echo ($step9_data->rock == 2) ? 'selected' : ''; } ?>>Pierres locales maçonées</option>
                        <option value="1" <?php if(isset($step9_data->rock)) { echo ($step9_data->rock == 1) ? 'selected' : ''; } ?>> Pierres meuliéres</option>
                        <option value="3" <?php if(isset($step9_data->rock)) { echo ($step9_data->rock == 3) ? 'selected' : ''; } ?>> Autre</option>
                        <option value="0" <?php if(isset($step9_data->rock)) { echo ($step9_data->rock == 0) ? 'selected' : ''; } ?>> Non</option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s9_concrete">Béton</label>
                    <select name="s9_concrete" class="form_select_opt form-control">
                        <option value="1" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == 1) ? 'selected' : ''; } ?>>Parpaing</option>
                        <option value="2" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == 2) ? 'selected' : ''; } ?>>Béton banché </option>
                        <option value="3" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == 3) ? 'selected' : ''; } ?>>Béton de mâchefer</option>
                        <option value="4" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == 4) ? 'selected' : ''; } ?>>Béton cellulaire</option>
                        <option value="0" <?php if(isset($step9_data->concrete)) { echo ($step9_data->concrete == 0) ? 'selected' : ''; } ?>> Non</option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s9_brick">Brique</label>
                    <select name="s9_brick" class="form_select_opt form-control">
                        <option value="3" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == 3) ? 'selected' : ''; } ?>>Brique pleine</option>
                        <option value="2" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == 2) ? 'selected' : ''; } ?>> Brique alvéolée</option>
                        <option value="1" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == 1) ? 'selected' : ''; } ?>>Brique creuse</option>
                        <option value="0" <?php if(isset($step9_data->brick)) { echo ($step9_data->brick == 0) ? 'selected' : ''; } ?>> Non</option>
                    </select>    
                </div>
            </div>
        </div><!---- row end--->
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_earth">Terre</label>
                    <select name="s9_earth" class="form_select_opt form-control">
                        <option value="2" <?php if(isset($step9_data->earth)) { echo ($step9_data->earth == 2) ? 'selected' : ''; } ?>>Pisé</option>
                        <option value="1" <?php if(isset($step9_data->earth)) { echo ($step9_data->earth == 1) ? 'selected' : ''; } ?>>Torchis / Pan de bois</option>
                        <option value="0" <?php if(isset($step9_data->earth)) { echo ($step9_data->earth == 0) ? 'selected' : ''; } ?>>Non</option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_drink">Bois</label>
                    <select name="s9_drink" class="form_select_opt form-control">
                        <option value="2" <?php if(isset($step9_data->drink)) { echo ($step9_data->drink == 2) ? 'selected' : ''; } ?>>Madrier</option>
                        <option value="1" <?php if(isset($step9_data->drink)) { echo ($step9_data->drink == 1) ? 'selected' : ''; } ?>>Ossature bois</option>
                        <option value="0" <?php if(isset($step9_data->drink)) { echo ($step9_data->drink == 0) ? 'selected' : ''; } ?>>Non</option>
                    </select>    
                </div>
            </div>
            
        </div><!---- row end--->
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_wall_thickness">Epaisseur du mur</label>
                    <input class="form-control" type="text" placeholder="In centimeter" name="s9_wall_thickness" value="<?php echo $step9_data->wall_thickness ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_insulation">Isolation</label>
                    <select name="s9_insulation" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == 0) ? 'selected' : ''; } ?>>Aucune</option>
                        <option value="1" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == 1) ? 'selected' : ''; } ?>> > 10 ans </option>
                        <option value="2" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == 2) ? 'selected' : ''; } ?>> 5 to 10 ans </option>
                        <option value="3" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == 3) ? 'selected' : ''; } ?>>< 5 ans </option>
                        <option value="4" <?php if(isset($step9_data->insulation)) { echo ($step9_data->insulation == 4) ? 'selected' : ''; } ?>>Je ne sais pas </option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_thickness">Epaisseur de l' isolant</label>
                    <input class="form-control" type="text" placeholder="In centimeter" name="s9_thickness" value="<?php echo $step9_data->thickness ?? ''; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_facade_orientation">Orientation de la facade</label>
                    <select name="s9_facade_orientation" class="form_select_opt form-control">
                        <option value="0" <?php if(isset($step9_data->facade_orientation)) { echo ($step9_data->facade_orientation == 0) ? 'selected' : ''; } ?>>SO</option>
                        <option value="1" <?php if(isset($step9_data->facade_orientation)) { echo ($step9_data->facade_orientation == 1) ? 'selected' : ''; } ?>>O</option>
                        <option value="2" <?php if(isset($step9_data->facade_orientation)) { echo ($step9_data->facade_orientation == 2) ? 'selected' : ''; } ?>>NO</option>
                    </select>    
                </div>
            </div>
        </div><!---- row end--->
        
    </div><!--col-lg-9 end--->
    
    
</div><!---- row end--->
<hr color=' #54ba9e' >


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
                    <label for="s9_height">Hauteur</label>
                    <input class="form-control" type="text" placeholder="In meter" name="s9_height" value="<?php echo $step9_data->height ?? ''; ?>">
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_length">Longueur</label>
                    <input class="form-control" type="text" placeholder="In meter" name="s9_length" value="<?php echo $step9_data->length ?? ''; ?>">
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-6">  
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_surface">Surface</label>
                    <input class="form-control" type="text" placeholder="In meter square" name="s9_surface" value="<?php echo $step9_data->surface ?? ''; ?>">
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_adjoining_area">Surface mitoyenne</label>
                    <input class="form-control" type="text" placeholder="In meter square" name="s9_adjoining_area" value="<?php echo $step9_data->adjoining_area ?? ''; ?>">
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
                <label for="area2">Surface 2 </label>
                <input class="form-control" type="text" name="s9_area2" value="<?php echo $step9_data->area2 ?? ''; ?>">
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="area3">Surface 3</label>
                <input class="form-control" type="text" name="s9_area3" value="<?php echo $step9_data->area3 ?? ''; ?>">
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="area4">Surface 4</label>
                <input class="form-control" type="text" name="s9_area4" value="<?php echo $step9_data->area4 ?? ''; ?>">
            </div><!--col-lg-3 end--->
            
        </div><!--row end--->
        <div class="row">

            <div class="col-lg-4">
                <label for="s9_t_srfc_area">Surface totale de la façade</label>
                <input class="form-control" type="text" name="s9_t_srfc_area" placeholder="meter square" value="<?php echo $step9_data->t_srfc_area ?? ''; ?>">
            </div><!--col-lg-4 end--->
            <div class="col-lg-4">
                <label for="s9_area_tobe_insltd">Surface à isoler</label>
                <input class="form-control" type="text" name="s9_area_tobe_insltd" placeholder="In meter square" value="<?php echo $step9_data->area_tobe_insltd ?? ''; ?>">
            </div><!--col-lg-4 end--->
            <div class="col-lg-4">
                <label for="s9_photo">Photo</label>
                <input class="form-control" type="file" name="s9_photo">
            </div><!--col-lg-4 end--->

        </div><!--row end--->
    </div><!--col-lg-9 end--->
</div><!---- row end--->
<hr color=' #54ba9e' >

</form>
    <div class="text-right">
        <button type="button" class="button-29  prev">précédente</button>
        &nbsp; 
        <br/>
        <br/>
        <button type="button" class="button-29  next" id="step9Submit">sauvegarder et suivant</button>
    </div>    
