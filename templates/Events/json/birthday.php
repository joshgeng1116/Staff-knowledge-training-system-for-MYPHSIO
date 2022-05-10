<?php
$data = [];
foreach ($users as $user){
    $month = date("d",strtotime($user->date_of_birth));
        $date = date("m",strtotime($user->date_of_birth));
        $year = date('Y');
        $item = [
            'title' => $user->name." Birthday",
            'start' => $year.'-'.$month.'-'.$date,
            'end' => $year.'-'.$month.'-'.$date
        ];
        $data[] = $item;
}
echo json_encode($data);