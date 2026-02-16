<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotifcolegiosUsers Model
 *
 * @property \App\Model\Table\NotifcolegiosTable&\Cake\ORM\Association\BelongsTo $Notifcolegios
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\NotifcolegiosUser newEmptyEntity()
 * @method \App\Model\Entity\NotifcolegiosUser newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\NotifcolegiosUser> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotifcolegiosUser get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\NotifcolegiosUser findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\NotifcolegiosUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\NotifcolegiosUser> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotifcolegiosUser|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\NotifcolegiosUser saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\NotifcolegiosUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotifcolegiosUser>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotifcolegiosUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotifcolegiosUser> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotifcolegiosUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotifcolegiosUser>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotifcolegiosUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotifcolegiosUser> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotifcolegiosUsersTable extends Table
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

        $this->setTable('notifcolegios_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Notifcolegios', [
            'foreignKey' => 'notifcolegio_id',
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
            ->integer('notifcolegio_id')
            ->notEmptyString('notifcolegio_id');

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
        $rules->add($rules->existsIn(['notifcolegio_id'], 'Notifcolegios'), ['errorField' => 'notifcolegio_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
