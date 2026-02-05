<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsMonitorsActivitatsgrups Model
 *
 * @property \App\Model\Table\ActivitatsMonitorsTable&\Cake\ORM\Association\BelongsTo $ActivitatsMonitors
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 *
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsMonitorsActivitatsgrup saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsMonitorsActivitatsgrupsTable extends Table
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

        $this->setTable('activitats_monitors_activitatsgrups');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ActivitatsMonitors', [
            'foreignKey' => 'activitats_monitor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Activitatsgrups', [
            'foreignKey' => 'activitatsgrup_id',
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
            ->integer('activitats_monitor_id')
            ->notEmptyString('activitats_monitor_id');

        $validator
            ->integer('activitatsgrup_id')
            ->notEmptyString('activitatsgrup_id');

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
        $rules->add($rules->existsIn(['activitats_monitor_id'], 'ActivitatsMonitors'), ['errorField' => 'activitats_monitor_id']);
        $rules->add($rules->existsIn(['activitatsgrup_id'], 'Activitatsgrups'), ['errorField' => 'activitatsgrup_id']);

        return $rules;
    }
}
