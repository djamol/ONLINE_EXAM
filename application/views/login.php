<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $this->lang->line('amolpatil_quiz');?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url();?>scss/svg.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>css/sb-admin-2.min.css" rel="stylesheet">
<style>
#logop{
         background: -moz-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(255,240,153,1) 40%, rgba(255,66,246,1) 100%); /* ff3.6+ */
    background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(40%, rgba(255,240,153,1)), color-stop(100%, rgba(255,66,246,1))); /* safari4+,chrome */
    background: -webkit-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(255,240,153,1) 40%, rgba(255,66,246,1) 100%); /* safari5.1+,chrome10+ */
    background: -o-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(255,240,153,1) 40%, rgba(255,66,246,1) 100%); /* opera 11.10+ */
    background: -ms-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(255,240,153,1) 40%, rgba(255,66,246,1) 100%); /* ie10+ */
    background: linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(255,240,153,1) 40%, rgba(255,66,246,1) 100%); /* w3c */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FF42F6', endColorstr='#ffffff',GradientType=1 ); /* ie6-9 */ 
}
#logobody{
         background: -moz-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(0,0,255,1) 100%); /* ff3.6+ */
    background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(0,0,255,1))); /* safari4+,chrome */
    background: -webkit-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(0,0,255,1) 100%); /* safari5.1+,chrome10+ */
    background: -o-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(0,0,255,1) 100%); /* opera 11.10+ */
    background: -ms-linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(0,0,255,1) 100%); /* ie10+ */
    background: linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(0,0,255,1) 100%); /* w3c */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0000ff', endColorstr='#ffffff',GradientType=1 ); /* ie6-9 */ 
}
</style>
</head>

<body id="logobody">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block  " id="logop">
<center><img src="http://promovideo.tk/udms/assets/img/bamu.png" /></center>

    <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 600 200" style="enable-background:new 0 0 600 600;" xml:space="preserve" class="bayleyssvg">
	 <g>
   <text id="bayleys3" stroke-dasharray="1200 1000" transform="matrix(6.01837, 0, 0, 5.5498, -368.85, -653.705)" xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="24" y="138.782389" x="74.663106" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#faf7f7" fill="#f8ff09">BAMU</text>
  <text id="bayleys4" stroke-dasharray="1200 1000" transform="matrix(3.94383, 0, 0, 2.72136, -407.721, -233.332)" xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="24" y="160.449997" x="138.5" stroke-opacity="null" stroke-width="0" stroke="#fe4fb7" fill="#f8ff09">UDMS</text>
  <text id="bayleys2" stroke-dasharray="1200 1000" transform="matrix(1.44128, 0, 0, 1, -20.5193, 0)" xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="24" y="247.449997" x="46.5" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#fffffd" fill="#f95b71">Developed By Amol Patil</text>
 </g>
</svg>
    </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
				  <?php 
				 $hquery=$this->db->query(" select * from amolpatil_setting where setting_name='App_Name' || setting_name='App_title' order by setting_id asc "); 
				$hres=$hquery->result_Array();
				?>
                    <h1 class="h4 text-gray-900 mb-4">
					
					<?php if($hres[0]['setting_value']==""){ ?>PatilTech <sup>1.0</sup><?php }else{ echo $hres[0]['setting_value']; }?> 
					
					</h1>
                  </div>
                  <form class="user"  method="post" action="<?php echo site_url('login/verifylogin');?>">
					 
		<?php 
		if($this->session->flashdata('message')){
			?>
			<div class="alert alert-danger">
			<?php echo str_replace('{resend_url}',site_url('login/resend'),$this->session->flashdata('message'));?>
			</div>
		<?php	
		}
		?>	
		
		
		
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('email_address');?>">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="<?php echo $this->lang->line('password');?>">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  
                  </form>
				  
				     <div class="text-center">
                    <!--<a class="small" href="<?php echo site_url('login/forgot');?>"><?php echo $this->lang->line('forgot_password');?> </a>
                    -->
					<?php 
if($this->config->item('open_quiz')){
	?>			 
			&nbsp;&nbsp;&nbsp;<a class="small" href="<?php echo site_url('quiz/open_quiz/0');?>"  ><?php echo $this->lang->line('open_quizzes');?></a>
			 
			<?php 
			}
			?>
			
                  </div>
				  
				  
				  
                  <hr>
               
                  <div class="text-center">
               <!--     <a class="btn btn-danger btn-user btn-block" href="<?php echo site_url('login/pre_registration');?>"><?php echo $this->lang->line('register_new_account');?></a>
                   -->
				  <p style="margin-top:40px;""><a class="small" href="#http://patilweb.com" style="float:right;">Powered by Patil Tech</a></p>
 
				 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>js/sb-admin-2.min.js"></script>

</body>

</html>










 