<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property string $title
 * @property int $status
 * @property int $percentage
 * @property int $docs
 *
 * @property \App\Model\Entity\TrainingPlan[] $training_plans
 * @property \App\Model\Entity\TrainingTask[] $training_tasks
 * @property \App\Model\Entity\Document[] $documents
 */
class Task extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'title' => true,
        'status' => true,
        'percentage' => true,
        'document_id' => true,
        'training_plans' => true,
        'training_tasks' => true,
    ];
}
