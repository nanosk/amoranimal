$(document).ready(function () {$("#submit-647661302").bind("click", function (event) {$.ajax({data:$("#submit-647661302").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});