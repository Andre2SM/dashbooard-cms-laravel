<template>
  <div>
    <div class="page-title">
      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Control de calidad</h1>
        </div>
      </div>
    </div>

    <div class="content orders-card">
      <table id="table3" class="display table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Sitio web</th>
            <th>Defectos</th>
            <th>Prioridad</th>
            <th>Detalles</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>sbperu.net</td>
            <td>8</td>
            <td>Alta</td>
            <td>
              <a href="#" class="waves-effect waves-blue">Ver</a>
            </td>
          </tr>
          <tr>
            <td>roche.com.pe</td>
            <td>2</td>
            <td>Normal</td>
            <td>
              <a href="#" class="waves-effect waves-blue">Ver</a>
            </td>
          </tr>
          <tr>
            <td>surgeonsadvisor.com</td>
            <td>1</td>
            <td>Baja</td>
            <td>
              <a href="#" class="waves-effect waves-blue">Ver</a>
            </td>
          </tr>
          <tr>
            <td>aduandina.com.pe</td>
            <td>1</td>
            <td>Baja</td>
            <td>
              <a href="#" class="waves-effect waves-blue">Ver</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script>
export default {
  data: function() {
    return { websites: "" };
  }
};
</script>