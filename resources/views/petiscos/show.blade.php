@extends('templates.template2')

@section('titile')
	{{$pestiscos->id}}
@endsection

@section('card')


			<form method="DELETE" action="{{route('petiscos.destroy', ['id' => $pestiscos->id])}}">
			{{ csrf_field() }}
			
			<button type="submit">Arrocha</button>
			</form>

				<div class="card-header">	
					{{$petiscos->titulo}}
				</div>
				<div class="card-body">
					{{$petiscos->description}}					
				</div>
			</div>
@endsection