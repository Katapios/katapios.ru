<div id="topmenu">       
       
       
       <div id="lm"></div>
       
       <div id="mm">
       
       
       <div id="abpro"><a href="<?= base_url()?>about"></a></div>
       <div id="elpro"><a href="<?= base_url()?>elterus"></a></div>

       <div id="ppro"><a href="<?= base_url()?>partners"></a></div>
       <div id="acpro"><a href="<?= base_url()?>media""></a></div>
       
       
       
       
       </div>
       
       <div id="rm"></div>      
     
       
       
       </div> 
        
	</div><!-- #header-->
    <div id="middle">

		<div id="container">
			<div id="content">
            <div id="prfon">
            
            
            
<div id="new_menu">
            
<? foreach ($page as $one): ?>

<ul>

<li><?=anchor ('pages/show/'.$one['page_id'],$one['title']);?></li>

</ul>

<? endforeach; ?>          
            
</div>         
            
            
            </div>