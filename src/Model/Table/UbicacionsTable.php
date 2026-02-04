<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ubicacions Model
 *
 * @property \App\Model\Table\OfertasTable&\Cake\ORM\Association\HasMany $Ofertas
 *
 * @method \App\Model\Entity\Ubicacion newEmptyEntity()
 * @method \App\Model\Entity\Ubicacion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ubicacion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ubicacion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ubicacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ubicacion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ubicacion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ubicacion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ubicacion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ubicacion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ubicacion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ubicacion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ubicacion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ubicacion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ubicacion> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UbicacionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ubicacions');
        $this->setDisplayField('intervalo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Ofertas', [
            'foreignKey' => 'ubicacion_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('intervalo')
            ->maxLength('intervalo', 30)
            ->requirePresence('intervalo', 'create')
            ->notEmptyString('intervalo');

        $validator
            ->scalar('accion')
            ->maxLength('accion', 100)
            ->requirePresence('accion', 'create')
            ->notEmptyString('accion');

        $validator
            ->numeric('importe')
            ->requirePresence('importe', 'create')
            ->notEmptyString('importe');

        return $validator;
    }
}
