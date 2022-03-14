<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingPlanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingPlanTable Test Case
 */
class TrainingPlanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingPlanTable
     */
    protected $TrainingPlan;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrainingPlan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TrainingPlan') ? [] : ['className' => TrainingPlanTable::class];
        $this->TrainingPlan = $this->getTableLocator()->get('TrainingPlan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingPlan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TrainingPlanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
