<template>
  <div>
    <v-navigation-drawer fixed v-model="drawer" left clipped app>
      <v-toolbar flat class="transparent">
        <v-list class="pa-0">
          <v-list-tile to="/profile" click avatar>
            <v-list-tile-avatar>
              <img src="https://media.licdn.com/dms/image/C4D0BAQHBpcvkNndzXA/company-logo_200_200/0?e=2159024400&v=beta&t=ruJVym0xcFmRtYxWlsqy7kZq8SU_u6WmJXkk9mjT_bU">
            </v-list-tile-avatar>
            <v-list-tile-content>
              <v-list-tile-title>SoftBrilliance SAC</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-toolbar>
      <v-list class="pt-0" dense>
        <v-divider></v-divider>
        <v-list-tile v-for="item in items" :key="item.title" :to="item.link" click>
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>

          <v-list-tile-content>
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="blue-grey" dark fixed app clipped-left>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>Dashboard CMS</v-toolbar-title>
    </v-toolbar>

    <v-content>
      <v-container grid-list-md>
        <router-view></router-view>
      </v-container>
    </v-content>
    <v-navigation-drawer right temporary v-model="right" fixed></v-navigation-drawer>
    <v-footer color="blue-grey" class="white--text" app>
      <v-spacer></v-spacer>
      <span>&copy; 2019</span>
    </v-footer>
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
          icon: "dashboard", 
          link: "/dashboard" 
          },
        {
          title: "Control de calidad",
          icon: "playlist_add_check",
          link: "/calidad"
        },
        {
          title: "Tests de rendimiento",
          icon: "network_check",
          link: "/tests"
        },
        {
          title: "Sitios web", 
          icon: "web", 
          link: "/dominios"
        },
        { 
          title: "Cerrar Sesión",
          icon: "access_time",
          link: "/login"
        }
      ],
      right: null
    };
  }
};
</script>