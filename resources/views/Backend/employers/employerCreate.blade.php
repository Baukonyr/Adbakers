@extends('layouts\app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Information of employer</div>
				
				<div class="card-body">
					<form method="POST" action="{{route('employers.store')}}">
						{{csrf_field()}}
						<div class="form-group row">
              <label for="firstName" class="col-md-4 col-form-label text-md-right">First name</label>

                <div class="col-md-6">
                  <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" required autocomplete="name">

                  @error('firstName')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="LastName" class="col-md-4 col-form-label text-md-right">Last name</label>

                <div class="col-md-6">
                  <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="lastName" required autocomplete="name">

                  @error('lastName')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="name">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                <div class="col-md-6">
                  <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="name">

                  @error('phone')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
						<div class="form-group row">
              <label for="company_id" class="col-md-4 col-form-label text-md-right">Company</label>

                <div class="col-md-6">
								<select class="form-control @error('company_id') is-invalid @enderror" name="company_id">
									<option value="0">shoes...</option>
									@foreach($companies as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
                  @error('company_id')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
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