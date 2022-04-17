<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainingTasksFixture
 */
class TrainingTasksFixture extends TestFixture
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
                'training_plan_id' => 1,
                'task_id' => 1,
            ],
        ];
        parent::init();
    }
}
