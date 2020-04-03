<?php
    /*
     Program for Rock Paper Scissors
     Executed by: Ritesh Pawar
     Executed on: 03/04/2020  6:05:00
     PHP using WampServer
  */  
     // This is repeated 50 times
        
      for($i=0;$i<50;$i++)  //For loop
       {
        $Choosefrom1= array('Rock', 'Paper', 'Scissors');
         
        //Select Random Choices
        $Choice1= rand(0,2);    
        $Choice2= rand(0,2);
        $Choice3= rand(0,2);
      
        //Allocating Choices to players
        $Computer1=$Choosefrom1[$Choice1];   
        $Computer2=$Choosefrom1[$Choice2];
        $Computer3=$Choosefrom1[$Choice3];
         
           //Selecting The winner based on the criterion and print result for each round
           if($Computer1 =="Rock" && $Computer2!="Rock" && $Computer3!="Rock")   //if condition
              {
               echo"<br><br>";
               echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Player1 Win';
              } 
            elseif($Computer2 =="Rock" && $Computer1!="Rock" && $Computer3!="Rock")
              {
               echo"<br><br>";
               echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Player2 Win';
              } 
           elseif($Computer3 =="Rock" && $Computer1!="Rock" && $Computer2!="Rock")
              {
                echo"<br><br>";
               echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Player3 Win';
              } 
           elseif($Computer1 =="Scissors" && $Computer2!="Rock" && $Computer3!="Rock" && $Computer2!="Scissors" && $Computer3!="Scissors")
              {
                echo"<br><br>";    
                echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Player1 Win';
               }
                  
           elseif($Computer2 =="Scissors" && $Computer1!="Rock" && $Computer3!="Rock" && $Computer1!="Scissors" && $Computer3!="Scissors")
              {
               echo"<br><br>";
               echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Player2 Win';
              }
          elseif($Computer3 =="Scissors" && $Computer1!="Rock" && $Computer2!="Rock" && $Computer1!="Scissors" && $Computer2!="Scissors")
             {
              echo"<br><br>";
              echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Player3 Win';
             }
         else
             {
             echo"<br><br>";
             echo 'Player1: '.$Computer1.' Player2: '.$Computer2.' Player3: '.$Computer3.'  Result:Match Tie';
             }
           
       
         } //end for
?>