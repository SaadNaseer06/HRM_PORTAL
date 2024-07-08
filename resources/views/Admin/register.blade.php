<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="text" name="email" placeholder="enter your email">
            </div>
            <div class="form-group">
                <label for="password">
                    <input type="password" name="password" placeholder="Enter your password" required>
                </label>
            </div>
            <label for="usertype">Select User Type</label>
            <select name="user_type_id">
                @foreach ($userTypes as $userType)
                    <option value="{{ $userType->id }}">{{ $userType->typename }}</option>
                @endforeach
            </select>

            <div class="form-group">
                <label for="desgination">Designation</label>
                <input type="text" name="designation" required>
            </div>

            <div class="form-group">
                <label for="date">Enter Date of joining</label>
                <input type="date" name="dateofjoining" required>
            </div>

            <div class="form-group">
                <label for="employee">Enter Employee Type</label>
                <input type="text" name="employeeType" id="" required>
            </div>
            <div class="form-group">
                <label for="salary">Enter your current salary</label>
                <input type="number" name="salary" id="" required>
            </div>
            <div class="form-group">
                <label for="shift">Enter your current shift</label>
                <input type="number" name="shift" id="" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
