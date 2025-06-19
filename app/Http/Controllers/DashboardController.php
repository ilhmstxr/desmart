<?php

namespace App\Http\Controllers;

use App\Models\farms\Farm;
use App\Models\farms\Field;
use App\Models\farms\Crop;
use App\Models\Schedule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function index()
    {
        // $user = Auth::user();
        // $m_user = User::find($user->id);

        // $stats = [
        //     'total_farms' => $m_user->isAdmin() ? Farm::count() : $m_user->farms()->count(),
        //     'total_fields' => $m_user->isAdmin() ? Field::count() : Field::whereHas('farm', function ($q) use ($user) {
        //         $q->where('owner_id', $user->id);
        //     })->count(),
        //     'active_crops' => $m_user->isAdmin() ? Crop::count() : Crop::whereHas('field.farm', function ($q) use ($m_user) {
        //         $q->where('owner_id', $m_user->id);
        //     })->count(),
        //     'total_managers' => $m_user->isAdmin() ? User
        //     ::where('role', 'manager')->count() : 0,
        // ];

        // $recentCrops = $m_user->isAdmin()
        //     ? Crop::with('field')->latest()->take(5)->get()
        //     : Crop::whereHas('field.farm', function ($q) use ($user) {
        //         $q->where('owner_id', $user->id);
        //     })->with('field')->latest()->take(5)->get();

        // return view('dashboard.index', compact('stats', 'recentCrops'));



        $userFarms = Farm::where('owner_id', Auth::id())->get();

        // 2. Jika pengguna tidak punya farm, bisa arahkan ke view khusus
        // if ($userFarms->isEmpty()) {

        // }

        // 3. Menyiapkan data untuk Pie Chart dari farm milik pengguna
        // Ini akan mengambil nama dan total area dari koleksi farm yang sudah didapat
        $farmsData = $userFarms->where('total_area', '>', 0)->map(function ($farm) {
            return [
                'name' => $farm->name,
                'total_area' => $farm->total_area,
            ];
        });

        // 4. Menyiapkan data summary untuk card berdasarkan farm milik pengguna
        $totalFarms = $userFarms->count();
        $newFarmsThisMonth = $userFarms->where('created_at', '>=', Carbon::now()->startOfMonth())->count();

        // $tasks = Schedule::where('created_by', Auth::id())->get();
        

        // return $tasks;
        $taskCounts = Schedule::where('created_by', Auth::id())
            ->select('priority', DB::raw('count(*) as total'))
            ->groupBy('priority')
            ->pluck('total', 'priority')
            ->all();

        // return $taskCounts;

        // 2. Menyiapkan data untuk dikirim ke view
        // Menambahkan prioritas 'high' sesuai skema baru
        $taskPriorityData = [
            'urgent' => $taskCounts['urgent'] ?? 0,
            'high' => $taskCounts['high'] ?? 0,
            'medium' => $taskCounts['medium'] ?? 0,
            'low' => $taskCounts['low'] ?? 0,
        ];

        $totalTasks = array_sum($taskPriorityData);

        // return $taskPriorityData;
        // SCHEDULES
        $upcomingSchedules = Schedule::with('assignedTo')
            ->where('scheduled_at', '>=', now())
            ->where('status', '!=', 'completed')
            ->orderBy('scheduled_at', 'asc')
            ->limit(3)
            ->get();

        // 2. DATA PRAKIRAAN CUACA (DUMMY)
        $weather = [
            'location' => 'Kecamatan Sukorejo',
            'temperature' => 28,
            'condition' => 'Cerah Berawan',
            'forecast' => [
                ['day' => 'Selasa', 'temp' => 29],
                ['day' => 'Rabu', 'temp' => 30],
                ['day' => 'Kamis', 'temp' => 28],
                ['day' => 'Jumat', 'temp' => 27],
            ]
        ];



        // 6. DATA STATUS PERLENGKAPAN (DUMMY)
        $suppliesStatus = collect([
            (object)['name' => 'Pupuk NPK', 'percentage' => 75],
            (object)['name' => 'Pakan Ternak', 'percentage' => 45],
            (object)['name' => 'Obat Hama', 'percentage' => 20],
        ]);

        // 7. DATA HARGA PASAR (DUMMY)
        $marketPrices = collect([
            (object)['commodity_name' => 'Beras', 'price' => 12500, 'trend_percentage' => 2.4, 'trend_color' => 'text-green-500'],
            (object)['commodity_name' => 'Jagung', 'price' => 8200, 'trend_percentage' => -1.1, 'trend_color' => 'text-red-500'],
            (object)['commodity_name' => 'Tomat', 'price' => 15000, 'trend_percentage' => 0, 'trend_color' => 'text-gray-500'],
        ]);

        // return $farmsData;
        // return $totalFarms;
        // return $newFarmsThisMonth;

        $summary = [
            'total_tasks' => $totalTasks,
            'total_farms' => $totalFarms,
            'farm_change' => $newFarmsThisMonth,
            'crop_change' => 5, // Dummy data
            'total_livestock' => 124, // Dummy data
            'livestock_change' => 12, // Dummy data
            'total_harvest' => 0,
            'harvest_change' => 0,
            'total_revenue' => 24500000,
            'revenue_change' => -1200000,
        ];




        // Mengirim semua data yang sudah disiapkan ke view
        return view('dashboard.index', compact(
            'summary',
            'weather',
            'upcomingSchedules',
            'suppliesStatus',
            'marketPrices',
            'farmsData',
            'taskPriorityData'
        ));
    }
    // return view('dashboard.index');

}
