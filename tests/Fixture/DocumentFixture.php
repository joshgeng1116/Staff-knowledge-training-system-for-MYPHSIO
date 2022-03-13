<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentFixture
 */
class DocumentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'document';
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
            ],
        ];
        parent::init();
    }
}
