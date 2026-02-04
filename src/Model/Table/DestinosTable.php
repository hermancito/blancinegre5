<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Destinos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Destino newEmptyEntity()
 * @method \App\Model\Entity\Destino newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Destino> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Destino get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Destino findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Destino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Destino> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Destino|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Destino saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Destino>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destino>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Destino>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destino> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Destino>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destino>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Destino>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destino> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DestinosTable extends Table
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

        $this->setTable('destinos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Users', [
            'foreignKey' => 'destino_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'destinos_users',
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
            ->scalar('nombre')
            ->maxLength('nombre', 150)
            ->allowEmptyString('nombre');

        return $validator;
    }
}
