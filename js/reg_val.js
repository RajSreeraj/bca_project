function reg_validation(){
    var _name=document.forms["name"]["registration_form"].value;
    var _address=document.forms["address"]["registration_form"].value;
    var _dob=document.forms["dob"]["registration_form"].value;
    var _gender=document.forms["gender"]["registration_form"].value;
    var _email=document.forms["email"]["registration_form"].value;
    var _phone=document.forms["phone"]["registration_form"].value;
    var _username=document.forms["username"]["registration_form"].value;
    var _password=document.forms["password"]["registration_form"].value;
    if(_name==""){
        alert("Please Enter The Name..");
        return false;
    }
     else if(_address==""){
        alert("Please Enter The Address..");
        return false;
    }
     else if(_dob==""){
        alert("Please Enter The Date of birth..");
        return false;
    }
     else if(_gender=="Select"){
        alert("Please Select The Gender..");
        return false;
    }
     else if(_email==""){
        alert("Please Enter The E-mail id..");
        return false;
    }
     else if(_phone==""){
        alert("Please Enter The Phone number..");
        return false;
    }
     else if(_username==""){
        alert("Please Enter The User Name..");
        return false;
    }
     else if(_password==""){
        alert("Please Enter The Password..");
        return false;
    }
    else{
        
    }
}