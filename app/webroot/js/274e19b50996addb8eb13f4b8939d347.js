$(document).ready(function () {$("#submit-459276289").bind("click", function (event) {$.ajax({data:$("#submit-459276289").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});