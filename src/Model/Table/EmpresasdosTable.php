<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresasdos Model
 *
 * @method \App\Model\Entity\Empresasdo newEmptyEntity()
 * @method \App\Model\Entity\Empresasdo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresasdo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresasdo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Empresasdo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Empresasdo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresasdo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresasdo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Empresasdo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Empresasdo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresasdo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresasdo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresasdo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresasdo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresasdo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresasdo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresasdo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasdosTable extends Table
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

        $this->setTable('empresasdos');
        $this->setDisplayField('nom_empresa');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nom_empresa')
            ->maxLength('nom_empresa', 100)
            ->requirePresence('nom_empresa', 'create')
            ->notEmptyString('nom_empresa');

        return $validator;
    }
}
