<?php

namespace Tests\Feature; // Namespace declaration for the test class

use Illuminate\Foundation\Testing\RefreshDatabase; // Import the RefreshDatabase trait
use Tests\TestCase; // Import the base TestCase class for testing

class ExampleTest extends TestCase // Define the ExampleTest class which extends TestCase
{
    public function testBasicTest() // Define a test method named testBasicTest
    {
        $response = $this->get('/'); // Send a GET request to the root URL ('/')

        $response->assertStatus(200); // Assert that the response status code is 200 (OK)
    }
}
