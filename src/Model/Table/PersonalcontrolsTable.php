<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personalcontrols Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TipoincidenciasTable&\Cake\ORM\Association\BelongsTo $Tipoincidencias
 * @property \App\Model\Table\ActorsTable&\Cake\ORM\Association\BelongsTo $Actors
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 *
 * @method \App\Model\Entity\Personalcontrol newEmptyEntity()
 * @method \App\Model\Entity\Personalcontrol newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Personalcontrol> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Personalcontrol get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Personalcontrol findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Personalcontrol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Personalcontrol> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Personalcontrol|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Personalcontrol saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Personalcontrol>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Personalcontrol>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Personalcontrol>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Personalcontrol> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Personalcontrol>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Personalcontrol>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Personalcontrol>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Personalcontrol> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PersonalcontrolsTable extends Table
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

        $this->setTable('personalcontrols');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tipoincidencias', [
            'foreignKey' => 'tipoincidencia_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
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
            ->integer('tipoincidencia_id')
            ->notEmptyString('tipoincidencia_id');

        $validator
            ->integer('actor_id')
            ->notEmptyString('actor_id');

        $validator
            ->integer('colegio_id')
            ->allowEmptyString('colegio_id');

        $validator
            ->scalar('descripc')
            ->allowEmptyString('descripc');

        $validator
            ->scalar('comodin1')
            ->maxLength('comodin1', 25)
            ->allowEmptyString('comodin1');

        $validator
            ->scalar('comodin2')
            ->maxLength('comodin2', 25)
            ->allowEmptyString('comodin2');

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
        $rules->add($rules->existsIn(['tipoincidencia_id'], 'Tipoincidencias'), ['errorField' => 'tipoincidencia_id']);
        $rules->add($rules->existsIn(['actor_id'], 'Actors'), ['errorField' => 'actor_id']);
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);

        return $rules;
    }
}
