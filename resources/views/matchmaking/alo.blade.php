<?php
$loages=$_POST['agestart'];
$loagee=$_POST['ageend'];
$logender = $_POST['gender'];
$lolocation = $_POST['location'];
$loethnic=$_POST['ethnic'];
$lohaircolor = $_POST['haircolor'];
$loeyecolor = $_POST['eyecolor'];
$loskincolor = $_POST['skincolor'];
$lohobbies = $_POST['hobbies'];
$lorelationship=$_POST['relationship'];

 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "localtest";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

     $SELECT = "select name from  usersinfo";
     $result = mysqli_query($conn, $SELECT);
     $alluers=array();
     
  
      
      
    while($row=mysqli_fetch_array($result)) 
    {
    	
    	$alluers[]=$row['name'];
    	
    	$columns_count = count($alluers);
    	
    }
    
		  $i=0;
		
		 $matchmark=array();
		  while($i<$columns_count){
		  	
		  	  $sname="select * from usersinfo where name='$alluers[$i]'";
		 $resultalg = mysqli_query($conn, $sname);
		  	while($row2=mysqli_fetch_array($resultalg)) 
   			 {
   			 	$a=0;
   			 	$l=0;
   			 	$et=0;
   			 	$g=0;
   			 	$h=0;
   			 	$ec=0;
   			 	$s=0;
   			 	$r=0;
   			 	
   			 	if($loages<= $row2['gender'] && $row2['gender']<=$loagee){
   			 		$a=$a+50;
   			 	}else if($loagee<= $row2['gender'] && $row2['gender']<=$loages){
   			 		$a=$a+50;
   			 	}else {
   			 		$a=$a+0;
   			 	}
   			 	
   			 	if($logender!=$row2['gender'] ){
   			 		$g=$g-1000;
   			 	}else{
   			 		$g=$g+0;
   			 	}
   			 	
   			 	if($lolocation!=$row2['location'] ){
   			 		$l=$l-1000;
   			 	}else{
   			 		$l=$l+0;
   			 	}
   			 	if($loethnic==$row2['ethnic']){
   			 		$et=$et+20;
   			 	}else{$et=$et+10;}

   			 	if($lohaircolor==$row2['haircolor']){
   			 		$h=$h+20;
   			 	}else{$h=$h+10;}
   			 	
   			 	if($loeyecolor==$row2['eyecolor']){
   			 		$ec=$ec+20;
   			 	}else{$ec=$ec+10;}
   			 	
   			 	if($loskincolor==$row2['skincolor']){
   			 		$s=$s+100;
   			 	}else{$s=$s+10;}
   			 	
   			 	if($lorelationship==$row2['relationship']){
   			 		$r=$r+20;
   			 	}else{$r=$r+10;}
   			 	
   			 	if($lohobbies==$row2['hobbies']){
   			 		$hb=$hb+20;
   			 	}else{$hb=$hb+0;}
   			 	
   			 	$j=($a+$l+$g+$h+$et+$ec+$s+$r+$hb)/2.3;
   			 	
   			 	
   			 	$matchmark[$alluers[$i]]=$j;
    		}
		  	
		  	$i++;
		  }
		   arsort($matchmark);
		  
		  $z=0;
		  
            
		  echo"<h1>";
		  	echo"lovebug matchmaking result";
		  	echo"</h1>";
		  	echo"Hobbies will give a extra mark so the suitability may out of 100.";
		  foreach ($matchmark as $matchname => $markscore){  
		  	 $matchingname="select * from usersinfo where name='$matchname'";
		  	 $resultmatching= mysqli_query($conn, $matchingname);
		  	 $row3=mysqli_fetch_array($resultmatching);
		  	
		  	if ($z++ > 20) break;
		  	
		  	
		  	
		  	 	echo"<table border='2' >";
       				echo"<td style='background-color: #C6CDFF;'>";
       			echo"Your matching suitability with ";
       			echo"$matchname is";
       			
       				echo" $markscore";
       				echo"%";
       			echo"</td>";
       		
       	echo"</tr>";
       	
       	
       	echo"</table>";
       	echo"<br>";

       echo"<table border='1'style='text-align:center'>";
       	echo"<tr>";
       	
       		
       		echo"<td style='background-color: #70AFCE;'>";
       			echo"your top $z match is:";
       			echo"</td>";
       			
       				echo"<td style='background-color: #A5DEF1;'>";
       				echo"$matchname";
       			echo"</td>";
       				echo"</tr>";
       	echo"</tr>";
       			
       			echo"<td style='background-color: #70AFCE;'>";
       			echo"Gender: ";
       			echo"</td>";
       			
       			echo"<td style='background-color: #A5DEF1;'>";
       				print_r($row3['gender']) ;
       			echo"</td>";
       		
       	echo"</tr>";
       	echo"</tr>";
       			
       			echo"<td style='background-color: #70AFCE;'>";
       			echo"Age: ";
       			echo"</td>";
       			
       				echo"<td style='background-color: #A5DEF1;'>";
       				print_r($row3['age']) ;
       			echo"</td>";
       		
       	echo"</tr>";
       	
       	 	echo"</tr>";
       			
       			echo"<td style='background-color: #70AFCE;'>";
       			echo"Location: ";
       			echo"</td>";
       			
       				echo"<td style='background-color: #A5DEF1;'>";
       				print_r($row3['location']) ;
       			echo"</td>";
       		
       	echo"</tr>";
       	
       	 	echo"</tr>";
       			
       			echo"<td style='background-color: #70AFCE;'>";
       			echo"hair color: ";
       			echo"</td>";
       			
       			echo"<td style='background-color: #A5DEF1;'>";
       				print_r($row3['haircolor']) ;
       			echo"</td>";
       			
       			 	echo"</tr>";
       			
       			echo"<td style='background-color: #70AFCE;'>";
       			echo"Eye color: ";
       			echo"</td>";
       			
       				echo"<td style='background-color: #A5DEF1;'>";
       				print_r($row3['eyecolor']) ;
       			echo"</td>";
       			
       			 	echo"</tr>";
       			
       		echo"<td style='background-color: #70AFCE;'>";
       			echo"Skin color: ";
       			echo"</td>";
       			
       				echo"<td style='background-color: #A5DEF1;'>";
       				print_r($row3['skincolor']) ;
       			echo"</td>";
       		
       	echo"</tr>";
       	 	echo"</tr>";
       	 	echo"</table>";
       	echo"<br>";
       	
      
       		echo"<br>";	
       		
 
       		
      
       	
       	


   	
} 
		  
		
		  
		

    
?>
