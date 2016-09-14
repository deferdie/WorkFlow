@extends('layouts.app')

@section('content')

    <div class="panel-heading">
    	Create Job
    </div>

    <div class="panel-body">
        <form action="/job" method="post" class="form">
        	<div class="row">
	        	<div class="col-md-12">
	        		<div class="form-group">
		        		<label for="job-title">Job Title</label>
		        		<input id="job-title" type="text" class="form-control" name="job_title" placeholder="New Website build / Update to Website" autofocus required />
		        	</div>
	        	</div>
        	</div>

        	<div class="row">
	        	<div class="col-md-4">
		        	<div class="form-group">
		        		<label for="client">Select Client</label>
		        		<select id="client" type="date" class="form-control" name="client" autofocus required>
							<option value="select">Please Select</option>
		        		</select>
		        	</div>
		        </div>
	       
		        <div class="col-md-4">
		        	<div class="form-group">
		        		<label for="start-date">Start Date</label>
		        		<input id="start-date" type="date" class="form-control" name="start_date" autofocus required />
		        	</div>
		        </div>

		        <div class="col-md-4">
		        	<div class="form-group">
		        		<label for="due-date">Due Date</label>
		        		<input id="due-date" type="date" class="form-control" name="due_date" autofocus required />
		        	</div>
		        </div>   
	        </div>

	        <div class="row">
		        <div class="col-md-4">
		        	<div class="form-group">
		        		<label for="job-type">Job Type</label>
		        		<select id="job-type" type="date" class="form-control" name="job_type" autofocus required>
							<option selected>Please Select</option>
							<option>New</option>
							<option>Update</option>
		        		</select>
		        	</div>
		        </div>
	        </div>

	        <div class="row workers">
				<div class="col-md-6">
					<h4>Please select your team</h4>
					
				</div>
				<div class="col-md-6">
					
				</div>
	        </div>

        </form>
    </div>
      
@endsection
