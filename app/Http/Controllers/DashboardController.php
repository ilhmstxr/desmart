<?php

namespace App\Http\Controllers;

use App\Models\farms\Farm;
use App\Models\farms\Field;
use App\Models\farms\Crop;
use App\Models\Schedule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Container\Attributes\DB;
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


        $summary = [
            // DIPERBAIKI: Menjumlahkan 'area' dari tabel 'crops', bukan 'fields'
            'total_area' => Crop::sum('area'), // Asumsi 'area' dalam hektar, sesuaikan jika perlu
            'area_change' => 0.5,
            'total_livestock' => 124, // Ganti dengan query: Livestock::count()
            'livestock_change' => 12,
            // Menghitung total panen bulan ini dalam Ton - DIKOSONGKAN
            'total_harvest' => 0,
            'harvest_change' => 0,
            'total_revenue' => 24500000, // Ganti dengan logika kalkulasi penjualan
            'revenue_change' => -1200000,
        ];

        // 2. DATA PRAKIRAAN CUACA
       // dummy
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

        // 3. DATA GRAFIK HASIL PANEN (6 BULAN TERAKHIR) - DIKOSONGKAN SESUAI PERMINTAAN
        $harvestChartData = [
            'labels' => [],
            'datasets' => [
                [
                    'label' => 'Total Panen (ton)',
                    'data' => [],
                    'backgroundColor' => '#4ade80',
                    'borderRadius' => 4,
                ]
            ]
        ];

        // 4. DATA AKTIVITAS MENDATANG
        $upcomingSchedules = Schedule::with('assignedTo')
            ->where('scheduled_at', '>=', now())
            ->where('status', '!=', 'completed')
            ->orderBy('scheduled_at', 'asc')
            ->limit(3) // Mengambil 3 jadwal terdekat
            ->get();

        // 5. DATA STATUS PERLENGKAPAN (DUMMY)
// blom
        $suppliesStatus = collect([
            (object)['name' => 'Pupuk NPK', 'percentage' => 75],
            (object)['name' => 'Pakan Ternak', 'percentage' => 45],
            (object)['name' => 'Obat Hama', 'percentage' => 20],
        ]);

        // 6. DATA HARGA PASAR (DUMMY)
       // blom
        $marketPrices = collect([
            (object)['commodity_name' => 'Beras', 'price' => 12500, 'trend_percentage' => 2.4, 'trend_color' => 'text-green-500'],
            (object)['commodity_name' => 'Jagung', 'price' => 8200, 'trend_percentage' => -1.1, 'trend_color' => 'text-red-500'],
            (object)['commodity_name' => 'Tomat', 'price' => 15000, 'trend_percentage' => 0, 'trend_color' => 'text-gray-500'],
        ]);

        // Mengirim semua data yang sudah disiapkan ke view
        return view('dashboard.index', compact(
            'summary',
            'weather',
            'harvestChartData',
            'upcomingSchedules',
            'suppliesStatus',
            'marketPrices'
        ));
    }
    // return view('dashboard.index');

}
