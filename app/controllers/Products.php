<?php
// controller should be able to load a view

class Products extends Controller
{
    public function index()
    {
        //echo "This is the Products Controller";
        $this->view('Products');
    }
}
