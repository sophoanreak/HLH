<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Calculus: Infinite Limit</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=infinitelimit&subhomepage=infinitelimitsub" <?php echo $infinitelimitsubV;?> >Infinite Limits</a> | 
					
					
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "infinitelimitsub":
							include "infinitelimitsub.php";
							break;
						
						default:
							include "infinitelimitsub.php";
					}
			}else {include "infinitelimitsub.php";}
			
		?>

			
</html>
	
	


	
	