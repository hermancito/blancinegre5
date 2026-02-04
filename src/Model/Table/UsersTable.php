<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 * 
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\HasMany $Alumnos
 * @property \App\Model\Table\NotasTable&\Cake\ORM\Association\HasMany $Notas
 * @property \App\Model\Table\NotificacionsTable&\Cake\ORM\Association\HasMany $Notificacions
 * @property \App\Model\Table\SalariosTable&\Cake\ORM\Association\HasMany $Salarios
 * @property \App\Model\Table\AlumnosXmlTable&\Cake\ORM\Association\HasMany $AlumnosXml
 * @property \App\Model\Table\NotificacionpdfsTable&\Cake\ORM\Association\HasMany $Notificacionpdfs
 * @property \App\Model\Table\ColegiofilesTable&\Cake\ORM\Association\HasMany $Colegiofiles
 * @property \App\Model\Table\ColegiofilesfamiliasTable&\Cake\ORM\Association\HasMany $Colegiofilesfamilias
 * @property \App\Model\Table\BoletinesTable&\Cake\ORM\Association\HasMany $Boletines
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsToMany $Activitats
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Destinos
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsToMany $Roles
 * @property \App\Model\Table\CoordinadorsfilesTable&\Cake\ORM\Association\HasMany $Coordinadorsfiles
 * @property \App\Model\Table\MonitorsfilesTable&\Cake\ORM\Association\HasMany $Monitorsfiles
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\SustitucionsTable&\Cake\ORM\Association\HasMany $Sustitucions
 * @property \App\Model\Table\EventosTable&\Cake\ORM\Association\HasMany $Eventos
 * @property \App\Model\Table\PersonalcontrolsTable&\Cake\ORM\Association\HasMany $Personalcontrols
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Alumnos', [
            'foreignKey' => 'user_id'
        ]);

        $this->hasMany('Alumnos', [
            'foreignKey' => 'user2_id'
        ]);

        $this->hasMany('Notas', [
            'foreignKey' => 'user_id'
        ]);

        $this->hasMany('Notificacions', [
            'foreignKey' => 'user_id'
        ]);

        $this->hasMany('Salarios', [
            'foreignKey' => 'user_id'
        ]);

        $this->hasMany('AlumnosXml', [
            'foreignKey' => 'user_id'
        ]);

        $this->hasMany('Notificacionpdfs', [
            'foreignKey' => 'user_id'
        ]);

        $this->hasMany('Colegiofiles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Colegiofilesfamilias', [
            'foreignKey' => 'colegio_id'
        ]);
        $this->hasMany('Coordinadorsfiles', [
            'foreignKey' => 'coordinador_id'
        ]);
        $this->hasMany('Monitorsfiles', [
            'foreignKey' => 'monitor_id'
        ]);
        $this->hasMany('Boletines', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Activitats', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'activitat_id',
            'joinTable' => 'activitats_users'
        ]);
        $this->belongsToMany('Destinos', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'destino_id',
            'joinTable' => 'destinos_users'
        ]);
        $this->belongsToMany('Roles', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'role_id',
            'joinTable' => 'roles_users'
        ]);

        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id'
        ]);
        $this->hasMany('Sustitucions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Eventos', [
            'foreignKey' => 'monitor_id'
        ]);
        $this->hasMany('Personalcontrols', [
            'foreignKey' => 'monitor_id'
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
            ->scalar('codigo')
            ->maxLength('codigo', 10)
            ->allowEmptyString('codigo');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmptyString('username');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->requirePresence('photo_dir', 'create')
            ->notEmptyString('photo_dir');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->allowEmptyString('apellidos');

        $validator
            ->integer('tfno1')
            ->allowEmptyString('tfno1');

        $validator
            ->integer('tfno2')
            ->allowEmptyString('tfno2');

        $validator
            ->scalar('nif')
            ->maxLength('nif', 9)
            ->allowEmptyString('nif');

        $validator
            ->boolean('validado')
            ->notEmptyString('validado');

        $validator
            ->boolean('bolsa')
            ->notEmptyString('bolsa');

        $validator
            ->boolean('datos')
            ->notEmptyString('datos');

        $validator
            ->boolean('info_mail')
            ->notEmptyString('info_mail');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 10)
            ->allowEmptyString('sexo');

        $validator
            ->scalar('seg_soc')
            ->maxLength('seg_soc', 20)
            ->allowEmptyString('seg_soc');

        $validator
            ->scalar('iban')
            ->maxLength('iban', 4)
            ->allowEmptyString('iban');

        $validator
            ->scalar('cuenta')
            ->maxLength('cuenta', 20)
            ->allowEmptyString('cuenta');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('poblacion')
            ->maxLength('poblacion', 150)
            ->allowEmptyString('poblacion');

        $validator
            ->scalar('cod_postal')
            ->maxLength('cod_postal', 5)
            ->allowEmptyString('cod_postal');

        $validator
            ->scalar('contrato')
            ->maxLength('contrato', 50)
            ->allowEmptyString('contrato');

        $validator
            ->date('fecha_ant')
            ->allowEmptyDate('fecha_ant');

        $validator
            ->boolean('carnet_cond')
            ->allowEmptyString('carnet_cond');

        $validator
            ->scalar('vehiculo')
            ->maxLength('vehiculo', 100)
            ->allowEmptyString('vehiculo');

        $validator
            ->scalar('titulaciones')
            ->allowEmptyString('titulaciones');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

        $validator
            ->date('certif_antec')
            ->allowEmptyDate('certif_antec');

        $validator
            ->date('mutua')
            ->allowEmptyDate('mutua');

        $validator
            ->integer('colegio_id')
            ->allowEmptyString('colegio_id');

        $validator
            ->scalar('token')
            ->maxLength('token', 255)
            ->allowEmptyString('token');

        $validator
            ->date('fecha_nac')
            ->allowEmptyDate('fecha_nac');

        $validator
            ->scalar('token_dispositivo')
            ->maxLength('token_dispositivo', 255)
            ->allowEmptyString('token_dispositivo');

        $validator
            ->scalar('niv_ingles')
            ->maxLength('niv_ingles', 5)
            ->allowEmptyString('niv_ingles');

        $validator
            ->scalar('niv_valencia')
            ->maxLength('niv_valencia', 5)
            ->allowEmptyString('niv_valencia');

        $validator
            ->scalar('disponib')
            ->maxLength('disponib', 50)
            ->allowEmptyString('disponib');

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
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
