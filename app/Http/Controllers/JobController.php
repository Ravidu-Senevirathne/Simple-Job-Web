<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->get()->groupBy('featured');
        return view("jobs.index",[
            
            'jobs' => $jobs[1],
            'featuredJobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => ['required'],
        'salary' => ['required'],
        'location' => ['required'],
        'schedule' => ['required', Rule::in(['full-time', 'part-time'])],
        'url' => ['required','active_url'],
        'tags' => ['required'],
    ]);

    // Gather all input data except 'tags'
    $attributes = $request->only(['title', 'salary', 'location', 'schedule', 'url']);
    
    // Set featured status
    $attributes['featured'] = $request->has('featured');

    // Create job with validated attributes
    $job = Auth::user()->employer->jobs()->create($attributes);

    // If there are tags, assign them
    if ($request->has('tags')) {
        foreach (explode(',', $request->tags) as $tag) {
            $job->tag($tag);
        }
    }

    return redirect('/');
}
    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
