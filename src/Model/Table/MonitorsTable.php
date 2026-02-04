<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monitors Model
 *
 * @property \App\Model\Table\DisponibilitatsTable&\Cake\ORM\Association\HasMany $Disponibilitats
 * @property \App\Model\Table\MonitorsfilesTable&\Cake\ORM\Association\HasMany $Monitorsfiles
 * @property \App\Model\Table\SustitucionsTable&\Cake\ORM\Association\HasMany $Sustitucions
 * @property \App\Model\Table\VolantesTable&\Cake\ORM\Association\HasMany $Volantes
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsToMany $Activitats
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsToMany $Activitatsgrups
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsToMany $Colegios
 * @property \App\Model\Table\CoordinadorsTable&\Cake\ORM\Association\BelongsToMany $Coordinadors
 *
 * @method \App\Model\Entity\Monitor newEmptyEntity()
 * @method \App\Model\Entity\Monitor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Monitor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monitor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Monitor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Monitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Monitor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monitor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Monitor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Monitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitor> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MonitorsTable extends Table
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

        $this->setTable('monitors');
        $this->setDisplayField('username');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Disponibilitats', [
            'foreignKey' => 'monitor_id',
        ]);
        $this->hasMany('Monitorsfiles', [
            'foreignKey' => 'monitor_id',
        ]);
        $this->hasMany('Sustitucions', [
            'foreignKey' => 'monitor_id',
        ]);
        $this->hasMany('Volantes', [
            'foreignKey' => 'monitor_id',
        ]);
        $this->belongsToMany('Activitats', [
            'foreignKey' => 'monitor_id',
            'targetForeignKey' => 'activitat_id',
            'joinTable' => 'activitats_monitors',
        ]);
        $this->belongsToMany('Activitatsgrups', [
            'foreignKey' => 'monitor_id',
            'targetForeignKey' => 'activitatsgrup_id',
            'joinTable' => 'activitatsgrups_monitors',
        ]);
        $this->belongsToMany('Colegios', [
            'foreignKey' => 'monitor_id',
            'targetForeignKey' => 'colegio_id',
            'joinTable' => 'colegios_monitors',
        ]);
        $this->belongsToMany('Coordinadors', [
            'foreignKey' => 'monitor_id',
            'targetForeignKey' => 'coordinador_id',
            'joinTable' => 'coordinadors_monitors',
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
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->allowEmptyString('apellidos');

        $validator
            ->scalar('poblacion')
            ->maxLength('poblacion', 255)
            ->allowEmptyString('poblacion');

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

        return $rules;
    }
}
