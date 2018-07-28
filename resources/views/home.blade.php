@include('inc.header')
<div class="container">
	<div class="row">
		<legend>All Assests</legend>
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
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<a href="{{ url('') }}" class="label label-primary">Read</a> |
						<a href="{{ url('') }}" class="label label-success">Update</a> |
						<a href="{{ url('') }}" class="label label-danger">Delete</a>
					</td>
				</tr>
					
			</tbody>
		</table> 

	</div>
</div>
@include('inc.footer')