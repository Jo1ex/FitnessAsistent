<template>
  <v-app id="inspire">
    <section>
      <div :style="image" class="image">
    
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center" font="Poppins">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="center">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          color=#00A99D class="text-center display-2 teal--text text--accent-3"
                        >Dobrodosli!</h1>
                      
                        <h4 class="text-center mt-4">Vpisite svoj email za prijavo</h4>
                        <v-form>
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
                          />
                        </v-form>
                        
                        
                        
                      </v-card-text>
                      <div class="text-center mt-3">
                        <v-btn color="#2C6763" elevation="5" depressed x-large bold>Prijavi se</v-btn>
                      </div>
                      
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
            <div class="reginmenj" align="right" row="bottom">
                      <router-link to="/menjavagesla">Pozabljeno geslo</router-link> 
                      <router-link to="/registracija">Registriraj se</router-link>
            </div>
          </v-col>
        </v-row>
      </v-container>
      </div>
    </section>
  </v-app>
</template>

<script>
export default {
        data() {
            return {
                image: {backgroundImage: "url(file:///C:/Users/Jolex/Documents/FitnessAsistent/FitnessAsistent/fitnesweb/slike/slika.png)"}
            };
        }
    };
</script>
<style>
    .image {
        background-repeat: repeat;
    }
</style>
