@extends('layouts.header')
@section('title','Auditor')   

   
@section('contentdata')
<?php
$customerId = Request::route('id');
?>

<div class="wizard" style="padding:24px">
               <div class="wizard-progress">
                 <div class="progress">
                   <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                 </div>
                 <ul class="nav nav-tabs">
                   <li class="nav-item active" id="firsttab"><a class="nav-link" href="#step1" data-toggle="tab">1</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step2" data-toggle="tab">2</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step3" data-toggle="tab">3</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step4" data-toggle="tab">4</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step5" data-toggle="tab">5</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step6" data-toggle="tab">6</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step7" data-toggle="tab">7</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step8" data-toggle="tab">8</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step9" data-toggle="tab">9</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step10" data-toggle="tab">10</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step11" data-toggle="tab">11</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step12" data-toggle="tab">12</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step13" data-toggle="tab">13</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step14" data-toggle="tab">14</a></li>
                   <li class="nav-item"><a class="nav-link" href="#step15" data-toggle="tab">15</a></li>
                   
                 </ul>
               </div>
               <!-- @include('forms.select') -->
               <form role="form" class="form-horizontal">
                 <div class="tab-content">
                   <!---tab pane active end---->
                   <div class="tab-pane active" role="tabpanel" id="step1">
                   @include('forms.step1')
                   </div>
                  <!---tab pane active end---->
                   <div class="tab-pane" role="tabpanel" id="step2">
                   @include('forms.step2')
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step3">
                   @include('forms.step3')
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step4">
                   @include('forms.step4')
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step5">
                   @include('forms.step5')
                   </div>
                   
                   <div class="tab-pane" role="tabpanel" id="step6">
                    @include('forms.step6')
                   </div>
 
                   <div class="tab-pane" role="tabpanel" id="step7">
                   @include('forms.step7')
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step8">
                   @include('forms.step8')
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step9">
                   @include('forms.step9')    
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step10">
                   @include('forms.step10')      
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step11">   
                   @include('forms.step11')  
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step12">
                   @include('forms.step12')  
                   </div>
                    
                   <div class="tab-pane" role="tabpanel" id="step13">
                   @include('forms.step13')  
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step14">
                   @include('forms.step14')  
                   </div>

                   <div class="tab-pane" role="tabpanel" id="step15">
                   @include('forms.step15')  
                   </div> 

                 </div>
               </form>
             </div>
            <!---Wizard area end-->
@endsection
