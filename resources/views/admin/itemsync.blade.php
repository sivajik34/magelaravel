@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Manage Item Sync</div>
				<div class="panel-body">
{!! Form::open(array('url' => '/admin/itemresync', 'class' => 'form-inline', 'role' => 'form', 'id' => 'form-overview1' )) !!}
<div class="table-responsive">
					<table class="table">
    <tr><td>{!! Form::Label('sku','Existed Item re Sync:') !!}
{!!Form::select('sku', $data[1],null,['class' => 'form-control']) !!}{!! Form::hidden('user_id', $data[0]) !!}</td><td>
        {!! Form::submit('Item resync', array('class' => 'btn btn-lg btn-success')) !!}</td></tr>
    {!! Form::close() !!}					
{!! Form::open(array('url' => '/admin/sync', 'class' => 'form-inline', 'role' => 'form', 'id' => 'form-overview' )) !!}
   <tr><td> {!! Form::Label('sync_type','Item Sync Type:') !!}
{!!Form::select('sync_type', array(
    ''=>'Select Sync Type',
    '1'=>'Override Existing Data',
    '2'=>'Append Data'
    ),null,['class' => 'form-control']) !!}{!! Form::hidden('user_id', $data[0]) !!}</td><td>
        {!! Form::submit('Item sync', array('class' => 'btn btn-lg btn-success')) !!}</td></tr>
    {!! Form::close() !!}</table><br/>

    <div id="progress"></div>
    <div id="progress1"></div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-overview').on('submit', function() {
            var interval=setInterval(function(){
                $.getJSON('<?php echo url();?>/progress', function(data) {
		if(data[0]=="completed" || data[0]=="failed") clearInterval(interval);
                    $('#progress').html("Present Status:"+data[0]);
                });
            }, 2000);

            $.post(
                $(this).prop('action'),
                {"_token": $(this).find('input[name=_token]').val(),"sync_type": $('#sync_type').val(),"user_id":$(this).find('input[name=user_id]').val()},
                function(data,status) {
                   $('#progress1').html(data['syncstatus']);// window.location.href = 'success';
                },
                'json'
            );

            return false;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-overview1').on('submit', function() {
            var interval=setInterval(function(){
                $.getJSON('<?php echo url();?>/progress', function(data) {
		if(data[0]=="completed" || data[0]=="failed") clearInterval(interval);
                    $('#progress').html("Present Status:"+data[0]);
                });
            }, 2000);

            $.post(
                $(this).prop('action'),
                {"_token": $(this).find('input[name=_token]').val(),"sku": $('#sku').val(),"user_id":$(this).find('input[name=user_id]').val()},
                function(data,status) {
                   $('#progress1').html(data['syncstatus']);// window.location.href = 'success';
                },
                'json'
            );

            return false;
        });
    });
</script>   
</div>
@endsection
