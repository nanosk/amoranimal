$(document).ready(function () {$("#submit-1924000798").bind("click", function (event) {$.ajax({data:$("#submit-1924000798").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#cartel").html(data);}, type:"post", url:"\/gimnasio\/rutinas\/guardarutinaajax"});
return false;});});