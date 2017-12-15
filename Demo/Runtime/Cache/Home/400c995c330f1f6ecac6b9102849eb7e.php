<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<script type="text/javascript">
// function loadXMLDoc()
// {
// var xmlhttp;
// if (window.XMLHttpRequest)
//   
// else
//   
// xmlhttp.onreadystatechange=function()
//   {
//   if (xmlhttp.readyState==4 && xmlhttp.status==200)
//     {
//     document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
//     }
//   }
// xmlhttp.open("GET","U('Home/Index/getAjax')",true);
// xmlhttp.send();
// }

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","<?php echo U('home/index/getAjax');?>",true);
  xmlhttp.send();
  document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
</script>
</head>
<body>

<h2>AJAX</h2>
<button type="button" onclick="loadXMLDoc()">请求数据</button>
<div id="myDiv"></div>

</body>
</html>