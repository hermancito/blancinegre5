<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ColegiosNotifcolegios Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\NotifcolegiosTable&\Cake\ORM\Association\BelongsTo $Notifcolegios
 *
 * @method \App\Model\Entity\ColegiosNotifcolegio newEmptyEntity()
 * @method \App\Model\Entity\ColegiosNotifcolegio newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ColegiosNotifcolegio> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ColegiosNotifcolegio get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ColegiosNotifcolegio findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ColegiosNotifcolegio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ColegiosNotifcolegio> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ColegiosNotifcolegio|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ColegiosNotifcolegio saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosNotifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosNotifcolegio>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosNotifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosNotifcolegio> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosNotifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosNotifcolegio>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ColegiosNotifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ColegiosNotifcolegio> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ColegiosNotifcolegiosTable extends Table
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

        $this->setTable('colegios_notifcolegios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Notifcolegios', [
            'foreignKey' => 'notifcolegio_id',
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
            ->integer('notifcolegio_id')
            ->notEmptyString('notifcolegio_id');

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
        $rules->add($rules->existsIn(['notifcolegio_id'], 'Notifcolegios'), ['errorField' => 'notifcolegio_id']);

        return $rules;
    }
}
