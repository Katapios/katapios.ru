<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <div align="left" style="padding:0px 20px">
<p><b>�������� �������:</b> <?=$title?></p>
<p><b>�������� �������:</b> <?=$announs?></p>
<p><b>����: </b> <?=$date?></p>
<p><b>������ ��� ��������:</b> <?=base_url().'go/'.$news_id?></p>
<p><b>������:</b> <?=$clicks?></p>
</div>

<p><?=anchor ('admin/news/edit/'.$news_id,'������������� �������')?></p>

<p><?=anchor ('admin/news/del/'.$news_id,'������� �������')?></p>

<p><?=anchor ('admin/news','��������� � ������ ��������')?></p>
 
 
 </p> 
        
<p><a href="#top">������</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->