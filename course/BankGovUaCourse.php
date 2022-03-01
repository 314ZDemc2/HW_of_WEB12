<?php


class BankGovUaCourse implements ICourse
{
    private $usd;
    private $eur;
    private $rub;
    private $lev;
    private $mssCourse;


    public function __construct(){
        $strJSON = file_get_contents("https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json");
        $json = json_decode($strJSON);
        $this->mssCourse = $json;

        $tmpMss = [
            "usd" => 840,
            "eur" => 978,
            "rub" => 643,
            "lev" => 975,
        ];

        foreach ($json as $course){
            foreach ($tmpMss as $prop => $id) {

                if ($course->r030 == $id){
                    $this->$prop = $course->rate;
                }

            }

//            if($course->r030 == "840"){
//                $this->usd = $course->rate;
//            }else if($course->r030 == "978"){
//                $this->eur = $course->rate;
//            }else if($course->r030 == '643'){
//                $this->rub = $course->rate;
//            }

        }
    }

    public function getUSD()
    {
        return $this->usd;
    }

    public function getEUR()
    {
        return $this->eur;
    }

    public function getRUB()
    {
        return $this->rub;
    }

    public function getLEV()
    {
        return $this->lev;
    }
}