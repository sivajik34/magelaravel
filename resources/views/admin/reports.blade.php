@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Reports<span style="float:right;color:green;"><?php echo Session::get('message'); ?></span></div>
				<?php $renamed_host=str_replace("/index.php","",url());?>
				<div class="panel-body">
{!! Form::open(array('url' => '/admin/reports', 'class' => 'form' ,'method' => 'get')) !!}
{!! Form::Label('start_date','Start Date:') !!}
{!! Form::text('start_date', '', array('id' => 'startdatepicker'))!!}
{!! Form::Label('end_date','End Date:') !!}
{!! Form::text('end_date', '', array('id' => 'enddatepicker'))!!}
{!! Form::submit('Show Report', array('class' => 'btn btn-lg btn-success')) !!}
{!! Form::close() !!}
<?php // echo "<pre>";print_r($analyticsData); ?><div class="table-responsive">
					<table class="table table-bordered table-hover">
					<tr><th>Merchant</th>
					<th>Url</th>
					<th>Clicks</th>					
					</tr>
					<?php
				if($analyticsData->rows){
				foreach($analyticsData->rows as $user){
?>
				<tr><td><?php echo $user[0]; ?></td>
				<td><?php echo $user[1]; ?></td>
				<td><?php echo $user[2]; ?></td></tr>
				<?php }}
        			 ?></table>
				</div>	
			</div>
		</div>
	</div>

</div>
@endsection
