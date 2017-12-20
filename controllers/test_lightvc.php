<?php
// include('../modules/lightvc/lightvc.php');

class TestLightvcController extends AppController {
  public function actionTestAction($one = null, $two = null) {
    if (is_null($one)){
      $one = 'NULL';
    }
    if (strlen($one) == 0) {
      $one = 'empty';
    }
    if (is_null($two)){
      $two = 'NULL';
    }
    $this->setVar('one', $one);
    $this->setVar('two', $two);
  }

  public function actionTestMine(){
    $this->loadView('test_lightvc/mine');
  }
}
