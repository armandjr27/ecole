<?php 

abstract class Controllers 
{
    abstract protected function show($view, $data);

    protected function test_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}