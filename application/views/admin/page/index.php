<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <? if (!empty ($list)): ?>

<table width="500" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>
<td id="tdh" width="100"><b><?=anchor ('admin/pages/sort/page_id','ID-��������')?></b></td>
<td id="tdh" ><b><?=anchor ('admin/pages/sort/title','�������� ��������')?></b></td>
<td id="tdh" ><b><?=anchor ('admin/pages/sort/keywords','�������� ����� ��� �����������')?></b></td>
<td id="tdh" width="130"><b><?=anchor ('admin/pages/sort/date','���� ����������')?></b></td>
<td id="tdh" width="80"><b><?=anchor ('admin/pages/sort/showed','����������')?></b></td>

</tr>

<? foreach ($list as $one): ?>

<tr>

<td><?=anchor ('admin/pages/show/'.$one['page_id'],$one['page_id']);?></td>
<td><?=$one['title']?></td>
<td><?=$one['keywords']?></td>
<td><font color="#003333"><?=date('j.m.Y H:i',$one['date'])?></font></td>
<td><font color="#003366"><?=($one['showed']==1)?'��':'���'?></font></td>

</tr>

<? endforeach; ?>

</table>

<p align="center"><?=$page_links?></p>

<? else: ?>

��� �������

<? endif; ?>

<?=form_open ('admin/pages/search')?>

<table align="center" border="0">

<tr>
<td>�����:<br><input type="text" name="str" value=""></td>
<td><br><select name="field">
<option value="page_id">ID ��������</option>
<option value="title">�������� ��������</option>
<option value="text">����� ��������</option>

</select>
</td>
<tr>
<td><input type="submit" value="�����"></td><td>&nbsp;</td>
</tr>
</tr>

</table>

</form>

<br>

<p><?=anchor ('admin/pages/add','�������� ����� ��������')?></p>
 
 
 </p> 
        
<p><a href="#top">������</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->