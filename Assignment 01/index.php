<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Assignment 01 </title>
</head>
<body>
    

<?php


    // ===================== Question =======================


 /*   Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.

    Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 

    From this given formula, you will get a mark. Show the Grade message by the mark.

    A+ = 80 - 100 

    A   = 70 - 79

    A-  = 60 - 69

    B   = 50 - 59

    C   = 40 - 49

    F   = 01 - 39 

*/ 


    //Subject Mark List 
   
    $subject_A_mark = 75 ;
    $subject_B_mark = 80 ;
    $subject_C_mark = 65 ;
    $subject_D_mark = 90 ;

    // Total Subject Mark 

    $toral_mark = $subject_A_mark + $subject_B_mark +  $subject_C_mark + $subject_D_mark ;

    // Average Mark

    $average_mark = $toral_mark / 4 ;



    if ($subject_A_mark < 0 || $subject_B_mark < 0 || $subject_C_mark < 0 || $subject_D_mark < 0 ){
        echo "There can be no number below 0 or 0 in the result sheet." ;

    }elseif ($subject_A_mark > 100 || $subject_B_mark > 100 || $subject_C_mark > 100 || $subject_D_mark > 100){
        echo "In the result sheet, there can be no number above 100 marks." ;

    }elseif ($average_mark >= 80 && $average_mark <= 100 ) {
        echo "You Get A+";
        
    }elseif ($average_mark >= 70 && $average_mark <= 79) {
        echo " You Get A" ;

    }elseif ($average_mark >= 60 && $average_mark <= 69) {
        echo " You Get A-" ;
        
    }elseif ($average_mark >= 50 && $average_mark <= 59) {
        echo " You Get B" ;
        
    }elseif ($average_mark >= 40 && $average_mark <= 49) {
        echo " You Get C" ;
        
    }elseif ($average_mark >= 33 && $average_mark <= 39) {
        echo " You Get D" ;
    
    }else {
        echo "You are Fail" ;
    }
        


    //Test


    // ================================ Thank Your ==========================

        
    






    




















?>
</body>
</html>