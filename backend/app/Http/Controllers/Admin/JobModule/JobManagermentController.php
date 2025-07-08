<?php

namespace App\Http\Controllers\Admin\JobModule;
use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobManagermentController extends Controller
{
    public function index()
    {
        return response()->json(Job::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $job = Job::create($request->all());

        return response()->json($job, 201);
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return response()->json($job);
    }

    public function destroy($id)
    {
        Job::findOrFail($id)->delete();
        return response()->json(['message' => 'Đã xóa']);
    }
}
