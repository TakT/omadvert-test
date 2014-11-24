<?php use yii\helpers\Html; ?>
<?php use yii\bootstrap\ActiveForm; ?>

<?php $this->title = 'Предварительная заявка на кредит'; ?>
<?php $this->params['breadcrumbs'][] = $this->title; ?>

<h1><?php echo Html::encode($this->title); ?></h1>
<div class="credit__form" ng-app="creditForm" ng-cloak>
    <?php $form = ActiveForm::begin(
        [
        'layout' => 'horizontal',
        'options' => [
            'ng-controller' => 'creditFormCtrl as CFCtrl',
            'class' => 'bg-warning'
        ]
    ]); ?>
    <?php $model->firstName = '12412' ?>
    <!-- <form class="form-horizontal bg-warning" role="form" ng-controller="creditFormCtrl as CFCtrl" method="POST"> -->
        <fieldset>
            <legend>Какой кредит вы бы хотели?</legend>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <?php echo $form->field($model, 'creditInfo', [
                            'enableLabel' => false,
                        ])->radioList(array(
                            'consumerCredit' => 'Потребительский кредит<br />наличными для любых целей',
                            'mortgage' => 'Ипотека<br />кредит на покупку жилья',
                            'creditCard' => 'Кредитная карта<br />возможность покупки товаров и услуг в кредит'
                        ), [
                            'item' => function ($index, $label, $name, $checked, $value) {
                                return '
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="' . $name . '" value="' . $value . '" ng-model="CFCtrl.form.creditInfo" />' . $label .
                                    '</label>
                                </div>
                                ';
                            }
                        ]); ?>
                </div>
                <div class="col-xs-6">
                    <div class="media" ng-repeat="info in CFCtrl.creditInfo | filter:{value: CFCtrl.form.creditInfo}">
                        <a class="media-left" href="javascript:void(0);">
                            <img alt="45x45" src="http://placehold.it/45x45">
                        </a>
                        <div class="media-body" ng-bind-html="info.text"></div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Сумма и сроки</legend>
            <div class="form-group">
                <label for="inputAmount" class="col-xs-2 control-label">Желаемая сумма</label>
                <div class="col-xs-10">
                    <div slider ng-model="CFCtrl.form.amount" start="1000" end="99000" step="1000" class="col-xs-10"></div>
                    <div class="col-xs-2">
                        <?php echo $form->field($model, 'amount', [
                            'options' => [],
                            'inputOptions' => [
                                'ng-model' => 'CFCtrl.form.amount',
                                'ng-minlength' => 3,
                                'ng-maxlength' => 5
                            ],
                            'horizontalCssClasses' => [
                                'wrapper' => null,
                                'offset' => false
                            ]
                        ])->input('text')->label(false); ?>
                    </div>
                </div>
            </div>
            <?php echo $form->field($model, 'inputPeriod', [
                'inputOptions' => [
                    'placeholder' => 'Укажите срок кредита',
                    'ng-model' => 'CFCtrl.form.inputPeriod'
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-3'
                ]
            ])->label('На срок'); ?>
        </fieldset>
        <fieldset>
            <legend>О Вас</legend>
            <?php echo $form->field($model, 'inputSecondName', [
                'inputOptions' => [
                    'ng-model' => 'CFCtrl.form.inputSecondName',
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-10'
                ],
                'inputTemplate' => '
                    {input}
                    ' . $form->field($model, 'isOldSecondName', [
                            'options' => [],
                            'horizontalCssClasses' => [
                                'wrapper' => null,
                                'offset' => false
                            ]
                        ])->checkbox(['ng-model' => 'CFCtrl.form.isOldSecondName'])->label('Ранее менялась') . '
                '
            ])->label('Фамилия'); ?>
            <?php echo $form->field($model, 'oldSecondName', [
                'options' => [
                    'ng-show' => 'CFCtrl.form.isOldSecondName',
                    'class' => 'form-group'
                ],
                'inputOptions' => [
                    'ng-model' => 'CFCtrl.form.oldSecondName',
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-10'
                ]
            ])->label('Девичья фамилия'); ?>
            <?php echo $form->field($model, 'firstName', [
                'inputOptions' => [
                    'ng-model' => 'CFCtrl.form.firstName',
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-10'
                ]
            ])->label('Имя'); ?>
            <div class="form-group">
                <label for="inputBirthday" class="col-xs-2 control-label">Дата рождения</label>
                <div class="col-xs-10">
                    <select-calendar ng-model="CFCtrl.form.birthday" id="inputBirthday" name="birthday"></select-calendar>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Контактная информация</legend>
            <?php echo $form->field($model, 'phone', [
                'inputOptions' => [
                    'ng-model' => 'CFCtrl.form.phone',
                    'input-mask' => '{mask: \'+7(999)999-99-99\'}'
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-3'
                ]
            ])->label('Мобильный телефон'); ?>
            <?php echo $form->field($model, 'calltime', [
                'inputOptions' => [
                    'ng-model' => 'CFCtrl.form.calltime',
                    'input-mask' => '{mask: \'99:99\'}'
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-3'
                ]
            ])->label('Удобное время для звонка'); ?>
            <?php echo $form->field($model, 'email', [
                'inputOptions' => [
                    'ng-model' => 'CFCtrl.form.email'
                ],
                'horizontalCssClasses' => [
                    'label' => 'col-xs-2',
                    'wrapper' => 'col-xs-3'
                ]
            ])->label('Почта'); ?>
        </fieldset>
        <fieldset class="row bg-success">
            <?php echo $form->field($model, 'agree', [
                'horizontalCssClasses' => [
                    'wrapper' => 'col-xs-10',
                    'offset' => 'col-xs-offset-2'
                ]
            ])->checkbox(['ng-model' => 'CFCtrl.form.agree'])->label('Я согласен, что мои данные будут обработаны сотрудниками банка "Зажорск"'); ?>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-default', 'ng-disabled' => '!CFCtrl.form.agree']); ?>
                </div>
            </div>
        </fieldset>
    <!-- </form> -->
    <?php ActiveForm::end(); ?>
</div>