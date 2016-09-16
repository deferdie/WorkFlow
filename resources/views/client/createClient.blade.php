@extends('layouts.app')

@section('content')

    <div class="panel-heading">
    	Create Client
    </div>

    <div class="panel-body">
        <form action="/client/create" method="post" class="form">
        	<div class="row">
	        	<div class="col-md-12">
	        		<div class="form-group">
		        		<label for="client-business-name">Client Business Name</label>
		        		<input id="client-business-name" type="text" class="form-control" name="client_business_name" placeholder="Enter the client business name" autofocus required />
		        	</div>
	        	</div>
        	</div>

        	<div class="row">
	        	<div class="col-md-4">
		        	<div class="form-group">
		        		<label for="client-contact-name">Client Contact Name</label>
		        		<input id="client-contact-name" type="text" class="form-control" name="client_contact_name" autofocus required />
		        	</div>
		        </div>

		        <div class="col-md-4">
		        	<div class="form-group">
		        		<label for="client-contact-email">Client Contact Email</label>
		        		<input id="client-contact-email" type="text" class="form-control" name="client_contact_email" autofocus required />
		        	</div>
		        </div>

		        <div class="col-md-4">
		        	<div class="form-group">
		        		<label for="client-contact-number">Client Contact Number</label>
		        		<input id="client-contact-number" type="text" class="form-control" name="client_contact_number" autofocus required />
		        	</div>
		        </div>
	        </div>

        </form>
    </div>
      
@endsection
