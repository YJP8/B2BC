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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_index.lbi'); ?>
<div class="idxBnr"><?php echo $this->fetch('library/index_ad.lbi'); ?></div>
<div class="idxBnd"><?php echo $this->fetch('library/index_ad_b.lbi'); ?>
</div>
<div class="block hot">
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

  <div class="idxSet"><?php echo $this->fetch('library/pinpai_ad.lbi'); ?></div>
</div>
<div id="classicSet" class="idxSet classicSet"> 
<?php echo $this->fetch('library/cat_goods_title1.lbi'); ?>
  <div class="tBdy w1225" id="clsiCon"> 
<?php $this->assign('cat_goods',$this->_var['cat_goods_146']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_146']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_147']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_147']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 </div>
</div>
</div>




<script type="text/javascript">
		$("#classicSet .cat_slide").slide({titCell:".cat_goods_item",mainCell:".tMnSet ul",vis:4,scroll:4,prevCell:".bx-prev",nextCell:".bx-next",effect:"leftLoop",startFun:function(){
					$(".cat_slide li").mouseenter(function(){
			
						$(this).find(".tMsk").show();	
					})
					
					$(".cat_slide li").mouseleave(function(){
						$(this).find(".tMsk").hide();
					})
					
					
				}	
			});

			/* 外层tab切换 */
			$("#classicSet").slide({titCell:"#clsiTit li",mainCell:"#clsiCon",titOnClassName:"curr"});

</script>
<div class="blank5"></div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
$(function(){
	
	$(".wbPt").find("dl").hover(function() {
        $(this).animate({
            top: "-150px"
        },
        500, "swing")
    },
    function() {
        $(this).stop(!0, !1).animate({
            top: "0px"
        },
        500, "swing")
    })
	

    $(".c__dimension, .i__weixin").mouseenter(function() {
        $(this).after('<div class="qrcode"><img src="themes/wanbiao/images/qrcode.gif" ></div>')
    }).mouseleave(function() {
        $(".qrcode").remove()
    })

	
})
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>

</body>
</html>
