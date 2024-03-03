
<?php 
namespace App\Helpers;
function isUppercase($value,$message,$fail){
    if($value!=mb_strtoupper($value,'UTF-8')){
        $fail($message);
    }
}
?>