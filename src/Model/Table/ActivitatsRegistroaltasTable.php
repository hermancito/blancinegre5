<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsRegistroaltas Model
 *
 * @property \App\Model\Table\RegistroaltasTable&\Cake\ORM\Association\BelongsTo $Registroaltas
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 *
 * @method \App\Model\Entity\ActivitatsRegistroalta newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsRegistroalta newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsRegistroalta> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsRegistroalta get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsRegistroalta findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsRegistroalta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsRegistroalta> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsRegistroalta|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsRegistroalta saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsRegistroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsRegistroalta>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsRegistroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsRegistroalta> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsRegistroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsRegistroalta>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsRegistroalta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsRegistroalta> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsRegistroaltasTable extends Table
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

        $this->setTable('activitats_registroaltas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Registroaltas', [
            'foreignKey' => 'registroalta_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
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
            ->integer('registroalta_id')
            ->notEmptyString('registroalta_id');

        $validator
            ->integer('activitat_id')
            ->notEmptyString('activitat_id');

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
        $rules->add($rules->existsIn(['registroalta_id'], 'Registroaltas'), ['errorField' => 'registroalta_id']);
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'), ['errorField' => 'activitat_id']);

        return $rules;
    }
}
