<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <? if (!empty ($list)): ?>

<table width="780" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>

<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/title','�������� �������')?></b></td>
<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/keywords','�������� ����� �������')?></b></td>
<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/announs','����� �������')?></b></td>

<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/date','���� �������')?></b></td>
<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/clicks','���������� �������')?></b></td>
</tr>


<? foreach ($list as $one): ?>

<tr>

<td><?=anchor ('admin/news/show/'.$one['news_id'],$one['title']);?></td>
<td><?=$one['keywords']?></td>
<td><?=$one['announs']?></td>

<td><?=$one['date']?></td>
<td><?=$one['clicks']?></td>
</tr>

<? endforeach; ?>

</table>

<p align="center"><?=$page_links?></p>

<? else: ?>

��� �������

<? endif; ?>

<?=form_open ('admin/news/search')?>

<table align="center" border="0">

<tr>
<td>�����:<br><input type="text" name="str" value=""></td>
<td><br><select name="field">
<option value="title">�������� �������</option>
<option value="text">����� �������</option>
<option value="date">����</option>

</select>
</td>
<tr>
<td><input type="submit" value="�����"></td><td>&nbsp;</td>
</tr>
</tr>

</table>

</form>

<br>

<p><?=anchor ('admin/news/add','�������� �������')?></p>
 
 
 </p> 
        
<p><a href="#top">������</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->