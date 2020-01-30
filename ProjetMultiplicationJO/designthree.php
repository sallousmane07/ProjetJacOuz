<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php  require_once ('traitement.php'); include('barreMenu.php'); ?>
<body style="background-image: url(bgd.jpg); overflow: hidden;">
    <div class="row">

        <div class="col-md-4 mb-3" style="text-align: center">
            <br>
            <h1 style="font-weight:bold">Atelier PHP - ETAPE 3</h1><br>
        </div>

        <div class="col-md-4 mb-3" style="border-radius: 5%; margin-top: 4%; background-color: #cd4138; padding: 2% 2% 2% 2%">
            <h1 style="font-weight: bold; text-align: center;">QUIZ !<h1>
                <h5>Choissisez une table et donnez le réssultat des oprétations</h5><br>
                <form method="POST" action="">
                   <select class="custom-select" id="validationDefault04" name='table' id="table" required='true'>
                        <option selected disabled >Choisir une  table: </option><br>
                        <option value=1>Table 1</option>
                        <option value=2>Table 2</option>
                        <option value=3>Table 3</option>
                        <option value=4>Table 4</option>
                        <option value=5>Table 5</option>
                        <option value=6>Table 6</option>
                        <option value=7>Table 7</option>
                        <option value=8>Table 8</option>
                        <option value=9>Table 9</option>
                        <option value=10>Table 10</option>
                </select>       
    
<button class="btn btn-dark mt-3" type="submit" name="valid">Valider</button>
 </form>  
 <div style="text-align: center; display: none;  font-size: 40px; font-weight: bold;" id="vf"></div>'
    </div>

        <div class="col-md-4 mb-3"></div>
    </div>
    <?php  
    if(isset($_POST['valid']) && isset($_POST['table'])) {
            $nbre=$_POST['table'];
            ?>
             
                <div  id="block1">
                    <div class="mt-3 d-flex justify-content-center">
                        <input style="width: 5%; font-size: 25px; font-weight: bold; text-align: center;" type="text" id="nbre" name="nombre" disabled="true" value=<?=$nbre?> >
                         <h3>x</h3>
                         <input style="width: 5%; font-size: 25px; font-weight: bold; text-align: center;" type="text" id="nbreH" name="nombreH" disabled="true" value=<?=choisirAuHasard();?> >
                         <h2>=</h2><input style="width: 5%; font-size: 25px; font-weight: bold; text-align: center;" type="number"  name="rst" id="rst">

                    </div>
                      <div class="mt-3 d-flex justify-content-center"><button class="btn btn-dark mt-3" name="valider" type="submit" onclick="return afficherResultat();">Valider</button></div>
                </div>  
            <?php } ?>
              

              
<script type="text/javascript">
    function afficherResultat(){
       
        var val=document.getElementById('nbre').value;
         val2=document.getElementById('nbreH').value;
         reponse=document.getElementById('rst').value;
        if (trouverReponse(val,val2,reponse))
            document.getElementById('vf').innerHTML='VRAI';
        else
            document.getElementById('vf').innerHTML='FAUX';

         document.getElementById('vf').style.display=('block');

    }
    function trouverReponse(val,chifAuhasard,reponse){
        return reponse==val*chifAuhasard;
    }
</script>
</body>  


</html>