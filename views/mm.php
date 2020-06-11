<html>
<head>
    <body>
        <?php

                include "../Core/ReclamationR.php";
                $ReclamationManage=new ReclamationManage();
$result=$ReclamationManage->recupererReclamation($_GET['id_reclam']);
foreach($result as $row)
{
?>

                                                <form class="form-horizontal" role="form" action="3m.php" method="POST">
                                                    <div class="form-group row">
                                                     
                                                        <div class="col-10">
                                                            <input type="hidden" class="form-control" name="id_reclam"  value="<?php echo $row['id']; ?>">
                                                        </div>
                                                    </div>
                                                   <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="example-email">Nom</label>
                                                        <div class="col-10">
                                                            <input type="text" id="nom" name="id_reclam" class="form-control" value="<?php echo $row['id_reclam']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">ID Reclam</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="Objet" value="<?php echo $row['Objet']; ?>">
                                                        </div>
                                                    </div>
                                                      <div class="form-group row">
                                                        <label class="col-2 col-form-label">Objet</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="Date" value="<?PHP echo $row['Date']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Date</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="id_client" value="<?PHP echo $row['id_client']; ?>">
                                                        </div>
                                                    </div>
                                                  
                                                


        

</body>
</html>