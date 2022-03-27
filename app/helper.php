<?PHP 
if(!function_exists('printr')){
    function printr($res){
        echo "<pre>";
        print_r($res); 
        die(); 
    }
}
?>