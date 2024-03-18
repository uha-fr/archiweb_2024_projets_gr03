<?php 
final class AdminUserController extends Controller
{
    public $user;


     public function __construct() {
        $this->user = $this->model('user');
     }
    function index(){
        $this->view('admin/index','Admin');

    
    }

    function allusers (){
        $users=$this->user->getallusers(); 

        $this->view('admin/admin','Admin', ['users'=>$users]);


    }

    function deleteuser ($id = null){
        $users=$this->user->deleteUser($id); 

        header('Location: '. BASE_URL . 'AdminUser/allusers');

    }
}
 