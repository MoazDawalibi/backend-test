<?php

namespace App\Http\Controllers;

use App\Models\Moaz;
use Illuminate\Http\Request;

class MoazController extends Controller
{
    public function  Moaz(Request $request) {

        
        // create row
        // Moaz::create([
        //     'first_name'=>'moaz',
        //     "last_name"=>"Dw"
        // ]);

        


        // get all row
        // return Moaz::get();



        //  select * from moazs where id  = 1 ;
        // return Moaz::where('id', $request->id)->get();


        // Moaz::where("id", $request->id)->delete();


        Moaz::where("id", $request->id)->update([
            'first_name'=>"ibrahim"
        ]);

        return 'hello ';
    }
}
