<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotasUsers Model
 *
 * @property \App\Model\Table\NotasTable&\Cake\ORM\Association\BelongsTo $Notas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\NotasUser newEmptyEntity()
 * @method \App\Model\Entity\NotasUser newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\NotasUser> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotasUser get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\NotasUser findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\NotasUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\NotasUser> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotasUser|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\NotasUser saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\NotasUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotasUser>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotasUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotasUser> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotasUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotasUser>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NotasUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NotasUser> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotasUsersTable extends Table
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

        $this->setTable('notas_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Notas', [
            'foreignKey' => 'nota_id',
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
            ->integer('nota_id')
            ->notEmptyString('nota_id');

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
        $rules->add($rules->existsIn(['nota_id'], 'Notas'), ['errorField' => 'nota_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
