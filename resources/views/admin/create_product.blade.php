<?php
use Encore\Admin\Widgets\Form;
/**
 * @author: liuchg
 *
 */
$form = new Form();

$form->action('example');

$form->email('email')->default('qwe@aweq.com');
$form->password('password');
$form->text('name', '输入框');
$form->url('url');
$form->select('product','产品')->options(['1'=>'牛逼','2'=>'奥园']);
$form->color('color');



$form->disableSubmit();
$form->disableReset();

echo $form->render();

?>




