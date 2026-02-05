<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ColegiosMonitors Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 *
 * @method \App\Model\Entity\ColegiosMonitor newEmptyEntity()
 * @method \App\Model\Entity\ColegiosMonitor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ColegiosMonitor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ColegiosMonitor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ColegiosMonitor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ColegiosMonitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ColegiosMonitor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ColegiosMonitor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ColegiosMonitor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosMonitor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosMonitor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosMonitor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosMonitor> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ColegiosMonitorsTable extends Table
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

        $this->setTable('colegios_monitors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
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
            ->integer('colegio_id')
            ->notEmptyString('colegio_id');

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
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);
        $rules->add($rules->existsIn(['monitor_id'], 'Monitors'), ['errorField' => 'monitor_id']);

        return $rules;
    }
}
