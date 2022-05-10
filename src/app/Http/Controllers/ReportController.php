<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request, Report $report)
    {
        $report->fill($request->all());
        $report->user_id = $request->user()->id;
        $report->save();
        return redirect()->route('home');
    }
}
