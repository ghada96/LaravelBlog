@extends('layouts.app')

@section('content')
<div class="container">
	<table class= "table table-striped table-dark">
		<tr class= "table-dark">
			<td> Title</td>
		</tr>
		@foreach($articles as $art)
		<tr>
			<td>
				<a href="{{"/read/".$art->id}}">{{$art->title}}</a>
			</td>
		</tr>
		@endforeach
	</table>
	
	<a href="add"> add your article</a>

    <input type="submit"  value= "add your article" class="btn btn-primary"/>
</div>
@endsection