<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Salarios Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Salario newEmptyEntity()
 * @method \App\Model\Entity\Salario newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Salario> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Salario get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Salario findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Salario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Salario> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Salario|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Salario saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Salario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salario>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Salario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salario> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Salario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salario>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Salario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salario> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalariosTable extends Table
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

        $this->setTable('salarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->numeric('sala_fijo')
            ->notEmptyString('sala_fijo');

        $validator
            ->numeric('sala_vble')
            ->notEmptyString('sala_vble');

        $validator
            ->numeric('plus_var')
            ->notEmptyString('plus_var');

        $validator
            ->numeric('complemento')
            ->notEmptyString('complemento');

        $validator
            ->numeric('dietas')
            ->notEmptyString('dietas');

        $validator
            ->numeric('eventos')
            ->notEmptyString('eventos');

        $validator
            ->integer('it')
            ->notEmptyString('it');

        $validator
            ->integer('absentismo')
            ->notEmptyString('absentismo');

        $validator
            ->numeric('dto')
            ->notEmptyString('dto');

        $validator
            ->numeric('nomina')
            ->notEmptyString('nomina');

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
