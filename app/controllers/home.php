<?php 

class Home extends Controller { 

 public function __construct(){ 

 }

 public function index($name = ''){

    $user = $this->model("User");
    $user->name = $name;
    $this->view("home/index",["name" => $user->name]);

}

public function profile ($name){
    $user = $this->model("User");
    $user->name = $name;
    $this->view("home/profile",["name" => $user->name]);
}

public function delete($id){
    $user = $this->model("User");
    $user->id = $id;
    $this->view("home/profile",["id" => $user->id]);
 }



}

?>