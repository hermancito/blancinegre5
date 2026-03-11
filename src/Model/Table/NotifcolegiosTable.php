<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notifcolegios Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsToMany $Colegios
 *
 * @method \App\Model\Entity\Notifcolegio newEmptyEntity()
 * @method \App\Model\Entity\Notifcolegio newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Notifcolegio> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notifcolegio get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Notifcolegio findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Notifcolegio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Notifcolegio> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notifcolegio|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Notifcolegio saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Notifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifcolegio>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifcolegio> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifcolegio>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notifcolegio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notifcolegio> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotifcolegiosTable extends Table
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

        $this->setTable('notifcolegios');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsToMany('Colegios', [
            'foreignKey' => 'notifcolegio_id',
            'targetForeignKey' => 'colegio_id',
            'joinTable' => 'colegios_notifcolegios',
        ]);
        $this->belongsToMany('Notifcolegios', [
            'foreignKey' => 'notifcolegio_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'notifcolegios_users',
            'className' => 'Users',
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
            ->allowEmptyString('user_id');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripc')
            ->allowEmptyString('descripc');

        $validator
            ->allowEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->allowEmptyString('photo_dir');

        $validator
            ->boolean('validado')
            ->notEmptyString('validado');

        $validator
            ->scalar('comodin')
            ->maxLength('comodin', 255)
            ->allowEmptyString('comodin');

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

        return $rules;
    }
}
