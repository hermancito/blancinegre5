<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsgrupsAlumnos Model
 *
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 *
 * @method \App\Model\Entity\ActivitatsgrupsAlumno newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsgrupsAlumno newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsgrupsAlumno> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsAlumno get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsgrupsAlumno findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsAlumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsgrupsAlumno> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsAlumno|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsAlumno saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsAlumno>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsAlumno> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsAlumno>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsAlumno> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsgrupsAlumnosTable extends Table
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

        $this->setTable('activitatsgrups_alumnos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Activitatsgrups', [
            'foreignKey' => 'activitatsgrup_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
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
            ->integer('alumno_id')
            ->notEmptyString('alumno_id');

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
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'), ['errorField' => 'alumno_id']);

        return $rules;
    }
}
