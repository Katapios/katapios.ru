<div class="sidebar" id="sideLeft">
		
        
        <div style="width: 181px;height: 14px;background-image: url('/img/lmenu_title.gif');background-repeat: no-repeat;"></div>
        <div id="lmenu">
        
       
        <ul id="nav">
        
        <li><a href="<?= base_url()?>about"><span style="color: #ff58e2;">О</span> проекте</a></li>
        
        <li><a href="#" title="Услуги" onclick="return false"><span style="color: #ff58e2;">У</span>слуги</a> 
        
        <ul>
        <? foreach ($page as $one): ?>
        <li><?=anchor ('facilities/'.$one['page_id'],$one['title']);?></li>
        <? endforeach; ?>  
        </ul>         
        
        </li>
        
        <li><a href="<?= base_url()?>book_design"><span style="color: #ff58e2;">З</span>аказать дизайн</a></li>
        <li><a href="<?= base_url()?>portfolio"><span style="color: #ff58e2;">П</span>ортфолио</a></li>
        
       

       


        <? foreach ($pagenew as $one): ?>
        <li><?=anchor ('show/'.$one['page_id'],$one['title']);?></li>
        <? endforeach; ?>  


        <li><a href="<?= base_url()?>pages/contact"><span style="color: #ff58e2;">С</span>вязаться с нами</a></li>

        </ul> 
        
         
        </div>
        

        <script> 
        
        
        
        $(document).ready(function() {

//$('ul#nav a').mouseover(function() {   
    
//$('ul#nav a.active').removeClass('active');
//$(this).addClass('active'); 
//});


$("ul#nav a").each(function ()

{if (this.href == location.href)this.className = "active";

});


   
 
 
  $('ul#nav ul').each(function(index) {
    $(this).prev().addClass('collapsible').click(function() {
        
      if ($(this).next().css('display') == 'none') {

        $(this).next().show(300, function () {
          
        $(this).prev().removeClass('collapsed').addClass('expanded');
        

        });
        

      }else {
        $(this).next().hide(200, function () {
          $(this).prev().removeClass('expanded').addClass('collapsed');
          $(this).find('ul').each(function() {
          $(this).hide().prev().removeClass('expanded').addClass('collapsed');
      
          });          
        });

      }
      
      
      return false;
    });
  });
});




     </script>       
     
     
      
        

        
        
		</div><!-- .sidebar#sideLeft -->