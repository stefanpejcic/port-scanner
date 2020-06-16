function getvalues(val) {
  var attr = document.getElementById("20").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}

function getvalues1(val) {
  var attr = document.getElementById("22").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}

function getvalues2(val) {
  var attr = document.getElementById("25").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}

function getvalues3(val) {
  var attr = document.getElementById("80").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}
function getvalues4(val) {
  var attr = document.getElementById("993").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}

function getvalues5(val) {
  var attr = document.getElementById("3389").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}

function getvalues6(val) {
  var attr = document.getElementById("110").getAttribute('port');
var elem = document.getElementById("port"); 
elem.value = attr ; 

}


$(function() {
$("#myButton").click(function() 
{
var server= $("#server").val();
var port= $("#port").val();
var dataString = 'server='+ server+ '&port=' + port;

$("#myButton").hide();
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="/assets/img/ajax-loader.gif" width="33" height="33" />');


$.ajax({
type: "POST",
url: "inc/open-port-check-process.php",
data: dataString,
cache: false,
success: function(html){
$("ol#update").prepend(html);
$("ol#update li:first").slideDown("slow");
$("#flash").hide();
$("#myButton").show();
}
});
return false;
}); 
});



$(function() {
$("#quick").click(function() 
{
var server= $("#server").val();
var dataString = 'server='+ server;

$("#myButton").hide();
$("#flash").show();

$("#flash").fadeIn(400).html('<img src="/assets/img/ajax-loader.gif" width="33" height="33" />');

$.ajax({
type: "POST",
url: "inc/quick-scan-port.php",
data: dataString,
cache: false,
success: function(html){
$("ol#update").prepend(html);
$("ol#update li:first").slideDown("slow");
$("#flash").hide();
$("#myButton").show();
}
});
return false;
}); 
});



$(function() {
$("#long").click(function() 
{
var server= $("#server").val();
var dataString = 'server='+ server;

$("#myButton").hide();
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="/assets/img/ajax-loader.gif" width="33" height="33" />');

$.ajax({
type: "POST",
url: "inc/long-scan-port.php",
data: dataString,
cache: false,
success: function(html){
$("ol#update").prepend(html);
$("ol#update li:first").slideDown("slow");
$("#flash").hide();
$("#myButton").show();
}
});
return false;
}); 
});