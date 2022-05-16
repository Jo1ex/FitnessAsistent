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
                          color="#00000" 
                        >Registracija!</h1>
                        
                        <h4 class="text-center mt-5">Vpisite vse potrebne podatke za registracijo</h4>
                        
                        <v-form>
                          
                          
                          <v-text-field
                            label="Ime*"
                            name="Ime"
                            prepend-icon="mdi-account-outline"
                            type="text"
                            color="teal accent-2"
                          />
                          <v-text-field
                            label="Priimek*"
                            name="Priimek"
                            prepend-icon="mdi-account-outline"
                            type="text"
                            color="teal accent-2"
                          />

                          
                          <v-text-field
                            label="Email naslov*"
                            name="Email"
                            prepend-icon="mdi-mail"
                            type="text"
                            color="teal accent-2"
                          />

                          <v-text-field
                            id="Geslo"
                            label="Geslo*"
                            name="Geslo"
                            prepend-icon="mdi-key"
                            type="Geslo"
                            color="teal accent-2"

                          >
                          <div class="control">
                              <button class="button" @click="toggleShow"><span class="icon is-small is-right">
                              <i class="fas" :class="{ 'fa-eye-slash': showPassword, 'fa-eye': !showPassword }"></i>
                            </span>
                          </button>
                          </div>
                          </v-text-field>
                          
                          <v-text-field
                            id="Geslo"
                            label="Potrdi geslo*"
                            name="Potrdi geslo"
                            prepend-icon="mdi-key"
                            type="Potrditev gesla"
                            color="teal accent-2"
                          />
                        </v-form>
                      
                        
                        
                      </v-card-text>
                      <div class="text-center mt-3">
                        <router-link to="/verifikacija" tag="button" outlined><v-btn color="white" elevation="5" outlined x-large bold >Registracija</v-btn></router-link>
                        
                      </div>
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
              
            
          </v-col>
        </v-row>
        <router-link to="/domov">Prijava</router-link>
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