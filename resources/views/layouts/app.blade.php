<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include any CSS or Bootstrap stylesheets here -->


    <style>

#box
{
    background:antiquewhite;
 
 
}

label
{
    font-weight:bold;
}


body{
background:whitesmoke;s
}

    </style>
</head>
<body>
  

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Include any JavaScript or jQuery scripts here -->
    <script>
        $(document).ready(function () {
            $('.error').hide();
            $('#submit').click(function () {
               
                var email = $('#email').val();
 
                if (IsEmail(email) == false) {
                    $('#invalid_email').show();
                    return false;
                }
             
               
            });
        });
        function IsEmail(email) {

            
            var regex =
/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            }
            else {
                return true;
            }
        }
    </script>
</body>
</html>
