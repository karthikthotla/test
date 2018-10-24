<?php
function cleanInput($input) {

  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[/!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![sS]*?--[ tnr]*>@'         // Strip multi-line comments
  );

    $output = preg_replace($search, '', $input);
    return $output;
  }


function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysqli_real_escape_string($input);
    }
    return $input;
}
echo sanitize("<p>karthikt`````````</p>");
die("got it");
$sstring = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,x,y,z";
$arr = explode(",", $sstring);
$ne_arr = array_chunk($arr,7);
foreach ($ne_arr as $key => $value) {
    foreach ($value as $key1 => $value1) {
        echo $value1."<br>";
    }
    break;
}
?>
/*
$dir    = 'E:\proofodids';
$files1 = scandir($dir);

/*$dir    = 'E:\proofodids\2016\09';
$files2 = scandir($dir);
$files1 = array_merge($files1,$files2);
$dir    = 'E:\proofodids\2016\10';
$files3 = scandir($dir);
$files1 = array_merge($files1,$files3);

$dir    = 'E:\proofodids\2016\11';
$files4 = scandir($dir);
$files1 = array_merge($files1,$files4);

$dir    = 'E:\proofodids\2016\12';
$files5 = scandir($dir);
$files1 = array_merge($files1,$files5);

$dir    = 'E:\proofodids\2017\01';
$files6 = scandir($dir);
$files1 = array_merge($files1,$files6);*/

echo '<pre>';
print_r($files1);

                $data_proinfo_name = $this->common_model->selectt('upload_proofs', 'result_array', array('proof_ID,proof_address,sal_slips,bank_statements,customer_photo,sal_proof1,sal_proof2,sal_proof3,bank_statement1,bank_statement2,bank_statement3'), '');
                foreach($data_proinfo_name as $key => $value){
                    foreach($value as $key1 => $value1){
                        if($value1 != '' AND $value1 != NULL AND $value1 != '.'){
                            if (!strpos($value1, '2016') ) {
                                if(!strpos($value1, '2017')){
                                    $proofs_arr[] = str_replace('public/images/proofofids/','',$value1);
                                }
                                
                            }
                            
                            
                        }
                    }
                }
                
                /*echo pr($proofs_arr);
                die();*/
                
                $dir    = 'C:\xampp\htdocs\gpp\public\images\proofofids\\';
                
$files1 = scandir($dir);


echo '<pre>';
$result=array_diff($files1,$proofs_arr);
/*foreach ($result as $keyy => $vvalue){
    if(file_exists($dir.$vvalue)){
        unlink($dir.$vvalue);
     }

}*/

//$result=array_diff($files1,$proofs_arr);
die();

?>
