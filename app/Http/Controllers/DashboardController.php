<?php

namespace App\Http\Controllers;

use App\Models\farms\Farm;
use App\Models\farms\Field;
use App\Models\farms\Crop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function index()
    {
        $user = Auth::user();
        $m_user = User::find($user->id);

        $stats = [
            'total_farms' => $m_user->isAdmin() ? Farm::count() : $m_user->farms()->count(),
            'total_fields' => $m_user->isAdmin() ? Field::count() : Field::whereHas('farm', function ($q) use ($user) {
                $q->where('owner_id', $user->id);
            })->count(),
            'active_crops' => $m_user->isAdmin() ? Crop::count() : Crop::whereHas('field.farm', function ($q) use ($m_user) {
                $q->where('owner_id', $m_user->id);
            })->count(),
            'total_managers' => $m_user->isAdmin() ? User
            ::where('role', 'manager')->count() : 0,
        ];

        $recentCrops = $m_user->isAdmin()
            ? Crop::with('field')->latest()->take(5)->get()
            : Crop::whereHas('field.farm', function ($q) use ($user) {
                $q->where('owner_id', $user->id);
            })->with('field')->latest()->take(5)->get();

        return view('dashboard.index', compact('stats', 'recentCrops'));
        // return view('dashboard.index');
    }
}
