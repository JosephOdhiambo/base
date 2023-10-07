<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Branches;
use app\models\Companies;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Departments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>


       <?= $form->field($model, 'branches_branch_id')->dropDownList(
            ArrayHelper::map(Branches::find()->all(), 'branch_id','branch_name'),
            ['prompt'=>'Select Branch']
    ) 
    ?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'companies_company_id')->dropDownList(
            ArrayHelper::map(Companies::find()->all(), 'company_id','company_name'),
            ['prompt'=>'Select Company']
    ) 
    ?>

    <?= $form->field($model, 'department_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
