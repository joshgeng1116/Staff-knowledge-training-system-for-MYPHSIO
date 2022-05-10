<?php
$data = [];
foreach ($events as $event){
    if($event->type == 1) {
        $month = date("d",strtotime($event->start_date));
        $date = date("m",strtotime($event->start_date));
        $year = date('Y');
        $item = [
            'title' => $event->name,
            'start' => $year.'-'.$month.'-'.$date,
            'end' => $year.'-'.$month.'-'.$date
        ];
        $data[] = $item;
    }
}
echo json_encode($data);
