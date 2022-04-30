<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
 <!--  <script  defer src="date.js"></script> -->
  
 <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
      <!-- Javascript -->  
      <script>  
         $(function() {  
            $( "#datepick" ).datepicker();  
         });  
      </script>  
<style>
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

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-right:250px;
  margin-left:250px;
}
</style>

<body>


<div style="background-color: #cc2b5e" >
<div class="container">
  <h3 style="text-align: center;">Registration Form</h3>

  <form action="{{url('upload')}}" method="POST">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."  required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="password" placeholder="Your password.." required>
 

     
    <p>Date of Birth <input type="text" id="datepick"
     name ="date"  placeholder="Your Date of Birth.." required></p> 
  <!-- <input placeholder="Select date" type="text" id="example" class="form-control"> -->
 <label>Gender:</label>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other<br><br>

<label for="income">Annual Income</label>
    <input type="text" id="amount" name="income" placeholder="Your annual income.."   readonly style="border:0; color:#f6931f; font-weight:bold;"  requied>
    <div id="slider-range"></div>
    <label >Occupation</label>
    <select  name="occupation" placeholder="select the occupation" required>
      <option value="Private Job">Private Job</option>
      <option value="Goverment Job">Goverment Job</option>
      <option value="">Business</option>
    </select>
     <label for="">Family Type</label>
    <select  name="family">
      <option  name="family" value="">Joint Family</option>
      <option name="family" value="">Nuclear Family</option>
      <option name="family" value="">Other</option>
    </select>
     <label for="">Manglik</label>
    <select  name="manglik">
      <option  name="manglik" value="">Yes</option>
      <option  name="manglik" value="">No</option>
    
    </select>

  
    <input type="submit"  name="save"  value="Submit">
  </form>
</div>


</body>
</html>