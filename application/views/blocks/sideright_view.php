<div class="sidebar" id="sideRight">        
        
        <div id="infoblock">
        <div id="ult_infoblock"></div><div id="uct_infoblock"></div><div id="urt_infoblock"></div>        
        <div id="ccc_infoblock"><div id="title_infoblock">������</div><p><?php echo $calendar; ?></p></div>        
        <div id="ulb_infoblock"></div><div id="ucb_infoblock"></div><div id="urb_infoblock"></div>
        </div>
        
        <div id="infoblock">
        <div id="ult_infoblock"></div><div id="uct_infoblock"></div><div id="urt_infoblock"></div>        
        <div id="ccc_infoblock"><div id="title_infoblock">�������</div>
        
        <p>
        <? foreach ($news as $one): ?>

<ul style="color: gray;padding-left: 20px; list-style: none;">

<li style=""><?=anchor('pages/event/'.$one['news_id'],$one['title']);?></li>
<li style="margin-bottom: 10px;"><?=$one['announs'];?></li>

</ul>

<? endforeach; ?>


<? if(! empty($news))
{
 echo '<a style="font-size: 9px; color: gray; padding-left: 20px;text-decoration: underline;" href="/pages/news">����� ��������</a>';
}
else
{
    
}
?>           
        </p>
        
        </div>        
        <div id="ulb_infoblock"></div><div id="ucb_infoblock"></div><div id="urb_infoblock"></div>
        </div>
        
        <div id="infoblock">
        <div id="ult_infoblock"></div><div id="uct_infoblock"></div><div id="urt_infoblock"></div>        
        <div id="ccc_infoblock"><div id="title_infoblock">��������</div>
        
        <p style="padding-left: 10px;">����� ��������� �����,<br />����� ������, <br />���: 8(918)668-08-85</p>
        
        
        
        </div>        
        <div id="ulb_infoblock"></div><div id="ucb_infoblock"></div><div id="urb_infoblock"></div>
        </div>
                    

		</div><!-- .sidebar#sideRight -->

	</div><!-- #middle-->

</div><!-- #wrapper -->