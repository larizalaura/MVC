<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->hasOne('Funcionarios');
    }

    public function findOwnedByResponsaveis(Query $query, array $options)
    {
        return $query->contain(['Funcionarios'])->where(['funcionarios.id is null'])->select(['Usuarios.id','Usuarios.nome']);
    }

    public function findOwnedByFuncionarios(Query $query, array $options)
    {
        return $query->contain(['Funcionarios'])->where(['funcionarios.id is not null'])->select(['Usuarios.id','Usuarios.nome']);
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
            ->requirePresence('nome', 'create');
           // ->notEmptyString('nome');

        $validator
            ->scalar('usuario')
            ->maxLength('usuario', 50)
            ->requirePresence('usuario', 'create');
           // ->notEmptyString('usuario');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 60)
            ->requirePresence('senha', 'create');
            //->notEmptyString('senha');

        $validator
            ->boolean('ativo');
           // ->notEmptyString('ativo');

        $validator
            ->boolean('admin');
           // ->notEmptyString('admin');

        $validator
            ->dateTime('data_criacao');
           // ->notEmptyDateTime('data_criacao');

        $validator
            ->dateTime('data_modificacao');
          //  ->notEmptyDateTime('data_modificacao');

        $validator
            ->dateTime('data_delecao');
            //->allowEmptyDateTime('data_delecao');

        return $validator;
    }
}
