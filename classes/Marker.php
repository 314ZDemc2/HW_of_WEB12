<?php

abstract class Marker implements MarkerInterface {
    // широта
    protected $latitude;
    // долгота
    protected $longitude;

    // именование
    protected $name;

    public function __construct($lat, $long, $name){
        $this->latitude = $lat;
        $this->longitude = $long;
        $this->name = $name;
    }

    // базовый метод html, для формирования собственного внешнего вида всплывающего окна маркера
    public function html(){
        return "";
    }

    // возвращает json массив маркера
    public function toJSON(){
        return [
            'lat' => $this->latitude,
            'lng' => $this->longitude,
            'htmlText' => $this->html(),
        ];
    }

    /**
     * @param MarkerInterface[] $mssMarkers
     * @return string
    */
    public static function markersJSON($mssMarkers){
        $mssJSON = [];
        foreach ($mssMarkers as $marker) {

            $mssJSON[] = $marker->toJSON();
        }

        return htmlspecialchars(json_encode($mssJSON));
    }
}
