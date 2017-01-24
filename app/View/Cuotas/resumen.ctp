<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li>  <i class="fa fa-dashboard"></i> 
                    <?php echo $this->Html->link('Inicio',array('controller'=>'paginas', 'action'=>'administrador')); ?>
             </li>
			<li>  <?php echo $this->Html->link('Listado Pagos'
                    ,array('controller'=>'Pagos', 'action'=>'index')); ?>
                    </li>
			     
		</ol>
	</div>
</div>


    

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Estadisticas</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">


<div class="row">
	<div id="morris-chart-1" style="height: 100px;"></div>
</div>
<div class="row">
   <div id="morris-chart-2" style="height: 100px;"></div>
</div>
<div class="col-xs-12 col-md-6">
				<div id="ow-donut" class="row">
					<div class="col-xs-4">
						<div id="morris_donut_1" style="width:120px;height:120px;"></div>
					</div>
					<div class="col-xs-4">
						<div id="morris_donut_2" style="width:120px;height:120px;"></div>
					</div>
					<div class="col-xs-4">
						<div id="morris_donut_3" style="width:120px;height:120px;"></div>
					</div>
				</div>
				<div id="ow-activity" class="row">
					<div class="col-xs-2 col-sm-1 col-md-2">
						<div class="v-txt">Estadisticas</div>
					</div>
					<div class="col-xs-7 col-sm-5 col-md-6">
						<div class="row"><i class="fa fa-code"></i> Release published <span class="label label-default pull-right">01:17:34</span></div>
						<div class="row"><i class="fa fa-cloud-upload"></i> Backup created <span class="label label-default pull-right">03:23:34</span></div>
						<div class="row"><i class="fa fa-camera"></i> Snapshot created <span class="label label-default pull-right">04:22:11</span></div>
						<div class="row"><i class="fa fa fa-money"></i> Invoice pay <span class="label label-default pull-right">05:11:51</span></div>
						<div class="row"><i class="fa fa-briefcase"></i> Project edited <span class="label label-default pull-right">04:52:23</span></div>
						<div class="row"><i class="fa fa-floppy-o"></i> Project saved <span class="label label-default pull-right">07:11:01</span></div>
						<div class="row"><i class="fa fa-bug"></i> Bug fixed <span class="label label-default pull-right">09:10:31</span></div>
					</div>
					<div id="ow-stat" class="col-xs-3 col-sm-4 col-md-4 pull-right">
						<div class="row"><small><b>Ow Stat.:</b></small></div>
						<div class="row">&#37;user <sup>20,43</sup></div>
						<div class="row">&#37;nice <sup>1,01</sup></div>
						<div class="row">&#37;system <sup>27,34</sup></div>
						<div class="row">&#37;iowait <sup>2,02</sup></div>
						<div class="row">&#37;steal <sup>1,22</sup></div>
						<div class="row">&#37;idle <sup>47,98</sup></div>
						<div class="row">tps <sup>296546</sup></div>
					</div>
				</div>
			</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
// Draw all test Morris Charts
function DrawAllMorrisCharts(){
	MorrisChart1();
	MorrisChart2();
	MorrisChart3();
	MorrisChart4();
	MorrisChart5();
}
$(document).ready(function() {
	// Load required scripts and draw graphs
	LoadMorrisScripts(DrawAllMorrisCharts);
	WinMove();
});
</script>


