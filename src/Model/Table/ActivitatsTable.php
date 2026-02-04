<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activitats Model
 *
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\HasMany $Activitatsgrups
 * @property \App\Model\Table\NotasTable&\Cake\ORM\Association\HasMany $Notas
 * @property \App\Model\Table\NotificacionsTable&\Cake\ORM\Association\HasMany $Notificacions
 * @property \App\Model\Table\SustitucionsTable&\Cake\ORM\Association\HasMany $Sustitucions
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsToMany $Alumnos
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsToMany $Colegios
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsToMany $Dias
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsToMany $Monitors
 * @property \App\Model\Table\RegistroaltasTable&\Cake\ORM\Association\BelongsToMany $Registroaltas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Activitat newEmptyEntity()
 * @method \App\Model\Entity\Activitat newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Activitat> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Activitat get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Activitat findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Activitat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Activitat> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Activitat|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Activitat saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Activitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitat>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Activitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitat> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Activitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitat>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Activitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitat> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActivitatsTable extends Table
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

        $this->setTable('activitats');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Activitatsgrups', [
            'foreignKey' => 'activitat_id',
        ]);
        $this->hasMany('Notas', [
            'foreignKey' => 'activitat_id',
        ]);
        $this->hasMany('Notificacions', [
            'foreignKey' => 'activitat_id',
        ]);
        $this->hasMany('Sustitucions', [
            'foreignKey' => 'activitat_id',
        ]);
        $this->belongsToMany('Alumnos', [
            'foreignKey' => 'activitat_id',
            'targetForeignKey' => 'alumno_id',
            'joinTable' => 'activitats_alumnos',
        ]);
        $this->belongsToMany('Colegios', [
            'foreignKey' => 'activitat_id',
            'targetForeignKey' => 'colegio_id',
            'joinTable' => 'activitats_colegios',
        ]);
        $this->belongsToMany('Dias', [
            'foreignKey' => 'activitat_id',
            'targetForeignKey' => 'dia_id',
            'joinTable' => 'activitats_dias',
        ]);
        $this->belongsToMany('Monitors', [
            'foreignKey' => 'activitat_id',
            'targetForeignKey' => 'monitor_id',
            'joinTable' => 'activitats_monitors',
        ]);
        $this->belongsToMany('Registroaltas', [
            'foreignKey' => 'activitat_id',
            'targetForeignKey' => 'registroalta_id',
            'joinTable' => 'activitats_registroaltas',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'activitat_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'activitats_users',
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
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 10)
            ->allowEmptyString('codigo');

        return $validator;
    }
}
