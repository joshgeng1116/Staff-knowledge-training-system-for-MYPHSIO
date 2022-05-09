<?php
$data = [];
foreach ($events as $event){
    if($event->type == 2) {
        $item = [
            'title' => $event->name,
            'start' => $event->start_date,
            'end' => $event->end_date
        ];
        $data[] = $item;
    }
}
echo json_encode($data);
