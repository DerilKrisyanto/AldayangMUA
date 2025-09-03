<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceType;
use App\Models\AdditionalType;

class PageController extends Controller
{
    public function home() {
        $services = ServiceType::where('statusenabled', true)->get();
        $additionals = AdditionalType::where('statusenabled', true)->get();

        return view('home', compact('services', 'additionals'));
    }
}
