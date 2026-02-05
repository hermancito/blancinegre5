<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivitatsgrupsJornadasgrups Model
 *
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsTo $Activitatsgrups
 * @property \App\Model\Table\JornadasgrupsTable&\Cake\ORM\Association\BelongsTo $Jornadasgrups
 *
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup newEmptyEntity()
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsgrupsJornadasgrup> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ActivitatsgrupsJornadasgrup> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ActivitatsgrupsJornadasgrup saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsJornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsJornadasgrup>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsJornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsJornadasgrup> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsJornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsJornadasgrup>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ActivitatsgrupsJornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ActivitatsgrupsJornadasgrup> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ActivitatsgrupsJornadasgrupsTable extends Table
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

        $this->setTable('activitatsgrups_jornadasgrups');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Activitatsgrups', [
            'foreignKey' => 'activitatsgrup_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Jornadasgrups', [
            'foreignKey' => 'jornadasgrup_id',
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
            ->integer('activitatsgrup_id')
            ->notEmptyString('activitatsgrup_id');

        $validator
            ->integer('jornadasgrup_id')
            ->notEmptyString('jornadasgrup_id');

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
        $rules->add($rules->existsIn(['activitatsgrup_id'], 'Activitatsgrups'), ['errorField' => 'activitatsgrup_id']);
        $rules->add($rules->existsIn(['jornadasgrup_id'], 'Jornadasgrups'), ['errorField' => 'jornadasgrup_id']);

        return $rules;
    }
}
