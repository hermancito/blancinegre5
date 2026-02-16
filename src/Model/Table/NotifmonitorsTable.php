<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notifmonitors Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Notifmonitor newEmptyEntity()
 * @method \App\Model\Entity\Notifmonitor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Notifmonitor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notifmonitor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Notifmonitor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Notifmonitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Notifmonitor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notifmonitor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Notifmonitor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Notifmonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifmonitor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notifmonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifmonitor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notifmonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifmonitor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notifmonitor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifmonitor> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotifmonitorsTable extends Table
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

        $this->setTable('notifmonitors');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripc')
            ->allowEmptyString('descripc');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->allowEmptyString('photo_dir');

        $validator
            ->boolean('validado')
            ->notEmptyString('validado');

        $validator
            ->scalar('comodin')
            ->maxLength('comodin', 255)
            ->allowEmptyString('comodin');

        $validator
            ->scalar('tipo_monitor')
            ->maxLength('tipo_monitor', 15)
            ->requirePresence('tipo_monitor', 'create')
            ->notEmptyString('tipo_monitor');

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

        return $rules;
    }
}
