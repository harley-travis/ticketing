@include('layouts.header')

<div class="container">

	<h2>Submit a ticket</h2>

	<form action="{{ route('submit.ticket') }}" method="post" enctype="multipart/form-data">

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="name">Name</label>
				<input type="text" class="form-control form-control-lg" placeholder="name">
			</div>
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="email" class="form-control form-control-lg" placeholder="email">
			</div>
		</div>

		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" class="form-control form-control-lg" placeholder="subject">
		</div>

		<div class="form-group">
			<label for="message">Message</label>
			<textarea class="form-control" id="message " rows="7"></textarea>
		</div>

		<div class="form-group">
			<label for="attachment">Upload Screenshot</label>
			<input type="file" class="form-control-file" id="attachment">
		</div>

		<input type="hidden" name="company_id" value="{{ $company->id }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<footer class="text-right">
		<small>Powered by <a href="http://whitejuly.com" target="_blank"><b>White July</b></a></small>
	</footer>

</div>

@include('layouts.footer')