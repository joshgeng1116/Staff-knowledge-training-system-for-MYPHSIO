<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Subcategories Controller
 *
 * @property \App\Model\Table\SubcategoriesTable $Subcategories
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Subcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubcategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $subcategories = $this->paginate($this->Subcategories);

        $this->set(compact('subcategories'));
    }

    public function viewByCat($id){
        $this->loadModel('Categories');
        $category = $this->paginate($this->Categories);
        $subcategory = $this->getTableLocator()->get('Subcategories');
        $subcategories = $subcategory->find()->where(['cat_id'=>$id]);
        $this->set(compact('subcategories','category'));

    }

    /**
     * View method
     *
     * @param string|null $id Subcategory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subcategory = $this->Subcategories->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('subcategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->loadModel('Categories');
        $categories = $this->Categories->Find('list', ['limit' => 200]);
        $subcategory = $this->Subcategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $subcategory = $this->Subcategories->patchEntity($subcategory, $this->request->getData());
            $sub_name = '/sub_'.$subcategory->name;
            if (!file_exists(WWW_ROOT.'category/cate_' . $this->get_name($subcategory->cat_id).$sub_name)) {
                mkdir(WWW_ROOT.'category/cate_' .$this->get_name($subcategory->cat_id).$sub_name);
                if ($this->Subcategories->save($subcategory)) {
                    $this->Flash->success(__('The subcategory has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Seems you already have this subcategory'));
            }
        }
        $this->set(compact('subcategory', 'categories'));
    }

    public function get_name($id){
        $category = $this->getTableLocator()->get('Categories');
        $categoryObj = $category->find()->where(['id'=>$id])->select(['name'])->first();
        return $categoryObj->name;
    }


    /**
     * Edit method
     *
     * @param string|null $id Subcategory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subcategory = $this->Subcategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcategory = $this->Subcategories->patchEntity($subcategory, $this->request->getData());
            if ($this->Subcategories->save($subcategory)) {
                $this->Flash->success(__('The subcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcategory could not be saved. Please, try again.'));
        }
        $cats = $this->Subcategories->Cats->find('list', ['limit' => 200])->all();
        $this->set(compact('subcategory', 'cats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcategory id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subcategory = $this->Subcategories->get($id);
        if ($this->Subcategories->delete($subcategory)) {
            $this->Flash->success(__('The subcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The subcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
