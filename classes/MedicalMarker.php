<?php


class MedicalMarker extends Marker
{
    protected $description;
    protected $link;

    public function __construct($lat, $long, $name, $description, $link){
        parent::__construct($lat, $long, $name);

        $this->description = $description;
        $this->link = $link;
    }

    public function html(){
        $name = $this->name;
        $desc = $this->description;
        $link = $this->link;

        return "
        <h3>$name</h3>
        <p>$desc</p>
        <a href='$link'>сайт</a>
        ";
    }
}