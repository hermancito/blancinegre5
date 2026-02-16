<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notificacions Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Colegios
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Activitats
 * @property \App\Model\Table\NotificacionpdfsTable&\Cake\ORM\Association\HasMany $Notificacionpdfs
 *
 * @method \App\Model\Entity\Notificacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Notificacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Notificacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notificacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notificacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notificacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Notificacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notificacion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotificacionsTable extends Table
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

        $this->setTable('notificacions');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        // $this->addBehavior('Proffer.Proffer', [
        //     'photo' => [	// The name of your upload field
        //         'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
        //         'dir' => 'photo_dir',	// The name of the field to store the folder
        //         'thumbnailSizes' => [ // Declare your thumbnails
        //             'square' => [	// Define the prefix of your thumbnail
        //                 'w' => 50,	// Width
        //                 'h' => 50,	// Height
        //                 'crop'=>true,
        //                 'jpeg_quality'	=> 100
        //             ],
        //             'portrait' => [		// Define a second thumbnail
        //                 'w' => 300,
        //                 'h' => 300,
        //                 'crop'=>true,
        //                 'jpeg_quality'	=> 100
        //             ],
        //         ],
        //         'thumbnailMethod' => 'gd'	// Options are Imagick or Gd
        //     ]
        // ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

        $this->belongsTo('Colegios', [
            'foreignKey' => 'colegio_id'
        ]);

        $this->belongsTo('Activitats', [
            'foreignKey' => 'activitat_id'
        ]);

        $this->hasMany('Notificacionpdfs', [
            'foreignKey' => 'user_id'
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
            ->integer('user_id')
            ->requirePresence('user_id', 'create')
            ->requirePresence('user_id', 'update');

        $validator
            ->integer('activitat_id')
            ->requirePresence('activitat_id', 'create');


        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 125)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripc')
            ->allowEmptyString('descripc');

        $validator
            ->allowEmptyString('photo');

        // $validator->setProvider('proffer', 'Proffer\Model\Validation\ProfferRules');
        // $validator

        //     // Set the thumbnail resize dimensions
        //     ->add('photo', 'proffer', [
        //         'rule' => ['dimensions', [
        //             'min' => ['w' => 50, 'h' => 50],
        //             'max' => ['w' => 800, 'h' => 800]
        //         ]],
        //         'provider'=>'proffer',
        //         'message' => 'Image is not correct dimensions.',
        //     ])
        //     ->add('photo', 'extension', [
        //         'rule'=> ['extension', ['jpeg', 'png', 'jpg']],
        //         'message'=>'La imagen no tiene una extensión permitida, sólo jpg y png'
        //     ])
        //     ->add('photo', 'mimeType', [
        //         'rule'=> ['mimeType', ['image/jpeg', 'image/png']],
        //         'message'=>'La imagen no tiene un formato correcto'
        //     ])
        //     ->add('photo', 'uploadError', [
        //         'rule'=> ['uploadError', true],
        //         'message'=>'No se ha subido el archivo. Vuelve a probar'
        //     ])
        //     ->add('photo', 'fileSize', [
        //         'rule'=> ['fileSize', '<=', '1MB'],
        //         'message'=>'La imagen excede el tamaño permitido'
        //     ]);

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
        $rules->add($rules->existsIn(['activitat_id'], 'Activitats'));
        $rules->add($rules->existsIn(['colegio_id'], 'Colegios'));

        return $rules;
    }
}