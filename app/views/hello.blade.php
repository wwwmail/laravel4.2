@extends ('layout.main')

@section ('header')
@parent
@include('partial/part');
<ul>
@foreach($elements as $element)
<li>{{$element}}</li>
@endforeach
</ul>

@stop

@section ('content')title
<h1>

{{$title or "My test title"}}
@if(isset($title))
{{$title}}
@else
My test
@endif
</h1>
<form action="{{URL::route('form')}}" method="post">
<input type="text" name="test">
<input type="submit" value="ok">
</form>

@stop
