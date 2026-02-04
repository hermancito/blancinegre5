<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ofertashorarios Model
 *
 * @property \App\Model\Table\OfertasOfertaspreciosactsTable&\Cake\ORM\Association\HasMany $OfertasOfertaspreciosacts
 *
 * @method \App\Model\Entity\Ofertashorario newEmptyEntity()
 * @method \App\Model\Entity\Ofertashorario newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ofertashorario> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ofertashorario get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ofertashorario findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ofertashorario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ofertashorario> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ofertashorario|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ofertashorario saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertashorario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertashorario>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertashorario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertashorario> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertashorario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertashorario>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ofertashorario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ofertashorario> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfertashorariosTable extends Table
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

        $this->setTable('ofertashorarios');
        $this->setDisplayField('intervalo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('OfertasOfertaspreciosacts', [
            'foreignKey' => 'ofertashorario_id',
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
            ->scalar('intervalo')
            ->maxLength('intervalo', 30)
            ->requirePresence('intervalo', 'create')
            ->notEmptyString('intervalo');

        $validator
            ->scalar('accion')
            ->maxLength('accion', 100)
            ->requirePresence('accion', 'create')
            ->notEmptyString('accion');

        $validator
            ->numeric('importe')
            ->requirePresence('importe', 'create')
            ->notEmptyString('importe');

        return $validator;
    }
}
