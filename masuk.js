document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  
  if (username === 'admin' && password === '123') {
    window.location.href = 'index.html';
  }
if (username === 'imam' && password === '12345') {
    window.location.href = 'imam/pgwniawpptiqbaoqdxwl.html';
  }
 if (username === 'GOAT_MD' && password === '112233') {
    window.location.href = 'abbasid/veffmmcuqy.html';
  } 
});