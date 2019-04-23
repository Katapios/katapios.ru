<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <div align="left" style="padding:0px 20px">
<p><b>ID-страницы</b> <?=$page_id?></p>
<p><b>Название страницы:</b> <?=$title?></p>
<p><b>Дата добавления:</b> <?=date ('j.m.Y H:i',$date)?></p>
<p><b>Показывать:</b> <?=($showed == 1)?'Да':'Нет'?></p>
</div>

<p><?=anchor ('admin/ulpages/edit/'.$page_id,'Редактировать страницу')?></p>

<p><?=anchor ('admin/ulpages/del/'.$page_id,'Удалить страницу')?></p>

<p><?=anchor ('admin/ulpages','Вернуться к списку страниц')?></p>
 
 
 </p> 
        
<p><a href="#top">Наверх</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->