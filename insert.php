<?php
include('index.html');


$link = mysqli_connect ('localhost' , 'root','','controlpanel') ;


  
if(isset($_POST['forward'])){
    
  $forward=$_POST['forward'];
  
  
  $query ="INSERT INTO directions (Direction) 
  VALUES('$forward')";
  
  $run =mysqli_query($link , $query) or die (mysqli_error($link));

  if($run){
      echo "Form Submitted";
      
     }

      else {
      echo " Failed to submit";
      } }

if(isset($_POST['left'])){
    
        $left=$_POST['left'];
        
        
        $query ="INSERT INTO directions (Direction) 
        VALUES('$left')";
        
        $run =mysqli_query($link , $query) or die (mysqli_error($link));
      
        if($run){
             
           }
      
            else {
            echo " Failed to submit";
            } }
      



if(isset($_POST['right'])){
    
              $right=$_POST['right'];
              
              
              $query ="INSERT INTO directions (Direction) 
              VALUES('$right')";
              
              $run =mysqli_query($link , $query) or die (mysqli_error($link));
            
              if($run){
                  echo "Form Submitted";
                 }
            
                  else {
                  echo " Failed to submit";
                  } }
            

if(isset($_POST['backward'])){
    
                    $backward=$_POST['backward'];
                    
                    
                    $query ="INSERT INTO directions (Direction) 
                    VALUES('$backward')";
                    
                    $run =mysqli_query($link , $query) or die (mysqli_error($link));
                  
                    if($run){
                        echo "Form Submitted";
                        
                       }
                  
                        else {
                        echo " Failed to submit";
                        } }


if(isset($_POST['stop'])){
    
            $stop=$_POST['stop'];
                          
                          
                          $query ="INSERT INTO directions (Direction) 
                          VALUES('$stop')";
                          
                          $run =mysqli_query($link , $query) or die (mysqli_error($link));
                        
                          if($run){
                              echo "Form Submitted";
                              
                             }
                        
                              else {
                              echo " Failed to submit";
                              } }
                        
                  
      
    ?>