
<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Systéme d'émission
    </div>
</div>
<hr color=' #54ba9e'>

<form role="form" method="POST" class="form-horizontal" id="step13form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}" class="customerId">

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <!-- <button type="button" class="btn btn-info add-new add-new-s13"><i class="fa fa-plus"></i> Add New</button> -->
                <input type="button" value="Delete Row" class="s13_deleteRow deleteRow btn btn-danger btn-sm">
                <input type="button" value="Add Row" class="s13_addRows addRows btn btn-sm">
            </div>
        </div>
        <div class="table-responsive">
            <div class="table-wrapper" style="width: 90vh;">
                <!-- <div class="table-title">
                </div> -->
                <table class="table table-bordered" id="s13_rowsTable">
                    <tr>
                        <th>Sélectionner</th>
                        <th>Typer</th>
                        <th>Surface chauffée par l'émissio</th>
                    </tr>
                    @if(count($step13_dtl_data) > 0)
                    @foreach($step13_dtl_data as $s13_dtl_data)
                    <tr>
                        <td class="s13_td1"><input type="checkbox" name="s13_record"></td>
                        <td class="s13_td1">
                            <select name="s13_em_sys_type" class="form_select_opt s13_em_sys_type form-control">
                                <option value="0" <?php if(isset($s13_dtl_data['type'])) { echo ($s13_dtl_data['type'] == 0) ? 'selected' : ''; } ?>> Radiateur fonte</option>
                                <option value="1" <?php if(isset($s13_dtl_data['type'])) { echo ($s13_dtl_data['type'] == 1) ? 'selected' : ''; } ?>>Radiateur acier </option>
                                <option value="2" <?php if(isset($s13_dtl_data['type'])) { echo ($s13_dtl_data['type'] == 2) ? 'selected' : ''; } ?>>Ventilo-convecteur</option>
                                <option value="3" <?php if(isset($s13_dtl_data['type'])) { echo ($s13_dtl_data['type'] == 3) ? 'selected' : ''; } ?>>Plancher chauffant</option>
                                <option value="4" <?php if(isset($s13_dtl_data['type'])) { echo ($s13_dtl_data['type'] == 4) ? 'selected' : ''; } ?>>Autre</option>
                            </select>
                        </td>
                        <td class="s13_td1"><input type="text" name="s13_heated_area" class="form-control s13_heated_area" value="<?php echo $s13_dtl_data->heated_area ?? ''; ?>"></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="s13_td1"><input type="checkbox" name="s13_record"></td>
                        <td class="s13_td1">
                            <select name="s13_em_sys_type" class="form_select_opt s13_em_sys_type form-control">
                                <option value="0"> Radiateur fonte</option>
                                <option value="1">Radiateur acier </option>
                                <option value="2">Ventilo-convecteur</option>
                                <option value="3">Plancher chauffant</option>
                                <option value="4">Autre</option>
                            </select>
                        </td>
                        <td class="s13_td1"><input type="text" name="s13_heated_area" class="form-control s13_heated_area"></td>
                    </tr>
                    @endif
                </table>

            </div>
        </div>
    </div><!--col-lg-12 end-->
    <br/>
<hr color=' #54ba9e' >
</div> <!----row1 end-->

<div class="row">
    <div class="col-lg-2">
        <label for="s13_photo">Photo</label>
    </div>
    <div class="col-lg-3">
        <input class="form-control" type="file" name="s13_photo">
    </div>
    <div class="col-lg-7">
    </div>
</div>


<div class="row">
    <div class="col-lg-2 align-self-center">
        <label>Observations</label>
    </div>
    <div class="col-lg-10">
        <textarea name="s13_comments" class="form-control" rows="5"><?php echo $step13_data->comments ?? ''; ?></textarea>
    </div>
</div>
</form>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29  next" id="step13Submit">sauvegarder et suivant</button>
</div>