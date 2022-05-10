<?php
$data = [];
foreach ($events as $event){
    $item = [
        'title' => $event->name,
        'start' => $event->start_date,
        'end' => $event->end_date
    ];
    $data[] = $item;
}
foreach ($leaves as $leave){
    if($leave->status == 2) {
        foreach ($users as $user){
            if($leave->user_id == $user->id){
                $item = [
                    'title'=> $user->name.' leave',
                    'start' => $leave->date_start,
                    'end' => $leave->date_end
                ];
                $data[] = $item;
            }
        }
    }
}
echo json_encode($data);
