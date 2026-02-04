<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiponodisponibilitats Model
 *
 * @property \App\Model\Table\DisponibilitatsTable&\Cake\ORM\Association\HasMany $Disponibilitats
 *
 * @method \App\Model\Entity\Tiponodisponibilitat newEmptyEntity()
 * @method \App\Model\Entity\Tiponodisponibilitat newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tiponodisponibilitat> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiponodisponibilitat get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tiponodisponibilitat findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tiponodisponibilitat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tiponodisponibilitat> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiponodisponibilitat|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tiponodisponibilitat saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tiponodisponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tiponodisponibilitat>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tiponodisponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tiponodisponibilitat> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tiponodisponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tiponodisponibilitat>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tiponodisponibilitat>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tiponodisponibilitat> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TiponodisponibilitatsTable extends Table
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

        $this->setTable('tiponodisponibilitats');
        $this->setDisplayField('descripc');
        $this->setPrimaryKey('id');

        $this->hasMany('Disponibilitats', [
            'foreignKey' => 'tiponodisponibilitat_id',
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
            ->scalar('descripc')
            ->maxLength('descripc', 255)
            ->requirePresence('descripc', 'create')
            ->notEmptyString('descripc');

        $validator
            ->scalar('color')
            ->maxLength('color', 20)
            ->requirePresence('color', 'create')
            ->notEmptyString('color');

        return $validator;
    }
}
