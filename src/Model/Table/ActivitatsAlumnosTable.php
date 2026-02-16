<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsAlumnos Model
 *
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 *
 * @method \App\Model\Entity\ActivitatsAlumno newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsAlumno newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsAlumno> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsAlumno get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsAlumno findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsAlumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsAlumno> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsAlumno|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsAlumno saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsAlumno>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsAlumno> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsAlumno>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsAlumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsAlumno> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsAlumnosTable extends Table
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

        $this->setTable('activitats_alumnos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
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
            ->integer('alumno_id')
            ->allowEmptyString('alumno_id');

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
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'), ['errorField' => 'alumno_id']);

        return $rules;
    }
}
