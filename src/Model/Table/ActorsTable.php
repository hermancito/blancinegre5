<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actors Model
 *
 * @property \App\Model\Table\PersonalcontrolsTable&\Cake\ORM\Association\HasMany $Personalcontrols
 *
 * @method \App\Model\Entity\Actor newEmptyEntity()
 * @method \App\Model\Entity\Actor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Actor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Actor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Actor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Actor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Actor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Actor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Actor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Actor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Actor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Actor> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActorsTable extends Table
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

        $this->setTable('actors');
        $this->setDisplayField('descripc');
        $this->setPrimaryKey('id');

        $this->hasMany('Personalcontrols', [
            'foreignKey' => 'actor_id',
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
            ->scalar('descripc')
            ->maxLength('descripc', 100)
            ->requirePresence('descripc', 'create')
            ->notEmptyString('descripc');

        return $validator;
    }
}
