<?php 
 error_reporting (E_ALL ^ E_NOTICE); ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://kit.fontawesome.com/ef4c249679.js" crossorigin="anonymous"></script>
    <title>Spell Learner</title>
	  
</head>
<body>
   
     <?php include ('nav.php'); ?>
    <h1 align="center"> Test Your Word Power</h1>
 
 <strong><marquee>Learn at least 15 Words a day</marquee></strong>

 <div class="card ">
  <div class="card-body">
    
    
   <form action="test.php" method="POST">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Alien</label>
    <div class="col-">
      <input type="text"  class="form-control" class="form-control"  name="word[]" required>
    </div>
  </div><div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Brook</label>
    <div class="col-">
      <input type="text"  class="form-control" name="word[]" required>
    </div>
  </div><div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Console</label>
    <div class="col-">
      <input type="text"  class="form-control" name="word[]" required>
    </div>
  </div><div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Legacy</label>
    <div class="col-">
      <input type="text"  class="form-control" name="word[]" required>
    </div>
  </div><div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Edifice</label>
    <div class="col-">
      <input type="text"  class="form-control" name="word[]" required>
    </div>
  </div><div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Fickle</label>
    <div class="col-">
      <input type="text"  class="form-control" name="word[]" required>
    </div>
  </div>
<input type="submit" class="btn btn-primary mb-2" name="submit" value="Check">
</form>

</div>
</div>

	 <?php
	    if (isset($_POST['submit'])){
	     $word = $_POST["word"];
		 
	 ?>
	
	<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Words</th>
      <th scope="col">Mean</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<td>Alien</td>
      <td><?php echo $word[0]; ?></td>
      <td><?php if ($word[0] == 'Unknown'){
			echo "Rigt Answer";
			
		} else {
			echo"Wrong Answer";
		};
	 ?></td>
    </tr>
	<tr>
    	<td>Brook</td>
      <td><?php echo $word[1]; ?></td>
      <td><?php if ($word[1] == 'Tolerate'){
			echo "Rigt Answer";
			
		} else {
			echo"Wrong Answer";
		};
	 ?></td>
    </tr>
<tr>
    	<td>Console</td>
      <td><?php echo $word[2]; ?></td>
      <td><?php if ($word[2] == 'Comfort'){
			echo "Rigt Answer";
			
		} else {
			echo"Wrong Answer";
		};
	 ?></td>
    </tr>
	<tr>
    	<td>Legacy</td>
      <td><?php echo $word[3]; ?></td>
      <td><?php if ($word[3] == 'Heritage'){
			echo "Rigt Answer";
		} else{
			echo "Wrong Answer";
		}
	 ?></td>
    </tr>
<tr>
    	<td>Edifice</td>
      <td><?php echo $word[4]; ?></td>
      <td><?php if ($word[4] == 'Building'){
			echo "Rigt Answer";
		} else{
			echo "Wrong Answer";
		}
	 ?></td>
    </tr>
<tr>
    	<td>Fickle</td>
      <td><?php echo $word[5]; ?></td>
      <td><?php if ($word[5] == 'Changeable'){
			echo "Rigt Answer";
		} else{
			echo "Wrong Answer";
		}
		}?></td>
    </tr>	
 </tbody>
 </table>
 
 
 
 <?php include('footer.php'); ?>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>
     