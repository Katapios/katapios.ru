<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
                
 <p>
 
 
<?=$validation_errors?> 
<?=form_open ('admin/news/edit/'.$news_id); ?>
<?=show_tinymce();?>


<table border="0" width="600" align="left" cellspacing="4">


<tr>
<td align="right">
	<b>�������� ��� �������:</b>
</td>

<td align="left">
	<input type="text" name="title" value="<?=set_value ('title',$title)?>">
</td>
</tr>

<tr>
<td align="right">
	<b>�������� ����� ��� �������:</b>
</td>

<td align="left">
	<input type="text" name="keywords" value="<?=set_value ('keywords',$keywords)?>">
</td>
</tr>


<tr>
<td colspan="2" align="center">
<br />
<b>����� �������:</b>
<br /><br />
<textarea  name="announs" cols="60" rows="12"><?=set_value ('announs',$announs)?>
</textarea>
<br />
</td>
</tr>


<tr>
<td colspan="2" align="center">
<br />
<b>����� �������:</b>
<br /><br />
<textarea  name="text" cols="60" rows="12"><?=set_value ('text',$text)?>
</textarea>
<br />
</td>
</tr>



<tr>
<td align="right">
	<b>���� �������:</b>
</td>

<td align="left">
	<input type="text" name="date" value="<?=set_value ('date',$date)?>">
</td>
</tr>



<tr>

<td align="right">&nbsp;
	
</td>

<td align="left">
	<input type="submit" value="��������� ���������">
</td>
</tr>


</table>

</form>
 
 </p> 
        
<p><a href="#top">������</a></p> 
              
			</div><!-- #content-->
		</div><!-- #container-->