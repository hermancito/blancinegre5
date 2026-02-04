<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoincidencias Model
 *
 * @property \App\Model\Table\PersonalcontrolsTable&\Cake\ORM\Association\HasMany $Personalcontrols
 *
 * @method \App\Model\Entity\Tipoincidencia newEmptyEntity()
 * @method \App\Model\Entity\Tipoincidencia newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tipoincidencia> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoincidencia get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tipoincidencia findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tipoincidencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tipoincidencia> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoincidencia|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tipoincidencia saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tipoincidencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipoincidencia>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tipoincidencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipoincidencia> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tipoincidencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipoincidencia>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tipoincidencia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipoincidencia> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TipoincidenciasTable extends Table
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

        $this->setTable('tipoincidencias');
        $this->setDisplayField('descripc');
        $this->setPrimaryKey('id');

        $this->hasMany('Personalcontrols', [
            'foreignKey' => 'tipoincidencia_id',
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

        return $validator;
    }
}
