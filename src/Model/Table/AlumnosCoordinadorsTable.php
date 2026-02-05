<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AlumnosCoordinadors Model
 *
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 * @property \App\Model\Table\CoordinadorsTable&\Cake\ORM\Association\BelongsTo $Coordinadors
 *
 * @method \App\Model\Entity\AlumnosCoordinador newEmptyEntity()
 * @method \App\Model\Entity\AlumnosCoordinador newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AlumnosCoordinador> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AlumnosCoordinador get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AlumnosCoordinador findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AlumnosCoordinador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AlumnosCoordinador> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AlumnosCoordinador|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AlumnosCoordinador saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosCoordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosCoordinador>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosCoordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosCoordinador> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosCoordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosCoordinador>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosCoordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosCoordinador> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AlumnosCoordinadorsTable extends Table
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

        $this->setTable('alumnos_coordinadors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Coordinadors', [
            'foreignKey' => 'coordinador_id',
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
            ->integer('coordinador_id')
            ->notEmptyString('coordinador_id');

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
        $rules->add($rules->existsIn(['coordinador_id'], 'Coordinadors'), ['errorField' => 'coordinador_id']);

        return $rules;
    }
}
