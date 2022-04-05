<template>
  
  <v-app id="inspire">
    
      
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
                        <v-form v-model="valid">
                          <v-text-field
                            v-model="email"
                            label="Email naslov"
                            name="Email"
                            prepend-icon="mdi-mail"
                            type="text"
                            rules="emailRules"
                            color="teal accent-2"
                            required
                          />
                  
                          <v-text-field
                            v-model="geslo"
                            id="Geslo"
                            label="Geslo"
                            name="Geslo"
                            prepend-icon="mdi-key"
                            counter="30"
                            rules="passwordRules"
                            color="teal accent-2"
                            required
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
<script>
  export default {
    data: () => ({
      valid: false,
      geslo: '',
      gesloRules: [
        v => !!v || 'Geslo je potrebno',
        v => v.length <= 30 || 'Geslo more biti pod 30 znakov',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail je potreben',
        v => /.+@.+/.test(v) || 'E-mail mora biti veljaven',
      ],
    }),
  }
</script>