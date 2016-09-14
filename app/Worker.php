<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    /**
	 * Fillable values
	 * @var Fillable arra
	 */
	protected $fillable = ['job_id', 'client_id', 'note', 'created_by'];

	public static function createNote($jobID, $workers)
	{
	    foreach ($workers as $worker)
	    {
			$worker = new \App\Worker();

			$worker->jobID = $jobID;

			$worker->employee_id = $worker;

			$worker->save();
	    }

	}
}
