<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Field;
use App\Models\Crop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // $stats = [
        //     'total_farms' => $user->isAdmin() ? Farm::count() : $user->farms()->count(),
        //     'total_fields' => $user->isAdmin() ? Field::count() : Field::whereHas('farm', function($q) use ($user) {
        //         $q->where('owner_id', $user->id);
        //     })->count(),
        //     'active_crops' => $user->isAdmin() ? Crop::count() : Crop::whereHas('field.farm', function($q) use ($user) {
        //         $q->where('owner_id', $user->id);
        //     })->count(),
        //     'total_managers' => $user->isAdmin() ? User::where('role', 'manager')->count() : 0,
        // ];

        // $recentCrops = $user->isAdmin() 
        //     ? Crop::with('field')->latest()->take(5)->get()
        //     : Crop::whereHas('field.farm', function($q) use ($user) {
        //         $q->where('owner_id', $user->id);
        //     })->with('field')->latest()->take(5)->get();

        // return view('dashboard', compact('stats', 'recentCrops'));
        return view('dashboard.index');
    }
}
