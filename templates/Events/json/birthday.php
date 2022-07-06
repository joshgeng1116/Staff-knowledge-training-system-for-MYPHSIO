<?php
$data = [];
foreach ($users as $user){
    $dob = explode("/",$user->date_of_birth);
    $date = $dob[0];
    $month = $dob[1];
        $year = date('Y');
        $item = [
            'title' => $user->name." Birthday",
            'start' => $year.'-'.$month.'-'.$date,
            'end' => $year.'-'.$month.'-'.$date
        ];
        $data[] = $item;
}
echo json_encode($data);
