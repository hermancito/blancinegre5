<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordinadors Model
 *
 * @property \App\Model\Table\CoordinadordiarisTable&\Cake\ORM\Association\HasMany $Coordinadordiaris
 * @property \App\Model\Table\CoordinadorsfilesTable&\Cake\ORM\Association\HasMany $Coordinadorsfiles
 * @property \App\Model\Table\AlumnosTable&\Cake\ORM\Association\BelongsToMany $Alumnos
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsToMany $Colegios
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsToMany $Monitors
 *
 * @method \App\Model\Entity\Coordinador newEmptyEntity()
 * @method \App\Model\Entity\Coordinador newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Coordinador> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordinador get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Coordinador findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Coordinador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Coordinador> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordinador|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Coordinador saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinador>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinador> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinador>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinador> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoordinadorsTable extends Table
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

        $this->setTable('coordinadors');
        $this->setDisplayField('username');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Coordinadordiaris', [
            'foreignKey' => 'coordinador_id',
        ]);
        $this->hasMany('Coordinadorsfiles', [
            'foreignKey' => 'coordinador_id',
        ]);
        $this->belongsToMany('Alumnos', [
            'foreignKey' => 'coordinador_id',
            'targetForeignKey' => 'alumno_id',
            'joinTable' => 'alumnos_coordinadors',
        ]);
        $this->belongsToMany('Colegios', [
            'foreignKey' => 'coordinador_id',
            'targetForeignKey' => 'colegio_id',
            'joinTable' => 'colegios_coordinadors',
        ]);
        $this->belongsToMany('Monitors', [
            'foreignKey' => 'coordinador_id',
            'targetForeignKey' => 'monitor_id',
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
