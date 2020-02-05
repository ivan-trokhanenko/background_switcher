let trans = () => {
  document.documentElement.classList.add('transition');
  window.setTimeout(() => {
    document.documentElement.classList.remove('transition');
}, 1000)
}

let bg_switch = (mode) => {
  if(mode) {
    trans();
    document.documentElement.setAttribute('data-theme', 'dark')
  }
  else {
    trans();
    document.documentElement.setAttribute('data-theme', 'light')
  }
}

var checkbox = document.querySelector('input[name=bg_switcher]');
var initialState = localStorage.getItem('toggleState') == 'true';

checkbox.checked = initialState;
bg_switch(initialState);

checkbox.addEventListener('change', function() {
  localStorage.setItem('toggleState', checkbox.checked);
  bg_switch(this.checked);
});
