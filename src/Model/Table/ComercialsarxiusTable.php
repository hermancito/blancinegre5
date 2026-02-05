<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comercialsarxius Model
 *
 * @property \App\Model\Table\ComercialsTable&\Cake\ORM\Association\BelongsTo $Comercials
 *
 * @method \App\Model\Entity\Comercialsarxius newEmptyEntity()
 * @method \App\Model\Entity\Comercialsarxius newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Comercialsarxius> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comercialsarxius get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Comercialsarxius findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Comercialsarxius patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Comercialsarxius> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comercialsarxius|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Comercialsarxius saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Comercialsarxius>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercialsarxius>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comercialsarxius>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercialsarxius> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comercialsarxius>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercialsarxius>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comercialsarxius>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercialsarxius> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComercialsarxiusTable extends Table
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

        $this->setTable('comercialsarxius');
        $this->setDisplayField('pdf');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Comercials', [
            'foreignKey' => 'comercial_id',
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
            ->integer('comercial_id')
            ->notEmptyString('comercial_id');

        $validator
            ->scalar('pdf')
            ->maxLength('pdf', 255)
            ->requirePresence('pdf', 'create')
            ->notEmptyString('pdf');

        $validator
            ->scalar('pdf_dir')
            ->maxLength('pdf_dir', 255)
            ->requirePresence('pdf_dir', 'create')
            ->notEmptyString('pdf_dir');

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
        $rules->add($rules->existsIn(['comercial_id'], 'Comercials'), ['errorField' => 'comercial_id']);

        return $rules;
    }
}
