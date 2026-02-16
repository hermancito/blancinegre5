<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registroaltas Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsToMany $Activitats
 *
 * @method \App\Model\Entity\Registroalta newEmptyEntity()
 * @method \App\Model\Entity\Registroalta newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Registroalta> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registroalta get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Registroalta findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Registroalta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Registroalta> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registroalta|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Registroalta saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Registroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registroalta>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Registroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registroalta> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Registroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registroalta>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Registroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Registroalta> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistroaltasTable extends Table
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

        $this->setTable('registroaltas');
        $this->setDisplayField('alta_amplia');
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
        $this->belongsToMany('Activitats', [
            'foreignKey' => 'registroalta_id',
            'targetForeignKey' => 'activitat_id',
            'joinTable' => 'activitats_registroaltas',
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
            ->scalar('alta_amplia')
            ->maxLength('alta_amplia', 20)
            ->requirePresence('alta_amplia', 'create')
            ->notEmptyString('alta_amplia');

        $validator
            ->scalar('material')
            ->maxLength('material', 100)
            ->requirePresence('material', 'create')
            ->notEmptyString('material');

        $validator
            ->scalar('observ')
            ->requirePresence('observ', 'create')
            ->notEmptyString('observ');

        $validator
            ->date('fecha_alta')
            ->requirePresence('fecha_alta', 'create')
            ->notEmptyDate('fecha_alta');

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
