Background Switcher
-------------------

#How to use:
This module provides a switch background button and adds a "data-theme" attribute to HTML than can be used in your custom CSS.

See example below:
```css
html {
  background: var(--lightBg);
  --lightBtn: #FE016C;
  --lightBg: #f5f5f5;
  --lightColor: #232323;
  --instColor: blue;
}

html[data-theme='dark'] {
  background: var(--lightBg);
  --lightBtn: #FFBD07;
  --lightBg: #232323;
  --lightColor: #fff;
  --instColor: #fff;
}
```
"data-theme" available options: dark, light
