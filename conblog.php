<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact form</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style type="text/css">
  
 .card {
  	box-shadow: 5px 5px  5px dimgray;
  	animation: slider 10s liner infinite;
  	filter: contrast(100%);
  	padding: 10px;
  	margin-left: 15px;
    box-align: right;
    background: rgba(255, 255, 255, 0.1);

  
  }

.card :hover{
    animation: slider 12s liner infinite;
     background: rgba(255, 255, 255, 0.2);
}



   body {
      background: url('img/1111.jpg');
   
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
color:white;
  }
  .deta{
  
  	color: black;
  	background-clip: content-box;
   }


  
  </style>
</head>
<body>
    <?php
  include'navbarblog.html';
  ?>
   
	<div class="container"p-5>
  <div class="row">
    <center><h1>Contact Us</h1></center>
    <div class="col p-5 text-white">
    	<div class="deta text-white">
     <div class="box"><i class="fa-solid fa-location-dot"></i>
      <h3>Address</h3>
    	<p>292 collage road<br>suyoog complex<br>Nashik422001</p>
    </div>
    <div class="icon"><i class="fa-solid fa-phone"></i>
        <h3>Phone</h3>
    	<p>505-475-6089</p>
    </div>

    <div class="text"><i class="fa-solid fa-envelope"></i>
    	<h3>Email</h3>
    	<p>burhadejyoti@gmail.com</p> 
    	
    </div>
  </div>

    
    </div>
    <div class="col p-5">
      <div class="card  text-dark border=2px solid black">
    <p class="card-text p-2 px-5">
   
    	<form>
    		<center><h3>Send message</h3></center>
           <label for="" class="form-label">Full Name</label>
           <input type="text" required="required" class="form-control">
           <label for="" class="form-label">Email address</label>
          <input type="email" class="form-control" required="required" placeholder="name@example.com">
          <label for="exampleFormControlTextarea1"required="required" class="form-label">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
          <center><input type="submit" name=""value="send">	</center>
    	</form>
		
</p>
 
    </div>
  </div>
</div>

</body>
</html>