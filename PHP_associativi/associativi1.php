<?php

$giocatori = array(
   array('nome'=>'Marco','vincita'=>10,'importo'=>0),
   array('nome'=>'Franco','vincita'=>20,'importo'=>0),
   array('nome'=>'Giorgio','vincita'=>34,'importo'=>0),
   array('nome'=>'Piero','importo'=>0),
   array('nome'=>'Gianni','vincita'=>13,'importo'=>0)
);

$giocatori[6]['nome']="Arturo";
$giocatori[6]['vincita']=18;
$giocatori[6]['importo']=0;
?>

<HTML>
<BODY>

<?php
echo "<table border='1'>";
//for($i=0;$i<count($giocatori);$i++)
for($i=0;$i<=6;$i++)
{
   if(isset($giocatori[$i]))
   {	   
      echo "<tr>";	
      echo "<td>".$giocatori[$i]['nome']."</td>";
	  if(isset($giocatori[$i]['vincita']))
         echo "<td>".$giocatori[$i]['vincita']."</td>";
	  else
	  	 echo "<td>&nbsp;</td>"; 
      //echo "<td>".$giocatori[$i]['importo']."</td>";
      echo "</tr>";
   }
   else
   {
      echo "<tr>";	
      echo "<td>mancante</td>";
      echo "</tr>";
   }	   
}	
echo "</table>";
?>

</BODY>
</HTML>

