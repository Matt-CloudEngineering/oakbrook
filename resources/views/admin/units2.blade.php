<form class="form-horizontal" role="form" method="POST" action="{{ url('/units') }}">

<?php

echo Form::label('building');

echo Form::text('building');

echo Form::label('unit');

echo Form::text('unit');

echo Form::label('unit');

echo Form::select('apartment', array(1 => '1 Bedroom', 2 => '2 Bedroom 1 Bath', 3 => '2 Bedroom 2 Bath','2 Bedroom 2 Bath w/ storage',2));

echo Form::label('unit');

echo Form::date('name', \Carbon\Carbon::now());

echo Form::label('description');

echo Form::text('description');

echo Form::label('special');

echo Form::text('special');

?>
</form>



