$(document).ready(function () {$("#submit-1065092578").bind("click", function (event) {$.ajax({data:$("#submit-1065092578").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});