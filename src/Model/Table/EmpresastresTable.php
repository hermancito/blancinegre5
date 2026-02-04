<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresastres Model
 *
 * @method \App\Model\Entity\Empresastre newEmptyEntity()
 * @method \App\Model\Entity\Empresastre newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresastre> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresastre get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Empresastre findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Empresastre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresastre> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresastre|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Empresastre saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Empresastre>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresastre>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresastre>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresastre> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresastre>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresastre>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresastre>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresastre> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresastresTable extends Table
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

        $this->setTable('empresastres');
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
