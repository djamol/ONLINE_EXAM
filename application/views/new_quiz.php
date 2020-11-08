 <link href="<?php echo base_url('css/select2.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url('js/select2.min.js');?>"></script>
<div class="container">

   
 <h3><?php echo $title;?></h3>
   
 

  <div class="row">
     <form method="post" action="<?php echo site_url('quiz/insert_quiz/');?>">
	
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
		
		 			<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('quiz_name');?></label> 
					<input type="text"  name="quiz_name"  class="form-control" placeholder="<?php echo $this->lang->line('quiz_name');?>"  required autofocus>
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('description');?></label> 
					<textarea   name="description"  class="form-control tinymce_textarea" ></textarea>
					<div class="form-group">	 
					<label for="inputEmail">Question</label> 
					<div id="mceu_28" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;"><div id="mceu_28-body" class="mce-container-body mce-stack-layout"><div id="mceu_29" class="mce-container mce-menubar mce-toolbar mce-stack-layout-item mce-first" role="menubar" style="border-width: 0px 0px 1px;"><div id="mceu_29-body" class="mce-container-body mce-flow-layout"><div id="mceu_30" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-first mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_30" role="menuitem" aria-haspopup="true"><button id="mceu_30-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">File</span> <i class="mce-caret"></i></button></div><div id="mceu_31" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_31" role="menuitem" aria-haspopup="true"><button id="mceu_31-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Edit</span> <i class="mce-caret"></i></button></div><div id="mceu_32" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_32" role="menuitem" aria-haspopup="true"><button id="mceu_32-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Insert</span> <i class="mce-caret"></i></button></div><div id="mceu_33" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_33" role="menuitem" aria-haspopup="true"><button id="mceu_33-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">View</span> <i class="mce-caret"></i></button></div><div id="mceu_34" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_34" role="menuitem" aria-haspopup="true"><button id="mceu_34-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Format</span> <i class="mce-caret"></i></button></div><div id="mceu_35" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_35" role="menuitem" aria-haspopup="true"><button id="mceu_35-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Table</span> <i class="mce-caret"></i></button></div><div id="mceu_36" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_36" role="menuitem" aria-haspopup="true"><button id="mceu_36-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Tools</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_37" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_37-body" class="mce-container-body mce-stack-layout"><div id="mceu_38" class="mce-container mce-toolbar mce-stack-layout-item mce-first" role="toolbar"><div id="mceu_38-body" class="mce-container-body mce-flow-layout"><div id="mceu_39" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group"><div id="mceu_39-body"><div id="mceu_0" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-label="Undo" aria-disabled="true"><button id="mceu_0-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mceu_1" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-label="Redo" aria-disabled="true"><button id="mceu_1-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div><div id="mceu_40" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_40-body"><div id="mceu_2" class="mce-widget mce-btn mce-menubtn mce-first mce-last" tabindex="-1" aria-labelledby="mceu_2" role="button" aria-haspopup="true"><button id="mceu_2-open" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-insert"></i> <i class="mce-caret"></i></button></div></div></div><div id="mceu_41" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_41-body"><div id="mceu_3" class="mce-widget mce-btn mce-menubtn mce-first mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_3" role="button" aria-haspopup="true"><button id="mceu_3-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Formats</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_42" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_42-body"><div id="mceu_4" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Bold"><button id="mceu_4-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_5" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Italic"><button id="mceu_5-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mceu_43" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_43-body"><div id="mceu_6" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Align left"><button id="mceu_6-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Align center"><button id="mceu_7-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Align right"><button id="mceu_8-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mceu_9" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Justify"><button id="mceu_9-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mceu_44" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_44-body"><div id="mceu_10" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_11" class="mce-widget mce-btn mce-splitbtn mce-menubtn" role="button" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_12" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Decrease indent"><button id="mceu_12-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_13" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Increase indent"><button id="mceu_13-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div id="mceu_45" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_45-body"><div id="mceu_14" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Insert/edit link"><button id="mceu_14-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mceu_15" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Insert/edit image"><button id="mceu_15-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mceu_46" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_46-body"><div id="mceu_16" class="mce-widget mce-btn mce-first mce-last mce-btn-has-text" tabindex="-1" role="button" aria-label="Upload an image"><button id="mceu_16-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i><span class="mce-txt">Upload</span></button></div></div></div><div id="mceu_47" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_47-body"><div id="mceu_17" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="Insert Equation"><button id="mceu_17-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-none" style="background-image: url('https://patilweb.com/amolpatil_v5_enterprise/editor/plugins/eqneditor/img/eqneditor.png')"></i></button></div></div></div><div id="mceu_48" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_48-body"><div id="mceu_18" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="WIRIS EDITOR math"><button id="mceu_18-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-none" style="background-image: url('http://patilweb.com/amolpatil_v5_enterprise/editor/plugins/tiny_mce_wiris/icons/formula.png')"></i></button></div></div></div><div id="mceu_49" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_49-body"><div id="mceu_19" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="WIRIS EDITOR chemistry"><button id="mceu_19-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-none" style="background-image: url('https://patilweb.com/amolpatil_v5_enterprise/editor/plugins/tiny_mce_wiris/icons/chem.png')"></i></button></div></div></div><div id="mceu_50" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group"><div id="mceu_50-body"></div></div></div></div><div id="mceu_51" class="mce-container mce-toolbar mce-stack-layout-item mce-last" role="toolbar"><div id="mceu_51-body" class="mce-container-body mce-flow-layout"><div id="mceu_52" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group"><div id="mceu_52-body"><div id="mceu_20" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Print"><button id="mceu_20-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-print"></i></button></div><div id="mceu_21" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Preview"><button id="mceu_21-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-preview"></i></button></div><div id="mceu_22" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Insert/edit media"><button id="mceu_22-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-media"></i></button></div></div></div><div id="mceu_53" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_53-body"><div id="mceu_23" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" tabindex="-1" aria-haspopup="true" aria-label="Text color"><button role="presentation" hidefocus="1" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mceu_23-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_24" class="mce-widget mce-btn mce-colorbutton" role="button" tabindex="-1" aria-haspopup="true" aria-label="Background color"><button role="presentation" hidefocus="1" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mceu_24-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_25" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Emoticons" aria-haspopup="true"><button id="mceu_25-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-emoticons"></i></button></div></div></div><div id="mceu_54" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group"><div id="mceu_54-body"><div id="mceu_26" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Insert/Edit code sample"><button id="mceu_26-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-codesample"></i></button></div><div id="mceu_27" class="mce-widget mce-btn mce-last" tabindex="-1" role="button"><button id="mceu_27-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-help"></i></button></div></div></div></div></div></div></div><div id="mceu_55" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="question_ifr" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 100px; display: block;" frameborder="0"></iframe></div><div id="mceu_56" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_56-body" class="mce-container-body mce-flow-layout"><div id="mceu_57" class="mce-path mce-flow-layout-item mce-first"><div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_57-0" aria-level="1">p</div></div><span id="mceu_118" class="mce-wordcount mce-widget mce-label mce-flow-layout-item">Words: 0</span><div id="mceu_58" class="mce-flow-layout-item mce-resizehandle mce-last"><i class="mce-ico mce-i-resize"></i></div></div><div class="mce-branding-powered-by" style="right: 0px; top: -16px; display: none;"></div></div></div></div><textarea name="question" class="form-control" id="question" style="display: none;" aria-hidden="true"></textarea>
			</div>
			
			</div>
			
			<a href="#" data-toggle="collapse" data-target="#advance_options"><u><?php echo $this->lang->line('advance_options');?></u></a>
 
			<div id="advance_options" class="collapse">
			
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('start_date');?></label> 
					<input type="text" name="start_date"  value="<?php echo date('Y-m-d H:i:s',time());?>" class="form-control" placeholder="<?php echo $this->lang->line('start_date');?>"   required >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('end_date');?></label> 
					<input type="text" name="end_date"  value="<?php echo date('Y-m-d H:i:s',(time()+(60*60*24*365)));?>" class="form-control" placeholder="<?php echo $this->lang->line('end_date');?>"   required >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('duration');?></label> 
					<input type="text" name="duration"  value="10" class="form-control" placeholder="<?php echo $this->lang->line('duration');?>"  required  >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('maximum_attempts');?></label> 
					<input type="text" name="maximum_attempts"  value="10" class="form-control" placeholder="<?php echo $this->lang->line('maximum_attempts');?>"   required >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('pass_percentage');?></label> 
					<input type="text" name="pass_percentage" value="50" class="form-control" placeholder="<?php echo $this->lang->line('pass_percentage');?>"   required >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('correct_score');?></label> 
					<input type="text" name="correct_score"  value="1" class="form-control" placeholder="<?php echo $this->lang->line('correct_score');?>"   required >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('incorrect_score');?></label> 
					<input type="text" name="incorrect_score"  value="0" class="form-control" placeholder="<?php echo $this->lang->line('incorrect_score');?>"  required  >
			</div>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('ip_address');?></label> 
					<input type="text" name="ip_address"  value="" class="form-control" placeholder="<?php echo $this->lang->line('ip_address');?>"    >
			</div>
				<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('view_answer');?></label> <br>
					<input type="radio" name="view_answer"    value="1" checked > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
					<input type="radio" name="view_answer"    value="0"  > <?php echo $this->lang->line('no');?>
			</div>
			<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('open_quiz');?></label> <br>
					<input type="radio" name="with_login"    value="0"  > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
					<input type="radio" name="with_login"    value="1" checked > <?php echo $this->lang->line('no');?>
			</div>
			
