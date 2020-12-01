<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionarios Model
 *
 * @property \App\Model\Table\EnderecosTable|\Cake\ORM\Association\BelongsTo $Enderecos
 * @property \App\Model\Table\TelefonesTable|\Cake\ORM\Association\BelongsTo $Telefones
 * @property \App\Model\Table\InformesTable|\Cake\ORM\Association\HasMany $Informes
 *
 * @method \App\Model\Entity\Funcionario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcionario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncionariosTable extends Table
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

        $this->setTable('funcionarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Enderecos', [
            'foreignKey' => 'endereco_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Telefones', [
            'foreignKey' => 'telefone_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Informes', [
            'foreignKey' => 'funcionario_id'
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->date('data_nasc')
            ->requirePresence('data_nasc', 'create')
            ->notEmptyDate('data_nasc');

        $validator
            ->scalar('parentesco')
            ->maxLength('parentesco', 100)
            ->requirePresence('parentesco', 'create')
            ->notEmptyString('parentesco');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 16)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 16)
            ->requirePresence('rg', 'create')
            ->notEmptyString('rg');

        $validator
            ->scalar('profissao')
            ->maxLength('profissao', 100)
            ->requirePresence('profissao', 'create')
            ->notEmptyString('profissao');

        $validator
            ->dateTime('data_criacao')
            ->notEmptyDateTime('data_criacao');

        $validator
            ->dateTime('data_modificacao')
            ->notEmptyDateTime('data_modificacao');

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
        $rules->add($rules->existsIn(['endereco_id'], 'Enderecos'));
        $rules->add($rules->existsIn(['telefone_id'], 'Telefones'));

        return $rules;
    }
}
