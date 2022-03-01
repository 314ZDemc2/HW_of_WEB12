<?php

abstract class ParentClass {
    public $props;
    public function printClass(){
        echo "Print";
    }
}

interface ParentInterface{
    const PARENT = "parent";

    public function parent();
}

interface ParentInterface2{
    const PARENT2 = "parent";

    public function parent2();
}

trait CustomTrait {

    public function logger(){
        echo "Logger";
    }

}

class MyClass extends ParentClass implements ParentInterface, ParentInterface2 {
    public $property;
    private $private;
    protected $sub;

    use CustomTrait;

    public static $static;

    public function test(){
        $this->property;
    }

    public static function testStatic(){
        self::$static;
    }

    public function parent()
    {
        // TODO: Implement parent() method.
    }

    public function parent2()
    {
        // TODO: Implement parent2() method.
    }
}

$newClass = new MyClass();
$newClass->property;

$newClass->logger();


include "classes\MarkerInterface.php";
include "classes\Marker.php";
include "classes\MedicalMarker.php";

$mssMarkers = [];
$mssMarkers[] = new MedicalMarker(23.6, 56.6, "Name 1", "Desc", "https://");
$mssMarkers[] = new MedicalMarker(23.6, 56.6, "Name 1", "Desc", "https://");
$mssMarkers[] = new MedicalMarker(23.6, 56.6, "Name 1", "Desc", "https://");
$mssMarkers[] = new MedicalMarker(23.6, 56.6, "Name 1", "Desc", "https://");

Marker::markersJSON($mssMarkers);