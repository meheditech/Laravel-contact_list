<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>

    {{--CSS--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
</head>
<body>

<section class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-muted text-center display-2">Contact Form</h2>
                {!! Form::open(['url'=>['contact/update', $data->id ]]) !!}
                <div class="form-group">
                    {{ Form::label('name','First Name') }}
                    {{ Form::text('name', $data->name,['class'=>'form-control','placeholder'=>'First Name']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('mobile_no','Mobile Number') }}
                    {{ Form::text('mobile_no', $data->mobile_no,['class'=>'form-control','placeholder'=>'Mobile Number']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email','Email') }}
                    {{ Form::email('email', $data->email,['class'=>'form-control','placeholder'=>'Email']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password','Password') }}
                    {{ Form::text('password', $data->password,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{ Form::label('address','Address') }}
                    {{ Form::text('address', $data->address,['class'=>'form-control','placeholder'=>'Address']) }}
                </div>
                {{ Form::submit('Update',['class'=>'btn btn-sm btn-success']) }}

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/jquery-3.2.1.min.css') }}"></script>
<script src="{{ asset('js/popper.min.css') }}"></script>
<script src="{{ asset('js/bootstrap.min.css') }}"></script>
</body>
</html>