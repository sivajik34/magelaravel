@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Manage Item Sync</div>
				<div class="panel-body">
					<table class="table-responsive">
					<tr><th>Sync Type</th><th>Action</th></tr>
					<tr><td>fresh sync</td><td><a href="{{ url('/merchant/sync') }}" target="_blank">Item sync</a></td></tr><tr><td>Append sync</td><td><a href="{{ url('/merchant/appendsync') }}" target="_blank">Append sync</a></td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
