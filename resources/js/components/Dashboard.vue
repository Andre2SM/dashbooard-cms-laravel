<template>
  <div>
    <div class="page-title">
      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Dashboard</h1>
          </div>
          </div>
          </div>
          <div class="row sortable">
          <div class="col 14 s12">
          <div class="card" draggable="false">
          <div class="title">
          <h5>Control de calidad</h5>
          <a class="close" href="#" draggable="false">
          <i class="mdi-content-clear"></i>
          </a>
          <a class="minimize" href="#" draggable="false">
          <i class="mdi-navigation-expand-less"></i>
          </a>
          </div>
          <div class="content orders-card">
          <div class="col 13 m6 s12">
          <a
          href="#"
          class="card-panel stats-card red lighten-2 red-text text-lighten-5"
          draggable="false"
          >
          <i class="fa fa-exclamation"></i>
          <span class="count">3</span>
          <div class="name">Errores</div>
          </a>
          </div>
          <div class="col 13 m6 s12">
          <a
          href="#"
          class="card-panel stats-card green lighten-2 green-text text-lighten-5"
          draggable="false"
          >
          <i class="fa fa-check"></i>
          <span class="count">14</span>
          <div class="name">Errores solucionados</div>
          </a>
          </div>
          </div>
          </div>
          </div>
          </div>
          <div class="row sortable">
          <div class="col 14 s12">
          <div class="card">
          <div class="title">
          <h5>Tests de rendimiento</h5>
          <a class="close" href="#">
          <i class="mdi-content-clear"></i>
          </a>
          <a class="minimize" href="#">
          <i class="mdi-navigation-expand-less"></i>
          </a>
          </div>
          <div class="content orders-card">
          <h4>90/100</h4>
          <div class="row">
          <div class="col s6">
          <small>Page Speed</small>
          </div>
          <div class="col s6 right-align">
          2
          <i class="fa fa-level-down red-text"></i>
          </div>
          </div>
          <div class="progress small">
          <div class="determinate" style="width:90%"></div>
          </div>
          <h4>86/100</h4>
          <div class="row">
          <div class="col s6">
          <small>Mobile Speed</small>
          </div>
          <div class="col s6 right-align">
          4
          <i class="fa fa-level-up green-text"></i>
          </div>
          </div>
          <div class="progress small">
          <div class="determinate" style="width:86%"></div>
          </div>
          <h4>90/100</h4>
          <div class="row">
          <div class="col s6">
          <small>GT Metrix</small>
          </div>
          <div class="col s6 right-align">
          5
          <i class="fa fa-level-up green-text"></i>
          </div>
          </div>
          <div class="progress small">
          <div class="determinate" style="width:90%"></div>
          </div>
          </div>
          </div>
          </div>
          </div>
          <div class="row sortable">
          <div class="col 14 s12">
          <div class="card">
          <div class="title">
          <h5>Sitios Web</h5>
          <a class="close" href="#">
          <i class="mdi-content-clear"></i>
          </a>
          <a class="minimize" href="#">
          <i class="mdi-navigation-expand-less"></i>
          </a>
          </div>
          <div class="content orders-card">
            <table id="table2" class="display table table-bordered table-striped table-hover">
              <thead>
                <tr>
                <th>Dominio</th>
                <th>Defectos</th>
                <th>Prioridad</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>dominio1.com</td>
                  <td>8</td>
                  <td>Alta</td>
                </tr>
                <tr>
                  <td>dominio2.com</td>
                  <td>2</td>
                    <td>Normal</td>
                </tr>
                <tr>
                  <td>dominio3.com</td>
                  <td>1</td>
                    <td>Baja</td>
                </tr>
                <tr>
                  <td>dominio4.com</td>
                  <td>1</td>
                    <td>Baja</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
mounted() {
console.log("Component mounted.");
},
data() {
return {
items: [
{
count: 20,
name: "Errores"
},
{
count: 80,
name: "Errores solucionados"
}
]
};
}
};
</script>