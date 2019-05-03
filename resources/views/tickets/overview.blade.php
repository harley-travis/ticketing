@extends('layouts.body')

@section('content')

	<table class="table table-borderless table-hover">
		<thead>
			<tr>
				<th scope="col">Ticket ID</th>
				<th scope="col">Status</th>
				<th scope="col">Submitted By</th>
				<th scope="col">Subject</th>
				<th scope="col">Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tickets as $ticket)
			<tr>
				<th scope="row">{{ $ticket->id }}</th>
				<td>{{ $ticket->status }}</td>
				<td>{{ $ticket->name }}</td>
				<td><a href="{{ route('tickets.view', ['id' => $ticket->id ]) }}" class="">{{ $ticket->subject }}</a></td>
				<td>{{ $ticket->created_at->format('Y-m-d') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>	


	<div class="pagination-wrapper">
		{!! $tickets->links() !!}
	</div>

@endsection
