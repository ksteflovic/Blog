<?php


namespace App\Http\Controllers;


class TestController extends Controller
{
    public function test1()
    {
        echo "Hello World!<br>";
    }

    public function test2()
    {
        $this->test1();
        for($i = 0; $i < 10; $i++)
        {
            echo "Cislo: " . $i . "<br>";
        }
        return true;

    }
    public function test3()
    {
        if($this->test2()==true)
        {
            echo "End.";
        }
    }
}