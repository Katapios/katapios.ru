<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <div align="left" style="padding:0px 20px">
<p><b>ID-��������</b> <?=$page_id?></p>
<p><b>�������� ��������:</b> <?=$title?></p>
<p><b>���� ����������:</b> <?=date ('j.m.Y H:i',$date)?></p>
<p><b>����������:</b> <?=($showed == 1)?'��':'���'?></p>
</div>

<p><?=anchor ('admin/ulpages/edit/'.$page_id,'������������� ��������')?></p>

<p><?=anchor ('admin/ulpages/del/'.$page_id,'������� ��������')?></p>

<p><?=anchor ('admin/ulpages','��������� � ������ �������')?></p>
 
 
 </p> 
        
<p><a href="#top">������</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->