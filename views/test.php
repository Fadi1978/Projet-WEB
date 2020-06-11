                                     <?php
                include "../Core/ReclamationR.php";
                $ReclamationManage=new ReclamationManage();
$result=$ReclamationManage->recupererReclamation($_GET['id_reclam']);
foreach($result as $row)
{

                ?>