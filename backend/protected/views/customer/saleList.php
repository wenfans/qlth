<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		array('name' => '首页', 'url' => array('site/index')),
		array('name'=>'客户管理'),
		array('name' => '销售客户管理', 'url' => array('customer/saleList')),
		array('name'=>'销售客户列表')
);
$this->pageTitle = '销售客户列表';
$this->title = '销售客户列表<small>销售客户列表</small>';
?>
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- Begin: life time stats -->
		<div class="portlet">
			<div class="portlet-title form-horizontal">
				<div class="caption">
					<i class="fa fa-paper-plane"></i>销售客户列表
				</div>
				<!--<div class="actions">
					<a class="btn default yellow-stripe" href="<?php /*echo Yii::app()->createUrl('customer/AddRecord/state/2')*/?>">
						<i class="fa fa-plus"></i>
						<span class="hidden-480">添加客户 </span>
					</a>
				</div>-->
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<table class="table table-striped table-bordered table-hover" id="datatable_list">
						<thead>
						<tr role="row" class="heading">
							<th width="12%">资产ID</th>
							<th width="6%">客服推送 </th>
							<th width="12%">客户名称</th>
							<th width="14%">客户电话</th>
							<th width="10%">联系次数</th>
							<th width="12%">项目联系人</th>
							<th width="12%">联系时间</th>
							<th width="7%">状态</th>
							<th width="20%">操作</th>
						</tr>
						<tr>
							<th width="12%"><input class="form-control form-filter input-sm" type="text" name="projectId" placeholder="资产ID"/> </th>
							<th width="6%">  </th>
							<th width="12%"></th>
							<th width="14%"></th>
							<th width="10%"></th>
							<th width="12%"></th>
							<th width="12%"></th>
							<th width="7%"></th>
							<th width="20%">
								<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search">搜索</i></button>
								<button class="btn btn-sm red filter-cancel"><i class="fa fa-times">重置</i></button>
							</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- End: life time stats -->
	</div>
</div>
<input type="hidden" name="csrf" value="<?php echo Yii::app()->request->getCsrfToken()?>">
<!-- END PAGE CONTENT-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/datatable.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/ecommerce-list.js"></script>
<!--style-->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
<script>
	jQuery(document).ready(function() {
		var url = '<?php echo $this->createUrl("saleList",array('isAjax'=>1))?>';
		var token = $("input[name='csrf']").val();
		EcommerceList.init(url,token);
	});

</script>