<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notifcolegios Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ColegiosTable&\Cake\ORM\Association\BelongsToMany $Colegios
 *
 * @method \App\Model\Entity\Notifcolegio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Notifcolegio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Notifcolegio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notifcolegio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notifcolegio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notifcolegio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Notifcolegio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notifcolegio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotifcolegiosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('notifcolegios');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    //'size' => 'photo_size', // defaults to `size`
                    //'type' => 'photo_type', // defaults to `type`
                ],
            ],
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Colegios', [
            'foreignKey' => 'notifcolegio_id',
            'targetForeignKey' => 'colegio_id',
            'joinTable' => 'colegios_notifcolegios'
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripc')
            ->allowEmptyString('descripc');

        $validator
            ->allowEmptyString('photo');


        $validator
            ->add('photo', 'extension', [
                'rule'=> ['extension', ['pdf', 'jpg', 'jpeg', 'png']],
                'message'=>'El archivo no tiene extension aceptada'
            ])
            ->add('photo', 'mimeType', [
                'rule'=> ['mimeType', ['application/pdf', 'image/jpeg', 'image/png']],
                'message'=>'El archivo no tiene un formato correcto'
            ]);


        $validator
            ->boolean('validado')
            ->notEmptyString('validado');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}