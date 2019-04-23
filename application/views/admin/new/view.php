<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <div align="left" style="padding:0px 20px">
<p><b>название новости:</b> <?=$title?></p>
<p><b>Описание новости:</b> <?=$announs?></p>
<p><b>дата: </b> <?=$date?></p>
<p><b>Ссылка для перехода:</b> <?=base_url().'go/'.$news_id?></p>
<p><b>Кликов:</b> <?=$clicks?></p>
</div>

<p><?=anchor ('admin/news/edit/'.$news_id,'Редактировать новость')?></p>

<p><?=anchor ('admin/news/del/'.$news_id,'Удалить новость')?></p>

<p><?=anchor ('admin/news','Вернуться к списку новостей')?></p>
 
 
 </p> 
        
<p><a href="#top">Наверх</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->