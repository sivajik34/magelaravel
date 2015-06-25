@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Manage Items<span style="float:right;color:green;"><?php echo Session::get('message'); ?></span></div>
				<?php $renamed_host=str_replace("/index.php","",url());?>
				<div class="panel-body"><div class="table-responsive">
					<table class="table table-bordered table-hover">
					<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Sku</th>
					<th>Price</th>
					<th>Publish</th>					
					</tr>
					<?php
				foreach($items as $item){
				?>
				<tr>
				<td><img src="<?php echo $renamed_host.$item->thumbnail_image; ?>" alt="<?php echo $item->name; ?>"/></td>
				<td><?php echo $item->name; ?></td>
				<td><?php echo $item->sku ?></td>
				<td><?php echo $item->price; ?></td>
				<td>
				<?php
					switch($item->publish)
					{
						case 1:
						echo "New";                                              
						break;
						case 2 :
						echo "Pending";
 ?>			<br/><a href="<?php echo url('/admin/manageitems/publishyes/'.$item->id); ?>">Accept</a><br/>
                                                <a href="<?php echo url('/admin/manageitems/publishno/'.$item->id); ?>">Reject</a><?php
						break;
						case 3:
						echo "Accepted";
						break;
						case 4 :
						echo "Rejected";
						break;
						case 5 :
						echo "Published";
						break;
					        case 6 :
						echo "Unpublished";
						break;
					}
					?></td>
				</tr>
				<?php }
        			 ?></table><?php //echo $items->render(); ?>{!! str_replace('/?', '?', $items->render()) !!}
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
