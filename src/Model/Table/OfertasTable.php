<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ofertas Model
 *
 * @property \App\Model\Table\ComercialsTable&\Cake\ORM\Association\BelongsTo $Comercials
 * @property \App\Model\Table\UbicacionsTable&\Cake\ORM\Association\BelongsTo $Ubicacions
 * @property \App\Model\Table\OfertaspreciosactsTable&\Cake\ORM\Association\BelongsToMany $Ofertaspreciosacts
 * @property \App\Model\Table\TipsTable&\Cake\ORM\Association\BelongsToMany $Tips
 *
 * @method \App\Model\Entity\Oferta newEmptyEntity()
 * @method \App\Model\Entity\Oferta newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Oferta> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Oferta get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Oferta findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Oferta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Oferta> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Oferta|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Oferta saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Oferta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oferta>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Oferta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oferta> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Oferta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oferta>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Oferta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Oferta> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfertasTable extends Table
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

        $this->setTable('ofertas');
        $this->setDisplayField('selecc_contrato');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Comercials', [
            'foreignKey' => 'comercial_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ubicacions', [
            'foreignKey' => 'ubicacion_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Ofertaspreciosacts', [
            'foreignKey' => 'oferta_id',
            'targetForeignKey' => 'ofertaspreciosact_id',
            'joinTable' => 'ofertas_ofertaspreciosacts',
        ]);
        $this->belongsToMany('Tips', [
            'foreignKey' => 'oferta_id',
            'targetForeignKey' => 'tip_id',
            'joinTable' => 'ofertas_tips',
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
            ->scalar('tipo_entidad')
            ->maxLength('tipo_entidad', 30)
            ->allowEmptyString('tipo_entidad');

        $validator
            ->integer('duracion_contrato')
            ->requirePresence('duracion_contrato', 'create')
            ->notEmptyString('duracion_contrato');

        $validator
            ->date('fecha_firma')
            ->requirePresence('fecha_firma', 'create')
            ->notEmptyDate('fecha_firma');

        $validator
            ->date('fecha_ini')
            ->requirePresence('fecha_ini', 'create')
            ->notEmptyDate('fecha_ini');

        $validator
            ->scalar('proveedor_unico')
            ->maxLength('proveedor_unico', 100)
            ->allowEmptyString('proveedor_unico');

        $validator
            ->scalar('ofertamos_medidodia')
            ->maxLength('ofertamos_medidodia', 100)
            ->allowEmptyString('ofertamos_medidodia');

        $validator
            ->scalar('ofertamos_matinera')
            ->maxLength('ofertamos_matinera', 100)
            ->allowEmptyString('ofertamos_matinera');

        $validator
            ->scalar('tipo_oferta')
            ->maxLength('tipo_oferta', 100)
            ->allowEmptyString('tipo_oferta');

        $validator
            ->scalar('selecc_contrato')
            ->maxLength('selecc_contrato', 25)
            ->requirePresence('selecc_contrato', 'create')
            ->notEmptyString('selecc_contrato');

        $validator
            ->integer('ubicacion_id')
            ->notEmptyString('ubicacion_id');

        $validator
            ->scalar('horario')
            ->maxLength('horario', 100)
            ->allowEmptyString('horario');

        $validator
            ->numeric('importe')
            ->allowEmptyString('importe');

        $validator
            ->scalar('email_oferta')
            ->maxLength('email_oferta', 255)
            ->allowEmptyString('email_oferta');

        $validator
            ->scalar('cif_oferta')
            ->maxLength('cif_oferta', 9)
            ->allowEmptyString('cif_oferta');

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
        $rules->add($rules->existsIn(['ubicacion_id'], 'Ubicacions'), ['errorField' => 'ubicacion_id']);

        return $rules;
    }
}
