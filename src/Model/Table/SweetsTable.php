<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sweets Model
 *
 * @method \App\Model\Entity\Sweet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sweet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sweet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sweet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sweet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sweet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sweet findOrCreate($search, callable $callback = null, $options = [])
 */
class SweetsTable extends Table
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

        $this->table('sweets');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'path' => 'static{DS}{model}{DS}{field}{DS}',
                'nameCallback' => function ($data, $settings) {
                    return uniqid().'-'.strtolower($data['name']);
                }
            ],
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('body');

        $validator
            ->allowEmpty('image');
            
        $validator
            ->allowEmpty('dir');

        return $validator;
    }
}
