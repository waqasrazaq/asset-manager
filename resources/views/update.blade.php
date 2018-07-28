@include('inc.header')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" method="post" action="{{ url('/edit', array($assets->id)) }}">
				{{csrf_field()}}
				<fieldset>
					<legend>Update Asset</legend>

					@if( count($errors)>0 )
						@foreach($errors->all() as $error) 
						<div class="alert alert-danger">
							{{$error}}
						</div>
						@endforeach
					@endif

					<div class="form-group">
						<label for="label" class="col-lg-2 control-label">Label</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="label" id="label" value="<?php  echo $assets->label; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="description" class="col-lg-2 control-label">Description</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" name="description" id="description"><?php  echo $assets->description; ?></textarea>
							<span class="help-block"></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="type" class="col-lg-2 control-label">Type</label>
						<div class="col-lg-10">
							<select class="form-control" id="type" name="type" >
								<option></option>
								<option>Mobile</option>
								<option>Laptop</option>
								<option>Desktop</option>
								<option>LCD</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="status" class="col-lg-2 control-label">Status</label>
						<div class="col-lg-10">
							<select class="form-control" id="status" name="status" >
								<option></option>
								<option>Available</option>
								<option>In-use</option>
								<option>Lost</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="owner" class="col-lg-2 control-label">Owner</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="owner" id="owner" value="<?php  echo $assets->owner; ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>	
</div>
@include('inc.footer')