<template>
<v-card>
  <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Jolex</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        
        <v-img
          src="https://wallpaperaccess.com/full/32822.jpg"
          max-height="900"
          max-width="1200"
        ></v-img>

        <v-card-actions>
          <v-list-item class="grow">
            

            <v-row
              align="center"
              justify="start"
            >
              <v-btn icon>
              <v-icon class="mr-1" size="35">
                mdi-heart
              </v-icon>
              </v-btn>
              <span class="subheading mr-2">561</span>
              
              <span class="mr-2">·</span>
              <router-link to="/komentarji">
                <v-icon class="mr-1" size="35">mdi-chat</v-icon>
              </router-link>
              <span class="subheading mr-2">65</span>
              
              <span class="mr-1">·</span>
              <router-link to="/deljenje">
              <v-icon class="mr-1" size="35">
                mdi-link-variant
              </v-icon>
              </router-link>
              <span class="subheading mr-15">93</span>
              <v-spacer></v-spacer>
              <v-btn icon>
              <v-icon class="mr-1" size="35">
                mdi-bookmark
              </v-icon>
              </v-btn>
            </v-row>
          </v-list-item>
        </v-card-actions>

</v-card>

</template>

<script>
export default {
}
</script>

<style>


</style>