<!DOCTYPE html>


<html>

  <head>
  <?php include('entete.php');?>

<!-- Script affichage abstract -->
<script>
  function visibilite(thingId)
  {
    var targetElement;
    targetElement = document.getElementById(thingId);
    if(targetElement.style.display == "none")
    {
      targetElement.style.display = "";
    }
    else {
      targetElement.style.display = "none";
    }
  }
</script>
<!-- Fin script -->

  </head>
  


  
  <body>
  
    <?php include('menu.php');?>


   <!-- Extraction BDD -->
    <?php
    try
    {
          $bdd = new PDO('mysql:host=localhost;dbname=pmarchan;charset=utf8', 'pmarchan', 'qhRfTDj08');
    }
    catch (Exception $e)
    {
              die('Erreur : ' . $e->getMessage());
    }

    $publis= $bdd->query('SELECT * FROM Publications');
    ?>
   <!-- Fin extraction BDD -->




     <div class="corpse">

       <h1>Publications</h1>




       <h2>List of publications</h2>

       <ul>
       
         <?php 
           
           $ii=0;
           while($data = $publis->fetch())
             {
             $ii=$ii+1;
             $idcur='d' . $ii;
             $scur='s' . $ii;
             $hcur='h' . $ii;
          ?>

              <li>
                <!-- About the article -->
                <a href="<?php echo $data['Link']; ?>">
                 <?php echo $data['Title']; ?>
                </a> </br>
                <span class="names">
                 <?php echo $data['Authors']; ?>
                </span>,
                <span class="annee">
                 <?php echo $data['Year']; ?>
                </span>,
                <span class="journal"> 
                 <?php  echo $data['Journal']; ?> 
                </span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('<?php echo $idcur ;?>'); javascript:visibilite('<?php echo $hcur ;?>'); javascript:visibilite('<?php echo $scur ;?>'); return false;">
                <span id= '<?php echo $hcur;?>' style="display:none;">
                Hide
                </span>
                <span id= '<?php echo $scur;?>'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='<?php echo $idcur;?>' style="display:none;">
                 <?php echo $data['Abstract']; ?>
                </span> 

              </li>
           
          <?php
             }
          ?>

       </ul>



     </div> <!-- corpse -->

  </body>
   

</html>
