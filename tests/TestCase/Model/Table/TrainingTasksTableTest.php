<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingTasksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingTasksTable Test Case
 */
class TrainingTasksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingTasksTable
     */
    protected $TrainingTasks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrainingTasks',
        'app.TrainingPlans',
        'app.Tasks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TrainingTasks') ? [] : ['className' => TrainingTasksTable::class];
        $this->TrainingTasks = $this->getTableLocator()->get('TrainingTasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingTasks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TrainingTasksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TrainingTasksTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
