function validateform(){  
  var fname=document.myform.fname.value;
  var lname=document.myform.lname.value;
  var dob=document.myform.dob.value;
  var email=document.myform.email.value;
  var country=document.myform.country.value;
  var msg=document.myform.msg.value;  

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    
  if (fname==null || fname==""){  
    var modal = document.getElementById("myModal");
    var message = document.getElementById("message");
    message.innerHTML = "Please enter your first name.";
    modal.style.display = "block";

    var close = document.getElementsByClassName("close")[0];
    close.onclick = function() {
      modal.style.display = "none";
      return false; // Move return false here
    }

    return false;

  }else if(lname==null || lname==""){  
    var modal = document.getElementById("myModal");
    var message = document.getElementById("message");
    message.innerHTML = "Please enter your last name.";
    modal.style.display = "block";

    // When the user clicks on the close button, hide the modal box
    var close = document.getElementsByClassName("close")[0];
    close.onclick = function() {
      modal.style.display = "none";
      return false; // Move return false here
    }

    return false; 
  }
  else if(dob==null || dob==""){
    var modal = document.getElementById("myModal");
    var message = document.getElementById("message");
    message.innerHTML = "Please enter your date of birth.";
    modal.style.display = "block";

    // When the user clicks on the close button, hide the modal box
    var close = document.getElementsByClassName("close")[0];
    close.onclick = function() {
      modal.style.display = "none";
      return false; // Move return false here
    }

    return false; 
  } 
  else if(!emailRegex.test(email)){
    var modal = document.getElementById("myModal");
    var message = document.getElementById("message");
    message.innerHTML = "Please enter your valid email address.";
    modal.style.display = "block";

    // When the user clicks on the close button, hide the modal box
    var close = document.getElementsByClassName("close")[0];
    close.onclick = function() {
      modal.style.display = "none";
      return false; // Move return false here
    }

    return false; 
  }
  else if(country==null || country.length==0){
    var modal = document.getElementById("myModal");
    var message = document.getElementById("message");
    message.innerHTML = "Please enter your country name.";
    modal.style.display = "block";

    // When the user clicks on the close button, hide the modal box
    var close = document.getElementsByClassName("close")[0];
    close.onclick = function() {
      modal.style.display = "none";
      return false; // Move return false here
    }

    return false; 
  }
  else if(msg==null || msg.length==0){
    var modal = document.getElementById("myModal");
    var message = document.getElementById("message");
    message.innerHTML = "Please enter your message.";
    modal.style.display = "block";

    // When the user clicks on the close button, hide the modal box
    var close = document.getElementsByClassName("close")[0];
    close.onclick = function() {
      modal.style.display = "none";
      return false; // Move return false here
    }

    return false; 
  }

}  