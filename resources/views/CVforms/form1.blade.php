<!DOCTYPE html>
<html lang="en">
<head>
  <title>Make your CV Online</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/gif/png" href="{{asset('image/logo.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">InstantCV</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{URL('dashboard')}}">Home</a></li>
        <li><a href="#">Messages</a></li>
         <li><a href="{{route('form1')}}">Your CV</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL('user/profile')}}"><span class="glyphicon glyphicon-user"></span>Welcome 
        	<?php echo Auth::user()->name; ?></a></li>
		<li><a href="{{URL('logout')}}"><span class="glyphicon glyphicon-user"></span>Logout </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="{{asset('image/bird.jpg')}}" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">
      <div class="row">
     	<?php 
     		$id=Auth::id()
     	?>
          <div class="well" style="margin: 30px">
	          <form action="{{url('store/form/'.$id)}}" method="post" enctype="multipart/form-data">
	          	@csrf
				  <div class="form-group">
				    <label for="Phone Number">Phone Number</label>
				    <input type="number" class="form-control" id="number" name="number" aria-describedby="emailHelp" placeholder="Enter Your Number">
				   
				  </div>
				  <div class="form-group">
				    <label for="github">github</label>
				    <input type="url" class="form-control" id="github" name="github" placeholder="URL of github">
				  </div>

				  <div class="form-group">
				    <label for="Your Skills">Your Skills (write separated by comma. Exp. C,C++,html,css)</label>
				    <input type="text" class="form-control" id="Skills" name="Skills" placeholder="Your Skills (write separated by comma. Exp. C,C++,html,css)">
				  </div>

				  <div class="form-group">
				    <label for="About Yourself">About Yourself</label>
				    <textarea type="textarea" rows="5" cols="50" class="form-control" id="yourself" name="yourself" placeholder="About Yourself"></textarea>
				  </div>

				  <div class="form-group">
				    <label for="Education">Education</label>
				    <textarea type="textarea" rows="5" cols="50" class="form-control" id="education" name="education" placeholder="Education"></textarea>
				  </div>

				 <div class="form-group">
				    <label for="Reference">Reference</label>
				    <textarea type="textarea" rows="10" class="form-control" id="reference" name="reference" placeholder="Reference"></textarea>
				  </div>

				  <div class="form-group">
				    <label for="About Experience">Experience</label>
				    <textarea rows="5" cols="50" class="form-control" id="experience" name="experience" placeholder="About Your Experience"></textarea>
				  </div>

				  <div class="form-group">
				    <label for="Portfolio Link">Portfolio Link</label>
				    <input type="url" class="form-control" id="portfolio" name="portfolio" placeholder="URL of Portfolio">
				  </div>

				 <div class="form-group">
				    <label for="photo">Upload Your photo (Preferring <a href="https://www.google.com/search?q=professional+headshot&rlz=1C1CHBD_enBD929BD929&sxsrf=ALeKk02nOnbn_eEV4zuzvZWUFoq1hBbRaw:1607669196442&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiV1vq6qsXtAhUp8HMBHfy6AxQQ_AUoAXoECBcQAw&biw=1366&bih=625" target="_blank">professional headshot</a>)</label>
				    <input type="file" class="form-control" id="photo" name="photo">
				  </div>

				  <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">terms and conditions</a>  and <a href="#">privacy policy</a> </label>
				  </div>
				   <button type="submit" class="btn btn-primary" id="AddMore">Add More Information</button>
				  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
				</form>

				 
          </div>
          <hr>
          		<h6>Eikhane condition hobe, jodi last form submited hoy then ei button asbe</h6>
     			 <button type="button" class="btn btn-link">Download CV</button>
       
      </div>
     
         
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="{{asset('image/Paris.jpg')}}" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
