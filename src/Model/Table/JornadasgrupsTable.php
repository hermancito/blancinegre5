<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jornadasgrups Model
 *
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsToMany $Activitatsgrups
 *
 * @method \App\Model\Entity\Jornadasgrup newEmptyEntity()
 * @method \App\Model\Entity\Jornadasgrup newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Jornadasgrup> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jornadasgrup get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Jornadasgrup findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Jornadasgrup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Jornadasgrup> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jornadasgrup|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Jornadasgrup saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Jornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Jornadasgrup>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Jornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Jornadasgrup> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Jornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Jornadasgrup>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Jornadasgrup>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Jornadasgrup> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JornadasgrupsTable extends Table
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

        $this->setTable('jornadasgrups');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Activitatsgrups', [
            'foreignKey' => 'jornadasgrup_id',
            'targetForeignKey' => 'activitatsgrup_id',
            'joinTable' => 'activitatsgrups_jornadasgrups',
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
            ->scalar('codigo')
            ->maxLength('codigo', 10)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->integer('anyo')
            ->requirePresence('anyo', 'create')
            ->notEmptyString('anyo');

        $validator
            ->integer('variac_ini')
            ->notEmptyString('variac_ini');

        $validator
            ->integer('variac_fin')
            ->notEmptyString('variac_fin');

        return $validator;
    }
}
