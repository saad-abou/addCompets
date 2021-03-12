<template>
    <v-app>
        <v-toolbar flat >
            <v-app-bar-nav-icon  @click="drawer = !drawer">
            <v-icon>fa-align-justify</v-icon>
            </v-app-bar-nav-icon>
        </v-toolbar>
        <v-navigation-drawer v-model='drawer' app absolute temporary >
            <v-list-item class="px-2">
                <v-list-item-title>John Leider</v-list-item-title>
            </v-list-item>
            <v-divider></v-divider>
            <v-list dense>
                <v-list-item @click="goTo('/')" link >
                    <v-list-item-content>
                        <v-list-item-title>Liste d'attente</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item @click="goTo('/enregistrer')" link >
                    <v-list-item-content>
                        <v-list-item-title>Liste Enregistrer</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item @click="goTo('/ajouter')" link >
                    <v-list-item-content>
                        <v-list-item-title>Ajouter</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        <router-view></router-view>
    </v-app>
</template>

<script>
  export default {
    data () {
      return {
          drawer:false
      }
    },
    methods: {
        goTo(path){
           this.$router.push(path)
        }
    },
  }
</script>
