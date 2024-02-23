<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activityLogs = Activity::latest()->paginate(10);
        return view('admin.activity_logs.index', compact('activityLogs'));
    }
}
