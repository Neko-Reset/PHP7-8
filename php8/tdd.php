<?php

function getAge($age)
{
    if ($age >= 20) {
        $adult = $age;
        return $adult;
    }

    if ($age >= 18 && $age <= 20) {
        $university = $age;
        return $university;
    }

    if ($age >= 16 && $age <= 18) {
        $high_school = $age;
        return $high_school;
    }

    if ($age >= 12 && $age <= 15) {
        $middle_school = $age;
        return $middle_school;
    }

    if ($age <= 12) {
        $elementary = $age;
        return $elementary;
    }
}

function getCinemaPriced()
{
    $num = 1;
    $num = ;
    $num = 1;

    $age = getAge();
}
