<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AgentesFixture
 */
class AgentesFixture extends TestFixture
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
                'nom_agente' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-04 11:17:00',
                'modified' => '2026-02-04 11:17:00',
            ],
        ];
        parent::init();
    }
}
