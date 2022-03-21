<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinkTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinkTable Test Case
 */
class LinkTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LinkTable
     */
    protected $Link;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Link',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Link') ? [] : ['className' => LinkTable::class];
        $this->Link = $this->getTableLocator()->get('Link', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Link);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LinkTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
