<?php

class JSONContainer
{
    // файл, где храниться JSON массив класса
    protected $jsonFile;

    // папка, со всем json файлами
    const JSON_DIRECTORY = "json";

    // сохраняет данные в массив
    public function saveJSON($mssProduct){
        $mssJson = $this->loadJSON();
        $mssJson[] = $mssProduct;
        $strJSON = json_encode($mssJson);

        $path = $this->getJSONPath();

        if(!file_exists(self::JSON_DIRECTORY)){
            mkdir(self::JSON_DIRECTORY);
        }

        file_put_contents($path, $strJSON);
    }

    // Возвращает путь к файлу json
    public function getJSONPath(){
        return self::JSON_DIRECTORY . "\\" . $this->jsonFile;
    }

    // выгружает массив из json файла
    public function loadJSON(){
        $strJSON = '[]';

        $path = $this->getJSONPath();
        if(file_exists($path)){
            $strJSON = file_get_contents($path);
        }

        return json_decode($strJSON, true);
    }
}