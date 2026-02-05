<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordinadordiaris Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\CoordinadorsTable&\Cake\ORM\Association\BelongsTo $Coordinadors
 * @property \App\Model\Table\IntervencionsTable&\Cake\ORM\Association\BelongsTo $Intervencions
 *
 * @method \App\Model\Entity\Coordinadordiari newEmptyEntity()
 * @method \App\Model\Entity\Coordinadordiari newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Coordinadordiari> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordinadordiari get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Coordinadordiari findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Coordinadordiari patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Coordinadordiari> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordinadordiari|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Coordinadordiari saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinadordiari>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinadordiari>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinadordiari>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinadordiari> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinadordiari>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinadordiari>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coordinadordiari>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coordinadordiari> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoordinadordiarisTable extends Table
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

        $this->setTable('coordinadordiaris');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Coordinadors', [
            'foreignKey' => 'coordinador_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Intervencions', [
            'foreignKey' => 'intervencion_id',
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
            ->integer('colegio_id')
            ->notEmptyString('colegio_id');

        $validator
            ->integer('coordinador_id')
            ->notEmptyString('coordinador_id');

        $validator
            ->date('dia')
            ->requirePresence('dia', 'create')
            ->notEmptyDate('dia');

        $validator
            ->time('hora_ini')
            ->allowEmptyTime('hora_ini');

        $validator
            ->time('hora_fin')
            ->allowEmptyTime('hora_fin');

        $validator
            ->integer('intervencion_id')
            ->notEmptyString('intervencion_id');

        $validator
            ->scalar('observ')
            ->allowEmptyString('observ');

        $validator
            ->scalar('resuelta')
            ->maxLength('resuelta', 10)
            ->allowEmptyString('resuelta');

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
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);
        $rules->add($rules->existsIn(['coordinador_id'], 'Coordinadors'), ['errorField' => 'coordinador_id']);
        $rules->add($rules->existsIn(['intervencion_id'], 'Intervencions'), ['errorField' => 'intervencion_id']);

        return $rules;
    }
}
