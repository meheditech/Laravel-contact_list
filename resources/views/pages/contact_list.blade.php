<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Contact List</title>
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
<div class="jumbotron">
    <div class="container">
        <h3>Contact List</h3>
        <table class="table table-striped table-responsive">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Create At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->mobile_no }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->password }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</td>
                    <td>{{ Carbon\Carbon::parse($contact->updated_at)->diffForHumans() }}</td>
                    <td>
                        <a href="{{ url('contact/edit', $contact->id) }}" class="btn btn-success btn-sm">Edit</a> | <a href="{{ url                                                                     ('contact/delete', $contact->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            @if(Session::has('success'))
                <script>
                    Swal.fire(
                        'Good job!',
                        '{{ Session::get("success") }}',
                        'success'
                    )
                </script>
            @endif
            @if(Session::has('error'))
                <script>
                    Swal.fire(
                        'Bad job!',
                        '{{ Session::get("error") }}',
                        'error'
                    )
                </script>
            @endif
        </table>
    </div>
</div>


    <script src="{{ asset('js/jquery-3.2.1.min.css') }}"></script>
    <script src="{{ asset('js/popper.min.css') }}"></script>
    <script src="{{ asset('js/bootstrap.min.css') }}"></script>
</body>
</html>