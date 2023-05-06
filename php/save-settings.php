                        <?php
                        /**................................................................
 * 
 
 * ................................................................
 */
                        
//session_start();
include('connect.php');

$a = $_POST['site_name'];
$b = $_POST['site_desc'];
$c = $_POST['email'];
$d = $_POST['phone'];
$e = $_POST['address'];
$f = $_POST['city'];
$g = $_POST['country'];
// query

$sql = "UPDATE site_settings SET 
        `site_name`=?,`site_desc`=?,`email`=?,`phone`=?,`address`=?,`city`=?, `country`=?
        WHERE id= 1";


//$sql = "INSERT INTO settings (site_name,site_title,email,site_keyword,street,city,country,phone,facebook,twitter,linkedin,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l)";

$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g));{
if($q){
      header("location:site-settings.php?success=true");
        }else{
            header("location:site_settings.php?failed=true");
        } 
		}


?>