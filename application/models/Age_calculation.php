<?php
class Age_calculation extends CI_Model {

    function calculateAge($year, $month, $date) {
        $dateOfBirth = $date.".".$month.".".$year;

        $today = date("d.m.Y");

        $diff = date_diff(date_create($dateOfBirth), date_create($today));

        return $diff->format('%y');
    }
}