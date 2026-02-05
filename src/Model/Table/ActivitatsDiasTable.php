<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsDias Model
 *
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsTo $Dias
 *
 * @method \App\Model\Entity\ActivitatsDia newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsDia newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsDia> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsDia get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsDia findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsDia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsDia> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsDia|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsDia saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsDia>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsDia> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsDia>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsDia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsDia> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsDiasTable extends Table
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

        $this->setTable('activitats_dias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
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
            ->integer('activitat_id')
            ->notEmptyString('activitat_id');

        $validator
            ->integer('dia_id')
            ->notEmptyString('dia_id');

        $validator
            ->time('hora_ini')
            ->allowEmptyTime('hora_ini');

        $validator
            ->time('hora_fin')
            ->allowEmptyTime('hora_fin');

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
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'), ['errorField' => 'activitat_id']);
        $rules->add($rules->existsIn(['dia_id'], 'Dias'), ['errorField' => 'dia_id']);

        return $rules;
    }
}
