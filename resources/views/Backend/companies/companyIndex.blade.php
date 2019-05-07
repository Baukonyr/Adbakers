@extends('layouts.app')

@section('content')
<div class="container">
	<div class="container">
		<a class="btn btn-primary" href="{{Route('companies.create')}}" role="button">create</a>
	</div>
	
	<div class="container">

<table  class="table">
	<thead>
		<tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Logo</th>
			<th scope="col">website</th>
			<th scope="col">Action</th>
    </tr>
	</thead>
	<tbody>
		@foreach($companies as $company)
		<tr>
      <th>{{$company->id}}</th>
      <td>{{$company->name}}</td>
      <td>{{$company->email}}</td>
      <td>
				<img height="50"width="50" src="{{asset('storage/' . $company->logo)}}">
			</td>
			<td>{{$company->website}}</td>
			<td>
			<div class="row">
				<a class="btn btn-primary" href="{{Route('companies.edit', $company->id)}}" role="button">edit</a>
				
				<form method="POST" action="{{Route('companies.destroy', $company->id)}}">
					{{csrf_field()}}
					{{method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">destroy</button>
				</form>
			</div>
			</td>
			</td>
    </tr>
		@endforeach
	</tbody>
</table>
{{ $companies->links() }}
</div>
</div>
@endsection
