<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php require_once ('traitement.php'); include('barreMenu.php');?>

<body style="background-image: url(bgd.jpg)">
    <div style="margin-top: 10%;" class="mt-5 d-flex justify-content-center">
        <div class="card text-center " style="background-color: #cd4138">
            <div class="card-header">
                <h2>ETAPE 4</h2>
            </div>
            <h5 class="card-title">Serie de 10 Questions. Chaque question trouvée vaut 2 points</h5><br>
            <form method="Post">
                <?php for ($i=1; $i <=10 ; $i++) { 
                    # code...
                   ?>
                   <!-- <div class="col-md-6"> -->


                    <div class="mt-3 d-flex justify-content-center " style="margin: auto!important;">
                        <input style="width: 5%; height: 5%; font-size: 15px; font-weight: bold; text-align: center;" type="text" id='<?="nombre".$i;?>' name="<?='nombre'.$i;?>" disabled="true" value=<?=choisirAuHasard();?> >
                        <h5>x</h5>
                        <input style="width: 5%;height: 5%; font-size: 15px; font-weight: bold; text-align: center;" type="text" id="<?='nombreH'.$i;?>" name="nombreH" disabled="true" value=<?=choisirAuHasard();?> >
                        <h5>=</h5><input style="width: 15%;  font-size: 15px; font-weight: bold; text-align: center;" type="number" required="required" name="rst" id="<?='rst'.$i;?>">
                        <input style="width: 15%;  font-size: 15px; font-weight: bold; text-align: center; margin-left: 10px; display: none;" type="text" value="" name="" id="<?='vf'.$i;?>" disabled="true">                   
                    </div>
                    
                    <!--  </div> -->
                    <?php } ?></form>
                    <button class="btn btn-dark mt-3" type="submit" name="valid" onclick="return afficherResultat();" >Valider</button>
                    <div style='display: none;' id="champScore"> <h3>Votre score est :</h3> <h2  id='score'></h2></div>
                </div>
            </div>


        </body>
        <script type="text/javascript">

            function afficherResultat() {
               var score=0;
               for (var i = 1; i<= 10; i++) {

                   val=document.getElementById('nombre'+i).value;

                   val2=document.getElementById('nombreH'+i).value;

                   reponse=document.getElementById('rst'+i).value;

                   if (trouverReponse(val,val2,reponse))
                   {
                    document.getElementById('vf'+i).value='VRAI';
                    score+=2;
                    }
                else
                    document.getElementById('vf'+i).value='FAUX';
                document.getElementById('vf'+i).style.display=('block');           
            }
            document.getElementById('score').innerHTML=score+'/20';
            document.getElementById('champScore').style.display=('block'); 
        }
        function trouverReponse(val,chifAuhasard,reponse){
            return reponse==val*chifAuhasard;
        }

    </script>

    </html>