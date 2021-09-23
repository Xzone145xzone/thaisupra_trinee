<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UprofileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    
    
    public function insert(){
               
        DB::table('user_profile')->insert([
                ['user_profile' => PA_year(),
                    'user_id' => session('uID'),
                    'firstname' => 0,
                    'lastname' => 0,
                    'position' => 0,
                    'major' => 0,
                    'national' => 0,
                    'race' => 0,
                    'religion' => 0,
                    'address' => 0,
                    'datestart' => 0,
                    'datebegin' => 0,
                    'academic' => 0,
                    'dateacademic' => 0,
                    'school' => 0,
                    'school_aff' => 0,
                    'salary' => 0,
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s')],
            ]);
    }
}
