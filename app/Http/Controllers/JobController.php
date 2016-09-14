<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Job;

class JobController extends Controller
{

    /**
     * Instance of the Job Model
     * @var Object
     */
    private $Job;

    /**
     * Instance of the Job Model
     * @var Object
     */
    private $UserID;

    public function __construct(Job $job)
    {
        $this->Job = $job;

        $this->User = \Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = $this->Job->all();

        return view('job.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = $this->Job->create([
            'client_id' => $request->input('client_id'),

            'job_title' => $request->input('job_title'),

            'start_date' => $request->input('start_date'),

            'due_date' => $request->input('due_date'),

            'job_price' => $request->input('job_price'),

            'created_by' => $this->User->id,

            'company_id' => $this->User->company_id,
        ]);

        if ($request->input('note') != '')
        {
            \App\Note::createNote($job->id, $request->input('client_id'), $request->input('note'), $this->User->id);
        }

        if ($request->input('workers') != '')
        {
            \App\Worker::addWorkers($job->id, $request->input('workers'));
        }

        return redirect('/job/'.$job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('job.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('job.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
