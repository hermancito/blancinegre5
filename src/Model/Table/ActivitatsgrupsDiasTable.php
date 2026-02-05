<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsgrupsDias Model
 *
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsTo $Dias
 *
 * @method \App\Model\Entity\ActivitatsgrupsDia newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsgrupsDia newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsgrupsDia> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsDia get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsgrupsDia findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsDia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsgrupsDia> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsDia|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsDia saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsDia>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsDia> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsDia>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsDia> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsgrupsDiasTable extends Table
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

        $this->setTable('activitatsgrups_dias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Activitatsgrups', [
            'foreignKey' => 'activitatsgrup_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
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
            ->integer('activitatsgrup_id')
            ->notEmptyString('activitatsgrup_id');

        $validator
            ->integer('dia_id')
            ->notEmptyString('dia_id');

        $validator
            ->time('hora_ini')
            ->allowEmptyTime('hora_ini');

        $validator
            ->time('hora_fin')
            ->allowEmptyTime('hora_fin');

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
        $rules->add($rules->existsIn(['activitatsgrup_id'], 'Activitatsgrups'), ['errorField' => 'activitatsgrup_id']);
        $rules->add($rules->existsIn(['dia_id'], 'Dias'), ['errorField' => 'dia_id']);

        return $rules;
    }
}
