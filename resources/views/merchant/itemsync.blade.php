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
{!! Form::open(array('url' => '/merchant/sync', 'class' => 'form-inline', 'role' => 'form', 'id' => 'form-overview' )) !!}
    <!-- different inputs ... -->
        {!! Form::submit('Item sync', array('class' => 'btn btn-lg btn-success')) !!}
    {!! Form::close() !!}

    <div id="progress"></div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-overview').on('submit', function() {
            setInterval(function(){
                $.getJSON('http://localhost/magelaravel/public/index.php/progress', function(data) {
                    $('#progress').html(data[0]);
                });
            }, 10000);

            $.post(
                $(this).prop('action'),
                {"_token": $(this).find('input[name=_token]').val()},
                function() {
                   $('#progress').html("succesjjs..");// window.location.href = 'success';
                },
                'json'
            );

            return false;
        });
    });
</script>   
</div>
@endsection
