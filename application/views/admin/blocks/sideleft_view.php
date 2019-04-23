<div class="sidebar" id="sideLeft">
		
        
        <div style="width: 181px;height: 14px;background-image: url('/img/lmenu_title.gif');background-repeat: no-repeat;"></div>
        <div id="lmenu">
        
       
        <ul id="nav">
        

        <li><?=anchor ('/admin/news/index/list','новости');?></li>
        

        <li><?=anchor ('/admin/stats/index/list','неизменные страницы');?></li>
        <li><?=anchor ('/admin/ulpages/index/list','подразделы Услуг');?></li>
        <li><?=anchor ('/admin/pages/index/list','новые страницы');?></li>
        <li><?=anchor ('admin/calendar/index/'.date('Y').'/'.date('m').'/'.'day','календарь')?></li> 
        <li><?=anchor ('/admin/settings','настройки');?></li>       
        <li><?=anchor ('/admin/logout','разлогиниться');?></li>
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
            
            
            
            
            
            
            
            
            