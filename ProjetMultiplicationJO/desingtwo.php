<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>

</style>
<body style="background-image: url(bgd.jpg);   height: 100%; width: 100%;">
    <?php require_once ('traitement.php'); include('barreMenu.php'); ?>
    <div>
        <!-- partie rouge -->
        <div class="form-row" style="margin-top:3%;">

            <div class="col-md-4 mb-3 container">
                <h1>Atelier PHP - ETAPE 2</h1>
                <h6>Afficher les tables de multiplications</h6>
            </div>
            <form method="POST" action="">
                <div class="col-md-4 mb-3" style=" border-bottom-right-radius: 10%;border-top-left-radius: 10% ; background-color: #cd4138; padding: 1% 1% 1% 1%">


                    <div style="text-align: center">
                        <h5>Veuillez séléctionné les tables que vous voulez consultez:<h5><br>
                            <label >Table 1 </label>
                            <input name="check1" value=1 type="checkbox">
                            <label>Table 2</label>
                            <input name="check2" value=2 type="checkbox">
                            <label>Table 3</label>
                            <input name="check3" value=3 type="checkbox">
                            <label>Table 4</label>
                            <input name="check4" value=4 type="checkbox">
                            <label>Table 5</label>
                            <input name="check5" value=5 type="checkbox">
                            <label>Table 6</label>
                            <input name="check6" value=6 type="checkbox">
                            <label>Table 7</label>
                            <input name="check7" value=7 type="checkbox">
                            <label>Table 8</label>
                            <input name="check8" value=8 type="checkbox">
                            <label>Table 9</label>
                            <input name="check9" value=9 type="checkbox">
                            <label>Table 10</label>
                            <input name="check10" value=10 type="checkbox">

                            <center><button class="btn btn-dark" type="submit" name="bouton">Valider</button><br></center>
                            <input class="btn btn-danger"type="reset" name="" value="Annuler">
                        </div>
                        <!-- <div class="col-md-4 mb-3"> </div> -->
                </div>

             </form>
        </div>



            <?php 
            if(isset($_POST['bouton'])){
                 echo "<div class='container'>
                            <div class='form-row'>";
                for ($i=1; $i <=10 ; $i++) { 
                    $name="check".$i;
                       // var_dump($name);
                   
                    if (isset($_POST[$name])) {
                        $tab = tableMulti($_POST[$name]);  
                        ?>
                        
                                <div class="card border-success mb-3 col-md-2" style="max-width: 18rem; margin-right:30px;">
                                    <div class="card-header bg-transparent border-success"><h6 class="card-title">TABLE DE MULTIPLICATION PAR <?=$_POST[$name]?></h6></div>
                                    <div class="card-body text-success">                                        
                                        <?php for ($j=0; $j <10 ; $j++) { ?>
                                            <div class="card-text" style="font-size:15PX;"><?=$tab[$j]?></div>
                                        <?php } ?>
                                    </div>

                                </div>

                         
                        <?php                                
                    }
                }
                echo "   </div>
                        </div>";
            }
            ?> 

        </body>

        </html>