<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('show_rank');?></label> <br>
					<input type="radio" name="show_chart_rank"    value="1" checked > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
					<input type="radio" name="show_chart_rank"    value="0"  > <?php echo $this->lang->line('no');?>
</div>


			<?php 
			if($this->config->item('webcam')==true){
				?>
				<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('capture_photo');?></label> <br>
					<input type="radio" name="camera_req"    value="1"  > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
					<input type="radio" name="camera_req"    value="0"  checked > <?php echo $this->lang->line('no');?>
			</div>
			<?php 
			}else{
				?>
				<input type="hidden" name="camera_req" value="0">
				
				<?php 
			}
			?>
<div class="form-group">	 
					<label   ><?php echo $this->lang->line('assign_to_group');?></label> <br>
					 <?php 
					foreach($group_list as $key => $val){
						?>
						
						 <input type="checkbox" name="gids[]" value="<?php echo $val['gid'];?>" <?php if($key==0){ echo 'checked'; } ?> > <?php echo $val['group_name'];?> &nbsp;&nbsp;&nbsp;
						<?php 
					}
					?>
</div>


<div class="form-group">
  
					<label   ><?php echo $this->lang->line('assign_to_student');?></label> <br>


<select class="js-example-basic-multiple form-control" name="uids[]" multiple="multiple">
   <?php foreach($user_list as $k => $uval){ ?>
  <option value="<?php echo $uval['uid'];?>"><?php echo $uval['first_name'].' '.$uval['last_name'].' ('.$uval['email'].')';?></option>
  <?php } ?>
