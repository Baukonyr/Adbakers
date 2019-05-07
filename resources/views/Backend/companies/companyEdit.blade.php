@extends('layouts\app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Information of company</div>
				
				<div class="card-body">
					<form method="POST" action="{{route('companies.update', $company->id)}}" enctype="multipart/form-data">
						{{ method_field('PUT') }}
						{{csrf_field()}}
						<div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{$company->name}}">

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">email</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{$company->email}}">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="website" class="col-md-4 col-form-label text-md-right">website</label>

                <div class="col-md-6">
                  <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" required value="{{$company->website}}">

                  @error('website')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="logo" class="col-md-4 col-form-label text-md-right">logo</label>

                <div class="col-md-6">
                  <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">

                  @error('logo')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						Текущее лого
						<img height="50"width="50" src="{{asset('storage/' . $company->logo)}}">
						<hr style="background-color: #52bcd3;">
						<div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection