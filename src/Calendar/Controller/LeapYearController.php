<?php
namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;

class LeapYearController {
    public function indexAction( Request $request, $year) {
        $leapyear = New LeapYear();
        if($leapyear->isLeapYear($year)) {
            return new Response('Высокосный год');
        }
        return new Response('Не высокосный год');
    }
}