<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 * @property \App\Model\Table\AlunosTable|\Cake\ORM\Association\HasMany $Alunos
 * @property \App\Model\Table\ResponsavelTable|\Cake\ORM\Association\HasMany $Responsavel
 *
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, callable $callback = null, $options = [])
 */
class EnderecosTable extends Table
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

        $this->setTable('enderecos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Alunos', [
            'foreignKey' => 'endereco_id'
        ]);
        $this->hasMany('Responsavel', [
            'foreignKey' => 'endereco_id'
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
            ->scalar('rua')
            ->maxLength('rua', 100)
            ->requirePresence('rua', 'create');
            //->notEmptyString('rua');

        $validator
            ->integer('cep')
            ->requirePresence('cep', 'create');
            //->notEmptyString('cep');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create');
            //->notEmptyString('numero');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 100)
            ->requirePresence('bairro', 'create');
            //->notEmptyString('bairro');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 100)
            ->requirePresence('cidade', 'create');
            //->notEmptyString('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 100)
            ->requirePresence('estado', 'create');
            //->notEmptyString('estado');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->requirePresence('tipo', 'create');
            //->notEmptyString('tipo');

        return $validator;
    }
}
