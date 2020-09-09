<!DOCTYPE html>


<html>

  <head>
  <?php include('entete.php');?>

  </head>
  


  
  <body>
  
    <?php include('menu.php');?>


     <div class="row">
     <div class="column2">

       <h3>SSH tricks</h3>

       <p>In the case you are on a computer A (comp_A) and need to access a computer C (comp_C) through a gateway B (comp_B)</p>
       <p>To ssh directly to comp_C :</p>
       <code>    $ ssh -X username_B@comp_B -t ssh -X username_C@comp_C   </code>
       </br>
       <p>If you want to copy a file from comp_C directly to comp_A, from comp_A :</p>
       <code>    $ scp -Cp -o "ProxyCommand ssh username_B@comp_B nc comp_C 22" username_C@comp_C:/path/to/file .   </code>
       </br>
       


       <p> </p>
     </div>
     </div>

  </body>
   

</html>
