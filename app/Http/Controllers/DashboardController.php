<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
         $idea = new idea([
            'content'=>'Test',
        ]);

        $idea->save();
        dump(Idea::all());

        return view('Dashboard', [
            'ideas' => Idea::all()
        ]);

    }
}
