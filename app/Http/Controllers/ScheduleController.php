<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Field;
use App\Models\Crop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $query = Schedule::with(['field', 'crop', 'assignedTo', 'createdBy']);
        
        if (!$user->isAdmin()) {
            $query->where(function($q) use ($user) {
                $q->where('assigned_to', $user->id)
                  ->orWhere('created_by', $user->id);
            });
        }
        
        $schedules = $query->orderBy('scheduled_at')->paginate(15);
        $upcomingCount = Schedule::upcoming()->count();
        $overdueCount = Schedule::overdue()->count();
        
        return view('schedules.index', compact('schedules', 'upcomingCount', 'overdueCount'));
    }

    public function create()
    {
        $fields = Field::all();
        $crops = Crop::all();
        $users = User::where('is_active', true)->get();
        
        return view('schedules.create', compact('fields', 'crops', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:planting,irrigation,fertilizing,harvesting,maintenance,inspection',
            'scheduled_at' => 'required|date|after:now',
            'priority' => 'required|in:low,medium,high,urgent',
            'field_id' => 'nullable|exists:fields,id',
            'crop_id' => 'nullable|exists:crops,id',
            'assigned_to' => 'nullable|exists:users,id',
        ]);

        Schedule::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'scheduled_at' => $request->scheduled_at,
            'priority' => $request->priority,
            'field_id' => $request->field_id,
            'crop_id' => $request->crop_id,
            'assigned_to' => $request->assigned_to,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully!');
    }

    public function show(Schedule $schedule)
    {
        $schedule->load(['field', 'crop', 'assignedTo', 'createdBy']);
        return view('schedules.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        $fields = Field::all();
        $crops = Crop::all();
        $users = User::where('is_active', true)->get();
        
        return view('schedules.edit', compact('schedule', 'fields', 'crops', 'users'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:planting,irrigation,fertilizing,harvesting,maintenance,inspection',
            'scheduled_at' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed,cancelled',
            'priority' => 'required|in:low,medium,high,urgent',
            'field_id' => 'nullable|exists:fields,id',
            'crop_id' => 'nullable|exists:crops,id',
            'assigned_to' => 'nullable|exists:users,id',
        ]);

        $updateData = $request->only([
            'title', 'description', 'type', 'scheduled_at', 
            'status', 'priority', 'field_id', 'crop_id', 'assigned_to'
        ]);

        if ($request->status === 'completed' && !$schedule->completed_at) {
            $updateData['completed_at'] = now();
        }

        $schedule->update($updateData);

        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully!');
    }
}
