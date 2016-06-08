<?php
namespace Admin\Controller;
class IndexController extends AuthController
{
    public function index()
    {
        $this->display('dashboard');
    }

    public function test()
    {
        $timestamp = strtotime('99-9-9');
        echo date('Y-m-d', $timestamp);
    }
}