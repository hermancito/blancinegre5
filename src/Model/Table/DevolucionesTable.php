<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Devoluciones Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 *
 * @method \App\Model\Entity\Devolucione newEmptyEntity()
 * @method \App\Model\Entity\Devolucione newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Devolucione> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Devolucione get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Devolucione findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Devolucione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Devolucione> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Devolucione|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Devolucione saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Devolucione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Devolucione>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Devolucione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Devolucione> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Devolucione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Devolucione>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Devolucione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Devolucione> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DevolucionesTable extends Table
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

        $this->setTable('devoluciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
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
            ->integer('colegio_id')
            ->notEmptyString('colegio_id');

        $validator
            ->integer('alumno_id')
            ->notEmptyString('alumno_id');

        $validator
            ->numeric('importe')
            ->allowEmptyString('importe');

        $validator
            ->scalar('concepto')
            ->maxLength('concepto', 255)
            ->allowEmptyString('concepto');

        $validator
            ->scalar('actividad')
            ->maxLength('actividad', 255)
            ->allowEmptyString('actividad');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

        $validator
            ->date('fecha_dev')
            ->requirePresence('fecha_dev', 'create')
            ->notEmptyDate('fecha_dev');

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
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'), ['errorField' => 'alumno_id']);

        return $rules;
    }
}
