    function connect(){
        fetch("http://localhost:49170/session/token")
        .then(function (response){
            return response;
        })
        .then(function (token){
            console.log("CSRF" + token);
            userlogin(token);
        });
    }
    function userlogin(csrfToken){
        let name = document.getElementById("name").value;
        let password = document.getElementById("password").value;
        fetch("http://localhost:49170/user/login?_format=json",{
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": csrfToken
            },
            body: JSON.stringify({
                name: name,
                pass: password
            }),
        })
        .then((response) => response.json())
        .then((data) => {
            if(data.message){
                alert(data.message);
            }else{
                console.log(data);
                let main = document.querySelector("#main");
                main.innerHTML = "Welcome " + data.current_user.name;
            }
        });
    }