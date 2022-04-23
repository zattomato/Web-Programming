function auth(event) {
        event.preventDefault();

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var role = document.getElementById('role').value

        if (username === "sam" && password === "user"  ) {
            window.location.replace("../home.html");
        }
        else if(username === "john" && password === "admin" ){
            window.location.replace("../management.html");
        }else
            alert("Invalid information");
            return;
        }
    
