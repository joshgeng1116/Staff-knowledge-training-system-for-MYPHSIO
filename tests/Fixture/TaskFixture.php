<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TaskFixture
 */
class TaskFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'task';
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
                'status' => 1,
                'percentage' => 1,
                'documents' => 1,
            ],
        ];
        parent::init();
    }
}
