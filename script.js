document.getElementById('signUpLink').addEventListener('click', function() {
    document.getElementById('container').classList.add('right-panel-active');
  });
  
  document.getElementById('signInLink').addEventListener('click', function() {
    document.getElementById('container').classList.remove('right-panel-active');
  });
  