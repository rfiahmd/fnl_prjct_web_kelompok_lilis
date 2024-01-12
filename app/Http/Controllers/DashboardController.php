<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ptit;
use App\Models\Guru;
use App\Models\Sd;
use App\Models\Smp;
use App\Models\Sma;

class DashboardController extends Controller
{
    public function totalptit(){
        $totalptit = Ptit::count();
        $totalguru = Guru::count();
        $totalsd = Sd::count();
        $totalsmp = Smp::count();
        $totalsma = Sma::count();
        return view('dashboard', ["totalptit" => $totalptit, 'title' => 'Dashboard', "totalguru" => $totalguru, "totalsd" => $totalsd, "totalsmp" => $totalsmp, "totalsma" => $totalsma]);
    }
}
