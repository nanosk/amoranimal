$(document).ready(function () {$("#clientes").bind("change", function (event) {$.ajax({async:true, data:$("#clientes").serialize(), dataType:"html", success:function (data, textStatus) {$("#rutinaactual").html(data);}, type:"post", url:"\/webs\/gimnasio\/rutinas\/getrutinaactual"});
return false;});
$("#rutinas").bind("change", function (event) {$.ajax({async:true, data:$("#rutinas").serialize(), dataType:"html", success:function (data, textStatus) {$("#rutina").html(data);}, type:"post", url:"\/webs\/gimnasio\/rutinas\/getrutina"});
return false;});
$("#btn2").bind("click", function (event) {alert("hey you!");
return false;});});