<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Responsaveis Model
 *
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\Responsavei get($primaryKey, $options = [])
 * @method \App\Model\Entity\Responsavei newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Responsavei[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Responsavei|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsavei saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsavei patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Responsavei[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Responsavei findOrCreate($search, callable $callback = null, $options = [])
 */
class ResponsaveisTable extends Table
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

        $this->setTable('responsaveis');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
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
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create');
           // ->notEmptyString('nome');

        $validator
        ->dateTime('data_nasc');
        //   ->notEmptyDateTime('data_nasc');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 45)
            ->requirePresence('cpf', 'create');
        //    ->notEmptyString('cpf');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 45)
            ->requirePresence('telefone', 'create');
           // ->notEmptyString('telefone');

        $validator
        ->scalar('parentesco')
        ->maxLength('parentesco', 45)
        ->requirePresence('parentesco', 'create');
          // ->notEmptyString('parentesco');   

        $validator
        ->email('rg')
        ->requirePresence('rg', 'create');
         // ->notEmptyString('rg');

        $validator
        ->scalar('profissao')
        ->maxLength('profissao', 45)
        ->requirePresence('profissao', 'create');
        // ->notEmptyString('parentesco'); 

        $validator
        ->scalar('email')
        ->maxLength('email', 45)
        ->requirePresence('email', 'create');
        // ->notEmptyString('email'); 

        $validator
            ->dateTime('data_criacao');
         //   ->notEmptyDateTime('data_criacao');

        $validator
            ->dateTime('data_modificacao');
          //  ->notEmptyDateTime('data_modificacao');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
