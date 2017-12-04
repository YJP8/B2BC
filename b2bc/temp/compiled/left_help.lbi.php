<?php if ($this->_var['helps']): ?>
<div class="sideMenu" style="margin:0 auto">

<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat']):
?>
<div class="clearfix" style="margin-bottom:10px;">
			<h2><a  href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></h2>
			<ul>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
				<li><a <?php if ($this->_var['id'] == $this->_var['item']['article_id']): ?> class="sell" <?php endif; ?> href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"> <?php echo $this->_var['item']['short_title']; ?></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul></div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		

		</div>
<?php endif; ?>
		
        