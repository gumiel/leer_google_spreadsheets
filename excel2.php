<?php
$spreadsheet_url="https://docs.google.com/spreadsheets/d/e/2PACX-1vQD32FS1_p5_js5xJOAHO35K0ush1nVVHpld19TOAdO3BJEXMKDjgdO_rIcOx-iB4hUi5EeokR_qaIZ/pub?output=csv"; 

// if(!ini_set('default_socket_timeout', 15)) echo "unable to change socket timeout"; 
fopen($spreadsheet_url, "r");

if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) { 

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { 
     $spreadsheet_data[] = $data; 
     var_dump($spreadsheet_data);
    } 
    fclose($handle); 
}else{
    echo "else";
}
?>