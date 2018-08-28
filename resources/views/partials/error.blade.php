@if (count($errors))
	<div class="form-group">
		<div class="alert danger-alert">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $errors}}</li>
			</ul>
		</div>
	</div>
@endif