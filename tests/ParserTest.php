<?php
/**
 * Created by PhpStorm.
 * User: jbt
 * Date: 14/02/2020
 * Time: 15:51
 */

class ParserTest extends PHPUnit\Framework\TestCase{

    /** @test */
    public function version(){
        $p = new \App\Parser("../README.d");
       $this->assertEquals("parser.0.0.1" , $p->getVersion());
    }
    /** @test */
    public function getOpenToken(){
        $p = new \App\Parser("../README.d");
        $this->assertEquals("<h1>" , $p->getOpenToken("#"));
    }

    /** @test */
    public function getCloseToken(){
        $p = new \App\Parser("../README.d");

        $this->assertEquals("</h1>" , $p->getCloseToken("#"));
    }

    /** @test */
    public function isValidToken(){
        $p = new \App\Parser("../README.d");
        $this->assertTrue( $p->isValidToken("#"));
        $this->assertTrue( $p->isValidToken("##"));
    }

    /** @test */
    public function isInvalidToken(){
        $p = new \App\Parser("../README.d");
        $this->assertFalse( $p->isValidToken("."));
    }

    /** @test */
    public function ErrorOnWrongFileToParse(){
        $p = new \App\Parser("../README.d");
        $this->assertFalse(is_string($p->file) );
    }

    /** @test */
    public function getWords(){

        $ArrayResult = ["#","parser","#","docs"];

        $p = new \App\Parser("../README.md");

        $this->assertEquals($ArrayResult, $p->getWords());
    }

    /** @test */
    public function countTokens(){
        $p = new \App\Parser("../README.md");
        $this->assertEquals(4, $p->CountTokens());
    }







}