<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $User2s
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegs
 * @property \App\Model\Table\AsistenciasTable&\Cake\ORM\Association\HasMany $Asistencias
 * @property \App\Model\Table\BoletinesTable&\Cake\ORM\Association\HasMany $Boletines
 * @property \App\Model\Table\DevolucionesTable&\Cake\ORM\Association\HasMany $Devoluciones
 * @property \App\Model\Table\NotasTable&\Cake\ORM\Association\HasMany $Notas
 * @property \App\Model\Table\RegistroaltasTable&\Cake\ORM\Association\HasMany $Registroaltas
 * @property \App\Model\Table\RegistrobajasTable&\Cake\ORM\Association\HasMany $Registrobajas
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsToMany $Activitats
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsToMany $Activitatsgrups
 * @property \App\Model\Table\CoordinadorsTable&\Cake\ORM\Association\BelongsToMany $Coordinadors
 *
 * @method \App\Model\Entity\Alumno newEmptyEntity()
 * @method \App\Model\Entity\Alumno newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Alumno> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Alumno findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Alumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Alumno> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Alumno saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Alumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alumno>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Alumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alumno> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Alumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alumno>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Alumno>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alumno> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AlumnosTable extends Table
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

        $this->setTable('alumnos');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('User2s', [
            'foreignKey' => 'user2_id',
            'className' => 'Users',
        ]);
        $this->belongsTo('Colegs', [
            'foreignKey' => 'coleg_id',
            'className' => 'Colegios',
        ]);
        $this->hasMany('Asistencias', [
            'foreignKey' => 'alumno_id',
        ]);
        $this->hasMany('Boletines', [
            'foreignKey' => 'alumno_id',
        ]);
        $this->hasMany('Devoluciones', [
            'foreignKey' => 'alumno_id',
        ]);
        $this->hasMany('Notas', [
            'foreignKey' => 'alumno_id',
        ]);
        $this->hasMany('Registroaltas', [
            'foreignKey' => 'alumno_id',
        ]);
        $this->hasMany('Registrobajas', [
            'foreignKey' => 'alumno_id',
        ]);
        $this->belongsToMany('Activitats', [
            'foreignKey' => 'alumno_id',
            'targetForeignKey' => 'activitat_id',
            'joinTable' => 'activitats_alumnos',
        ]);
        $this->belongsToMany('Activitatsgrups', [
            'foreignKey' => 'alumno_id',
            'targetForeignKey' => 'activitatsgrup_id',
            'joinTable' => 'activitatsgrups_alumnos',
        ]);
        $this->belongsToMany('Coordinadors', [
            'foreignKey' => 'alumno_id',
            'targetForeignKey' => 'coordinador_id',
            'joinTable' => 'alumnos_coordinadors',
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
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('user2_id')
            ->allowEmptyString('user2_id');

        $validator
            ->integer('coleg_id')
            ->allowEmptyString('coleg_id');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 20)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('nombre_apellidos')
            ->maxLength('nombre_apellidos', 255)
            ->allowEmptyString('nombre_apellidos');

        $validator
            ->integer('anyo')
            ->allowEmptyString('anyo');

        $validator
            ->integer('tfno')
            ->allowEmptyString('tfno');

        $validator
            ->integer('movil')
            ->allowEmptyString('movil');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

        $validator
            ->boolean('socio')
            ->allowEmptyString('socio');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('cuenta')
            ->maxLength('cuenta', 20)
            ->allowEmptyString('cuenta');

        $validator
            ->scalar('iban')
            ->maxLength('iban', 4)
            ->allowEmptyString('iban');

        $validator
            ->scalar('titular')
            ->maxLength('titular', 255)
            ->allowEmptyString('titular');

        $validator
            ->scalar('nif')
            ->maxLength('nif', 20)
            ->allowEmptyString('nif');

        $validator
            ->scalar('cobro')
            ->maxLength('cobro', 15)
            ->allowEmptyString('cobro');

        $validator
            ->integer('recibo')
            ->allowEmptyString('recibo');

        $validator
            ->scalar('material')
            ->maxLength('material', 100)
            ->allowEmptyString('material');

        $validator
            ->scalar('coment_pub')
            ->allowEmptyString('coment_pub');

        $validator
            ->scalar('coment_priv')
            ->allowEmptyString('coment_priv');

        $validator
            ->integer('ampa')
            ->allowEmptyString('ampa');

        $validator
            ->boolean('eliminado')
            ->allowEmptyString('eliminado');

        $validator
            ->boolean('comedor')
            ->allowEmptyString('comedor');

        $validator
            ->boolean('datos')
            ->allowEmptyString('datos');

        $validator
            ->boolean('info_mail')
            ->allowEmptyString('info_mail');

        $validator
            ->scalar('comodin')
            ->maxLength('comodin', 10)
            ->allowEmptyString('comodin');

        $validator
            ->scalar('curso')
            ->maxLength('curso', 4)
            ->allowEmptyString('curso');

        $validator
            ->numeric('matricula')
            ->notEmptyString('matricula');

        $validator
            ->numeric('no_socio')
            ->notEmptyString('no_socio');

        $validator
            ->numeric('suplemento')
            ->notEmptyString('suplemento');

        $validator
            ->numeric('dto_fijo')
            ->notEmptyString('dto_fijo');

        $validator
            ->numeric('dto_porcentaje')
            ->notEmptyString('dto_porcentaje');

        $validator
            ->numeric('suma_pfijo')
            ->notEmptyString('suma_pfijo');

        $validator
            ->numeric('suma_pvble')
            ->notEmptyString('suma_pvble');

        $validator
            ->numeric('cuota_previa')
            ->notEmptyString('cuota_previa');

        $validator
            ->numeric('cuota')
            ->notEmptyString('cuota');

        $validator
            ->scalar('nif_alumno')
            ->maxLength('nif_alumno', 20)
            ->allowEmptyString('nif_alumno');

        $validator
            ->scalar('merito1')
            ->maxLength('merito1', 30)
            ->allowEmptyString('merito1');

        $validator
            ->scalar('merito2')
            ->maxLength('merito2', 30)
            ->allowEmptyString('merito2');

        $validator
            ->scalar('merito3')
            ->maxLength('merito3', 30)
            ->allowEmptyString('merito3');

        $validator
            ->scalar('merito4')
            ->maxLength('merito4', 30)
            ->allowEmptyString('merito4');

        $validator
            ->scalar('merito5')
            ->maxLength('merito5', 30)
            ->allowEmptyString('merito5');

        $validator
            ->scalar('ingles_3a')
            ->maxLength('ingles_3a', 6)
            ->allowEmptyString('ingles_3a');

        $validator
            ->scalar('ingles_4a')
            ->maxLength('ingles_4a', 6)
            ->allowEmptyString('ingles_4a');

        $validator
            ->scalar('ingles_5a')
            ->maxLength('ingles_5a', 6)
            ->allowEmptyString('ingles_5a');

        $validator
            ->scalar('ingles_g1')
            ->maxLength('ingles_g1', 6)
            ->allowEmptyString('ingles_g1');

        $validator
            ->scalar('ingles_g2')
            ->maxLength('ingles_g2', 6)
            ->allowEmptyString('ingles_g2');

        $validator
            ->scalar('ingles_g3')
            ->maxLength('ingles_g3', 6)
            ->allowEmptyString('ingles_g3');

        $validator
            ->scalar('ingles_g4')
            ->maxLength('ingles_g4', 6)
            ->allowEmptyString('ingles_g4');

        $validator
            ->scalar('ingles_g5')
            ->maxLength('ingles_g5', 6)
            ->allowEmptyString('ingles_g5');

        $validator
            ->scalar('ingles_g6')
            ->maxLength('ingles_g6', 6)
            ->allowEmptyString('ingles_g6');

        $validator
            ->scalar('ingles_g7')
            ->maxLength('ingles_g7', 6)
            ->allowEmptyString('ingles_g7');

        $validator
            ->scalar('ingles_g8')
            ->maxLength('ingles_g8', 6)
            ->allowEmptyString('ingles_g8');

        $validator
            ->scalar('ingles_g9')
            ->maxLength('ingles_g9', 6)
            ->allowEmptyString('ingles_g9');

        $validator
            ->boolean('impago')
            ->notEmptyString('impago');

        $validator
            ->scalar('texto_impago')
            ->maxLength('texto_impago', 100)
            ->allowEmptyString('texto_impago');

        $validator
            ->scalar('sip')
            ->maxLength('sip', 8)
            ->allowEmptyString('sip');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['user2_id'], 'User2s'), ['errorField' => 'user2_id']);
        $rules->add($rules->existsIn(['coleg_id'], 'Colegs'), ['errorField' => 'coleg_id']);

        return $rules;
    }
}
