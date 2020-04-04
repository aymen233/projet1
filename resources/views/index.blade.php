<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/epreuve')}}">epreuve</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/matiere')}}">matiere</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
			<div class="row">
				<div class="col-md-12">
					<div class="carousel slide" id="carousel-443065">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-443065" class="active">
							</li>
							<li data-slide-to="1" data-target="#carousel-443065">
							</li>
							<li data-slide-to="2" data-target="#carousel-443065">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg">
								<div class="carousel-caption">
									<h4>
										First Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg">
								<div class="carousel-caption">
									<h4>
										Second Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg">
								<div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
						</div> <a class="carousel-control-prev" href="#carousel-443065" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-443065" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
					<div class="row">
						<div class="col-md-8">
							@yield('a')
							@yield('b')
						</div>
						<div class="col-md-4">
							<form role="form">
								<div class="form-group">
									 
									<label for="exampleInputEmail1">
										Email address
									</label>
									<input type="email" class="form-control" id="exampleInputEmail1">
								</div>
								<div class="form-group">
									 
									<label for="exampleInputPassword1">
										Password
									</label>
									<input type="password" class="form-control" id="exampleInputPassword1">
								</div>
								<div class="form-group">
									 
									<label for="exampleInputFile">
										File input
									</label>
									<input type="file" class="form-control-file" id="exampleInputFile">
									<p class="help-block">
										Example block-level help text here.
									</p>
								</div>
								<div class="checkbox">
									 
									<label>
										<input type="checkbox"> Check me out
									</label>
								</div> 
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="alert alert-success alert-dismissable">
				 
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					×
				</button>
				<h4>
					Alert!
				</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>