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
<div class="header">
  <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
          <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,ecmoban_common.js')); ?> 
   <div class="r1 w1225 " style="position:relative; z-index:9999999;">
   <div class="le">
      <a href="" class="ico c__sina" title="新浪微博"></a>
      <!--div class="weixin f_l">
      <a  class="wei" onmouseover="this.className='wei wei_on'" onmouseout="this.className='wei'" >
     
      </a></div-->
     <span class="sLine"></span>
      <span class="tFav">
      <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)" class="f12 c666">收藏</a>
      </span><span class="sLine"></span>
    </div>
    
   <div class="ri"  style="position:relative">
      <span class="ico c__phone"></span>
      <span class="tTel">400-859-7333</span>
      <span class="sLine"></span>
      <span class="tLnk1" id="member_info" style=" float:left; display:inline; padding-right:50px">
     
          <font id="ECS_MEMBERZONE" style="height:25px; float:left">
          <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> <a  href="user.php" class="f12"style="float:left; display:inline;">会员中心</a></font>
          

      </span>
  <div class="shop_txt_out" id="ECS_CARTINFO"  style="display:inline; position:absolute;right:30px; float:left;*width:80px; z-index:999999999999999999"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
     </div>
   </div>

  <div class="headBody">
     <div class="r2 w1225">
       
       <div class="headBox">
      <div class="logo"><a href="index.php" name="top" class="c_logo"><img src="themes/wanbiao/images/logo.gif" /></a></div>
      
      <div id="search"  class="headSearch">
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
          <div class="headSearch_input">
            <input name="keywords" type="text" id="keyword" value="搜索 品牌/系列/型号" onclick="javascript:if(this.value=='搜索 品牌/系列/型号')this.value=''"  />
          </div>
          <div class="headSearch_btn">
            <input name="imageField" type="submit" value=""  style="cursor:pointer;" />
          </div>
        </form>
      </div>
      
      <div class="wbPt ">
          <div id="slideBox_h" class="slideBox_h">
			<div class="hd">
				<ul><li></li><li></li><li></li><li></li></ul>
			</div>
			<div class="bd_h">
				<ul>
				<li><a href="/allcate.php" target="_blank">奢侈品权威推荐</a></li>
					<li><a href="/article.php?id=18" target="_blank">中国最权的鉴定机构</a></li>
                    <li><a href="/article.php?id=43" target="_blank">100%原装正品 全球联保</a></li>
                    <li><a href="/article.php?id=48" target="_blank">终身售后服务 值得信赖 </a></li>
				</ul>
			</div>
          
		</div>
          <script type="text/javascript">
		jQuery(".slideBox_h").slide({mainCell:".bd_h ul",autoPlay:true});
		</script>
      </div>    
    </div>
       
       </div>
     
      
      
</div>

   
  <div class="headNav" style=" width:1225px; position:relative; z-index:9999 ">
      <div class="daohangs">
      <div class="classNav"> <a class="classNav_a" href="allcate.php"><span class="c__category"></span>博时轩名品分类</a> </div>
     <div class="left_nav left_nav_s" style="position:absolute; margin-top:37px; left:0px; z-index:9999">
        <div class="leftNav" id="J_mainCata">
          <ul>
            <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories_pro']['iteration']++;
?>
            <li>
              <p class="leftNav_p0<?php echo $this->_foreach['categories_pro']['iteration']; ?>"><a class="a1" href="<?php echo $this->_var['cat']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></p>
              <div class="childer_hide" >
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                <a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 210px; display: block; top: 0px;">
        

          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			          <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <div class="leftSubNav_left_txt">
                <p class="p1" style=" background:none;"><a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></p>
                <dl>
                  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                  <dd><a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></dd>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				  <div class="blank"></div>
                </dl>
              </div>
			     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                <?php $_from = $this->_var['cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <dd class="pin" onmouseover="this.className='pin pin_on'" onmouseout="this.className='pin'">
                  <?php if ($this->_var['brand']['brand_logo']): ?>
                   <p class="pin_m"><a href="<?php echo $this->_var['brand']['url']; ?>" target="_blank" class="pin_img" ><img border="0" width="78" height="38" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> (<?php echo $this->_var['brand']['goods_num']; ?>)" /></a>
                   <span class="red_y"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></span></p>
                  <?php endif; ?>
                </dd>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        
        
      </div>
    </div>
      
      <div class="subNav">
        <ul>
          <li> <a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
          <li ><a href="<?php echo $this->_var['nav']['url']; ?>" ><?php echo $this->_var['nav']['name']; ?></a>
      
          
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div class="wbPt2">
      <i class="c__corner"></i>
      <ul class="p1 c__fun">
        <li><a href="/brand.php" target="_blank" rel=" nofollow">品牌授权</a></li>
        <li><a href="/article.php?id=48" target="_blank" rel=" nofollow">全球联保</a></li>
        <li><a href="/article.php?id=38" target="_blank" rel=" nofollow">银行分期</a></li>
      </ul>
    </div>
       
      
  </div>

  
  </div>
  
  
  
  
  
  
  
  
  