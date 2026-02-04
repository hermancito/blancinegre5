<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colegios Model
 *
 * @property \App\Model\Table\TablaspreciosvblesTable&\Cake\ORM\Association\BelongsTo $Tablaspreciosvbles
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\HasMany $Activitatsgrups
 * @property \App\Model\Table\AlumnosXmlTable&\Cake\ORM\Association\HasMany $AlumnosXml
 * @property \App\Model\Table\ColegiofilesTable&\Cake\ORM\Association\HasMany $Colegiofiles
 * @property \App\Model\Table\ColegiofilesfamiliasTable&\Cake\ORM\Association\HasMany $Colegiofilesfamilias
 * @property \App\Model\Table\CoordinadordiarisTable&\Cake\ORM\Association\HasMany $Coordinadordiaris
 * @property \App\Model\Table\DevolucionesTable&\Cake\ORM\Association\HasMany $Devoluciones
 * @property \App\Model\Table\NotificacionsTable&\Cake\ORM\Association\HasMany $Notificacions
 * @property \App\Model\Table\PersonalcontrolsTable&\Cake\ORM\Association\HasMany $Personalcontrols
 * @property \App\Model\Table\RegistroaltasTable&\Cake\ORM\Association\HasMany $Registroaltas
 * @property \App\Model\Table\RegistrobajasTable&\Cake\ORM\Association\HasMany $Registrobajas
 * @property \App\Model\Table\SustitucionsTable&\Cake\ORM\Association\HasMany $Sustitucions
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsToMany $Activitats
 * @property \App\Model\Table\CoordinadorsTable&\Cake\ORM\Association\BelongsToMany $Coordinadors
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsToMany $Monitors
 * @property \App\Model\Table\NotifcolegiosTable&\Cake\ORM\Association\BelongsToMany $Notifcolegios
 *
 * @method \App\Model\Entity\Colegio newEmptyEntity()
 * @method \App\Model\Entity\Colegio newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Colegio> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colegio get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Colegio findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Colegio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Colegio> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colegio|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Colegio saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Colegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegio>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegio> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegio>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegio> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ColegiosTable extends Table
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

        $this->setTable('colegios');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tablaspreciosvbles', [
            'foreignKey' => 'tablaspreciosvble_id',
        ]);
        $this->hasMany('Activitatsgrups', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('AlumnosXml', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Colegiofiles', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Colegiofilesfamilias', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Coordinadordiaris', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Devoluciones', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Notificacions', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Personalcontrols', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Registroaltas', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Registrobajas', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Sustitucions', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->belongsToMany('Activitats', [
            'foreignKey' => 'colegio_id',
            'targetForeignKey' => 'activitat_id',
            'joinTable' => 'activitats_colegios',
        ]);
        $this->belongsToMany('Coordinadors', [
            'foreignKey' => 'colegio_id',
            'targetForeignKey' => 'coordinador_id',
            'joinTable' => 'colegios_coordinadors',
        ]);
        $this->belongsToMany('Monitors', [
            'foreignKey' => 'colegio_id',
            'targetForeignKey' => 'monitor_id',
            'joinTable' => 'colegios_monitors',
        ]);
        $this->belongsToMany('Notifcolegios', [
            'foreignKey' => 'colegio_id',
            'targetForeignKey' => 'notifcolegio_id',
            'joinTable' => 'colegios_notifcolegios',
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
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('cp')
            ->maxLength('cp', 5)
            ->allowEmptyString('cp');

        $validator
            ->scalar('poblacion')
            ->maxLength('poblacion', 255)
            ->allowEmptyString('poblacion');

        $validator
            ->scalar('eq_directivo')
            ->maxLength('eq_directivo', 255)
            ->allowEmptyString('eq_directivo');

        $validator
            ->integer('tfno_eqdirect')
            ->allowEmptyString('tfno_eqdirect');

        $validator
            ->scalar('email_eqdirectivo')
            ->maxLength('email_eqdirectivo', 255)
            ->allowEmptyString('email_eqdirectivo');

        $validator
            ->scalar('pdte_ampa')
            ->maxLength('pdte_ampa', 255)
            ->allowEmptyString('pdte_ampa');

        $validator
            ->integer('tfno_pdte')
            ->allowEmptyString('tfno_pdte');

        $validator
            ->scalar('email_pdte')
            ->maxLength('email_pdte', 255)
            ->allowEmptyString('email_pdte');

        $validator
            ->scalar('resp_act')
            ->maxLength('resp_act', 255)
            ->allowEmptyString('resp_act');

        $validator
            ->integer('tfno_resp')
            ->allowEmptyString('tfno_resp');

        $validator
            ->scalar('email_resp')
            ->maxLength('email_resp', 255)
            ->allowEmptyString('email_resp');

        $validator
            ->scalar('conserge')
            ->maxLength('conserge', 255)
            ->allowEmptyString('conserge');

        $validator
            ->integer('tfno_conserge')
            ->allowEmptyString('tfno_conserge');

        $validator
            ->scalar('email_conserge')
            ->maxLength('email_conserge', 255)
            ->allowEmptyString('email_conserge');

        $validator
            ->scalar('email_centro')
            ->maxLength('email_centro', 255)
            ->allowEmptyString('email_centro');

        $validator
            ->scalar('cif_centro')
            ->maxLength('cif_centro', 20)
            ->allowEmptyString('cif_centro');

        $validator
            ->scalar('email_ampa')
            ->maxLength('email_ampa', 255)
            ->allowEmptyString('email_ampa');

        $validator
            ->scalar('cif_ampa')
            ->maxLength('cif_ampa', 20)
            ->allowEmptyString('cif_ampa');

        $validator
            ->scalar('cesion_llaves')
            ->maxLength('cesion_llaves', 255)
            ->allowEmptyString('cesion_llaves');

        $validator
            ->integer('unidades_llaves')
            ->allowEmptyString('unidades_llaves');

        $validator
            ->scalar('alarma')
            ->maxLength('alarma', 255)
            ->allowEmptyString('alarma');

        $validator
            ->scalar('iban_centro')
            ->maxLength('iban_centro', 24)
            ->allowEmptyString('iban_centro');

        $validator
            ->scalar('iban_ampa')
            ->maxLength('iban_ampa', 24)
            ->allowEmptyString('iban_ampa');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

        $validator
            ->integer('tablaspreciosvble_id')
            ->allowEmptyString('tablaspreciosvble_id');

        $validator
            ->numeric('suplemento_nosocios')
            ->notEmptyString('suplemento_nosocios');

        $validator
            ->numeric('porcentaje_nosocios')
            ->notEmptyString('porcentaje_nosocios');

        $validator
            ->boolean('mostrar_cuota')
            ->notEmptyString('mostrar_cuota');

        $validator
            ->boolean('dcto_hermanos')
            ->notEmptyString('dcto_hermanos');

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
        $rules->add($rules->existsIn(['tablaspreciosvble_id'], 'Tablaspreciosvbles'), ['errorField' => 'tablaspreciosvble_id']);

        return $rules;
    }
}
