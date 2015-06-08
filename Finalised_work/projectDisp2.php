<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
function sendmsg1()
{document.getElementById('sbmt2').click();
}
function sendmsg()
						{
						//var hehe=document.getElementById('txtmsg').value;
						
						//$("#Submit2").click(function()
						alert("hello");
						//alert(txtmsg+"first one");
						$.ajax({
								url: "http://localhost/Testing/get_prodata.php" ,
								dataType: "json" ,
								success: function(hell){
								alert("hopefully");
								alert(hell.Uid);
								//console.log(stuff);
								},
								error:function(){
								alert("damn bro");
								}
								});
								}
							
								</script>
								</head>
								<body>
								 <button id="Submit2" onClick="sendmsg1()">ASend</button>
								 <button hidden="hidden" onClick="sendmsg()">asd</button>
								 <button id="sbmt2" hidden="hidden" onClick="sendmsg()">assd</button>
								</body>
								</html>