<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotificacionsUsers Model
 *
 * @property \App\Model\Table\NotificacionsTable&\Cake\ORM\Association\BelongsTo $Notificacions
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\NotificacionsUser newEmptyEntity()
 * @method \App\Model\Entity\NotificacionsUser newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\NotificacionsUser> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotificacionsUser get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\NotificacionsUser findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\NotificacionsUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\NotificacionsUser> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotificacionsUser|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\NotificacionsUser saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\NotificacionsUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotificacionsUser>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotificacionsUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotificacionsUser> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotificacionsUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotificacionsUser>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotificacionsUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotificacionsUser> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotificacionsUsersTable extends Table
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

        $this->setTable('notificacions_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Notificacions', [
            'foreignKey' => 'notificacion_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
            ->integer('notificacion_id')
            ->notEmptyString('notificacion_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

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
        $rules->add($rules->existsIn(['notificacion_id'], 'Notificacions'), ['errorField' => 'notificacion_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
