<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <style>
    @include('auth.css')
  body {
  font-family: Arial;
}

input[type=text],input[type=email], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.a{
  text-decoration: none;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-right:250px;
  margin-top: 50px;
  margin-left:250px;
} 

}
</style>
</head>
<body style="background-color:#2E86C1;">


<div class="id" >
 <div class="container">
  <h3 style="text-align: center;">Login Form</h3>

  <form action="{{url('sign')}}" method="POST">
    @csrf
     <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="password" placeholder="Your password.." required>



            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div><br>

            

    <input type="submit"  name="save"  value="Login">

           <br><br>
<div style="height:auto; width:200px; font-size:20px; background-color: red;">
<a href="{{ route('google.login') }}" class="btn btn-google btn-user btn-block">
    <i class="fab fa-google fa-fw"></i> Login with Google
</a>
</div>

            
          </form>
        </div>
        </div>
      



</body>
</html>
