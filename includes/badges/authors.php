<style>
:root{
  --color-primary: #214fe0;
  --color-dark: #1d1f20;
  --color-light: #f4f4f4;
  --color-shade: #bbb;

  --badge-size: 250px;

  --lock-color: #fff;
  --lock-width: 30px;
  --lock-stroke: 2.5px;

}
::selection{
  background:
}
body{
  background-color: var(--color-light);
}
main{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100vw;
}
.badge-icon,
.badge-text{
  padding:1.5rem;
  float:left;
  -webkit-box-flex:1;
  flex:1
}

.badge{
  display:flex;
  margin-bottom: 1.5rem;
  margin-right: 1.5rem;

  color: var(--color-light);

  min-width: var(--badge-size);
  border-radius: 5px;
  box-shadow: 0px 0px 60px var(--color-shade);

  overflow: hidden;
}

.badge-icon{
    background: url('https://upload.wikimedia.org/wikipedia/commons/9/93/European_stars.svg') var(--color-primary) no-repeat center center;
  background-size: contain;
  max-width: calc( var(--badge-size) / 5);
}

.badge-text{
  font: normal small-caps normal 16px/1.5 Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  line-height: 1;
  text-align: left;
}

.badge[data-color=""] .badge-text,
.badge[data-color="default"] .badge-text{
    color: var(--color-light);
    background-color: var(--color-primary);
}
.badge[data-color="light"] .badge-text{
    color: var(--color-dark);
    background-color: var(--color-light);
}
.badge[data-color="dark"] .badge-text{
    color: var(--color-light);
    background-color: var(--color-dark);
}


/*The body of the lock*/
.lock {
  display:block;
  width: var(--lock-width);
  height: calc(var(--lock-width) * 0.75);

  top: 50%; left:50%;
  transform: translate(-50%,-50%);

  border: var(--lock-stroke) solid var(--lock-color);
  border-radius: 5px;
  position: relative;

  transition: all 0.1s ease-in-out;
}
/*The keyhole*/
.lock:after {
  content: "";
  display: block;
  background: var(--lock-color);

  width: var(--lock-stroke);
  height: calc(var(--lock-stroke) * 3);

  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50% , -50%);

  transition: all 0.1s ease-in-out;
}
/*The arm of the lock*/
.lock:before {
  content: "";
  display: block;
  width: calc(var(--lock-width) / 2);
  height: calc(var(--lock-width) / 3);

  position: absolute;
  bottom: 100%; left: 50%;
  transform: translateX(-50%);

  border: var(--lock-stroke) solid var(--lock-color);
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom: 0;
}
</style>
<!-- Based upon a design by Varun Mohapatra @Dribbble: https://dribbble.com/shots/4368945-GDPR-Compliance-and-Readiness-Badges -->
<main>
  <div class="badge" data-color="default">
    <div class="badge-icon">
      <span class="lock"></span>
    </div>
    <div class="badge-text">
      <span><b>gdpr</b></span><br>
      <span>compliant</span>
    </div>
  </div>

  <div class="badge" data-color="dark">
    <div class="badge-icon">
      <span class="lock"></span>
    </div>
    <div class="badge-text">
      <span><b>gdpr</b></span><br>
      <span>ready</span>
    </div>
  </div>

  <div class="badge" data-color="light">
    <div class="badge-icon">
      <span class="lock"></span>
    </div>
    <div class="badge-text">
      <span><b>gdpr</b></span><br>
      <span>progress</span>
    </div>
  </div>
</main>
