<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disponibilitats Model
 *
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsTo $Dias
 * @property \App\Model\Table\HorasTable&\Cake\ORM\Association\BelongsTo $Horas
 * @property \App\Model\Table\TiponodisponibilitatsTable&\Cake\ORM\Association\BelongsTo $Tiponodisponibilitats
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 *
 * @method \App\Model\Entity\Disponibilitat newEmptyEntity()
 * @method \App\Model\Entity\Disponibilitat newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Disponibilitat> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disponibilitat get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Disponibilitat findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Disponibilitat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Disponibilitat> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disponibilitat|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Disponibilitat saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Disponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Disponibilitat>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Disponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Disponibilitat> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Disponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Disponibilitat>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Disponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Disponibilitat> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DisponibilitatsTable extends Table
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

        $this->setTable('disponibilitats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Monitors', [
            'foreignKey' => 'monitor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Horas', [
            'foreignKey' => 'hora_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tiponodisponibilitats', [
            'foreignKey' => 'tiponodisponibilitat_id',
        ]);
        $this->belongsTo('Activitatsgrups', [
            'foreignKey' => 'activitatsgrup_id',
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
            ->integer('monitor_id')
            ->notEmptyString('monitor_id');

        $validator
            ->integer('dia_id')
            ->notEmptyString('dia_id');

        $validator
            ->integer('hora_id')
            ->notEmptyString('hora_id');

        $validator
            ->integer('tiponodisponibilitat_id')
            ->allowEmptyString('tiponodisponibilitat_id');

        $validator
            ->integer('activitatsgrup_id')
            ->allowEmptyString('activitatsgrup_id');

        $validator
            ->boolean('disponible')
            ->notEmptyString('disponible');

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
        $rules->add($rules->existsIn(['monitor_id'], 'Monitors'), ['errorField' => 'monitor_id']);
        $rules->add($rules->existsIn(['dia_id'], 'Dias'), ['errorField' => 'dia_id']);
        $rules->add($rules->existsIn(['hora_id'], 'Horas'), ['errorField' => 'hora_id']);
        $rules->add($rules->existsIn(['tiponodisponibilitat_id'], 'Tiponodisponibilitats'), ['errorField' => 'tiponodisponibilitat_id']);
        $rules->add($rules->existsIn(['activitatsgrup_id'], 'Activitatsgrups'), ['errorField' => 'activitatsgrup_id']);

        return $rules;
    }
}
