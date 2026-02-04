<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agentes Model
 *
 * @property \App\Model\Table\ComercialsTable&\Cake\ORM\Association\HasMany $Comercials
 *
 * @method \App\Model\Entity\Agente newEmptyEntity()
 * @method \App\Model\Entity\Agente newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Agente> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agente get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Agente findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Agente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Agente> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agente|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Agente saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Agente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agente>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agente> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agente>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agente> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgentesTable extends Table
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

        $this->setTable('agentes');
        $this->setDisplayField('nom_agente');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comercials', [
            'foreignKey' => 'agente_id',
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
            ->scalar('nom_agente')
            ->maxLength('nom_agente', 150)
            ->requirePresence('nom_agente', 'create')
            ->notEmptyString('nom_agente');

        return $validator;
    }
}
