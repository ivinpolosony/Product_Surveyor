<?php

App::uses('AppController', 'Controller');

/**
 * Articles Controller
 *
 * @property Article $Article
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator','RequestHandler');
    public $helper = array('Js'=> array('Jquery'));
    
   




    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('productAjax'); // added to allow
        
        
        
        
          
    }

        public function productAjax(){
        

            if($this->RequestHandler->isAjax()){

                  
    //            $this->set('parrent_product_name',$this->passedArgs['product_name']);
                
                $product_id = $this->Session->read('product_id');
                if(isset($this->request->data['product_id'])){
                  $product_id =   $this->request->data['product_id'] ;
                  $this->Session->write('product_id',$this->request->data['product_id']);
                }
                
                $result = $this->Article->find('all',array('conditions'=>array('Article.product_id'=>$product_id )));
                   
     
                 $this->Paginator->settings = array(
                    'conditions' => array('Article.product_id'=>$product_id) ,
                    'limit' => 2
                 );
                $data = $this->Paginator->paginate('Article');
                $this->set('articles',$data);
                $this->set('product_id',$product_id);
                
                
//                $this->Paginator->
//                $this->set('articles',$result);
               //  $this->set('articles', $this->Paginator->paginate());   

               $this->render('sd','ajax');

            }
    }
    
    
    
    /**
     * index method
     *
     * @return void
     */
    public function index($product_id = NULL) {
        $this->Article->recursive = 0;
        $this->set('articles', $this->Paginator->paginate());
       
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Article->exists($id)) {
            throw new NotFoundException(__('Invalid article'));
        }
        $options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
        $this->set('article', $this->Article->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        

        if ($this->request->is('post')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                if($this->RequestHandler->isAjax()){
                    
                    // $this->redirect(array('controller'=> 'products','action' => 'index'));
                    $this->render('/Elements/success');

                   
                }
                
                
                
               // $this->Session->setFlash(__('The article has been saved.'));
               // return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Article->exists($id)) {
            throw new NotFoundException(__('Invalid article'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('The article has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
            $this->request->data = $this->Article->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Article->id = $id;
        if (!$this->Article->exists()) {
            throw new NotFoundException(__('Invalid article'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Article->delete()) {
            $this->Session->setFlash(__('The article has been deleted.'));
        } else {
            $this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
