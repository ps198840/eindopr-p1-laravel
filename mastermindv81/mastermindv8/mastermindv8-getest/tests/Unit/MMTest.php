<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\MM;

class MMTest extends TestCase
{
    public function testPosities()
    {
        //arrange
        $mm = new MM;
        //act
        $mm->TeRaden = "1234";
        $aantal = $mm->PositiesOK("0253");
        //assert
        $this->assertEquals(1, $aantal, "PositiesOK fout");
    }
    public function testAantal()
    {
        //arrange
        $mm = new MM;
        //act
        $mm->TeRaden = "1234";
        $aantal = $mm->AantalOK("0253");
        //assert
        $this->assertEquals(2, $aantal, "AantalOK fout");
    }
    public function testAantal2()
    {
        //arrange
        $mm = new MM;
        //act
        $mm->TeRaden = "2234";
        $aantal = $mm->AantalOK("0253");
        //assert
        $this->assertEquals(2, $aantal, "AantalOK2 fout");
    }
    public function testAantal3()
    {
        //arrange
        $mm = new MM;
        //act
        $mm->TeRaden = "1234";
        $aantal = $mm->AantalOK("2253");
        //assert
        $this->assertEquals(2, $aantal, "AantalOK3 fout");
    }


}
