
 <!DOCTYPE html>
<html>
<head>
    <title>Email Validation Form</title>
</head>
<body>
    <h2>Email Validation Form</h2>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
<form action="{{ url('store') }}" method="POST">
@csrf
<label for="email">Email:</label>
 <input type="text" id="email" name="email" required>
  @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
    </body>
</html>