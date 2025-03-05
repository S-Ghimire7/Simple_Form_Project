function validate(){
    var a= document.getElementById("n1").value;
    var b=document.getElementById("n2").value;
    var gender = document.querySelector(input[name=gender].checked);

    if(a=="" || b==""){
        alert("All Fields Are Mandatory!");
        return false;
    }
    if(b.length != 10 || NaN(b)){
        alert("Please Enter valid 10 digits.");
        return false;
    }
    if(!gender){
        alert("Please select your gender.");
        return false;
    }
}