@extends('layouts.admin')

@section('content')

<h1>Maps</h1>

@if(Auth::check())
	<p><a href="/admin/maps/create">Sync with Amazon</a> <i class="fa fa-refresh"></i></p>
@endif


<dl class="sub-nav">
	<dt>Filter:</dt>
	<dd class="{{ (!Input::has('type') ? 'active' : '') }}"><a href="/admin/maps">All</a></dd>
	@foreach($map_types as $type)
	<dd class="{{ (Input::get('type') == $type->type ? 'active' : '') }}"><a href="/admin/maps?type={{ $type->type }}">{{ $type->name }}</a></dd>
	@endforeach
	<!-- <dd class="{{ (Input::get('type') == 'new' ? 'active' : '') }}"><a href="/admin/maps?type=new">New</a></dd> -->
</dl>

@if(count($maps) > 0)
<table id="maps-list">
	<thead>
		<tr>
			<td>Type</td>
			<td>Name</td>
			<td>Size (MB)</td>
			<td>Added</td>
		</tr>
	</thead>
	<tbody>
		@foreach($maps as $map)
		<tr>
			<td>{{ $map->maptype->type }}</td>
			<td><a href="/admin/maps/{{ $map->id }}/edit"><?php if($map->name !== ''){ echo $map->name; } else { echo $map->filename; } ?></a></td>
			<td>{{ round(($map->filesize/1048576), 2) }}</td>
			<td>{{ $map->created_at->diffForHumans() }}</td>
		</tr>
		@endforeach
	</tbody>
	
</table>
@else
<p>No maps available.</p>
@endif

@stop

@section('footer')

<style type="text/css">
	
	.dataTables_length, .dataTables_info {
		display: none;
	}
	
	.dataTables_filter {
		float: left;
		text-align: left;
	}

</style>

<script type="text/javascript">
	
	$('#maps-list').dataTable({
		'bPaginate': false
	});
</script>

@stop