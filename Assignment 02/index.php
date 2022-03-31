<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Assignment 02 </title>
</head>
<body>
    

<?php

        /*

            Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

            When you click on the power/start button, your bike takes a start, 

            When you click stop, your bike takes a stop, 

            When you press the break, your bike take break, 

            when you give the gear, your bike move faster and faster, 

            when you press the signal button, your bike shows a signal light.

            When you press the headlight button, your bike’s headlight will start.

        */



        // ============================== Start Assignment ===========================

        // Value = start
        // Value = stop
        // Value = break
        // Value = gear
        // Value = signal button
        // Value = headlight button




    $hiro = "start" ;  

    // Specifying a value in any of the above "invited commas" gives a specific value.

    switch ($hiro) {
        case 'start':               //Echoing down the value that will be given in the string here will print a true event for it.
            echo "Now Bike Start" ;
                break;              //If this condition is not met here then it is used to transmit data in the condition of the bottom line.

        case 'stop':
            echo "The bike is off." ;
                break;

        case 'break':
            echo "The Bike is Braked.";
                break;

        case 'gear':
            echo "Gears have been provided for speeding";
                break;

        case 'signal_left':
            echo "Now the signal is on the left.";
                break;

        case 'signal_right':
            echo "Now the signal is on the Right.";
                break;

        case 'head_light':
            echo "Now Head Light On";
                break;  

        default:                                    // If any of the above conditions are not met then it will print the information by default.
            echo "Invalite Key, Please Try Again";
            break;
    }



            // =============================== Thank your ====================================





?>
</body>
</html>