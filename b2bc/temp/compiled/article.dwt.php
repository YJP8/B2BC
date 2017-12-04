<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="content">
<div class="contentBody">
<div class="block_s">

 <div id="ur_here" style="padding: 10px 0 0 0;border-bottom: 1px solid #DDD;
padding-bottom: 10px;
margin: 10px 0 15px;">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>

<div class="blank"></div>

  
  <div class="help_left">

  <?php echo $this->fetch('library/left_help.lbi'); ?>




    
  </div>
  
  
  <div class="help_right_out">
    <div class="help_right">
     
     
         <div class="help_right_title " >
         <p><?php echo htmlspecialchars($this->_var['article']['title']); ?></p> <b><?php echo htmlspecialchars($this->_var['article']['author']); ?> </b>
         </div>
         <div class="blank"></div>
         <div class="content_right">
         <?php if ($this->_var['article']['content']): ?>
          <?php echo $this->_var['article']['content']; ?>
         <?php endif; ?>
         <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
         <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
          </div>
           <div class="blank"></div>
         <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #e6e6e6 ;">
         
          <?php if ($this->_var['next_article']): ?>
            <?php echo $this->_var['lang']['next_article']; ?>:<a href="<?php echo $this->_var['next_article']['url']; ?>" class="f6"><?php echo $this->_var['next_article']['title']; ?></a><br />
          <?php endif; ?>
          
          <?php if ($this->_var['prev_article']): ?>
            <?php echo $this->_var['lang']['prev_article']; ?>:<a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6"><?php echo $this->_var['prev_article']['title']; ?></a>
          <?php endif; ?>
         </div>
     
   
  
  <div class="blank"></div>
  
</div>
  </div>
  

</div>
</div>
</div>
<div class="blank5"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>
