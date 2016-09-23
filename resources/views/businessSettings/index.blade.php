@extends('layouts.app')

@section('content')

    <div class="panel-heading">
    	Your Business Settings
    </div>

    <div class="panel-body">
        <div class="row">
			<div class="col-md-4">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="">
						<a href="#default" aria-controls="default" role="tab" data-toggle="tab" aria-expanded="false">
							Default Settings
						</a>
					</li>
					<li role="presentation" class="">
						<a href="#departments" aria-controls="departments" role="tab" data-toggle="tab" aria-expanded="false">
							Departments
						</a>
					</li>
				</ul>
			</div>
	
			<div class="col-md-8">
				<div class="tab-content">

		    		<div role="tabpanel" class="tab-pane" id="default">
		    			<h2>
		    				Business Settings
		    			</h2>
		    			<ul class="list-group">
						  	<li class="list-group-item">
						    	Old Spot Sausage &amp; Free Range Egg Brioche
						  	</li>
						</ul>
		    		</div>

		    		<div role="tabpanel" class="tab-pane" id="departments">
		    			<h2>
		    				Business Departments
		    			</h2>
		    			<form action="/business-settings/departments/create" method="post">
		    				<div class="form-group">
		    					<label for="department-input">
		    						Department Name
		    					</label>
		    					<input type="text" name="department" id="department-input" placeholder="Sales, Design, Marketing" class="form-control" />
		    				</div>
		    			</form>
		    			<ul class="list-group">
						  	<li class="list-group-item">
						    	Old Spot Sausage &amp; Free Range Egg Brioche
						  	</li>
						</ul>
		    		</div>
		  		</div>
			</div>
		</div>
    </div>
      
@endsection
