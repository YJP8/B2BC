<div class="cat_slide">
  <div class="tShwPic">
  <?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'ad_name' => '左侧广告',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
 </div>
  <div class="tBndSet"><?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'ad_name' => '右侧广告',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <div class="tBndPdtLst">
      <div class="tMnSet">
        <ul>
          <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <li><a class="goods" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" src="<?php echo $this->_var['goods']['thumb']; ?>">
            <div class="tMsk h" style="display:none;"><span><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></span><i>查看详细</i></div>
            </a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>
      <div class="bx-controls bx-has-pager bx-has-controls-direction ">
        <ul class="bx-default-pager cat_goods_item">
        </ul>
        <div class="bx-controls-direction"><a href="javascript:void(0);" class="bx-prev"><span class="c__ls_pointer">&nbsp;</span></a><a href="javascript:void(0);" class="bx-next"><span class="c__rs_pointer">&nbsp;</span></a></div>
      </div>
    </div>
  </div>
</div>
