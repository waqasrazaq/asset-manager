@include('inc.header')
<div class="container">
	<div class="row">
		<legend>{{ $assets->label }}</legend>
		<p>{{ $assets->description }}</p>
		<table>
			<tr>
				<th class="small text-muted pr-2" scope="row">Type</th>
				<td>{{ $assets->type }}</td>
			</tr>
			<tr>
				<th class="small text-muted pr-2" scope="row">Status</th>
				<td>{{ $assets->status }}</td>
			</tr>
			<tr>
				<th class="small text-muted pr-2" scope="row">Owner</th>
				<td>{{ $assets->owner }}</td>
			</tr>
		</table>
	</div>
</div>
@include('inc.footer')