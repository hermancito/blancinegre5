<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Volantes Model
 *
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsToMany $Dias
 *
 * @method \App\Model\Entity\Volante newEmptyEntity()
 * @method \App\Model\Entity\Volante newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Volante> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Volante get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Volante findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Volante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Volante> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Volante|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Volante saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Volante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volante>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Volante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volante> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Volante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volante>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Volante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volante> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VolantesTable extends Table
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

        $this->setTable('volantes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Monitors', [
            'foreignKey' => 'monitor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Dias', [
            'foreignKey' => 'volante_id',
            'targetForeignKey' => 'dia_id',
            'joinTable' => 'dias_volantes',
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
            ->integer('monitor_id')
            ->notEmptyString('monitor_id');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

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
        $rules->add($rules->existsIn(['monitor_id'], 'Monitors'), ['errorField' => 'monitor_id']);

        return $rules;
    }
}
