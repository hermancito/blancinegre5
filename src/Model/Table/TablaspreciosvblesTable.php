<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tablaspreciosvbles Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\HasMany $Colegios
 *
 * @method \App\Model\Entity\Tablaspreciosvble newEmptyEntity()
 * @method \App\Model\Entity\Tablaspreciosvble newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tablaspreciosvble> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tablaspreciosvble get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tablaspreciosvble findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tablaspreciosvble patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tablaspreciosvble> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tablaspreciosvble|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tablaspreciosvble saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tablaspreciosvble>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tablaspreciosvble>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tablaspreciosvble>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tablaspreciosvble> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tablaspreciosvble>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tablaspreciosvble>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tablaspreciosvble>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tablaspreciosvble> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TablaspreciosvblesTable extends Table
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

        $this->setTable('tablaspreciosvbles');
        $this->setDisplayField('nombre_tabla');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Colegios', [
            'foreignKey' => 'tablaspreciosvble_id',
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
            ->scalar('nombre_tabla')
            ->maxLength('nombre_tabla', 100)
            ->requirePresence('nombre_tabla', 'create')
            ->notEmptyString('nombre_tabla');

        $validator
            ->numeric('hora1')
            ->notEmptyString('hora1');

        $validator
            ->numeric('hora1_media')
            ->notEmptyString('hora1_media');

        $validator
            ->numeric('hora2')
            ->notEmptyString('hora2');

        $validator
            ->numeric('hora2_media')
            ->notEmptyString('hora2_media');

        $validator
            ->numeric('hora3')
            ->notEmptyString('hora3');

        $validator
            ->numeric('hora3_media')
            ->notEmptyString('hora3_media');

        $validator
            ->numeric('hora4')
            ->notEmptyString('hora4');

        $validator
            ->numeric('hora4_media')
            ->notEmptyString('hora4_media');

        $validator
            ->numeric('hora5')
            ->notEmptyString('hora5');

        $validator
            ->numeric('hora5_media')
            ->notEmptyString('hora5_media');

        $validator
            ->numeric('hora6')
            ->notEmptyString('hora6');

        $validator
            ->numeric('hora6_media')
            ->notEmptyString('hora6_media');

        $validator
            ->numeric('hora7')
            ->notEmptyString('hora7');

        $validator
            ->numeric('hora7_media')
            ->notEmptyString('hora7_media');

        $validator
            ->numeric('hora8')
            ->notEmptyString('hora8');

        $validator
            ->numeric('hora8_media')
            ->notEmptyString('hora8_media');

        $validator
            ->numeric('hora9')
            ->notEmptyString('hora9');

        $validator
            ->numeric('hora9_media')
            ->notEmptyString('hora9_media');

        $validator
            ->numeric('hora10')
            ->notEmptyString('hora10');

        return $validator;
    }
}
