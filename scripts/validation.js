/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
 var name=$('#name');
 var nameInfo=$('#nameInfo');
 var msg=$('#message');
 var msgInfo=$('#messageInfo');
 var email=$('#email');
 var emailInfo=$('#emailInfo');
 var tel=$('#contactNo');
 var telInfo=$('#contactNoInfo');
 var subject=$('#subject');
 var subjectInfo=$('#subjectInfo');

  //onBlur;
 name.blur(validateName);
 email.blur(validateEmail);
 msg.keyup(validateMessage);
 tel.blur(validateTel);
 subject.blur(validateSubject);

$('#sendForm').submit(function(){
   
 if( validateName() && validateEmail()
     && validateTel() && validateSubject()
     && validateMessage() )
   return true
  else
   return false;
});



 function validateName() {

     if($.trim(name.val()).length==0) {
      // name.addClass('error');
       nameInfo.text('Please enter Name');
       nameInfo.addClass('error');
       return false;
    }
    else {
     //   name.removeClass('error');
        nameInfo.removeClass('error');
        nameInfo.text('');
        return true;
    }     
 }

 function validateMessage() {
 
    if($.trim(msg.val()).length < 4) {
     //   msg.addClass('error');
        msgInfo.text('Please enter message min(3) characters');
        msgInfo.addClass('error');
       return false;

    }
    else {
    //    msg.removeClass('error');
        msgInfo.removeClass('error');
        msgInfo.text('');
        return true;
    }

 }

 function validateEmail() {
      var value=email.val();
      var filter= new RegExp(/^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/i);
      if($.trim(value).length==0) {
            emailInfo.text('Please enter email');
      //      email.addClass('error');
            emailInfo.addClass('error');
             return false;
      }
      else if(filter.test(value)){
        //  email.removeClass('error');
          emailInfo.text('');
          return true;
      }
      else {
        //  email.addClass('error');
          emailInfo.addClass('error');
          emailInfo.text('Invalid email');
          return false;

      }
 }

function validateTel() {

    var value=tel.val();
    var filter=/\d{10}/;
 
    if ($.trim(value).length==0 || filter.test(value)) {
      //  tel.removeClass('error');
        telInfo.removeClass('error');
        telInfo.text('');
        return true;
    }
    else {
       // tel.addClass('error');
        telInfo.addClass('error');
        telInfo.text('Invalid Tel/Mobile number');
        return false;
    }

}

function validateSubject() {
    if ($.trim(subject.val()).length==0) {
       // subject.addClass('error');
        subjectInfo.addClass('error');
        subjectInfo.text('Please enter Subject')
        return false;

    }
    else {
      //  subject.removeClass('error');
        subjectInfo.removeClass('error');
        subjectInfo.text('')
        return true;
    }

}

});




