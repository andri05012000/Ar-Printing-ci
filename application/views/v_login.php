<!DOCTYPE html>
<html>
  <head>
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>ubold/assets/images/favicon_1.ico">
    <title>AR Printing</title>
    
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container" >
        <div class="col-md-4 col-md-offset-4">
          	
            
            <div class="panel-heading"> 
            	<div>
                        <h2 class="text-center"> AR PRINTING <br></h2>
             	</div>
            </div> 
			<form class="form-signin" action="<?php echo base_url().'LoginController/auth'?>" method="post"> 
            
	            <div class="form-group">
	            	<label for="username" class="sr-only">Username</label>
	            	<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
	            </div>

	            <div class="form-group">
	            	<label for="password" class="sr-only">Password</label>
	            	<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	           	</div>
	               
	            <div class="form-group">
	            	<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
	            	
	        	</div>
          	</form>

          	<div class="col-md-12" style="text-align: center; color: #E74C3C; font: bold;">
                <?php echo $this->session->flashdata('msg'); ?>
                </div>

        	</div>
        </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>

  </body>
</html>
