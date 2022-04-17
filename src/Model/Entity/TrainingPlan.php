<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrainingPlan Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $percentage
 * @property int $assign_to
 * @property int $task_id
 *
 * @property \App\Model\Entity\Task $task
 * @property \App\Model\Entity\Link[] $links
 */
class TrainingPlan extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'percentage' => true,
        'assign_to' => true,
        'task_id' => true,
        'task' => true,
        'links' => true,
    ];
}
