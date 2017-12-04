<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header_flow ">

    <div class="heads_flow">
      
      <div class="user_control">
       
          <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
          <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,ecmoban_common.js')); ?> 
          
          <p class="tel400 ps">全国客服电话: <span>400-859-7333</span></p>
          <p class="ps">&nbsp;|&nbsp;</p>  
           <span class="tLnk1" id="member_info" style=" float:left; display:inline; padding-right:100px">
          <font id="ECS_MEMBERZONE" style="height:25px; float:left;">
          <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> <a  href="user.php" class="f12"style="float:left; display:inline;">会员中心</a></font></span>
          <p class="ps">&nbsp;&nbsp;&nbsp;</p>
       
          <div class="shop_txt_out" id="ECS_CARTINFO"  style="display:inline; position:absolute;right:30px; float:left;*width:80px; z-index:999999999999999999"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
        
      </div>
    </div>
    
    
 
</div>
