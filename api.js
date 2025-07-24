fetch('http://127.0.0.1:8000/api/store', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    },
    body: JSON.stringify({
        name: 'jumajux',
        email:'jumajux@gmail.com',
        username: 'jumajux',
        password: '12345678',
        role_id:1
    })
}).then((res) => {
    return res.text();
}).then((data) => {
    console.log(data);
}).catch((err) => console.log(err));