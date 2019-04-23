<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
 <?=$validation_errors?> 
<?=form_open ('admin/ulpages/add'); ?>
<?=show_tinymce();?>
<table border="0" width="600" align="left" cellspacing="4">

<tr>
<td align="right">
	<b>ID для страницы:</b>
</td>

<td align="left">
	<input type="text" name="page_id" value="<?=set_value ('page_id')?>">
</td>
</tr>

<tr>
<td align="right">
	<b>Название страницы:</b>
</td>

<td align="left">
	<input type="text" name="title" value="<?=set_value ('title')?>">
</td>
</tr>


<tr>
<td align="right">
	<b>Ключевые слова для продвижения:</b>
</td>

<td align="left">
	<input type="text" name="keywords" value="<?=set_value ('keywords')?>">
</td>
</tr>





<input type="hidden" name="date" value="<?=set_value ('date',time())?>">

<tr>
<td align="right">
	<b>Показывать:</b>
</td>

<td align="left">
	<input type="checkbox" name="showed" value="1" <?=set_checkbox ('showed',1,TRUE)?>>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<br />
<b>Текст страницы:</b>
<br /><br />
<textarea name="text" cols="60" rows="12"><?=set_value ('text','Текст страницы')?>
</textarea>
<br />
</td>
</tr>

<tr>
<td align="right">&nbsp;
	
</td>


<td align="left">
	<input type="submit" value="Добавить">
</td>
</tr>


</table>

</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br /><br />
 
 
 </p> 
        
<p><a href="#top">Наверх</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->