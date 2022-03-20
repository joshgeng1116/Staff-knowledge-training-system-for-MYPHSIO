<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsFixture
 */
class DocumentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'user_type' => 1,
                'doc_type' => 1,
                'id_subcat' => 1,
                'path' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
