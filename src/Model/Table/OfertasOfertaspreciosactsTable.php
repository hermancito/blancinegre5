<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfertasOfertaspreciosacts Model
 *
 * @property \App\Model\Table\OfertaspreciosactsTable&\Cake\ORM\Association\BelongsTo $Ofertaspreciosacts
 * @property \App\Model\Table\OfertasTable&\Cake\ORM\Association\BelongsTo $Ofertas
 * @property \App\Model\Table\OfertashorariosTable&\Cake\ORM\Association\BelongsTo $Ofertashorarios
 *
 * @method \App\Model\Entity\OfertasOfertaspreciosact newEmptyEntity()
 * @method \App\Model\Entity\OfertasOfertaspreciosact newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\OfertasOfertaspreciosact> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfertasOfertaspreciosact get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\OfertasOfertaspreciosact findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\OfertasOfertaspreciosact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\OfertasOfertaspreciosact> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfertasOfertaspreciosact|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\OfertasOfertaspreciosact saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasOfertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasOfertaspreciosact>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasOfertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasOfertaspreciosact> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasOfertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasOfertaspreciosact>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\OfertasOfertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\OfertasOfertaspreciosact> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfertasOfertaspreciosactsTable extends Table
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

        $this->setTable('ofertas_ofertaspreciosacts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Ofertaspreciosacts', [
            'foreignKey' => 'ofertaspreciosact_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ofertas', [
            'foreignKey' => 'oferta_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ofertashorarios', [
            'foreignKey' => 'ofertashorario_id',
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
            ->integer('ofertaspreciosact_id')
            ->notEmptyString('ofertaspreciosact_id');

        $validator
            ->integer('oferta_id')
            ->notEmptyString('oferta_id');

        $validator
            ->integer('ofertashorario_id')
            ->allowEmptyString('ofertashorario_id');

        $validator
            ->scalar('horario')
            ->maxLength('horario', 255)
            ->allowEmptyString('horario');

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
        $rules->add($rules->existsIn(['ofertaspreciosact_id'], 'Ofertaspreciosacts'), ['errorField' => 'ofertaspreciosact_id']);
        $rules->add($rules->existsIn(['oferta_id'], 'Ofertas'), ['errorField' => 'oferta_id']);
        $rules->add($rules->existsIn(['ofertashorario_id'], 'Ofertashorarios'), ['errorField' => 'ofertashorario_id']);

        return $rules;
    }
}
