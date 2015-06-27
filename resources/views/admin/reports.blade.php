@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Reports<span style="float:right;color:green;"><?php echo Session::get('message'); ?></span></div>
				<?php $renamed_host=str_replace("/index.php","",url());?>
				<div class="panel-body">
<?php //echo "<pre>";print_r($analyticsData->rows); ?><div class="table-responsive">
					<table class="table table-bordered table-hover">
					<tr>
					<th>Url</th>
					<th>Clicks</th>					
					</tr>
					<?php
				foreach($analyticsData->rows as $user){
?>
				<tr>
				<td><?php echo $user[0]; ?></td>
				<td><?php echo $user[1]; ?></td></tr>
				<?php }
        			 ?></table>
				</div>	
			</div>
		</div>
	</div>

</div>
@endsection
