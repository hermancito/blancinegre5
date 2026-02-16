<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notas Model
 *
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsTo $Alumnos
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BoletinesTable&\Cake\ORM\Association\HasMany $Boletines
 *
 * @method \App\Model\Entity\Nota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nota|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('notas');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('activitat_id')
            ->requirePresence('activitat_id', 'create')
            ->requirePresence('activitat_id', 'update');

        $validator
            ->integer('alumno_id')
            ->requirePresence('alumno_id', 'create')
            ->requirePresence('alumno_id', 'update');

        $validator
            ->integer('user_id')
            ->requirePresence('user_id', 'create')
            ->requirePresence('user_id', 'update');

        $validator
            ->integer('cuatrim')
            ->maxLength('cuatrim', 1)
            ->requirePresence('cuatrim', 'create');

        $validator
            ->integer('anyo')
            ->maxLength('anyo', 4);

        $validator
            ->scalar('curso')
            ->maxLength('curso', 9)
            ->requirePresence('curso', 'create')
            ->requirePresence('curso', 'update');

        $validator->add('curso', 'length', [
            'rule' => ['maxLength', 9],
            'message' => 'El curso debe expresarse con máximo 9 digitos'
        ]);

        $validator
            ->scalar('objetivos')
            ->maxLength('objetivos', 5)
            ->allowEmptyString('objetivos');

        $validator
            ->scalar('contenidos')
            ->maxLength('contenidos', 5)
            ->allowEmptyString('contenidos');

        $validator
            ->scalar('atencion')
            ->maxLength('atencion', 5)
            ->allowEmptyString('atencion');

        $validator
            ->scalar('participa')
            ->maxLength('participa', 5)
            ->allowEmptyString('participa');

        $validator
            ->scalar('ejerc')
            ->maxLength('ejerc', 5)
            ->allowEmptyString('ejerc');

        $validator
            ->scalar('asist')
            ->maxLength('asist', 5)
            ->allowEmptyString('asist');

        $validator
            ->scalar('actitud')
            ->maxLength('actitud', 5)
            ->allowEmptyString('actitud');

        $validator
            ->scalar('respeto')
            ->maxLength('respeto', 5)
            ->allowEmptyString('respeto');

        $validator
            ->boolean('validado')
            ->notEmptyString('validado');

        $validator
            ->scalar('contenidos_boletin')
            ->allowEmptyString('contenidos_boletin');

        $validator
            ->scalar('comentarios_boletin')
            ->allowEmptyString('comentarios_boletin');

        $validator->add('contenidos_boletin', 'length', [
            'rule' => ['maxLength', 650],
            'message' => 'El nº máximo de caracteres permitidos es 550'
        ]);

        $validator->add('comentarios_boletin', 'length', [
            'rule' => ['maxLength', 650],
            'message' => 'El nº máximo de caracteres permitidos es 550'
        ]);

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
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'));

        return $rules;
    }
}