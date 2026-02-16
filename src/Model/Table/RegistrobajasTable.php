<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrobajas Model
 *
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 *
 * @method \App\Model\Entity\Registrobaja newEmptyEntity()
 * @method \App\Model\Entity\Registrobaja newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Registrobaja> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registrobaja get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Registrobaja findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Registrobaja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Registrobaja> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registrobaja|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Registrobaja saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Registrobaja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registrobaja>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Registrobaja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registrobaja> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Registrobaja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registrobaja>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Registrobaja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registrobaja> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistrobajasTable extends Table
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

        $this->setTable('registrobajas');
        $this->setDisplayField('motivo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Activitatsgrups', [
            'foreignKey' => 'activitatsgrup_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
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
            ->integer('alumno_id')
            ->notEmptyString('alumno_id');

        $validator
            ->integer('activitatsgrup_id')
            ->notEmptyString('activitatsgrup_id');

        $validator
            ->integer('colegio_id')
            ->notEmptyString('colegio_id');

        $validator
            ->date('fecha_baja')
            ->requirePresence('fecha_baja', 'create')
            ->notEmptyDate('fecha_baja');

        $validator
            ->scalar('motivo')
            ->maxLength('motivo', 100)
            ->requirePresence('motivo', 'create')
            ->notEmptyString('motivo');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

        $validator
            ->boolean('ejecutada')
            ->notEmptyString('ejecutada');

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
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'), ['errorField' => 'alumno_id']);
        $rules->add($rules->existsIn(['activitatsgrup_id'], 'Activitatsgrups'), ['errorField' => 'activitatsgrup_id']);
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);

        return $rules;
    }
}
