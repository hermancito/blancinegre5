<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notificacionpdfs Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\NotificacionsTable&\Cake\ORM\Association\BelongsTo $Notificacions
 *
 * @method \App\Model\Entity\Notificacionpdf newEmptyEntity()
 * @method \App\Model\Entity\Notificacionpdf newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Notificacionpdf> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notificacionpdf get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Notificacionpdf findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Notificacionpdf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Notificacionpdf> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notificacionpdf|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Notificacionpdf saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Notificacionpdf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notificacionpdf>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notificacionpdf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notificacionpdf> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notificacionpdf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notificacionpdf>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Notificacionpdf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Notificacionpdf> deleteManyOrFail(iterable $entities, array $options = [])
 */
class NotificacionpdfsTable extends Table
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

        $this->setTable('notificacionpdfs');
        $this->setDisplayField('pdf');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Notificacions', [
            'foreignKey' => 'notificacion_id',
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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->integer('notificacion_id')
            ->notEmptyString('notificacion_id');

        $validator
            ->scalar('pdf')
            ->maxLength('pdf', 255)
            ->requirePresence('pdf', 'create')
            ->notEmptyString('pdf');

        $validator
            ->scalar('pdf_dir')
            ->maxLength('pdf_dir', 255)
            ->requirePresence('pdf_dir', 'create')
            ->notEmptyString('pdf_dir');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['notificacion_id'], 'Notificacions'), ['errorField' => 'notificacion_id']);

        return $rules;
    }
}
