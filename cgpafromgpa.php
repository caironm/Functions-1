<?php 

/* 
    Don't Remove this comment!. 
    
    Anna University CGPA Calc from GPA's
    Input: GPA of n sem, department in short code (eg ECE)
    Output: A float num of cgpa with 4 values after decimal
    Condition: Must be secure Your can create as many as auxillary functions you need. 
    
*/

/*
Update on problem:
    assume the gpa's are in a array
    $_POST['gpa']
    so $_POST['gpa'][0] has 1st sem gpa.. etc.,

*/

// Write your php fucntion below

$sub_code=$_POST['name'];// Edit the codes by matching the name from the form
$sem=$_POST['name'];// Edit by matching the name for the nth sem
$gpa=$_POST['name']
switch($sub_code)
{
    case 1: //ECE
        {if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==2)
         {$cgpa=(26($gpa)+24($gpa))/50;
          echo $cgpa;
          }
         if($sem==3)
         {$cgpa=(26($gpa)+24($gpa)+26($gpa))/76;
          echo $cgpa;
          }
         if($sem==4)
         {$cgpa=(26($gpa)+24($gpa)+26($gpa)+26($gpa))/102;
          echo $cgpa;
          }
         if($sem==5)
         {$cgpa=(26($gpa)+24($gpa)+26($gpa)+26($gpa)+23($gpa))/125;
          echo $cgpa;
          }
         if($sem==6)
         {$cgpa=(26($gpa)+24($gpa)+26($gpa)+26($gpa)+23($gpa)+24($gpa))/149;
          echo $cgpa;
          }
         if($sem==7)
         {$cgpa=(26($gpa)+24($gpa)+26($gpa)+26($gpa)+23($gpa)+24($gpa)+22($gpa))/171;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa)+24($gpa)26($gpa)+26($gpa)+23($gpa)+24($gpa)+22($gpa)+18($gpa))/189;
          echo $cgpa;
          }
   break;}
    case 2: //EEE
        {if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         if($sem==1)
         {$cgpa=(26($gpa))/26;
          echo $cgpa;
          }
         
    
    break;}
    case 3:
        {break;}
    case 4:
        {break;}
    
        function 18($a)
        {$a=$a*18;
        return $a;}
        function 22($a)
        {$a=$a*22;
        return $a;}
        function 23($a)
        {$a=$a*23;
        return $a;}
        function 24($a)
        {$a=$a*24;
        return $a;}
        function 26($a)
        {$a=$a*26;
        return $a;}
}

?>
