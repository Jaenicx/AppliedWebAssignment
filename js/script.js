function register() {
    var fname = form.firstName.value;
    var lname = form.lastName.value;
    var mail = form.email.value;
    var pass = form.password.value;
    var Ajax = new XMLHttpRequest();

    
    Ajax.onreadystatechange = function () {
        if (Ajax.readyState == 4 && Ajax.status == 200) {
            document.getElementById("#register").innerHTML = this.responseText;
        }
    }
    }
    Ajax.open("POST", "success.php", true);
    Ajax.send();