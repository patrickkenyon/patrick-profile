<?php

require('../../admin/functions.php');

///sites/academy-php7/html/patrick-profile/admin/functions.php
///sites/academy-php7/html/patrick-profile/test/admin/functionstest.php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {

    //   Success test:
    public function test_success_backButton() {
        $back_button = backButton('http://exampleurl.com');
        $this->assertEquals('</br></br><a href=http://exampleurl.com>Back</a></br>', $back_button);
    }

    //   Error test:
    public function test_error_backButton() {
        $back_button = backButton(55635653635);
        $this->assertEquals('</br></br><a href=55635653635>Back</a></br>', $back_button);
    }

    //   Malformed test:
    public function test_malformed_backButton() {
        $broken_test_array = ['$data1', '$data2', '$data3', '$data4', '$data5'];
        $this->expectException(TypeError::class);
        backButton($broken_test_array);
    }

    //  Success test:
    public function test_success_projectDataCheck() {
        $title = 'string';
        $description = 'string2';
        $image = 'string3';
        $project_url = 'string4';
        $redirect_path = 'string5';
        $projectDataCheck = projectDataCheck($title, $description, $image, $project_url, $redirect_path);
        $this->assertEmpty($projectDataCheck);
    }

    //  Success test 2:
    public function test_success2_projectDataCheck() {
        $title = 7;
        $description = 5.45;
        $image = 45;
        $project_url = 76;
        $redirect_path = 73;
        $projectDataCheck = projectDataCheck($title, $description, $image, $project_url, $redirect_path);
        $this->assertEmpty($projectDataCheck);
    }

    //  Mal test:
    public function test_error_projectDataCheck() {
        $broken_test_array = ['$data1', '$data2', '$data3', '$data4', '$data5'];
        $this->expectException(TypeError::class);
        projectDataCheck($broken_test_array, $broken_test_array, $broken_test_array, $broken_test_array);
    }

    //  Mal test 2:
    public function test_error2_projectDataCheck() {
        $broken_test_array = ['$data1', '$data2', '$data3', '$data4', '$data5'];
        $this->expectException(TypeError::class);
        projectDataCheck($broken_test_array);
    }
}