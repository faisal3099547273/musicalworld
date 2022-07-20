<?php

namespace App\Http\Controllers\MusicWorld;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Competition;

class landingPageController extends Controller
{
    //
    public function landingpage(){
        $total_singer = User::where('role','singer')->count();
        $total_company = User::where('role','company')->count();
         $tatal_competition = Competition::where('status',1)->count();
        return view('musicworld.landingpages.ui_page',[
            'total_singer' => $total_singer,
            'total_companies' =>$total_company,
            'tottal_competition' => $tatal_competition,
        ]);
    }
}