</select>
<script type="text/javascript">
$(".js-example-basic-multiple").select2();
</script>
</div>

<div class="form-group">	 
					<label   ><?php echo $this->lang->line('quiz_template');?></label> <br>
					<select name="quiz_template">
					<?php 
					foreach($this->config->item('quiz_templates') as $qk=> $val){
					?>
					<option value="<?php echo $val;?>"><?php echo $val;?></option>
					<?php 
					}
					?>
					 
					</select><br>
					<a href="<?php echo site_url('payment_gateway');?>">Enable Advance Template</a><p>Based on indian examination system</p>
</div>

				<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('question_selection');?></label> <br>
					<input type="radio" name="question_selection"    value="1"  > <?php echo $this->lang->line('automatically');?><br>
					<input type="radio" name="question_selection"    value="0"  checked > <?php echo $this->lang->line('manually');?>
			</div>
			
			
			
			
			<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('quiz_price');?></label> <br>
					<input type="text" name="quiz_price" value="0" class="form-control" placeholder="<?php echo $this->lang->line('quiz_price');?>"  readonly=readonly  required >
		<a href="<?php echo site_url('payment_gateway');?>">Enable this feature</a>
			</div>

			
			
				<div class="form-group">	 
					<label for="inputEmail" ><?php echo $this->lang->line('generate_certificate');?></label> <br>
					<input type="radio" name="gen_certificate"    value="1"  > <?php echo $this->lang->line('yes');?><br>
					<input type="radio" name="gen_certificate"    value="0"  checked > <?php echo $this->lang->line('no');?>
			</div>
			 
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('certificate_text');?></label> 
					<textarea   name="certificate_text"  class="form-control" ></textarea><br>
					<?php echo $this->lang->line('tags_use');?> <?php echo htmlentities("<br>  <center></center>  <b></b>  <h1></h1>  <h2></h2>   <h3></h3>    <font></font>");?><br>
					{email}, {first_name}, {last_name}, {quiz_name}, {percentage_obtained}, {score_obtained}, {result}, {generated_date}, {result_id}, {qr_code}
			</div>

 </div><br><br>
 
	<button class="btn btn-success" type="submit"><?php echo $this->lang->line('next');?></button>
 
 <br><br><br>
 <?php echo $this->lang->line('open_quiz_warning');?>
		</div>
</div>
 
 
 
 
</div>
      </form>
</div>

 



</div>
