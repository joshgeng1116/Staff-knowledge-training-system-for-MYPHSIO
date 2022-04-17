<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property int $year
 * @property int $user_type
 * @property int $doc_type
 * @property int $subcat_id
 * @property string $post_file
 * @property string|null $path
 *
 * @property \App\Model\Entity\Subcat $subcat
 */
class Document extends Entity
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
        'author' => true,
        'year' => true,
        'user_type' => true,
        'doc_type' => true,
        'subcat_id' => true,
        'post_file' => true,
        'path' => true,
        'subcat' => true,
    ];
}
