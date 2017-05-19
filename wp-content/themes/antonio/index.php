<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Digital</a></li>
              <li><a href="#">Web</a></li>
              <li><a href="#contact">Contact us</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="row">
        <div class="col-md-12 welcome">
          <h1>Welcome to the course!</h1>
          <h4>Here we will cover all the details about the course...</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center" id="contact">
    <h1>Contact us</h1>
    <h2>Lorem ipsum dolor sit amet</h2>
  </div>
  <div class="row form-row">
    <form>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Insert your name" name="name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control input-lg" id="exampleInputPassword1" placeholder="Insert your email" name="email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone number</label>
          <input type="number" class="form-control input-lg" id="exampleInputPassword1" placeholder="Insert your phone number" required>
        </div>

      </div>
      <div class="col-md-6">
        <label for="exampleInputPassword1">Insert a comment</label>
        <textarea class="form-control input-lg"></textarea>
      </div>
      <div class="col-md-12">
        <div class="text-center btn-container">
          <button type="button" class="btn btn-primary btn-lg">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<script src="vendors/js/jquery.min.js"></script>
<script src="vendors/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
