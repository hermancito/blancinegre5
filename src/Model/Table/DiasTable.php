<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dias Model
 *
 * @property \App\Model\Table\DisponibilitatsTable&\Cake\ORM\Association\HasMany $Disponibilitats
 * @property \App\Model\Table\ActivitatsTable&\Cake\ORM\Association\BelongsToMany $Activitats
 * @property \App\Model\Table\ActivitatsgrupsTable&\Cake\ORM\Association\BelongsToMany $Activitatsgrups
 * @property \App\Model\Table\VolantesTable&\Cake\ORM\Association\BelongsToMany $Volantes
 *
 * @method \App\Model\Entity\Dia newEmptyEntity()
 * @method \App\Model\Entity\Dia newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Dia> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dia get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Dia findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Dia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Dia> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dia|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Dia saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Dia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dia>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dia> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dia>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dia>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dia> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DiasTable extends Table
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

        $this->setTable('dias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Disponibilitats', [
            'foreignKey' => 'dia_id',
        ]);
        $this->belongsToMany('Activitats', [
            'foreignKey' => 'dia_id',
            'targetForeignKey' => 'activitat_id',
            'joinTable' => 'activitats_dias',
        ]);
        $this->belongsToMany('Activitatsgrups', [
            'foreignKey' => 'dia_id',
            'targetForeignKey' => 'activitatsgrup_id',
            'joinTable' => 'activitatsgrups_dias',
        ]);
        $this->belongsToMany('Volantes', [
            'foreignKey' => 'dia_id',
            'targetForeignKey' => 'volante_id',
            'joinTable' => 'dias_volantes',
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
            ->maxLength('nombre', 5)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('descripc')
            ->maxLength('descripc', 20)
            ->allowEmptyString('descripc');

        return $validator;
    }
}
