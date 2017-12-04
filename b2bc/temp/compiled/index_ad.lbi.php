
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.pack.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.SuperSlide.js"></script>
<div id="slideBox" class="slideBox">
  <div class="hd ">
    <ul>
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
 
    </ul>
  </div>
  <div class="bd">
    <ul>
      <li class="li_1" >
        <div class="banner_main_con"> <a href="brand.php?id=88" target="_blank" class="main_banner_a"></a></div>
      </li>
      <li class="li_2">
	  <div class="banner_main_con"> <a href="brand.php?id=89" target="_blank" class="main_banner_a"></a>
          </div>
		</li>
       
      <li class="li_4" >
	 <div class="banner_main_con"> <a href="brand.php?id=83" target="_blank" class="main_banner_a"></a></div>    
	  </li>
      <li class="li_5" >
	 <div class="banner_main_con"> <a href="brand.php?id=87" target="_blank" class="main_banner_a"></a>  </div>    
	  </li>
       <li class="li_6" >
	 <div class="banner_main_con"> <a href="brand.php?id=77" target="_blank" class="main_banner_a"></a></div>    
	  </li>
    
    </ul>
  </div>
</div>
<script type="text/javascript">
		
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,delayTime:700});
		
</script>
