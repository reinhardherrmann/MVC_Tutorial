<?php
// controller should be able to load a view
class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        //echo 'this is the home controller';
        $this->view('Home');
    }
}


