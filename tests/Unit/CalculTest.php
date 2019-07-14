<?php

class CalculTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function Addition()
    {
        $this->json('POST', '/addition', ['result' => '23'])
             ->seeJson([
                 'created' => true,
             ]);
    }
    public function Soustraction()
    {
        $this->json('POST', '/soustraction', ['result' => '23'])
             ->seeJson([
                 'created' => true,
             ]);
    }  public function Multiplication()
    {
        $this->json('POST', '/multiplication', ['result' => '23'])
             ->seeJson([
                 'created' => true,
             ]);
    }  public function Division()
    {
        $this->json('POST', '/division', ['result' => '23'])
             ->seeJson([
                 'created' => true,
             ]);
    }
}