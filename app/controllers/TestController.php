<?php

class TestController extends BaseController 
{
   public function showHello()
   {
       return "Test!!!";
   }

   public function postForm()
   {
       return View::make('hello',array('title'=>'Get title form', 'elements' => array(1,2,3,4,5)));
       $test = Input::get('test');
       return "Post test $test";
   }

   public function getForm(){
    return View::make('hello.blade');
   }
}
