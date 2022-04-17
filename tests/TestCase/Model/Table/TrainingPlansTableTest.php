<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingPlansTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingPlansTable Test Case
 */
class TrainingPlansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingPlansTable
     */
    protected $TrainingPlans;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrainingPlans',
        'app.Tasks',
        'app.Links',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TrainingPlans') ? [] : ['className' => TrainingPlansTable::class];
        $this->TrainingPlans = $this->getTableLocator()->get('TrainingPlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingPlans);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TrainingPlansTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TrainingPlansTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
