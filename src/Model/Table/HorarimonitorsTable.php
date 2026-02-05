<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Horarimonitors Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Horarimonitor newEmptyEntity()
 * @method \App\Model\Entity\Horarimonitor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Horarimonitor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Horarimonitor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Horarimonitor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Horarimonitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Horarimonitor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Horarimonitor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Horarimonitor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Horarimonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Horarimonitor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Horarimonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Horarimonitor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Horarimonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Horarimonitor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Horarimonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Horarimonitor> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HorarimonitorsTable extends Table
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

        $this->setTable('horarimonitors');
        $this->setDisplayField('inic_fin');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmptyTime('hora');

        $validator
            ->scalar('inic_fin')
            ->maxLength('inic_fin', 10)
            ->requirePresence('inic_fin', 'create')
            ->notEmptyString('inic_fin');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('latitud')
            ->maxLength('latitud', 150)
            ->allowEmptyString('latitud');

        $validator
            ->scalar('longitud')
            ->maxLength('longitud', 150)
            ->allowEmptyString('longitud');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
