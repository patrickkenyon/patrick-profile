<?php

require('../../admin/functions.php');

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

    //  Success test:
    public function test_success_projectDropDown() {
        $test_array = [
            ['id' => 1, 'title' => 'example'],
            ['id' => 2, 'title' => 'example2'],
            ['id' => 3, 'title' => 'example3'],
            ['id' => 4, 'title' => 'example4'],
        ];
        $dropdown = projectDropDown($test_array);
        $this->assertContains('<option value="1">example</option>', $dropdown);
        $this->assertContains('<option value="2">example2</option>', $dropdown);
        $this->assertContains('<option value="3">example3</option>', $dropdown);
        $this->assertContains('<option value="4">example4</option>', $dropdown);
    }

    // Error test:
    public function test_error_projectDropDown() {
        $test_array = [
            ['not_id' => 1, 'not_title' => 'example'],
            ['not_id' => 2, 'not_title' => 'example2'],
            ['not_id' => 3, 'not_title' => 'example3'],
            ['not_id' => 4, 'not_title' => 'example4'],
        ];
        $dropdown = projectDropDown($test_array);
        $this->assertContains('<option value=""></option>', $dropdown);
        $this->assertContains('<option value=""></option>', $dropdown);
        $this->assertContains('<option value=""></option>', $dropdown);
        $this->assertContains('<option value=""></option>', $dropdown);
    }

    // Error test 2:
    public function test_error2_projectDropDown() {
        $test_array = [
            ['id' => 'foo', 'title' => 1],
            ['id' => 'foo', 'title' => 12],
            ['id' => 'foo', 'title' => 123],
            ['id' => 'foo', 'title' => 1234],
        ];
        $dropdown = projectDropDown($test_array);
        $this->assertContains('<option value="foo">1</option>', $dropdown);
        $this->assertContains('<option value="foo">12</option>', $dropdown);
        $this->assertContains('<option value="foo">123</option>', $dropdown);
        $this->assertContains('<option value="foo">1234</option>', $dropdown);
    }

    //  Malformed test:
    public function test_malformed_projectDropDown() {
        $broken_array = 'foo';
        $this->expectException(TypeError::class);
        projectDropDown($broken_array);
    }
}