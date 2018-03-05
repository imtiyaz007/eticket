  function valid_form()
{
var passlen=valid_pass1();
if (passlen==false) {
 document.getElementById("passerr").innerHTML="Password Must Be Minimum 5 Digit";
        return false;
}
var moblen=valid_mobile();
if (moblen==false) {
  document.getElementById("phoneerr").innerHTML="Enter Valid Mobile Number";
  document.getElementById("phoneerr").style.color="red";
  return false;
}


var name=valid_pass();
if(name==false)
  {
      alert("Password Not match");
        return false;
}

}


function valid_pass()
{
  var x=document.getElementById("pass1").value;
  var y=document.getElementById("pass2").value;
    if(x!=y)
    {
      
        return false;
    }
    
}
function valid_pass1()
{
  var x=document.getElementById("pass1").value;

  var len=x.length;
  
    if(len<5)
    {
        document.getElementById("passerr").innerHTML="Password Must Be Minimum 5 Digit";
        document.getElementById("passerr").style.color="red";
        return false;
    }
    else
    {
       document.getElementById("passerr").innerHTML="";
    }
    
}
function valid_mobile()
{
  var x=document.getElementById("mnum").value;
  var str=x.length;
  if (str<10||str>11) {
    document.getElementById("phoneerr").innerHTML="Invalid Mobile Number";
    document.getElementById("phoneerr").style.color="red";
    return false;
  }
  else
  {
    document.getElementById("phoneerr").innerHTML="";
  }
}

/*function valid_name()
{
  var x=document.getElementById("name").value;
   var letterNumber = /^[A-Za-z0-9]+$/;
  if (x.match(letterNumber)) {
    document.getElementById("uname").innerHTML="";
    return true;
  }
  else
  {
    document.getElementById("uname").innerHTML="Invalid Name";
    document.getElementById("uname").style.color="red";

    return false;
  }
}
*/