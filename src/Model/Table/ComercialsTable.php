<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comercials Model
 *
 * @property \App\Model\Table\AgentesTable&\Cake\ORM\Association\BelongsTo $Agentes
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\EmpresasdosTable&\Cake\ORM\Association\BelongsTo $Empresados
 * @property \App\Model\Table\EmpresastresTable&\Cake\ORM\Association\BelongsTo $Empresatres
 * @property \App\Model\Table\ComercialsarxiusTable&\Cake\ORM\Association\HasMany $Comercialsarxius
 * @property \App\Model\Table\OfertasTable&\Cake\ORM\Association\HasMany $Ofertas
 *
 * @method \App\Model\Entity\Comercial newEmptyEntity()
 * @method \App\Model\Entity\Comercial newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Comercial> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comercial get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Comercial findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Comercial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Comercial> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comercial|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Comercial saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Comercial>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercial>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comercial>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercial> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comercial>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercial>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comercial>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comercial> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComercialsTable extends Table
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

        $this->setTable('comercials');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Agentes', [
            'foreignKey' => 'agente_id',
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->belongsTo('Empresados', [
            'foreignKey' => 'empresados_id',
            'className' => 'Empresasdos',
        ]);
        $this->belongsTo('Empresatres', [
            'foreignKey' => 'empresatres_id',
            'className' => 'Empresastres',
        ]);
        $this->hasMany('Comercialsarxius', [
            'foreignKey' => 'comercial_id',
        ]);
        $this->hasMany('Ofertas', [
            'foreignKey' => 'comercial_id',
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
            ->scalar('codigo')
            ->maxLength('codigo', 10)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('nom_centro')
            ->maxLength('nom_centro', 150)
            ->requirePresence('nom_centro', 'create')
            ->notEmptyString('nom_centro');

        $validator
            ->scalar('localidad')
            ->maxLength('localidad', 150)
            ->requirePresence('localidad', 'create')
            ->notEmptyString('localidad');

        $validator
            ->integer('agente_id')
            ->allowEmptyString('agente_id');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 100)
            ->allowEmptyString('estado');

        $validator
            ->scalar('jornada')
            ->maxLength('jornada', 100)
            ->allowEmptyString('jornada');

        $validator
            ->integer('pax')
            ->allowEmptyString('pax');

        $validator
            ->scalar('control_admon')
            ->maxLength('control_admon', 250)
            ->allowEmptyString('control_admon');

        $validator
            ->scalar('comarca')
            ->maxLength('comarca', 100)
            ->allowEmptyString('comarca');

        $validator
            ->scalar('tipo_via')
            ->maxLength('tipo_via', 10)
            ->allowEmptyString('tipo_via');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 250)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('num')
            ->maxLength('num', 20)
            ->allowEmptyString('num');

        $validator
            ->scalar('cp')
            ->maxLength('cp', 5)
            ->allowEmptyString('cp');

        $validator
            ->scalar('provincia')
            ->maxLength('provincia', 100)
            ->allowEmptyString('provincia');

        $validator
            ->scalar('tfno')
            ->maxLength('tfno', 9)
            ->allowEmptyString('tfno');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 9)
            ->allowEmptyString('fax');

        $validator
            ->scalar('cif')
            ->maxLength('cif', 20)
            ->allowEmptyString('cif');

        $validator
            ->scalar('gestion_actual')
            ->maxLength('gestion_actual', 50)
            ->allowEmptyString('gestion_actual');

        $validator
            ->scalar('email_centro')
            ->maxLength('email_centro', 150)
            ->allowEmptyString('email_centro');

        $validator
            ->scalar('contacto1_cargo')
            ->maxLength('contacto1_cargo', 50)
            ->allowEmptyString('contacto1_cargo');

        $validator
            ->scalar('contacto1_nom_tfno')
            ->maxLength('contacto1_nom_tfno', 150)
            ->allowEmptyString('contacto1_nom_tfno');

        $validator
            ->scalar('contacto1_mail')
            ->maxLength('contacto1_mail', 150)
            ->allowEmptyString('contacto1_mail');

        $validator
            ->scalar('contacto2_cargo')
            ->maxLength('contacto2_cargo', 50)
            ->allowEmptyString('contacto2_cargo');

        $validator
            ->scalar('contacto2_nom_tfno')
            ->maxLength('contacto2_nom_tfno', 150)
            ->allowEmptyString('contacto2_nom_tfno');

        $validator
            ->scalar('contacto2_mail')
            ->maxLength('contacto2_mail', 150)
            ->allowEmptyString('contacto2_mail');

        $validator
            ->scalar('contacto3_datos')
            ->maxLength('contacto3_datos', 200)
            ->allowEmptyString('contacto3_datos');

        $validator
            ->boolean('matinal')
            ->allowEmptyString('matinal');

        $validator
            ->boolean('mediodia')
            ->allowEmptyString('mediodia');

        $validator
            ->boolean('j_continua')
            ->allowEmptyString('j_continua');

        $validator
            ->boolean('tardes')
            ->allowEmptyString('tardes');

        $validator
            ->boolean('jun_sept')
            ->allowEmptyString('jun_sept');

        $validator
            ->boolean('vacacionales')
            ->allowEmptyString('vacacionales');

        $validator
            ->scalar('plant_comercial')
            ->allowEmptyString('plant_comercial');

        $validator
            ->scalar('historial_citas_observ')
            ->allowEmptyString('historial_citas_observ');

        $validator
            ->scalar('ini_cto')
            ->maxLength('ini_cto', 4)
            ->allowEmptyString('ini_cto');

        $validator
            ->scalar('ini_cto_agente')
            ->maxLength('ini_cto_agente', 100)
            ->allowEmptyString('ini_cto_agente');

        $validator
            ->scalar('fin_cto')
            ->maxLength('fin_cto', 4)
            ->allowEmptyString('fin_cto');

        $validator
            ->scalar('fin_cto_agente')
            ->maxLength('fin_cto_agente', 100)
            ->allowEmptyString('fin_cto_agente');

        $validator
            ->integer('empresa_id')
            ->allowEmptyString('empresa_id');

        $validator
            ->integer('empresados_id')
            ->allowEmptyString('empresados_id');

        $validator
            ->integer('empresatres_id')
            ->allowEmptyString('empresatres_id');

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
        $rules->add($rules->existsIn(['agente_id'], 'Agentes'), ['errorField' => 'agente_id']);
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'), ['errorField' => 'empresa_id']);
        $rules->add($rules->existsIn(['empresados_id'], 'Empresados'), ['errorField' => 'empresados_id']);
        $rules->add($rules->existsIn(['empresatres_id'], 'Empresatres'), ['errorField' => 'empresatres_id']);

        return $rules;
    }
}
