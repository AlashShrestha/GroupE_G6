 <?php include "sidebar.php"; ?>
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-md-8 col-md-offset-2">
                 <?php

                    $id = $_GET['id'];
                    $result = $db->prepare("SELECT * FROM reported_offence where id= :post_id");
                    $result->bindParam(':post_id', $id);
                    $result->execute();
                    for ($i = 0; $row = $result->fetch(); $i++) {


                    ?>
                     <div class="card">
                         <div class="header text-center">
                             <h4 class="title">Offense Detail</h4>
                             <br>


                             <div class="content table-responsive table-full-width table-upgrade">
                                 <table class="table">

                                     <tbody>
                                         <tr>
                                             <td style="background-color:#3dd;">Offense:</td>
                                             <td><?php echo $row['offence']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Offense ID:</td>
                                             <td><?php echo $row['offence_id']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Vehicle plate No:</td>
                                             <td><?php echo $row['vehicle_no']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Driver's Licence:</td>
                                             <td><?php echo $row['driver_license']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Name of Offender:</td>
                                             <td><?php echo $row['name']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Sex of Offender:</td>
                                             <td><?php echo $row['gender']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Reported By:</td>
                                             <td><?php echo $row['officer_reporting']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Location of Offense:</td>
                                             <td><?php echo $row['address']; ?></td>
                                         </tr>
                                         <tr>
                                             <td style="background-color:#3dd;">Date of Offense:</td>
                                             <td><?php echo date('l jS \of F Y h:i:s A'); ?></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                         </div> <?php } ?>
                     
                     </div>
             </div>
         </div>
     </div>
     <?php include "footer.php"; ?>