function sendData(){
    let fName = document.querySelector("input[name='firstName']").value;
    let mail = document.querySelector("input[name='email']").value
    let password = document.querySelector("input[name='password']").value;
    let div = document.querySelector("#detail");
    div.innerHTML = "Sending Data.";
    let user = {
        name:{ value: fName},
        mail:{ value: mail},
        pass:{ value: password},
    };
    const options = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(user),
    };
    fetch("http://localhost:49170/user/register?_format=json", options)
    .then((response) => {
        if(response.status !== 200){
            console.log("Error" + response.statusText);
            throw new Error(`${response.status}`);
        }else{
            return response.json();
        }
    })
    .then((user) => {
        console.log(user);
        div.innerHTML = "<br> Response received !! <br>";
        let id = user.uid[0]["value"];
        let firstName = user.name[0]["value"];
        let date = user.created[0]["value"];
        let creationDate = new Date(date);
        let dateString = creationDate.toDateString();
        let timeString = creationDate.toLocaleDateString();
        let p1 = document.createElement("p");
        p1.innerHTML = `First Name:${firstName}`;
        let p2 = document.createElement("p");
        
        p2.innerHTML = `Id:${id}`;
        let p3 = document.createElement("p");
        p3.innerHTML = `Created At:${dateString},${timeString}`;
        div.appendChild(p1);
        div.appendChild(p2);
        div.appendChild(p3);

    })
    .catch((error) => {
        alert(`Error in server ${error}`);
    })
}