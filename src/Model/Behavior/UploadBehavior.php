<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\Datasource\EntityInterface;
use Cake\Utility\Text;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Exception;

class UploadBehavior extends Behavior
{
    private $aquivo;

    public function initialize(array $config)
    {
        if (isset($config['events'])) {
            $this->setConfig('events', $config['events'], false);
        }
    }

    protected $_defaultConfig = [
        'events' => [
            'Model.beforeMarshal' => [
                'arquivo' => 'nome',
                'diretorio' => 'upload'
            ]
        ]
    ];

    public function beforeMarshal (Event $event, ArrayObject $data, ArrayObject $options)
    {
        if(!empty($data)) {
            $this->arquivo = $data;
            $data = $data['name'];
        } else {
            unset($data);
        };
    }

    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        if(!empty($this->arquivo)) {
            $entity->nome = $this->upload($this->arquivo);
        }
    }

    public function upload(ArrayObject $arquivo)
    { 
        $events = $this->_config['events'];
        $dir = WWW_ROOT.$events['diretorio'].DS;
    
        if(($arquivo['error']!=0) and ($arquivo['size']==0)) {
            throw new Exception('Alguma coisa deu errado, o upload retornou erro '.$arquivo['error'].' e tamanho '.$arquivo['size']);
        }
    
        $this->checa_dir($dir);
    
        $arquivo = $this->checa_nome($arquivo, $dir);
    
        $this->move_arquivos($arquivo, $dir);
    
        return $arquivo['name'];
    }

    private function checa_dir($dir)
    {
        $folder = new Folder();
        if (!is_dir($dir)){
            $folder->create($dir);
        }
    }

    private function checa_nome($arquivo, $dir)
    {
        $arquivo_info = pathinfo($dir.$arquivo['name']);
        $arquivo_nome = $this->trata_nome($arquivo_info['filename']).'.'.$arquivo_info['extension'];
        debug($arquivo_nome);
        $conta = 2;
        while (file_exists($dir.$arquivo_nome)) {
            $arquivo_nome  = $this->trata_nome($arquivo_info['filename']).'-'.$conta;
            $arquivo_nome .= '.'.$arquivo_info['extension'];
            $conta++;
            debug($arquivo_nome);
        }
        $arquivo['name'] = $arquivo_nome;
        return $arquivo;
    }

    private function trata_nome($arquivo_nome)
    {
        $arquivo_nome = strtolower(Text::slug($arquivo_nome,'-'));
        return $arquivo_nome;
    }

    private function move_arquivos($arquivo, $dir)
    {
        $arquivo = new File($arquivo['tmp_name']);
        $arquivo->copy($dir.$arquivo['name']);
        $arquivo->close();
    }

}