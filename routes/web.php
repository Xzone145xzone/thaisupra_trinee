<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PA1Controller;
use App\Http\Controllers\PA2Controller;
use App\Http\Controllers\PA3Controller;
use App\Http\Controllers\PA4Controller;
use App\Http\Controllers\PA5Controller;
use App\Http\Controllers\Template1Controller;

use App\Http\Middleware\UserSesstion;



    Route::get('/', [AuthController::class, 'login']);
    Route::get('login', [AuthController::class, 'login'])->name('login');;
    Route::get('/logout', [AuthController::class, 'logout']);
    
    Route::post('authentication', [AuthController::class, 'authentication']);
    Route::get('PALogin/{email}/{password}', [AuthController::class, 'PALogin']);
    
    ##################################################################################
    
    
    Route::group(['middleware' => 'auth'], function () {
    
    Route::get('PA/{uId}', [AuthController::class, 'PA']);
    Route::get('PA_update/{uId}/{field}', [AuthController::class, 'PA_update']);
   
    Route::get('PA1', [PA1Controller::class, 'PA1']);
    Route::post('PA1_insert', [PA1Controller::class, 'PA1_insert']);
     
    ####################################################################################
    
      
    Route::get('PA1_2', [PA1Controller::class, 'PA1_2']);    
    Route::post('PA1_2_insert',[PA1Controller::class,'PA1_2_insert']);
   
      /////////////////////////////////////////////////////////////////
    Route::get('PA1_1', [PA1Controller::class, 'PA1_1']);
    Route::post('PA_1_insert', [PA1Controller::class, 'PA_1_insert']);
    Route::post('PA_1_update_field', [PA1Controller::class, 'PA_1_update_field']);
    /////////////////////////////////
    Route::post('PA_1_insert_edu', [PA1Controller::class, 'PA_1_insert_edu']);
    Route::post('PA_1_update_edu', [PA1Controller::class, 'PA_1_update_edu']);
    Route::post('PA_1_delete_edu', [PA1Controller::class, 'PA_1_delete_edu']);
    /////////////////////////////////    
    Route::post('PA_1_insert_sch', [PA1Controller::class, 'PA_1_insert_sch']);
    Route::post('PA_1_update_sch', [PA1Controller::class, 'PA_1_update_sch']);
    Route::post('PA_1_delete_sch', [PA1Controller::class,'PA_1_delete_sch']);
    /////////////////////////////////    
    Route::post('PA_1_update_sp', [PA1Controller::class, 'PA_1_update_sp']);
    Route::post('PA_1_delete_sp', [PA1Controller::class, 'PA_1_delete_sp']);
    Route::post('PA_1_insert_sp', [PA1Controller::class, 'PA_1_insert_sp']);
    /////////////////////////////////////////////////////////
    Route::post('PA_1_insert_dev', [PA1Controller::class, 'PA_1_insert_dev']);
    Route::post('PA_1_delete_dev', [PA1Controller::class,'PA_1_delete_dev']);
    Route::post('PA_1_update_dev', [PA1Controller::class, 'PA_1_update_dev']);
   //////////////////////////////////////////////////////////// 
    Route::post('PA_1_delete_res', [PA1Controller::class,'PA_1_delete_res']);
    Route::post('PA_1_update_res', [PA1Controller::class, 'PA_1_update_res']);
    Route::post('PA_1_insert_res', [PA1Controller::class, 'PA_1_insert_res']);
   
   ######################################################################################
    
    Route::get('PA1_3', [PA1Controller::class, 'PA1_3']);    
    Route::post('PA1_3_insert',[PA1Controller::class,'PA1_3_insert']);
   
    
    ######################################################################################
    
    Route::get('PA1_4', [PA1Controller::class, 'PA1_4']);
    Route::post('PA1_4_insert',[PA1Controller::class,'PA1_4_insert']);
      //////////////////////////////////////////////////////////////////////////
    Route::post('PA_1_delete_train', [PA1Controller::class,'PA_1_delete_train']);
    Route::post('PA_1_update_train', [PA1Controller::class, 'PA_1_update_train']);
    Route::post('PA_1_insert_train', [PA1Controller::class, 'PA_1_insert_train']); 
    
   ########################################################################################
    
    Route::get('PA1_5', [PA1Controller::class, 'PA1_5']);
    Route::post('PA1_5_insert', [PA1Controller::class, 'PA1_5_insert']);
    /////////////////////////////////////////////////////////////////////////   
    Route::get('PA_1_delete_inno/{id}', [PA1Controller::class,'PA_1_delete_inno']);        
    Route::post('PA_1_update_inno', [PA1Controller::class, 'PA_1_update_inno']); 
    Route::post('PA_1_insert_inno', [PA1Controller::class, 'PA_1_insert_inno']); 
    
  ##########################################################################################
     
    Route::get('PA2_1', [PA2Controller::class, 'PA2_1']);
    Route::get('PA2_2', [PA2Controller::class, 'PA2_2']);
    Route::get('PA2_3', [PA2Controller::class, 'PA2_3']);
    Route::post('PA2_Insert_Task', [PA2Controller::class, 'PA2_Insert_Task']);
    Route::post('PA2_Insert_Development', [PA2Controller::class, 'PA2_Insert_Development']);
    
    Route::get('PA2_delete_Task/{id}', [PA2Controller::class, 'PA2_delete_Task']);
    Route::get('PA2_delete_Development/{id}', [PA2Controller::class, 'PA2_delete_Development']);

    //////////////////////////////////////////////////////////////////////////
    
    Route::get('PA3', [PA3Controller::class, 'PA3']);
    Route::get('PA3_resolution', [PA3Controller::class, 'PA3_resolution']);
    Route::get('PA3_evaluation/{eva_id}', [PA3Controller::class, 'PA3_evaluation']);
    Route::get('evaluation', [PA3Controller::class, 'evaluation']);
    Route::post('PA3_evaluation_answer', [PA3Controller::class, 'PA3_evaluation_answer']);
    Route::get('PA3_evaluation_result/{eva_id}/{user_id}', [PA3Controller::class, 'PA3_evaluation_result']);
    //////////////////////////////////////////////////////////////////////////
    
    Route::get('PA4', [PA4Controller::class, 'PA4']);
    Route::post('PA4_insert', [PA4Controller::class, 'PA4_insert']);
    Route::post('PA4_update_field', [PA4Controller::class, 'PA4_update_field']);
    
    Route::get('PA4doc/{id}', [PA4Controller::class, 'PA4_doc']);
    
    //////////////////////////////////////////////////////////////////////////
    
    Route::get('PA5', [PA5Controller::class, 'PA5']);
    //Route::get('Template1', [PA5Controller::class, 'Template1']); 
    
    Route::get('document', [PA5Controller::class, 'document']);
    
    ///////////////////////////////////////////////////////////////////////////
    
   Route::get('Template1/{pages}', [TemplateController::class, 'loadpage']);
   Route::get('coverpage/{pages}', [TemplateController::class, 'coverpage']);   
   Route::get('graphic/{pages}', [TemplateController::class, 'graphic']);
});

