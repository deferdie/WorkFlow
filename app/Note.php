<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	/**
	 * Fillable values
	 * @var Fillable arra
	 */
	protected $fillable = ['job_id', 'client_id', 'note', 'created_by'];

	public static function createNote($jobID, $client_id, $note, $userID)
	{
	    return \App\Note::create([
	        'job_id' => $jobID,

	        'client_id' => $client_id,

	        'note' => $note,

	        'created_by' => $userID
	    ]);
	}
}
