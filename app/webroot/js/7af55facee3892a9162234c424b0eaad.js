$(document).ready(function () {$("#submit-300100774").bind("click", function (event) {$.ajax({data:$("#submit-300100774").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});