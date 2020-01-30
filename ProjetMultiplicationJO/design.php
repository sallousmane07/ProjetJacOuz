<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url(bgd.jpg);   height: 100%; width: 100%;">
    <?php require_once ('traitement.php');
            include('barreMenu.php');
     ?>
    <div class="container">
    <br><h1 style="font-weight:bold">Atelier PHP - ETAPE 1</h1>
    <h6>Afficher les tables de multiplications</h6>
</div>
    <form method="POST" action="">
        <div class="form-row">  
            <div class="col-md-4 mb-3"> 

            </div>

            <div class="col-md-4 mb-3" style="border-radius: 5%; background-color: #cd4138; padding: 2% 2% 2% 2%">
              <h6 >Merci de séléctionner la table que vous voulez consultez:<h6>
                  <select class="custom-select" id="validationDefault04" name="table" required>
                    <option selected disabled value="">Choisir une  table: </option><br>
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
                <button class="btn btn-dark mt-3" type="submit" name="bouton">Valider</button><br>
            </div>

            <div class="col-md-4 mb-3"> </div>
        </form>

        <?php 
        if(isset($_POST['bouton'])){
            $tab = tableMulti($_POST['table']);    
            ?>  
            <div class="container ">
                <div class="row">
                    <div class="card border-success mb-3 col-md-3" style="max-width: 15rem; margin:auto !important;">
                        <div class="card-body text-success">
                            <h6 class="card-title">TABLE  <?=$_POST['table']?></h6>
                            <?php for ($i=0; $i <10 ; $i++) { ?>
                                <div class="card-text" style="font-size:15PX;"><?=$tab[$i]?></div>
                            <?php } ?>
                        </div>
                        <!-- <div class="card-footer bg-transparent border-success">Footer</div> -->
                    </div>

                </div>
            </div>


        <?php }  ?>
    </div>
</body>
</html>