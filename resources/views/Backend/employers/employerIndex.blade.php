@extends('layouts\App')

@section('content')
<div class="container">
	<div class="container">
		<a class="btn btn-primary" href="{{Route('employers.create')}}" role="button">create</a>
	</div>
	
	<div class="container">

<table  class="table">
	<thead>
		<tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
			<th scope="col">Phone</th>
			<th scope="col">Company</th>
			<th scope="col">Action</th>
    </tr>
	</thead>
	<tbody>
		@foreach($employers as $employer)
		<tr>
      <th>{{$employer->id}}</th>
      <td>{{$employer->firstName}}</td>
      <td>{{$employer->lastName}}</td>
      <td>{{$employer->email}}</td>
			<td>{{$employer->phone}}</td>
			<td>{{$employer->company_id}}</td>
			<td>
			<div class="row">
				<a class="btn btn-primary" href="{{Route('employers.edit', $employer->id)}}" role="button">edit</a>
				
				<form method="POST" action="{{Route('employers.destroy', $employer->id)}}">
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

</div>
</div>
@endsection