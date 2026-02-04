<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfertaspreciosactsFixture
 */
class OfertaspreciosactsFixture extends TestFixture
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
                'nom_activitat' => 'Lorem ipsum dolor sit amet',
                'grupo' => 'Lorem ipsum dolor sit amet',
                'start' => 1,
                'basic' => 1,
                'advance' => 1,
                'premium' => 1,
                'premium_plus' => 1,
                'ratio' => 'Lorem ipsum dolor sit amet',
                'material_observ' => 'Lorem ipsum dolor sit amet',
                'accion_horario' => 1,
                'accion_ubicacion' => 1,
                'created' => '2026-02-04 12:10:22',
                'modified' => '2026-02-04 12:10:22',
            ],
        ];
        parent::init();
    }
}
