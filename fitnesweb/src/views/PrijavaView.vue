<template>
  <v-app id="/reg">
      
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          color=#00A99D class="text-center display-2 teal--text text--accent-3"
                        >Dobrodosli!</h1>
                        
                        <h4 class="text-center mt-4">Vpisite svoj email za prijavo</h4>
                        <v-form>
                          <v-text-field
                            label="E-mail naslov"
                            name="Email"
                            prepend-icon="mdi-account-outline"
                            type="text"
                            color="teal accent-2"
                          />

                          <v-text-field
                            id="Geslo"
                            label="Geslo"
                            name="geslo"
                            prepend-icon="mdi-key"
                            type="Geslo"
                            color="teal accent-2"

                          />
                        </v-form>
                        
                      </v-card-text>
                      <div class="text-center mt-3">
                        <router-link to="/" tag="button" outlined><v-btn color="white" elevation="5" outlined x-large bold >Prijavi se</v-btn></router-link>
                      </div>
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
                        <v-spacer></v-spacer>
                        <router-link to="/registracija" tag="button" class="mt-16 mr-5">
                          <v-btn
                            color="white"
                            elevation="2"
                            text
                          >Registracija
                          </v-btn>
                        </router-link>
                        <router-link to="/menjavagesla" tag="button" >
                          <v-btn
                            color="white"
                            elevation="2"
                            text
                          >Ali ste pozabili geslo?
                          </v-btn>
                        </router-link>
                        
          </v-col>
        </v-row>
      </v-container>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>
