const login = document.querySelector('input[type="submit"]')
var status
login.addEventListener('click', ()=>{
    const data = new FormData(document.querySelector('form'))
    fetch('http://localhost/basicApi/database/loginAccess.php',{
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
            location.href = "Home.php";
        }
        else{
            document.getElementById("error").innerHTML = data; 
        }
    })
    .catch(err => {alert(err)})
})