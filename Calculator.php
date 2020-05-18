<?php


class Calculator
{
    public function average(array $schoolReport): ?float
    {
        $sum=0;
        if(sizeof($schoolReport)>0){
            foreach ($schoolReport as $number){
                $sum += $number;
            }
            
            return $sum/sizeof($schoolReport);
        }

        return null;
    }
}