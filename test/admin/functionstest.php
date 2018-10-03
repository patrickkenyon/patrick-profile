<?php

require('../../admin/functions.php');

///sites/academy-php7/html/patrick-profile/admin/functions.php
///sites/academy-php7/html/patrick-profile/test/admin/functionstest.php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {

//    Success test:
    public function test_success_backButton() {
        $back_button = backButton('http://exampleurl.com');
        $this->assertEquals('</br></br><a href=http://exampleurl.com>Back</a></br>', $back_button);
    }

    //    Error test:
    public function test_error_backButton() {
        $back_button = backButton(55635653635);
        $this->assertEquals('</br></br><a href=55635653635>Back</a></br>', $back_button);
    }

    //    Malformed test:
    public function test_malformed_backButton() {
        $broken_test_array = ['$data1', '$data2', '$data3', '$data4', '$data5'];
        $this->assertEquals('</br></br><a href="Array">Back</a></br>', $broken_test_array);
    }
}

//public function test_validateArrayStructure_malformed_string() {
//    $items = 'string';
//    $this->expectException(TypeError::class);
//    $validateArray = validateArrayStructure($items, $this->keysReq);
//}




//public function test_yourMethod_success() {
//    $value = yourMethod('yes');
//    $this->assertEquals($value, :expected);
//   }
//
//public function test_yourMethod_error() {
//    $value = yourMethod('no');
//    $this->assertEquals($value, :expected);
//   }
//
//public function test_yourMethod_malform() {
//    $this->expectException(TypeError::class);
//    $value = yourMethod(4.6);
//}