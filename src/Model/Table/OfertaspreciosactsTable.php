<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ofertaspreciosacts Model
 *
 * @property \App\Model\Table\OfertasTable&\Cake\ORM\Association\BelongsToMany $Ofertas
 *
 * @method \App\Model\Entity\Ofertaspreciosact newEmptyEntity()
 * @method \App\Model\Entity\Ofertaspreciosact newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ofertaspreciosact> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ofertaspreciosact get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ofertaspreciosact findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ofertaspreciosact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ofertaspreciosact> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ofertaspreciosact|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ofertaspreciosact saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertaspreciosact>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertaspreciosact> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertaspreciosact>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertaspreciosact>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertaspreciosact> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfertaspreciosactsTable extends Table
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

        $this->setTable('ofertaspreciosacts');
        $this->setDisplayField('nom_activitat');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Ofertas', [
            'foreignKey' => 'ofertaspreciosact_id',
            'targetForeignKey' => 'oferta_id',
            'joinTable' => 'ofertas_ofertaspreciosacts',
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
            ->scalar('nom_activitat')
            ->maxLength('nom_activitat', 255)
            ->requirePresence('nom_activitat', 'create')
            ->notEmptyString('nom_activitat');

        $validator
            ->scalar('grupo')
            ->maxLength('grupo', 100)
            ->allowEmptyString('grupo');

        $validator
            ->numeric('start')
            ->requirePresence('start', 'create')
            ->notEmptyString('start');

        $validator
            ->numeric('basic')
            ->requirePresence('basic', 'create')
            ->notEmptyString('basic');

        $validator
            ->numeric('advance')
            ->requirePresence('advance', 'create')
            ->notEmptyString('advance');

        $validator
            ->numeric('premium')
            ->requirePresence('premium', 'create')
            ->notEmptyString('premium');

        $validator
            ->numeric('premium_plus')
            ->requirePresence('premium_plus', 'create')
            ->notEmptyString('premium_plus');

        $validator
            ->scalar('ratio')
            ->maxLength('ratio', 50)
            ->requirePresence('ratio', 'create')
            ->notEmptyString('ratio');

        $validator
            ->scalar('material_observ')
            ->maxLength('material_observ', 255)
            ->requirePresence('material_observ', 'create')
            ->notEmptyString('material_observ');

        $validator
            ->boolean('accion_horario')
            ->requirePresence('accion_horario', 'create')
            ->notEmptyString('accion_horario');

        $validator
            ->boolean('accion_ubicacion')
            ->requirePresence('accion_ubicacion', 'create')
            ->notEmptyString('accion_ubicacion');

        return $validator;
    }
}
