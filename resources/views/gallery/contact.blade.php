@extends('layouts.master')

@section('title')
contact
@endsection

@section('content')
</div>
<br>
<br>
<br>
<div class="container">
    <h1 style="text-align: center; font-size: 2rem; font-weight: bold;">Get in touch</h1>
    <br>
    <br>
    <p style="text-align: center;">We'd love to hear from you. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
    </p>
</div>
<br>
<br>
<br>
<!--heading over-->
<!--cards starts-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-4">

            <!--card-->
            <div class="card text-center ml-4 mb-3 box-shadow" style="width: 18rem;background-color: #f5f5f5;">

                <div class="card-body ">

                    <i class="fa fa-envelope-square" style="font-size: 6rem; color: #0099ff;"></i>
                    <h5 class="card-title" style="font-weight: bold;">Email & Twitter</h5>
                    <p class="card-text">info@rangrezz.in</p>
                    <a href="">
                        <p>@Rangrezz</p>
                    </a>

                </div>
            </div>
            <!--acrd over-->


        </div>
        <div class="col-md-6 col-sm-12 col-lg-4">

            <!--card-->
            <div class="card text-center ml-4 mb-3 box-shadow" style="width: 18rem; background-color: #f5f5f5;">

                <div class="card-body ">

                    <i class="fa fa-mobile" style="font-size: 6rem; color: #0099ff;"></i>
                    <h5 class="card-title" style="font-weight: bold;">Call us on:</h5>
                    <p class="card-text">+91 89586-89745</p>
                    <p>Mon-Sat 9am-6pm (GMT)</p>

                </div>
            </div>
            <!--acrd over-->


        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 ">

            <!--card-->
            <div class="card text-center ml-4 mb-3 box-shadow" style="width: 18rem;background-color: #f5f5f5;">

                <div class="card-body ">

                    <i class="fa fa-map" style="font-size: 6rem; color: #0099ff;"></i>
                    <h5 class="card-title" style="font-weight: bold;">Find us at:</h5>
                    <p class="card-text">L. D. College Of Engineering</p>
                    <p class="card-text">Ahmedabad,Gujarat</p>


                </div>
            </div>
            <!--acrd over-->


        </div>
    </div>
</div>
<br>
<br>
<hr>
<div class="container text-center box-shadow" style="background-color: #f5f5f5;">
    <h1 style="font-size: 1.5rem;">Contact Form</h1>
    <br>
    <p>Drop us a line lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
</div>
<br>
<div class="container box-shadow" style="background-color: #f5f5f5;">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Enter your name:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter here">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="padding-bottom:  10px;">Leave your message
                        here:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <br>
            <br>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
<br>
<br>
<div class="container box-shadow">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.726699612257!2d72.54439531444237!3d23.033804921689384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84eaf57ac615%3A0x5c7498bb96b34c97!2sLalbhai%20Dalpatbhai%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1576909990265!5m2!1sen!2sin"
                    allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection