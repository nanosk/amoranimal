$(document).ready(function () {$("#submit-482015230").bind("click", function (event) {$.ajax({data:$("#submit-482015230").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});