<div class="foot">
  <div class="r1 w1225"> <a href="#" class="c__logo2"></a> 
     
    <?php if ($this->_var['helps']): ?> 
    
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
    <dl class=" w188">
      <dt class=" w70" ><i> <a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></i></dt>
      <dd class=" w110"><?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?> 
        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    <?php endif; ?> 
  </div>
  
  
  <div class="foottext"> 
        



    版权所有：浙江博时轩供应链管理有限公司 浙ICP备16028716号&nbsp;&nbsp;
    <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
    <?php if ($this->_var['service_phone']): ?> 
    Tel: <?php echo $this->_var['service_phone']; ?> 
    <?php endif; ?> 
    <?php if ($this->_var['service_email']): ?> 
    E-mail: <?php echo $this->_var['service_email']; ?> 
    <?php endif; ?> 
    <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/wanbiao/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="themes/wanbiao/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />

    <!--div algin="center"></div>
    <div align="center" style="margin-top:5px;"></div-->
  </div>
  <div class="lnks1" id="lnks1"> 
  <a href="#" rel="nofollow" target="_blank"> <img alt="放心消费网站"  src="themes/wanbiao/images/fxxf.gif"></a> 
  <a href="#" rel="nofollow" target="_blank"> <img alt="工商网监" src="themes/wanbiao/images/gzaic.gif"></a>
  <a href="#" rel="nofollow" target="_blank"> <img src="themes/wanbiao/images/eca01.jpg"  border="0"></a> 
  <a href="#" target="_blank" rel="nofollow" > <img src="themes/wanbiao/images/top100.gif"></a>
  <a href="#" target="_blank" rel="nofollow" > <img src="themes/wanbiao/images/etao.jpg" height="35"></a> 
  <a target="_blank" rel="nofollow" href="#"> <img src="themes/wanbiao/images/tenpay.jpg" border="0"></a> 
  <a href="#" id="kx_verify" target="_blank" kx_type="图标式" style="display:inline-block;"> <img src="themes/wanbiao/images/cnnic.png" style="border:none;" oncontextmenu="return false;" alt="可信网站"> </a>
   <a id="___szfw_logo___" href="#" target="_blank"> <img src="themes/wanbiao/images/cert.png" style="height:35px;"></a></div>
  

  
</div>
<div id="topcontrol" style="width:78px; height:112px;">
  <div id="return"> <a id="sider_returntop" href="javascript:void(0);" class="c__gotop sider_returntop" style="display: block;"></a> <a href="#" class="c__suggest" title="建议有奖" target="_blank" rel="nofollow"></a></div>
</div>
<div id="kf" style="display: none; ">
  <div class="context"><a href="javascript:void(0);" class="close" title="客服" rel="nofollow">&nbsp;</a>
    <div class="space"></div>
     <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <span title="购买咨询" class="kf_btn01"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['im']; ?>&site=qq&menu=yes" target="_blank">购买咨询</a></span> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
   
    <span title="售后服务" class="kf_btn02"><a href="#">售后服务</a></span><span title="礼品采购" class="kf_btn03"><a href="#">礼品采购</a></span></div>
</div>
<div id="kfs" style="display: block; ">
  <div class="context"><a href="javascript:void(0);" class="show" title="客服" rel="nofollow">&nbsp;</a></div>
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}

	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);
			
			if(isIe6)
			{			
				$("#topcontrol").css("position","absolute")	
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}
		
	});
	
	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
	
	$("#kfs").mouseenter(function(){
		$(this).hide();
		$("#kf").show();	
	})
	
	$("#kf").mouseleave(function(){
		$(this).hide();
		$("#kfs").show();	
	})

})

</script>