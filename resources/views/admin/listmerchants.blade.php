@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Manage Merchants</div>
				<?php echo Session::get('message'); ?>
				<div class="panel-body"><div class="table-responsive">
					<table class="table">
					<tr>
					<th>name</th>
					<th>email</th>
					<th>website</th>
					<th>company</th>
					<th>country</th>
					<th>mobile</th>
					<th>status</th>
					</tr>
					<?php
				foreach($users as $user){
				if($user->hasRole('admin'))
				continue;	
				?>
				<tr>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->userswebsiteinfo->host; ?></td>
				<td><?php echo $user->userswebsiteinfo->company; ?></td>
				<td><?php echo $user->userswebsiteinfo->country; ?></td>
				<td><?php echo $user->userswebsiteinfo->mobile; ?></td>
				<td><?php if($user->userswebsiteinfo->status){ 
				echo "activated";
				}else{
				echo "not activated";
?><a href="<?php echo url('/admin/manageroles/activate/'.$user->id); ?>">Activate</a><?php


}?></td>
				</tr>
				<?php }
        			 ?></table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
