<h1 style="text-align: center;">Học lập trình Laravel tại Unicode </h1>
<?php 
if (env('APP_ENV')=='production'){
    //Call api live;
}else{
    //Call api sandbox
    echo 'Call api sandbox';
}