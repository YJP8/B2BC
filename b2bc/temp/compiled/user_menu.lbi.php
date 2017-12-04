<div class="accountSideTop"> <a href="user.php" <?php if ($this->_var['action'] == 'default'): ?>class="curs"<?php endif; ?>> </a> </div>
<div class="floor_user">
<dl class="accountSideOption1">
  <dt class="transaction_manage"><span class="user_1"></span>订单中心</dt>
  <dd>
    <ul>
      <li> <a href="user.php?act=order_list"<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_order']; ?></a></li>
      <li> <a href="user.php?act=address_list"<?php if ($this->_var['action'] == 'address_list'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_address']; ?></a></li>
      <li> <a href="user.php?act=booking_list"<?php if ($this->_var['action'] == 'booking_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_booking']; ?></a></li>
    </ul>
  </dd>
</dl>
<dl class="accountSideOption1">
  <dt class="transaction_manage"><span class="user_2"></span>会员中心</dt>
  <dd>
    <ul>
      <li> <a href="user.php?act=profile"<?php if ($this->_var['action'] == 'profile'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_profile']; ?></a></li>
      <li> <a href="user.php?act=collection_list"<?php if ($this->_var['action'] == 'collection_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_collection']; ?></a></li>
      <li> <a href="user.php?act=message_list"<?php if ($this->_var['action'] == 'message_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_message']; ?></a></li>
      <li> <a href="user.php?act=tag_list"<?php if ($this->_var['action'] == 'tag_list'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_tag']; ?></a></li>
      <li> <?php if ($this->_var['affiliate']['on'] == 1): ?><a href="user.php?act=affiliate"<?php if ($this->_var['action'] == 'affiliate'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_affiliate']; ?></a><?php endif; ?></li>
      <li><a href="user.php?act=comment_list"<?php if ($this->_var['action'] == 'comment_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_comment']; ?></a></li>
    </ul>
  </dd>
</dl>
<dl class="accountSideOption1">
  <dt class="transaction_manage"><span class="user_3"></span>账户中心</dt>
  <dd>
    <ul>
      <li> <a href="user.php?act=bonus"<?php if ($this->_var['action'] == 'bonus'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_bonus']; ?></a></li>
     <!--<a href="user.php?act=group_buy"><?php echo $this->_var['lang']['label_group_buy']; ?></a>-->
      <li> <a href="user.php?act=track_packages"<?php if ($this->_var['action'] == 'track_packages'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_track_packages']; ?></a></li>
      <li> <a href="user.php?act=account_log"<?php if ($this->_var['action'] == 'account_log'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_user_surplus']; ?></a></li>
      <li> <?php if ($this->_var['show_transform_points']): ?> 
        <a href="user.php?act=transform_points"<?php if ($this->_var['action'] == 'transform_points'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_transform_points']; ?></a> 
        <?php endif; ?> 
      </li>
    </ul>
  </dd>
 <div class="logout"> 
<a href="user.php?act=logout" >退出登录</a>
</div>

</dl>
 

</div>