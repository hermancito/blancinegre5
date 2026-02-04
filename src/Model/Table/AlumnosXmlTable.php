<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AlumnosXml Model
 *
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsTo $Colegios
 *
 * @method \App\Model\Entity\AlumnosXml newEmptyEntity()
 * @method \App\Model\Entity\AlumnosXml newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AlumnosXml> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AlumnosXml get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AlumnosXml findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AlumnosXml patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AlumnosXml> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AlumnosXml|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AlumnosXml saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosXml>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosXml> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosXml>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AlumnosXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AlumnosXml> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AlumnosXmlTable extends Table
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

        $this->setTable('alumnos_xml');
        $this->setDisplayField('xmlfile');
        $this->setPrimaryKey('id');

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
            ->integer('colegio_id')
            ->notEmptyString('colegio_id');

        $validator
            ->scalar('xmlfile')
            ->maxLength('xmlfile', 255)
            ->requirePresence('xmlfile', 'create')
            ->notEmptyString('xmlfile');

        $validator
            ->scalar('xmlfile_dir')
            ->maxLength('xmlfile_dir', 255)
            ->requirePresence('xmlfile_dir', 'create')
            ->notEmptyString('xmlfile_dir');

        $validator
            ->boolean('grabado')
            ->notEmptyString('grabado');

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
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'), ['errorField' => 'colegio_id']);

        return $rules;
    }
}
