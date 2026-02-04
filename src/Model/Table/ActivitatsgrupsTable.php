<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activitatsgrups Model
 *
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\AsistenciasTable&\Cake\ORM\Association\HasMany $Asistencias
 * @property \App\Model\Table\DisponibilitatsTable&\Cake\ORM\Association\HasMany $Disponibilitats
 * @property \App\Model\Table\RegistrobajasTable&\Cake\ORM\Association\HasMany $Registrobajas
 * @property \App\Model\Table\ActivitatsMonitorsTable&\Cake\ORM\Association\BelongsToMany $ActivitatsMonitors
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsToMany $Alumnos
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsToMany $Dias
 * @property \App\Model\Table\JornadasgrupsTable&\Cake\ORM\Association\BelongsToMany $Jornadasgrups
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsToMany $Monitors
 *
 * @method \App\Model\Entity\Activitatsgrup newEmptyEntity()
 * @method \App\Model\Entity\Activitatsgrup newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Activitatsgrup> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Activitatsgrup get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Activitatsgrup findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Activitatsgrup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Activitatsgrup> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Activitatsgrup|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Activitatsgrup saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Activitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitatsgrup>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Activitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitatsgrup> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Activitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitatsgrup>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Activitatsgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Activitatsgrup> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActivitatsgrupsTable extends Table
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

        $this->setTable('activitatsgrups');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
        ]);
        $this->hasMany('Asistencias', [
            'foreignKey' => 'activitatsgrup_id',
        ]);
        $this->hasMany('Disponibilitats', [
            'foreignKey' => 'activitatsgrup_id',
        ]);
        $this->hasMany('Registrobajas', [
            'foreignKey' => 'activitatsgrup_id',
        ]);
        $this->belongsToMany('ActivitatsMonitors', [
            'foreignKey' => 'activitatsgrup_id',
            'targetForeignKey' => 'activitats_monitor_id',
            'joinTable' => 'activitats_monitors_activitatsgrups',
        ]);
        $this->belongsToMany('Alumnos', [
            'foreignKey' => 'activitatsgrup_id',
            'targetForeignKey' => 'alumno_id',
            'joinTable' => 'activitatsgrups_alumnos',
        ]);
        $this->belongsToMany('Dias', [
            'foreignKey' => 'activitatsgrup_id',
            'targetForeignKey' => 'dia_id',
            'joinTable' => 'activitatsgrups_dias',
        ]);
        $this->belongsToMany('Jornadasgrups', [
            'foreignKey' => 'activitatsgrup_id',
            'targetForeignKey' => 'jornadasgrup_id',
            'joinTable' => 'activitatsgrups_jornadasgrups',
        ]);
        $this->belongsToMany('Monitors', [
            'foreignKey' => 'activitatsgrup_id',
            'targetForeignKey' => 'monitor_id',
            'joinTable' => 'activitatsgrups_monitors',
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
            ->integer('activitat_id')
            ->notEmptyString('activitat_id');

        $validator
            ->integer('colegio_id')
            ->allowEmptyString('colegio_id');

        $validator
            ->scalar('aula')
            ->maxLength('aula', 9)
            ->allowEmptyString('aula');

        $validator
            ->scalar('comentarios')
            ->allowEmptyString('comentarios');

        $validator
            ->numeric('tipo_fijo')
            ->notEmptyString('tipo_fijo');

        $validator
            ->numeric('tipo_vble')
            ->notEmptyString('tipo_vble');

        $validator
            ->numeric('sala_fijo')
            ->notEmptyString('sala_fijo');

        $validator
            ->numeric('sala_vble')
            ->notEmptyString('sala_vble');

        $validator
            ->boolean('visible_familias')
            ->notEmptyString('visible_familias');

        $validator
            ->scalar('descripc')
            ->maxLength('descripc', 255)
            ->allowEmptyString('descripc');

        $validator
            ->boolean('aplicar_jornada')
            ->notEmptyString('aplicar_jornada');

        $validator
            ->integer('alum_min')
            ->notEmptyString('alum_min');

        $validator
            ->integer('alum_max')
            ->notEmptyString('alum_max');

        $validator
            ->date('fecha_inicio')
            ->allowEmptyDate('fecha_inicio');

        $validator
            ->date('fecha_fin')
            ->allowEmptyDate('fecha_fin');

        $validator
            ->numeric('matricula')
            ->notEmptyString('matricula');

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
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'), ['errorField' => 'activitat_id']);
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);

        return $rules;
    }
}
