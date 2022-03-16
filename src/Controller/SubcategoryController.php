<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Subcategory Controller
 *
 * @property \App\Model\Table\SubcategoryTable $Subcategory
 * @property \App\Model\Table\CategoryTable $Category
 * @method \App\Model\Entity\Subcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubcategoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Category'],
        ];
        $subcategory = $this->paginate($this->Subcategory);

        $this->set(compact('subcategory'));
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
        $subcategory = $this->Subcategory->get($id, [
            'contain' => ['Category'],
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
        $this->loadModel('Category');
        $category = $this->Category->Find('list', ['limit' => 200]);
        $subcategory = $this->Subcategory->newEmptyEntity();
        if ($this->request->is('post')) {
            $subcategory = $this->Subcategory->patchEntity($subcategory, $this->request->getData());
            $sub_name = '\sub_'.$subcategory->name;
            if (!file_exists('C:\xampp\htdocs\myphysio_project\categorys\cate_' . $this->get_name($subcategory->id_cat).$sub_name)) {
                mkdir('C:\xampp\htdocs\myphysio_project\categorys\cate_'.$this->get_name($subcategory->id_cat).$sub_name);
                echo($this->get_name($subcategory->id_cat));
                if ($this->Subcategory->save($subcategory)) {
                    $this->Flash->success(__('The subcategory has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Seems you already have this subcategory'));
            }
        }
        $this->set(compact('subcategory', 'category'));
    }

    public function get_name($id){
        $category = $this->getTableLocator()->get('Category');
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
        $subcategory = $this->Subcategory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcategory = $this->Subcategory->patchEntity($subcategory, $this->request->getData());
            if ($this->Subcategory->save($subcategory)) {
                $this->Flash->success(__('The subcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcategory could not be saved. Please, try again.'));
        }
        $category = $this->Subcategory->Category->find('list', ['limit' => 200])->all();
        $this->set(compact('subcategory', 'category'));
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
        $subcategory = $this->Subcategory->get($id);
        $sub_name = '\sub_'.$subcategory->name;
        if ($this->Subcategory->delete($subcategory)) {
            rmdir('C:\xampp\htdocs\myphysio_project\categorys\cate_'.$this->get_name($subcategory->id_cat).$sub_name);
            $this->Flash->success(__('The subcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The subcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
