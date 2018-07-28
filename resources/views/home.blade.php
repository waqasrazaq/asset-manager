@include('inc.header')
<div class="container">
	<div class="row">
		<legend>All Assets</legend>
		
		<div class="row">
			<div class="col-md-6 col-lg-6">
				@if(session('info'))
				<div class="alert alert-success">
					{{session('info')}}
				</div>
				@endif
			</div>
		</div>
		
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>Label</th>
					<th>Type</th>
					<th>Status</th>
					<th>Owner</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				
				@if(count($assets) > 0) 
					@foreach($assets->all() as $asset) 
					<tr>
						<td>{{$asset->label}}</td>
						<td>{{$asset->type}}</td>
						<td>{{$asset->status}}</td>
						<td>{{$asset->owner}}</td>
						<td>
							<a href="{{ url('') }}" class="label label-primary">Read</a> |
							<a href="{{ url('') }}" class="label label-success">Update</a> |
							<a href="{{ url('') }}" class="label label-danger">Delete</a>
						</td>
					</tr>
					@endforeach
				@endif		
			</tbody>
		</table>
		
	</div>
</div>
@include('inc.footer')