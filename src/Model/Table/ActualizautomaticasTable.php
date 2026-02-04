<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actualizautomaticas Model
 *
 * @method \App\Model\Entity\Actualizautomatica newEmptyEntity()
 * @method \App\Model\Entity\Actualizautomatica newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Actualizautomatica> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actualizautomatica get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Actualizautomatica findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Actualizautomatica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Actualizautomatica> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actualizautomatica|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Actualizautomatica saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Actualizautomatica>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actualizautomatica>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Actualizautomatica>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actualizautomatica> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Actualizautomatica>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actualizautomatica>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Actualizautomatica>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actualizautomatica> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActualizautomaticasTable extends Table
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

        $this->setTable('actualizautomaticas');
        $this->setDisplayField('tipo');
        $this->setPrimaryKey('id');
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
            ->scalar('tipo')
            ->maxLength('tipo', 15)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->integer('anyo')
            ->requirePresence('anyo', 'create')
            ->notEmptyString('anyo');

        return $validator;
    }
}
