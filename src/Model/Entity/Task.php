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
 * @property int $documents
 *
 * @property \App\Model\Entity\Link[] $links
 * @property \App\Model\Entity\TrainingPlan[] $training_plans
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
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'status' => true,
        'percentage' => true,
        'documents' => true,
        'links' => true,
        'training_plans' => true,
    ];
}
