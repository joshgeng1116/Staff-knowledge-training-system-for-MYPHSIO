<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LinkFixture
 */
class LinkFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'link';
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
                'id_training_plan' => 1,
                'id_task' => 1,
            ],
        ];
        parent::init();
    }
}
