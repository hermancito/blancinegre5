<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoordinadorsMonitors Model
 *
 * @property \App\Model\Table\CoordinadorsTable&\Cake\ORM\Association\BelongsTo $Coordinadors
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 *
 * @method \App\Model\Entity\CoordinadorsMonitor newEmptyEntity()
 * @method \App\Model\Entity\CoordinadorsMonitor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CoordinadorsMonitor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoordinadorsMonitor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CoordinadorsMonitor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CoordinadorsMonitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CoordinadorsMonitor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoordinadorsMonitor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CoordinadorsMonitor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CoordinadorsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CoordinadorsMonitor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CoordinadorsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CoordinadorsMonitor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CoordinadorsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CoordinadorsMonitor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CoordinadorsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CoordinadorsMonitor> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CoordinadorsMonitorsTable extends Table
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

        $this->setTable('coordinadors_monitors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Coordinadors', [
            'foreignKey' => 'coordinador_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Monitors', [
            'foreignKey' => 'monitor_id',
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
            ->integer('coordinador_id')
            ->notEmptyString('coordinador_id');

        $validator
            ->integer('monitor_id')
            ->notEmptyString('monitor_id');

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
        $rules->add($rules->existsIn(['coordinador_id'], 'Coordinadors'), ['errorField' => 'coordinador_id']);
        $rules->add($rules->existsIn(['monitor_id'], 'Monitors'), ['errorField' => 'monitor_id']);

        return $rules;
    }
}
