<div class="foot_flow">
  <div class="help r1">
     
    <?php if ($this->_var['helps']): ?> 
    
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
    <dl class=" w188">
      <dt><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
      <dd class=" w110"><?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?> 
        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    <?php endif; ?> 
  </div>
  
  
  
  
  
  
</div>



