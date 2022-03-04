/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
 

   menuitem=($("#idmenu").val());
    var index = menuitem.lastIndexOf('/');
    var filename=menuitem.substring(index+1);
     //alert("Hello"); 
   var item =0;
   if(filename=="index.php")
       item=1
   else if (filename=="about.php")
       item=2;
   else  if (filename=="services.php")
       item=3;
   else if (filename=="contact.php")
     item=4;
     
    $("#opt"+item).addClass("menu_selected");
  

});


