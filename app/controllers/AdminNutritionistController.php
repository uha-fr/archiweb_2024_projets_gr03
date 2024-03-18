<?php 
final class AdminNutritionistController extends Controller
{
    public $nutritionist;


     public function __construct() {
        $this->nutritionist = $this->model('nutritionist');
     }
    function index(){
        $this->view('admin/index','Admin');

    
    }

    function allnutritionists (){
        $nutritionists=$this->nutritionist->getallnutritionists(); 

        $this->view('admin/admin','Admin', ['users'=>$nutritionists]);


    }

    function deletenutritionist ($id = null){
        $nutritionists =$this->nutritionist ->deleteNutritionist($id); 

        header('Location: '. BASE_URL . 'AdminNutritionist/allnutritionists');

    }
}