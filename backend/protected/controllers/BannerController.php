<?php

class BannerController extends LoginedController{
	
    public function actionIndex() {
        if($_POST){
            $pageSize = Yii::app()->request->getParam('length',10);
            $start = Yii::app()->request->getParam('start');
            $page = $start / $pageSize;
            $criteria = new CDbCriteria;
            $criteria->order = 'sort ASC ' ;//排序条件
            $total = BannerModel::model()->count($criteria);
            $dataProvider = new CActiveDataProvider('BannerModel',array(
	            'criteria'=>$criteria,
	            'pagination'=>array(
	                'pageSize'=>$pageSize,
	                'currentPage'=>$page,
	            )) 
        	);
        	$datas = $dataProvider->getData();
        	$arts = array();

            foreach ($datas as $data) {
                switch($data->status){
                    case 0:
                          $status ='不显示';
                        break;
                    case 1:
                          $status ='wap显示';
                        break;
                    case 2:
                          $status ='pc显示';
                        break;
                    case 3:
                          $status ='app显示';
                        break;
                     default:
                         $status ='不显示';
                }
            	$btn = '<a href="' . $this->createUrl("banner/update/id/{$data->id}") . '" class="btn btn-xs default btn-editable"><i class="fa fa-pencil">修改</i></a>';
            	$btn .= '<a href="' . $this->createUrl("banner/delete/id/{$data->id}") . '" class="btn btn-xs default btn-editable"><i class="fa fa-times"></i>删除</a>';
                $arts[] = array(
                    $data->url,

                	$data->alt,
                    $data->sort,
                    $status,
                	$btn
                );
            }
            die(json_encode(array('data' => $arts, 'recordsTotal' => $total, 'recordsFiltered' => $total)));
        }else{
        	$this->render('index');
        }
     	
    }

    public function actionAdd(){
    	$model = new BannerModel();
     //   print_r($_POST);die;
        if(isset($_POST['BannerModel'])){
        	$model->attributes = $_POST['BannerModel'] ;
        	$model->src = $_POST['BannerModel']['src'];
            $model->url =$_POST['BannerModel']['url'];
        	$model->status = $_POST['BannerModel']['status'];
	        if($model->validate()){
	            $model->save();
	            $this->showSuccess('添加成功',$this->createUrl('banner/index'));
	        }
       }else{
          $this->render('add', array('model'=>$model));
        }
    }
    
    
    public function actionDelete($id){
        $model=$this->loadModel($id);
        if($model->delete()){
            $this->showSuccess('删除成功', $this->createUrl('banner/index'));
        }else{
            $this->showJsonResult('删除失败');
        } 
    }
    
    public function actionUpdate($id){
    	$model = $this->loadModel($id);
    	if (isset($_POST['BannerModel'])) {
    		$model->attributes = $_POST['BannerModel'];
    		$model->src = $_POST['BannerModel']['src'];
            $model->url =$_POST['BannerModel']['url'];
            $model->alt =$_POST['BannerModel']['alt'];
    		$model->status = $_POST['BannerModel']['status'];
    		if ($model->save()) {
    			$this->showSuccess('更新成功', $this->createUrl('banner/index'));
    		}
    		$this->showError('更新失败', $this->createUrl('banner/index'));
    	}else{
    		$this->render("update", array('model' => $model));
    	}
    }
    
    public function loadModel($id){
    	$model = BannerModel::model()->findByPk($id);
    	if(!$model){
    		throw new CHttpException(404,'The requested page does not exist.');
    	}
    	return $model;
    }

   
    
    
    
}
