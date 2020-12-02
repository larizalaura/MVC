<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Exception;

/**
 * InformesArquivos Model
 *
 * @property \App\Model\Table\InformesTable|\Cake\ORM\Association\BelongsTo $Informes
 *
 * @method \App\Model\Entity\InformesArquivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\InformesArquivo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InformesArquivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InformesArquivo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InformesArquivo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InformesArquivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InformesArquivo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InformesArquivo findOrCreate($search, callable $callback = null, $options = [])
 */
class InformesArquivosTable extends Table
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

        $this->setTable('informes_arquivos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // $this->addBehavior('Upload', [
        //     'events' => [
        //         'arquivo_name' => 'nome',
        //         'diretorio' => 'upload'
        //     ]
        // ]);

        $this->belongsTo('Informes', [
            'foreignKey' => 'informe_id',
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
            ->requirePresence('nome', 'create')
            /* ->notEmptyString('nome')*/;

        $validator
            ->scalar('extensao')
            ->maxLength('extensao', 4)
            ->requirePresence('extensao', 'create')
            /*>notEmptyString('extensao')*/;

        $validator
            ->dateTime('data_criacao')
            /*->notEmptyDateTime('data_criacao')*/;

        $validator
            ->dateTime('data_modificacao')
            /*->notEmptyDateTime('data_modificacao')*/;

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
        $rules->add($rules->existsIn(['informe_id'], 'Informes'));

        return $rules;
    }
}
