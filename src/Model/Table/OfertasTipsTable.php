<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfertasTips Model
 *
 * @property \App\Model\Table\OfertasTable&\Cake\ORM\Association\BelongsTo $Ofertas
 * @property \App\Model\Table\TipsTable&\Cake\ORM\Association\BelongsTo $Tips
 *
 * @method \App\Model\Entity\OfertasTip newEmptyEntity()
 * @method \App\Model\Entity\OfertasTip newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\OfertasTip> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfertasTip get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\OfertasTip findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\OfertasTip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\OfertasTip> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfertasTip|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\OfertasTip saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasTip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasTip>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasTip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasTip> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasTip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasTip>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasTip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasTip> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfertasTipsTable extends Table
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

        $this->setTable('ofertas_tips');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Ofertas', [
            'foreignKey' => 'oferta_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tips', [
            'foreignKey' => 'tip_id',
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
            ->integer('oferta_id')
            ->notEmptyString('oferta_id');

        $validator
            ->integer('tip_id')
            ->notEmptyString('tip_id');

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
        $rules->add($rules->existsIn(['oferta_id'], 'Ofertas'), ['errorField' => 'oferta_id']);
        $rules->add($rules->existsIn(['tip_id'], 'Tips'), ['errorField' => 'tip_id']);

        return $rules;
    }
}
