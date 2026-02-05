<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiasVolantes Model
 *
 * @property \App\Model\Table\DiasTable&\Cake\ORM\Association\BelongsTo $Dias
 * @property \App\Model\Table\VolantesTable&\Cake\ORM\Association\BelongsTo $Volantes
 *
 * @method \App\Model\Entity\DiasVolante newEmptyEntity()
 * @method \App\Model\Entity\DiasVolante newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DiasVolante> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiasVolante get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DiasVolante findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DiasVolante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DiasVolante> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiasVolante|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DiasVolante saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DiasVolante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiasVolante>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DiasVolante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiasVolante> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DiasVolante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiasVolante>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DiasVolante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiasVolante> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiasVolantesTable extends Table
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

        $this->setTable('dias_volantes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Volantes', [
            'foreignKey' => 'volante_id',
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
            ->integer('dia_id')
            ->notEmptyString('dia_id');

        $validator
            ->integer('volante_id')
            ->notEmptyString('volante_id');

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
        $rules->add($rules->existsIn(['dia_id'], 'Dias'), ['errorField' => 'dia_id']);
        $rules->add($rules->existsIn(['volante_id'], 'Volantes'), ['errorField' => 'volante_id']);

        return $rules;
    }
}
