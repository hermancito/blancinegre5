<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asistencias Model
 *
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 *
 * @method \App\Model\Entity\Asistencia newEmptyEntity()
 * @method \App\Model\Entity\Asistencia newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Asistencia> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Asistencia findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Asistencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Asistencia> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Asistencia saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Asistencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Asistencia>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Asistencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Asistencia> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Asistencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Asistencia>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Asistencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Asistencia> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AsistenciasTable extends Table
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

        $this->setTable('asistencias');
        $this->setDisplayField('id');
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

        return $rules;
    }
}
