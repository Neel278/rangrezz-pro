@extends('layouts.master')

@section('title','Register | Rangrezz')

@section('content')
<script type="text/javascript">
    $(document).ready(function()
    {
      $(".other").click(function()
      { 
        $(".custom").css("display","block");
      });
      $(".male").click(function(){
       
        $(".custom").css("display","none");
      });
      $(".female").click(function(){
       
        $(".custom").css("display","none");
      });
      $("#other").click(function()
      { 
        $("#custom").css("display","block");
      });
      $("#male").click(function()
      {
          $("#custom").css("display","none");
      });
      $("female").click(function()
      {
         $("#custom").css("display","none");
      });
      //form validation 
      $("#submit").click(function()
      {
          var lastname = $("#lname1").val();
          var firstname = $("#fname1").val();
          var username =$("#username").val();
          var password =$("#inputPassword").val();
          var passwordcheck = $("#inputPassword1").val();
          // Initializing Variables With Regular Expressions
          var name_regex = /^[a-zA-Z]+$/;
          var pass_regex =/(?=^.{6,10}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}{&quot;:;'?/&gt;.&lt;,])(?!.*\s).*$/;
        if (lastname == '' || firstname == '' || username == '' || password == '' || passwordcheck=='')
         {
              alert("Please fill all fields...!!!!!!");
          }
          // To Check Empty Form Fields.
else if (lastname.length == 0 || !lastname.match(name_regex)) {
$('#p1').text("* For your lastname use alphabets only*"); // This Segment Displays The Validation Rule For All Fields
$("#lname1").focus();
return false;
}
// Validating Name Field.
else if (!firstname.match(name_regex) || firstname.length == 0) {
$('#p2').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
$("#fname1").focus();
return false;
}
// Validating Username Field.
else if (!(username.length >= 6 && username.length <= 8) || username.length == 0) {
$('#p3').text("* Please enter between 6 and 8 characters *"); // This Segment Displays The Validation Rule For Username
$("#username").focus();
return false;
}
//password validating 
else if (!password.match(pass_regex) || password.length==0) {
$('#p4').text("*It expects atleast 1 small-case letter, 1 Capital letter, 1 digit, 1 special character and the length should be between 6-10 characters. *");
$("#inputPassword").focus();
return false;
}
else if(!(password).match(passwordcheck) || password.length==0)
{
   $('#p5').text("password is not matching ");
   $("#inputPassword1").focus();
   return false;
}
else
{
  
  return true;
}
      });
 //form validation 
      $("#submit1").click(function()
      {
          var lastname = $("#lname").val();
          var firstname = $("#fname").val();
          var username =$("#uname1").val();
          var password =$("#inputPassword3").val();
          var passwordcheck = $("#inputPassword4").val();
          // Initializing Variables With Regular Expressions
          var name_regex = /^[a-zA-Z]+$/;
          var pass_regex =/(?=^.{6,10}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}{&quot;:;'?/&gt;.&lt;,])(?!.*\s).*$/;
        if (lastname == '' || firstname == '' || username == '' || password == '' || passwordcheck=='')
         {
              alert("Please fill all fields...!!!!!!");
          }
          // To Check Empty Form Fields.
else if (lastname.length == 0 || !lastname.match(name_regex)) {
$('#p6').text("* For your lastname use alphabets only*"); // This Segment Displays The Validation Rule For All Fields
$("#lname").focus();
return false;
}
// Validating Name Field.
else if (!firstname.match(name_regex) || firstname.length == 0) {
$('#p7').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
$("#fname").focus();
return false;
}
// Validating Username Field.
else if (!(username.length >= 6 && username.length <= 8) || username.length == 0) {
$('#p8').text("* Please enter between 6 and 8 characters *"); // This Segment Displays The Validation Rule For Username
$("#uname1").focus();
return false;
}
//password validating 
else if (!password.match(pass_regex) || password.length==0) {
$('#p9').text("*It expects atleast 1 small-case letter, 1 Capital letter, 1 digit, 1 special character and the length should be between 6-10 characters. *");
$("#inputPassword3").focus();
return false;
}
else if(!(password).match(passwordcheck) || password.length==0)
{
   $('#p10').text("password is not matching ");
   $("#inputPassword4").focus();
   return false;
}
else
{
  
  return true;
}
      });
});
</script>
</div>
</div>


<div class="container-fluied">
    <div class="jumbotron text-center" style="background-color: #0099ff; color: white;">
        <h1 class="display-4 ">Welcome to Rangrezz</h1>

        <p class="lead text-center">create the world colorful with us.</p>
        <hr class="my-4">
        <p>to keep connected with us please register here ,Sign up here to become a member of Rangrezz Today !</p>
    </div>
</div>
<!--container is over -->
<!--form container starts here, login for seller-->
<br>
<br>
<br>
<br>
<!-- ======================================================= -->
<div class="container box-shadow">

    <div class="row" style="">
        <div class="col-md-6 text-center " style=" background-color: #0099ff; color:white;">
            <div class="align-self-center">
                <br>
                <br>
                <h1 style="font-size: 2rem;text-decoration: underline;">Registration</h1>
                <br>
                <br>
                {{-- <p>The page Registration having two registration forms ,<br>(1)Registration for seller : for them, who wants to sell their artworks.<br>(2)Registration for Buyer : for them, who wants to buy artworks from art auctions.</p> --}}
            </div>
        </div>
        <div class="col-md-6" style="">
            <p id="head" style="color: red;"></p>

            <form method="POST" action="{{ route('register') }}" class="p-5">
                @csrf

                {{-- custom email form --}}
                <div class="form-group">
                    <label for="lname1">Enter your lastname: </label>
                    <input type="text" class="form-control" placeholder="surname" id="lname1" name="lastname" required>
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p id="p1"></p>
                </div>
                <div class="form-group">
                    <label for="fname1">Enter your Firstname: </label>
                    <input type="text" class="form-control" placeholder="your name" id="fname1" name="firstname"
                        required>

                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <p id="p2"></p>
                </div>
                <div class="form-group">
                    <label for="exampleRadios1">Gender:</label>
                    <div class="form-check">
                        <input class="form-check-input male" type="radio" name="gender" id="exampleRadios1" value="male"
                            required>
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input female" type="radio" name="gender" id="exampleRadios2"
                            value="female" required>
                        <label class="form-check-label" for="exampleRadios2">
                            female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input other" type="radio" name="gender" id="exampleRadios3"
                            value="other" required>
                        <label class="form-check-label" for="exampleRadios3">
                            other
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea2" style="padding-bottom:  10px;">Address:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="address"
                        required></textarea>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="datepicker">Birthdate:</label>
                    <input type="date" class="form-control" name="birthdate" required>
                    @error('birthdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" name="email"
                        placeholder="name@example.com" required>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" placeholder="username" id="username" name="username"
                        required>
                    <p id="p3"></p>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password:</label>

                    <input type="password" class="form-control" id="inputPassword" placeholder="Password"
                        name="password" required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p id="p4"></p>
                </div>
                <div class="form-group">
                    <label for="inputPassword1">Confirm Password:</label>

                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password"
                        name="password_confirmation" required>

                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p id="p5"></p>
                </div>
                <div class="form-group ">
                    <label for="inputState2" style="margin-bottom: 10px;">Sequrity Question</label>
                    <select id="inputState2" class="form-control" name="secque" required>
                        <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                        <option value="In what city did you meet your spouse/significant other?">In what city did you
                            meet your spouse/significant other?</option>
                        <option value="What was the name of your elementary / primary school?">What was the name of your
                            elementary / primary school?</option>
                        <option value="What was your favorite place to visit as a child?">What was your favorite place
                            to visit as a child?</option>
                        <option value="What is the country of your ultimate dream vacation?">What is the country of your
                            ultimate dream vacation?</option>
                        <option value="What is the name of your favorite childhood teacher?">What is the name of your
                            favorite childhood teacher?</option>
                        <option value="What was your dream job as a child? ">What was your dream job as a child?
                        </option>
                        <option value="Who was your childhood hero? ">Who was your childhood hero? </option>
                        <option value="What is your grandmother's first name?">What is your grandmother's first name?
                        </option>
                        <option value="Where did you vacation last year?">Where did you vacation last year?</option>
                    </select>
                    @error('secque')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="answer">Answer: </label>
                    <input type="text" class="form-control" placeholder="answer" id="answer" name="answer" required>

                    @error('answer')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button id="submit" type="submit" class="btn btn-primary" name="Sellsubmit">
                        Register
                    </button>
                    Already have an account?
                    <a href="{{ route('login') }}" title="">click here</a>
                </div>

                {{-- end custom --}}
            </form>
        </div>
    </div>
</div>
<!--form container ends here-->
<br>
<br>
<br>

<script type="text/javascript">
    // Data Picker Initialization
$('input').datepicker();
</script>
@endsection