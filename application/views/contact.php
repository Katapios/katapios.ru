<div id="middle">

		<div id="container">
			<div id="content">
				
                <h3> <?=$page_title;?> </h3>
 <br />   <br />    <br />          
 <p>  
 
 <?=form_open ('contact')?>

<table align="left" width="100" border="0">

<tr>
<td align="right"><b>��� e-mail:</b></td>

<td>
  <input type="text" name="email" size="42" value="<?=set_value ('email')?>">
</td>
</tr>

<tr>
<td align="right"><b>���� ���������:</b></td>

<td>
  <input type="text" name="subject" size="42" value="<?=set_value ('subject')?>">
</td>
</tr>

<tr>
<td align="right"><b>����� ������:</b></td>

<td>
  <textarea name="text" rows="12" cols="44"><?=set_value ('text')?></textarea>
</td>
</tr>

<tr>

<td align="right"><b>��������� ���:</b></td>
<td> <p><?=$imgcode?></p> <input type="text" name="captcha" size="12" value="">  </td>


</tr>

<tr>

<td>
  <input type="submit" value="��������� ������">
</td>
</tr>



</table>



</form>


 
 </p> 
<br /> 
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />       
<p><a href="#top">������</a></p>
              
			</div><!-- #content-->
            
		</div><!-- #container-->