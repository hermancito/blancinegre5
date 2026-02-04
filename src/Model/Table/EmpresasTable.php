<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\ComercialsTable&\Cake\ORM\Association\HasMany $Comercials
 *
 * @method \App\Model\Entity\Empresa newEmptyEntity()
 * @method \App\Model\Entity\Empresa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Empresa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Empresa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('nom_empresa');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comercials', [
            'foreignKey' => 'empresa_id',
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
            ->scalar('nom_empresa')
            ->maxLength('nom_empresa', 100)
            ->requirePresence('nom_empresa', 'create')
            ->notEmptyString('nom_empresa');

        return $validator;
    }
}
