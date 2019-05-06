@extends('layouts.body')

@section('content')

	<div class="row page-header">
		<div class="col">
			<h3 class="">Ticket #{{ $ticket->id }}</h3>
		</div>
		<div class="col text-right">

			@if($ticket->status === 0) 
				<div class="dot bg-primary"></div><span>New Ticket</span>
			@elseif($ticket->status === 1)
				<div class="dot bg-warning"></div><span>In Progress</span>
			@elseif($ticket->status === 2)
				<div class="dot bg-danger"></div><span>Ticket Past Due</span>
			@elseif($ticket->status === 3)
				<div class="dot bg-success"></div><span>Completed</span>
			@else	
				<span>There was an error showing the status</span>
			@endif

		</div>
		<div class="col-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Tickets</a></li>
					<li class="breadcrumb-item active" aria-current="page">Ticket #{{ $ticket->id }}</li>
				</ol>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<h3>{{ $ticket->subject }}</h3>
		</div>
		
		<div class="col-sm-12">
			<span class="ticket-details"><i>Submitted by: {{ $ticket->name }} </i></span> <br>
			<span class="ticket-details"><i>{{ $ticket->created_at->format('Y-m-d') }}</i></span> 
		</div>
	</div>

	<div class="row my-5">
		<div class="col">
			{{ $ticket->subject }}
		</div>
	</div>

@endsection
