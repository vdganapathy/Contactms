<?php
class DashboardController extends AppController
{
    public function index()
    {
        $this -> autoRender = false;
        echo '<h3>DASHBOARD</h3>'
        . 'Welcome ,';
    }
}