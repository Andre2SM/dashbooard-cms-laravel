<template>
    <div>
      <!-- Sign In Form -->
      <form action="">
        <div class="row links">
          <div class="col s12 right-align">
            <strong>Ingresar</strong> / <a href="#.html">Registrarse</a>
          </div>
        </div>

        <div class="card-panel clearfix">
          <div class="row">
            <div class="col"></div>
          </div>

          <!-- Username -->
          <div class="input-field">
            <i class="fa fa-user prefix"></i>
            <input id="username-input" type="text" class="validate" />
            <label for="username-input">Usuario</label>
          </div>
          <!-- /Username -->

          <!-- Password -->
          <div class="input-field">
            <i class="fa fa-unlock-alt prefix"></i>
            <input id="password-input" type="password" class="validate" />
            <label for="password-input">Contraseña</label>
          </div>
          <!-- /Password -->

          <div class="switch">
            <label>
              <input type="checkbox" checked />
              <span class="lever"></span>
              Recordar
            </label>
          </div>

          <button
            class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">
            <a href="./components/Dashboard.vue">Ingresar</a>
          </button>
        </div>

        <div class="links right-align">
          <a href="#">Recordar contraseña?</a>
        </div>
      </form>
      <!-- /Sign In Form -->
    </div>
</template>

<script>
export default {
  data() {
    return {
      drawer: true,
      items: [
        { 
          title: "Dashboard", 
          link: "/dashboard" 
        },
        {
          title: "Registro",
          link: "/registro"
        },
        {
          title: "Remember",
          link: "/remember"
        }
      ],
      right: null
    };
  }
};
</script>