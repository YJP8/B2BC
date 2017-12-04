<?php $_from = $this->_var['ad_res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ads_0_45078000_1505233654');if (count($_from)):
    foreach ($_from AS $this->_var['ads_0_45078000_1505233654']):
?>
<?php if ($this->_var['ads_0_45078000_1505233654']['media_type'] == 0): ?>
<?php if ($this->_var['media_type'] == 'li'): ?>
<li><a href="affiche.php?ad_id=<?php echo $this->_var['ads_0_45078000_1505233654']['ad_id']; ?>&amp;uri=<?php echo $this->_var['ads_0_45078000_1505233654']['link']; ?>" target="_blank"><img src="<?php echo $this->_var['ads_0_45078000_1505233654']['src']; ?>" width="<?php echo $this->_var['ads_0_45078000_1505233654']['ad_width']; ?>" height="<?php echo $this->_var['ads_0_45078000_1505233654']['ad_height']; ?>" border="0" /></a></li>
<?php else: ?>
<a href="affiche.php?ad_id=<?php echo $this->_var['ads_0_45078000_1505233654']['ad_id']; ?>&amp;uri=<?php echo $this->_var['ads_0_45078000_1505233654']['link']; ?>" target="_blank"><img src="<?php echo $this->_var['ads_0_45078000_1505233654']['src']; ?>" width="<?php echo $this->_var['ads_0_45078000_1505233654']['ad_width']; ?>" height="<?php echo $this->_var['ads_0_45078000_1505233654']['ad_height']; ?>" border="0" /></a>
<?php endif; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>