<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Informes Model
 *
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\InformesArquivosTable|\Cake\ORM\Association\HasMany $InformesArquivos
 *
 * @method \App\Model\Entity\Informe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Informe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Informe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Informe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Informe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Informe findOrCreate($search, callable $callback = null, $options = [])
 */
class InformesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('informes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'funcionario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'responsavel_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('InformesArquivos', [
            'foreignKey' => 'informe_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 45)
            ->requirePresence('titulo', 'create');

        $validator
            ->scalar('corpo')
            ->maxLength('corpo', 45)
            ->requirePresence('corpo', 'create');

        $validator
            ->dateTime('data_criacao');

        $validator
            ->dateTime('data_modificacao');

        $validator
            ->dateTime('data_delecao')
            ->allowEmptyDateTime('data_delecao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['funcionario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['responsavel_id'], 'Usuarios'));

        return $rules;
    }
}
