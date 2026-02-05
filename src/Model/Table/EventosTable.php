<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eventos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Evento newEmptyEntity()
 * @method \App\Model\Entity\Evento newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Evento> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evento get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Evento findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Evento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Evento> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evento|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Evento saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Evento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Evento>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Evento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Evento> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Evento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Evento>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Evento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Evento> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EventosTable extends Table
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

        $this->setTable('eventos');
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
            ->date('dia')
            ->requirePresence('dia', 'create')
            ->notEmptyDate('dia');

        $validator
            ->time('hora_ini')
            ->allowEmptyTime('hora_ini');

        $validator
            ->time('hora_fin')
            ->allowEmptyTime('hora_fin');

        $validator
            ->scalar('destino')
            ->maxLength('destino', 255)
            ->allowEmptyString('destino');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

        $validator
            ->numeric('retribucion')
            ->allowEmptyString('retribucion');

        $validator
            ->scalar('comodin1')
            ->maxLength('comodin1', 25)
            ->allowEmptyString('comodin1');

        $validator
            ->scalar('comodin2')
            ->maxLength('comodin2', 25)
            ->allowEmptyString('comodin2');

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
