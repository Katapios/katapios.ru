<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
<div>

<ul>

<li><? foreach($news_all as $item):?></li>
<li><span style=""><?=$item['title'];?></span></li>
<li><?=$item['announs'];?></li>
<li><span style=""><?=anchor('pages/event/'.$item['news_id'],'читать далее',array('title' => $item['title']));?></span></li>
<br />

</ul>
<?endforeach;?>
</div>
<div><?=$page_links;?></div>
        
<p><a href="#top">Наверх</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->