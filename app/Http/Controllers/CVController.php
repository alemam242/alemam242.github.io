<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CVController extends Controller
{
    function downloadCV(){
        try{
        $path = "assets/raw/Md-Al Emam -Ref - Shanto.pdf";

        return response()->download($path);
        }catch(Exception $e){

            Toastr::error('Download failed.', 'Error', [
                "positionClass" => "toast-top-right",
                "closeButton"=> true,
                "preventDuplicates"=> true,
                "onclick"=> null,
                "showDuration"=> "300",
                "hideDuration"=> "1000",
                "timeOut"=> "5000",
                "extendedTimeOut"=> "1000",
                "showEasing"=> "swing",
                "hideEasing"=> "linear",
                "showMethod"=> "fadeIn",
                "hideMethod"=> "fadeOut"
            ]);
            return redirect()->back();
        }
    }
}
