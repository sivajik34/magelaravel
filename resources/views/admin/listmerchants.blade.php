@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Manage Merchants<span style="float:right;color:green;"><?php echo Session::get('message'); ?></span></div>
				
				<div class="panel-body"><div class="table-responsive">
					<table class="table table-bordered table-hover">
					<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Website</th>
					<th>Company</th>
					<th>Country</th>
					<th>Mobile</th>
					<th>Status</th>
					<th>Action</th>
					</tr>
					<?php
				foreach($users as $user){
				if($user->hasRole('admin') || $user->hasRole('customer'))
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
				echo "Activated";
				}else{				
?><a href="<?php echo url('/admin/manageroles/activate/'.$user->id); ?>">Activate</a><?php


}?></td><td><?php if($user->userswebsiteinfo->status){ ?>
				<a href="<?php echo url('/admin/manageitems/merchantitems/'.$user->id); ?>">Manage Items</a><br/>
				<a href="<?php echo url('/admin/itemsync/'.$user->id); ?>">Item Sync</a>
				<?php } ?></td>
				</tr>
				<?php }
        			 ?></table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
