<?php
$data = [];
foreach ($leaves as $leave){
    if($leave->status == 2) {
        foreach ($users as $user){
            if($leave->user_id == $user->id){
                $item = [
                    'title'=> $user->name,
                    'start' => $leave->date_start,
                    'end' => $leave->date_end
                ];
                $data[] = $item;
            }
        }
    }
}
echo json_encode($data);
