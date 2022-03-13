<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentTable Test Case
 */
class DocumentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentTable
     */
    protected $Document;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Document',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Document') ? [] : ['className' => DocumentTable::class];
        $this->Document = $this->getTableLocator()->get('Document', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Document);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DocumentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
