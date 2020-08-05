<?php 

class Contact extends Controller { 


public function index(){ 
    echo "contact/index";
}

public function phone($phone){
    echo "phone: {$phone}";
}

}


?>