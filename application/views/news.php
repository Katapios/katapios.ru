<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
<ul>
<li><?=$news_text['text'];?></li>
<li>дата публикации: <?=$news_text['date'];?></li>
<li>количество просмотров: <?=$news_text['clicks'];?> человек(а)</li>
<li><?=anchor('pages/news','архив новостей',array('title' => 'список всех новостей'));?></li>
            
</ul>         
        

              
			</div><!-- #content-->
		</div><!-- #container-->