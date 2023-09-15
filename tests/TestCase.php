<?php

namespace Tests; // Namespace declaration for the Tests directory

use Illuminate\Foundation\Testing\TestCase as BaseTestCase; // Import the BaseTestCase class

abstract class TestCase extends BaseTestCase // Define an abstract class named TestCase that extends BaseTestCase
{
    use CreatesApplication; // Use the CreatesApplication trait in this TestCase class
}
