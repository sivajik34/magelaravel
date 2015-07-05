@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Manage Customers</div>
				<?php echo Session::get('message'); ?>
				<div class="panel-body"><div class="table-responsive">
					<table class="table table-bordered table-hover">
					<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
					</tr>
					<?php
				foreach($users as $user){
				if($user->hasRole('customer'))
				{	
				?>
				<tr>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->email; ?></td>				
				<?php } ?></td>
				</tr>
				<?php }  ?></table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
