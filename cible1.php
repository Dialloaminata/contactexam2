
<?php

$personne=array(

'nom :'=>'Diallo',
'prenom :'=>'Aminata',
'adresse :'=>'Baobab',
'profession :'=>'Etudiante'

);

?>
<!DDOCTYPE HTML>
    <HTML lang='fr'>
	  <head>
	     <title>Mon formulaire </title>
		  <style>
		  table,tr,td,th{
			  border:3px solid black ;
			  border-radius:15px  15px 15px ;
			  font-size:35px ;
			  
			  
		  }
		 body{ background:#E9967A;;
		 }
		 </style>
		 </head>
		 
		 <body><center style=" padding-top:8%;">
<table>
<th colspan="2"><a href="na1.JPG"><img src="na1.JPG" 
heigh : 3px ;
width: 3px ;

"/></a></th>
		
		<?php foreach ($personne as $key => $value): ?>
<tr>
<td><?php echo $key;?></td>
<td><?php echo $value;?></td>
</tr>
<?php endforeach ?>
</table>
</center>
<p id="buttons">
  <input type="submit" value="Envoyer" />
  <input type="reset" value="Recommencer" />
</p>
</form>
</body>
</html>


	
		 </body>
		 </HTML>
		 