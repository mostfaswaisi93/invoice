<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->first();
        // $settings = Setting::OrderBy('sorting_number')->get();
        return view('admin.settings.index')->with('settings', $settings);
    }
}
