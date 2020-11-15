function myfunction() {
    let user = document.getElementById("userName").value;
    let passwd = document.getElementById("password").value;
    let ps5 = document.getElementById("PS5").value;
    let ns = document.getElementById("NS").value;
    let xbox = document.getElementById("XBOX").value;

    if (user == "") {
        alert("Please Enter Your User Name !!!");
        return false;
    }
    else if (passwd == "") {
        alert("Please Enter Your Password !!!");
        return false;
    }
    else if (ps5 < 0 || ns < 0 || xbox < 0 || ps5 == "" || ns == "" || xbox == "") {
        alert("Please Enter The Quantities Greater than 1 or 0");
        return false;
    }
    else if (user == "") {
        alert("Please Enter Your User Name !!!");
        return false;
    }
    else {
        document.getElementById("webStore").submit();
        return true;
    }
}