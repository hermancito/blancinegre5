<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsMonitors Model
 *
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsToMany $Activitatsgrups
 *
 * @method \App\Model\Entity\ActivitatsMonitor newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsMonitor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsMonitor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsMonitor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsMonitor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitor> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsMonitorsTable extends Table
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

        $this->setTable('activitats_monitors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Monitors', [
            'foreignKey' => 'monitor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Activitatsgrups', [
            'foreignKey' => 'activitats_monitor_id',
            'targetForeignKey' => 'activitatsgrup_id',
            'joinTable' => 'activitats_monitors_activitatsgrups',
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
            ->integer('activitat_id')
            ->notEmptyString('activitat_id');

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
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'), ['errorField' => 'activitat_id']);
        $rules->add($rules->existsIn(['monitor_id'], 'Monitors'), ['errorField' => 'monitor_id']);

        return $rules;
    }
}
