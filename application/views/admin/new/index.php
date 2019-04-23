<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <? if (!empty ($list)): ?>

<table width="780" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>

<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/title','Название новости')?></b></td>
<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/keywords','ключевые слова новости')?></b></td>
<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/announs','анонс новости')?></b></td>

<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/date','дата новости')?></b></td>
<td id="tdh" width="240"><b><?=anchor ('admin/news/sort/clicks','просмотров новости')?></b></td>
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

Нет записей

<? endif; ?>

<?=form_open ('admin/news/search')?>

<table align="center" border="0">

<tr>
<td>Поиск:<br><input type="text" name="str" value=""></td>
<td><br><select name="field">
<option value="title">название новости</option>
<option value="text">текст новости</option>
<option value="date">дата</option>

</select>
</td>
<tr>
<td><input type="submit" value="Найти"></td><td>&nbsp;</td>
</tr>
</tr>

</table>

</form>

<br>

<p><?=anchor ('admin/news/add','Добавить новость')?></p>
 
 
 </p> 
        
<p><a href="#top">Наверх</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->