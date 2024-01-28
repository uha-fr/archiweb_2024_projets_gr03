<?php

class BadrController extends Controller{
    public function index() {
        echo 'hada ra cons';
    }
    public function test(){
        $this->model("user");
    }
}