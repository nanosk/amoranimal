$(document).ready(function () {$("#submit-1056426724").bind("click", function (event) {$.ajax({data:$("#submit-1056426724").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});