<?php
class sometest extends WebTestCase
{
    function ggtest(){
        $this->open();
        $this->assertTextPresent('Welcome');
    }
}