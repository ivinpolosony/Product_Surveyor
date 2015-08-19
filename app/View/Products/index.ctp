<?php echo $this->Html->script('jquery',FALSE); ?>   

<!--
       

<div class="products index">
        <h2><?php echo __('Products'); ?></h2>
        <table cellpadding="0" cellspacing="0">
        <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('product_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('product_desc'); ?></th>
                        <th><?php echo $this->Paginator->sort('product_image'); ?></th>
                        <th><?php echo $this->Paginator->sort('product_pre_image'); ?></th>
                        <th><?php echo $this->Paginator->sort('created_date'); ?></th>
                        <th><?php echo $this->Paginator->sort('updated_date'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
<?php foreach ($products as $product): ?>
            <tr>
                    <td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['product_name']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['product_desc']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['product_image']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['product_pre_image']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['created_date']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['updated_date']); ?>&nbsp;</td>
                    <td class="actions">
    <?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
                    </td>
            </tr>
<?php endforeach; ?>
        </table>
        <p>
<?php
echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
?>	</p>
        <div class="paging">
<?php
echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => ''));
echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
        </div>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
                <li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
        </ul>
</div>-->

<style>
    #main_product{
        background-color: #000;
        float: left;
    }

    #left_tab{
        background-color: #f4f4f4;
        float: left;
    }
    
    .article_display{
        float: left;
    }
    #content1{
        width:90%;
    }
</style>


        <?php //debug($value);   ?> 
<table width="500" border="0">
    <tr>
        <td colspan="2" style="background-color:#FFA500;">
            <h1>Main Title of Web Page</h1>
            
<!--            ADD ARTICLE -->
            <div style="float: right">
              <?php
             
               echo $this->Html->link(__('New Article'), array(
                                                                'controller' => 'articles',    
                                                                'action' => 'add',
                                                               'id'=> $product['Product']['id']
                                                                ),
                                      array('id'=>'newarticle')                              
                                    );
                
             ?>   
            </div>
        </td>
    </tr>

    <tr>
        <td style="background-color:#FFD700;width:100px;">
            <?php foreach ($products as $product) { ?> 
                <?php echo $this->Html->script('ivin'); ?>
                <div id= 'ivin' ><?php
//                    echo $this->Js->link(
//                            $product['Product']['product_name'], array(
//                                'id' => "some-link",
//                                'controller' => 'articles', 
//                                'action' => 'productAjax', 
//                                'product_id' => $product['Product']['id']
//                            )
//                    );
//                    echo $this->Js->link($product['Product']['product_name'],
//                                                array( 
//                                                'controller'=>'articles', 
//                                                'action'=>'productAjax',
//                                                'product_id'=>$product['Product']['id'],
//                                                'product_name'=>$product['Product']['product_name']),    
//                                                array('class' => 'link',
//                                                        
//                                                        'update'=>'#content1')
//                                            );
//                                           
//             ?>
                    
                    <a class = 'link' href="javascript:myfun(<?php echo $product['Product']['id']; ?>)" > <?php echo $product['Product']['product_name']; ?></a>
                      <br>
            </div>

            <?php } ?>
        </td>
        <td style="background-color:#EEEEEE;height:200px;width:400px;">
            
            <div class="article_display" id="content1">
                
                
            </div>
            <div class="article_display">
                
            </div>
        </td>
        
    </tr>

    <tr>
        <td colspan="2" style="background-color:#FFA500;text-align:center;">
         footer   
        </td>
    </tr>
</table>

<?php echo $this->Js->writeBuffer(); ?>