<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monitorsfiles Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MonitorsTable&\Cake\ORM\Association\BelongsTo $Monitors
 *
 * @method \App\Model\Entity\Monitorsfile newEmptyEntity()
 * @method \App\Model\Entity\Monitorsfile newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Monitorsfile> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monitorsfile get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Monitorsfile findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Monitorsfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Monitorsfile> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monitorsfile|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Monitorsfile saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Monitorsfile>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitorsfile>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monitorsfile>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitorsfile> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monitorsfile>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitorsfile>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monitorsfile>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monitorsfile> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MonitorsfilesTable extends Table
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

        $this->setTable('monitorsfiles');
        $this->setDisplayField('file');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Monitors', [
            'foreignKey' => 'monitor_id',
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
            ->integer('monitor_id')
            ->notEmptyString('monitor_id');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->requirePresence('file', 'create')
            ->notEmptyFile('file');

        $validator
            ->scalar('file_dir')
            ->maxLength('file_dir', 255)
            ->requirePresence('file_dir', 'create')
            ->notEmptyString('file_dir');

        $validator
            ->boolean('todos_monit')
            ->notEmptyString('todos_monit');

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
        $rules->add($rules->existsIn(['monitor_id'], 'Monitors'), ['errorField' => 'monitor_id']);

        return $rules;
    }
}
