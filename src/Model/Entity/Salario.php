<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Salario Entity
 *
 * @property int $id
 * @property int $user_id
 * @property float $sala_fijo
 * @property float $sala_vble
 * @property float $plus_var
 * @property float $complemento
 * @property float $dietas
 * @property float $eventos
 * @property int $it
 * @property int $absentismo
 * @property float $dto
 * @property float $nomina
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Salario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'sala_fijo' => true,
        'sala_vble' => true,
        'plus_var' => true,
        'complemento' => true,
        'dietas' => true,
        'eventos' => true,
        'it' => true,
        'absentismo' => true,
        'dto' => true,
        'nomina' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
