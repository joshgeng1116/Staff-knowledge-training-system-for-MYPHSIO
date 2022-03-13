<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubcategoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubcategoryTable Test Case
 */
class SubcategoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubcategoryTable
     */
    protected $Subcategory;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Subcategory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Subcategory') ? [] : ['className' => SubcategoryTable::class];
        $this->Subcategory = $this->getTableLocator()->get('Subcategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Subcategory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubcategoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
