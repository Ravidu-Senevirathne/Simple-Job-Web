<?php

use App\Models\Employer;
use App\Models\Job;

use Illuminate\Foundation\Testing\RefreshDatabase;

it("belongs to an Employer", function () {
    $this->artisan('migrate');

    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
})->uses(RefreshDatabase::class);
