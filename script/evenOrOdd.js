const login = document.querySelector('input[type="submit"]')
var status
login.addEventListener('click', ()=>{
    const data = new FormData(document.querySelector('form'))
    fetch('http://localhost/basicApi/database/evenOrOdd.php',{
        method: 'POST',
        body: data
    })
    .then(res =>{
        status = res.status
        return res.text()
    })
    .then(data =>{
        if (status == 200)
        {
            document.getElementById("success").innerHTML = data;
            document.getElementById("error").innerHTML = "";
        }
        else{
            document.getElementById("error").innerHTML = data;
            document.getElementById("success").innerHTML = "";
        }
    })
    .catch(err => {alert(err)})
})