<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <? if (!empty ($list)): ?>

<table width="500" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>
<td id="tdh" width="100"><b><?=anchor ('admin/ulpages/sort/page_id','ID-страницы')?></b></td>
<td id="tdh" ><b><?=anchor ('admin/ulpages/sort/title','Название страницы')?></b></td>
<td id="tdh" ><b><?=anchor ('admin/ulpages/sort/keywords','Ключевые слова для продвижения')?></b></td>
<td id="tdh" width="130"><b><?=anchor ('admin/ulpages/sort/date','Дата добавления')?></b></td>
<td id="tdh" width="80"><b><?=anchor ('admin/ulpages/sort/showed','Показывать')?></b></td>

</tr>

<? foreach ($list as $one): ?>

<tr>

<td><?=anchor ('admin/ulpages/show/'.$one['page_id'],$one['page_id']);?></td>
<td><?=$one['title']?></td>
<td><?=$one['keywords']?></td>
<td><font color="#003333"><?=date('j.m.Y H:i',$one['date'])?></font></td>
<td><font color="#003366"><?=($one['showed']==1)?'Да':'Нет'?></font></td>

</tr>

<? endforeach; ?>

</table>

<p align="center"><?=$page_links?></p>

<? else: ?>

Нет записей

<? endif; ?>

<?=form_open ('admin/ulpages/search')?>

<table align="center" border="0">

<tr>
<td>Поиск:<br><input type="text" name="str" value=""></td>
<td><br><select name="field">
<option value="page_id">ID страницы</option>
<option value="title">Название страницы</option>
<option value="text">Текст страницы</option>

</select>
</td>
<tr>
<td><input type="submit" value="Найти"></td><td>&nbsp;</td>
</tr>
</tr>

</table>

</form>

<br>

<p><?=anchor ('admin/ulpages/add','Добавить новую страницу')?></p>
 
 
 </p> 
        
<p><a href="#top">Наверх</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->