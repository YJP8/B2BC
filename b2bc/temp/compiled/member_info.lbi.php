

<?php if ($this->_var['user_info']): ?>


 <li><font style="float:left"><?php echo $this->_var['lang']['hello']; ?>,</font><font class="f4_b"><a href="user.php" style="float:none; color:#333; font-weight:normal"><?php echo $this->_var['user_info']['username']; ?></a></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！</li>
<li><a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>
<?php else: ?>
 <a href="user.php">登录</a> <a href="user.php?act=register">注册<i class="red">(即赠50元)</i></a>
<?php endif; ?>
