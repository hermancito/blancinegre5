<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colegiofilesfamilias Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 *
 * @method \App\Model\Entity\Colegiofilesfamilia newEmptyEntity()
 * @method \App\Model\Entity\Colegiofilesfamilia newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Colegiofilesfamilia> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colegiofilesfamilia get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Colegiofilesfamilia findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Colegiofilesfamilia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Colegiofilesfamilia> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colegiofilesfamilia|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Colegiofilesfamilia saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Colegiofilesfamilia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegiofilesfamilia>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colegiofilesfamilia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegiofilesfamilia> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colegiofilesfamilia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegiofilesfamilia>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colegiofilesfamilia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colegiofilesfamilia> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ColegiofilesfamiliasTable extends Table
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

        $this->setTable('colegiofilesfamilias');
        $this->setDisplayField('file');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id',
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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->integer('colegio_id')
            ->notEmptyString('colegio_id');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->requirePresence('file', 'create')
            ->notEmptyFile('file');

        $validator
            ->scalar('file_dir')
            ->maxLength('file_dir', 255)
            ->requirePresence('file_dir', 'create')
            ->notEmptyString('file_dir');

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
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);

        return $rules;
    }
}
