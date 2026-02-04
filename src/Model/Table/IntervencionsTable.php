<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Intervencions Model
 *
 * @property \App\Model\Table\CoordinadordiarisTable&\Cake\ORM\Association\HasMany $Coordinadordiaris
 *
 * @method \App\Model\Entity\Intervencion newEmptyEntity()
 * @method \App\Model\Entity\Intervencion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Intervencion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Intervencion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Intervencion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Intervencion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Intervencion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Intervencion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Intervencion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Intervencion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Intervencion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Intervencion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Intervencion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Intervencion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Intervencion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Intervencion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Intervencion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class IntervencionsTable extends Table
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

        $this->setTable('intervencions');
        $this->setDisplayField('tipo_interv');
        $this->setPrimaryKey('id');

        $this->hasMany('Coordinadordiaris', [
            'foreignKey' => 'intervencion_id',
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
            ->scalar('tipo_interv')
            ->maxLength('tipo_interv', 150)
            ->requirePresence('tipo_interv', 'create')
            ->notEmptyString('tipo_interv');

        return $validator;
    }
}
