<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Leave Entity
 *
 * @property int $id
 * @property string $category
 * @property \Cake\I18n\FrozenDate $date_start
 * @property \Cake\I18n\FrozenDate $date_end
 * @property string $note
 * @property int $status
 * @property int $id_user
 */
class Leave extends Entity
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
        'category' => true,
        'date_start' => true,
        'date_end' => true,
        'note' => true,
        'status' => true,
        'id_user' => true,
    ];
}
