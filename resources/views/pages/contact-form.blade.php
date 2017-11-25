<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Demo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<h2>Contact Form</h2>
				@if(Session::has('error'))
					<div class="alert alert-danger">{{Session::get('error')}}</div>

				@endif
				

				{{-- @if($errors->any())
					<div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>

				@endif --}}
				<form method="POST" action="{{route('contact-form')}}" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="">Fullname</label>
					    <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname">
					  </div>

					  <div class="form-group">
					    <label for="">Email address</label>
					    <input type="email" name="email" class="form-control" placeholder="Enter email">
					  </div>


					  <div class="form-group">
					    <label for="">Title</label>
					    <input type="text" name="title" class="form-control" placeholder="Enter title">
					  </div>


					  <div class="form-group">
					    <label>Message</label>
					    <textarea name="message" class="form-control"></textarea>
					  </div>

					  <div class="form-group">
					    <input type="file" name="image" >
					  </div>

					  <button type="submit" class="btn btn-primary">Send</button>

					  {{csrf_field()}}
					  {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}

					  {{-- WhgHgoBtGzDCMhm3B2l22HunN6FgzvSRC8JfucMz --}}

					</form>
					@if(Session::has('error2'))
						<div class="alert alert-danger">{{Session::get('error2')}}</div>
					@endif
			</div>
		</div>
	</div>
	
</body>
</html>