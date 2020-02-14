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

       $this->assertEquals("parser.0.0.1" , \App\Parser::getVersion());
    }
    /** @test */
    public function getOpenToken(){

        $this->assertEquals("<h1>" , \App\Parser::getOpenToken("#"));
    }

    /** @test */
    public function getCloseToken(){

        $this->assertEquals("</h1>" , \App\Parser::getCloseToken("#"));
    }

    /** @test */
    public function isValidToken(){

        $this->assertTrue( \App\Parser::isValidToken("#"));
        $this->assertTrue( \App\Parser::isValidToken("##"));
    }

    /** @test */
    public function isInvalidToken(){

        $this->assertFalse( \App\Parser::isValidToken("."));
    }


    /** @test */
    public function loadFileToParse(){

        $this->assertTrue( \App\Parser::loadFileToParse("../README.md"));

    }

    /** @test */
    public function ErrorOnWrongFileToParse(){
        $this->assertTrue( \App\Parser::loadFileToParse("../README.d"));

    }





}