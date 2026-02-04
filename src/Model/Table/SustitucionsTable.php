<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sustitucions Model
 *
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Sustitucion newEmptyEntity()
 * @method \App\Model\Entity\Sustitucion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Sustitucion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sustitucion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Sustitucion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Sustitucion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Sustitucion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sustitucion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Sustitucion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Sustitucion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sustitucion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sustitucion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sustitucion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sustitucion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sustitucion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sustitucion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sustitucion> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SustitucionsTable extends Table
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

        $this->setTable('sustitucions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Monitors', [
            'foreignKey' => 'monitor_id',
        ]);
        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->time('hora_ini')
            ->requirePresence('hora_ini', 'create')
            ->notEmptyTime('hora_ini');

        $validator
            ->time('hora_fin')
            ->requirePresence('hora_fin', 'create')
            ->notEmptyTime('hora_fin');

        $validator
            ->integer('monitor_id')
            ->allowEmptyString('monitor_id');

        $validator
            ->integer('colegio_id')
            ->allowEmptyString('colegio_id');

        $validator
            ->integer('activitat_id')
            ->allowEmptyString('activitat_id');

        $validator
            ->numeric('coste')
            ->allowEmptyString('coste');

        $validator
            ->boolean('justificada')
            ->notEmptyString('justificada');

        $validator
            ->scalar('motivo')
            ->maxLength('motivo', 255)
            ->allowEmptyString('motivo');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->numeric('salario')
            ->allowEmptyString('salario');

        $validator
            ->scalar('comodin1')
            ->maxLength('comodin1', 25)
            ->allowEmptyString('comodin1');

        $validator
            ->scalar('comodin2')
            ->maxLength('comodin2', 25)
            ->allowEmptyString('comodin2');

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
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'), ['errorField' => 'activitat_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
